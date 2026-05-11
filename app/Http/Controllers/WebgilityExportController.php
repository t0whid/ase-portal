<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Services\WebgilityCsvService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class WebgilityExportController extends Controller
{
    private string $sessionKey = 'webgility_export_authenticated';

    public function index(Request $request)
    {
        if (! session($this->sessionKey)) {
            return view('webgility.login');
        }

        $query = Order::query()
            ->withCount('items')
            ->latest();

        if ($request->filled('q')) {
            $q = trim($request->q);

            $query->where(function ($subQuery) use ($q) {
                $subQuery
                    ->where('order_number', 'like', "%{$q}%")
                    ->orWhere('quote_number', 'like', "%{$q}%")
                    ->orWhere('customer_name', 'like', "%{$q}%")
                    ->orWhere('customer_email', 'like', "%{$q}%")
                    ->orWhere('company', 'like', "%{$q}%")
                    ->orWhere('job_name', 'like', "%{$q}%");
            });
        }

        if ($request->filled('payment_status')) {
            $query->where('payment_status', $request->payment_status);
        }

        if ($request->filled('order_status')) {
            $query->where('order_status', $request->order_status);
        }

        $orders = $query->paginate(20)->withQueryString();

        $stats = [
            'total_orders' => Order::count(),
            'paid_orders' => Order::where('payment_status', 'paid')->count(),
            'pending_orders' => Order::where('payment_status', 'pending')->count(),
            'submitted_orders' => Order::where('order_status', 'submitted')->count(),
        ];

        return view('webgility.dashboard', [
            'orders' => $orders,
            'stats' => $stats,
            'filters' => [
                'q' => $request->q,
                'payment_status' => $request->payment_status,
                'order_status' => $request->order_status,
            ],
        ]);
    }

    public function login(Request $request)
    {
        $request->validate([
            'password' => ['required', 'string'],
        ]);

        $correctPassword = config('services.webgility.export_password');

        if (! $correctPassword || ! hash_equals($correctPassword, $request->password)) {
            return back()->withErrors([
                'password' => 'Invalid export password.',
            ]);
        }

        session([$this->sessionKey => true]);

        return redirect()->route('webgility.export.index');
    }

    public function logout()
    {
        session()->forget($this->sessionKey);

        return redirect()->route('webgility.export.index');
    }

    public function downloadCsv(Order $order, WebgilityCsvService $service)
    {
        abort_unless(session($this->sessionKey), 403);

        $order->load(['items', 'files']);

        $path = $service->generateForOrder($order);

        $orderNumber = $order->order_number ?: ('ORDER-' . $order->id);

        return Storage::disk('local')->download(
            $path,
            $orderNumber . '-webgility.csv',
            [
                'Content-Type' => 'text/csv',
            ]
        );
    }
}