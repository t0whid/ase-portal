<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Draft;
use Illuminate\Http\Request;

class DraftController extends Controller
{
    public function index(Request $request)
    {
        $drafts = Draft::where('user_id', $request->user()->id)
            ->latest()
            ->get()
            ->map(fn ($draft) => $this->payload($draft));

        return response()->json([
            'success' => true,
            'data' => [
                'drafts' => $drafts,
            ],
        ]);
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'title' => ['nullable', 'string', 'max:255'],
            'job_name' => ['nullable', 'string', 'max:255'],
            'payload' => ['required', 'array'],
            'total_tags' => ['nullable', 'integer', 'min:0'],
            'total_pieces' => ['nullable', 'integer', 'min:0'],
        ]);

        $draft = Draft::create([
            'user_id' => $request->user()->id,
            'title' => $data['title'] ?? null,
            'job_name' => $data['job_name'] ?? null,
            'payload' => $data['payload'],
            'total_tags' => $data['total_tags'] ?? 0,
            'total_pieces' => $data['total_pieces'] ?? 0,
        ]);

        return response()->json([
            'success' => true,
            'message' => 'Draft saved successfully.',
            'data' => [
                'draft' => $this->payload($draft),
            ],
        ], 201);
    }

    public function show(Request $request, Draft $draft)
    {
        if ($draft->user_id !== $request->user()->id) {
            return response()->json([
                'success' => false,
                'message' => 'Draft not found.',
            ], 404);
        }

        return response()->json([
            'success' => true,
            'data' => [
                'draft' => $this->payload($draft),
            ],
        ]);
    }

    public function destroy(Request $request, Draft $draft)
    {
        if ($draft->user_id !== $request->user()->id) {
            return response()->json([
                'success' => false,
                'message' => 'Draft not found.',
            ], 404);
        }

        $draft->delete();

        return response()->json([
            'success' => true,
            'message' => 'Draft deleted successfully.',
        ]);
    }

    public function clear(Request $request)
    {
        Draft::where('user_id', $request->user()->id)->delete();

        return response()->json([
            'success' => true,
            'message' => 'All drafts cleared successfully.',
        ]);
    }

    private function payload(Draft $draft): array
    {
        return [
            'id' => $draft->id,
            'title' => $draft->title,
            'job_name' => $draft->job_name,
            'payload' => $draft->payload,
            'total_tags' => $draft->total_tags,
            'total_pieces' => $draft->total_pieces,
            'created_at' => $draft->created_at?->toISOString(),
            'updated_at' => $draft->updated_at?->toISOString(),
        ];
    }
}