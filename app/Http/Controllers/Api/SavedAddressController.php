<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\SavedAddress;
use Illuminate\Http\Request;

class SavedAddressController extends Controller
{
    public function index(Request $request)
    {
        $addresses = SavedAddress::where('user_id', $request->user()->id)
            ->latest()
            ->get()
            ->map(fn ($address) => $this->payload($address));

        return response()->json([
            'success' => true,
            'data' => [
                'addresses' => $addresses,
            ],
        ]);
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'nickname'     => ['nullable', 'string', 'max:255'],
            'street'       => ['required', 'string', 'max:255'],
            'city'         => ['required', 'string', 'max:120'],
            'state'        => ['required', 'string', 'max:50'],
            'zip'          => ['required', 'string', 'max:30'],
            'contact_name' => ['nullable', 'string', 'max:255'],
            'phone'        => ['nullable', 'string', 'max:50'],
        ]);

        $address = SavedAddress::create([
            'user_id'      => $request->user()->id,
            'nickname'     => $data['nickname'] ?? null,
            'street'       => $data['street'],
            'city'         => $data['city'],
            'state'        => strtoupper($data['state']),
            'zip'          => $data['zip'],
            'contact_name' => $data['contact_name'] ?? null,
            'phone'        => $data['phone'] ?? null,
        ]);

        return response()->json([
            'success' => true,
            'message' => 'Address saved successfully.',
            'data' => [
                'address' => $this->payload($address),
            ],
        ], 201);
    }

    public function update(Request $request, SavedAddress $address)
    {
        if ($address->user_id !== $request->user()->id) {
            return response()->json([
                'success' => false,
                'message' => 'Address not found.',
            ], 404);
        }

        $data = $request->validate([
            'nickname'     => ['nullable', 'string', 'max:255'],
            'street'       => ['required', 'string', 'max:255'],
            'city'         => ['required', 'string', 'max:120'],
            'state'        => ['required', 'string', 'max:50'],
            'zip'          => ['required', 'string', 'max:30'],
            'contact_name' => ['nullable', 'string', 'max:255'],
            'phone'        => ['nullable', 'string', 'max:50'],
        ]);

        $address->update([
            'nickname'     => $data['nickname'] ?? null,
            'street'       => $data['street'],
            'city'         => $data['city'],
            'state'        => strtoupper($data['state']),
            'zip'          => $data['zip'],
            'contact_name' => $data['contact_name'] ?? null,
            'phone'        => $data['phone'] ?? null,
        ]);

        return response()->json([
            'success' => true,
            'message' => 'Address updated successfully.',
            'data' => [
                'address' => $this->payload($address->fresh()),
            ],
        ]);
    }

    public function destroy(Request $request, SavedAddress $address)
    {
        if ($address->user_id !== $request->user()->id) {
            return response()->json([
                'success' => false,
                'message' => 'Address not found.',
            ], 404);
        }

        $address->delete();

        return response()->json([
            'success' => true,
            'message' => 'Address deleted successfully.',
        ]);
    }

    private function payload(SavedAddress $address): array
    {
        return [
            'id' => $address->id,
            'nickname' => $address->nickname,
            'street' => $address->street,
            'city' => $address->city,
            'state' => $address->state,
            'zip' => $address->zip,
            'contact_name' => $address->contact_name,
            'phone' => $address->phone,
            'created_at' => $address->created_at?->toISOString(),
            'updated_at' => $address->updated_at?->toISOString(),
        ];
    }
}