<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\SavedTemplate;
use Illuminate\Http\Request;

class SavedTemplateController extends Controller
{
    public function index(Request $request)
    {
        $templates = SavedTemplate::where('user_id', $request->user()->id)
            ->latest()
            ->get()
            ->map(function ($template) {
                return $this->payload($template);
            });

        return response()->json([
            'success' => true,
            'data' => [
                'templates' => $templates,
            ],
        ]);
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'job_name' => ['nullable', 'string', 'max:255'],
            'payload' => ['required', 'array'],
            'total_tags' => ['nullable', 'integer', 'min:0'],
            'total_pieces' => ['nullable', 'integer', 'min:0'],
        ]);

        $template = SavedTemplate::create([
            'user_id' => $request->user()->id,
            'name' => $data['name'],
            'job_name' => $data['job_name'] ?? null,
            'payload' => $data['payload'],
            'total_tags' => $data['total_tags'] ?? 0,
            'total_pieces' => $data['total_pieces'] ?? 0,
        ]);

        return response()->json([
            'success' => true,
            'message' => 'Template saved successfully.',
            'data' => [
                'template' => $this->payload($template),
            ],
        ], 201);
    }

    public function show(Request $request, SavedTemplate $template)
    {
        if ($template->user_id !== $request->user()->id) {
            return response()->json([
                'success' => false,
                'message' => 'Template not found.',
            ], 404);
        }

        return response()->json([
            'success' => true,
            'data' => [
                'template' => $this->payload($template),
            ],
        ]);
    }

    public function destroy(Request $request, SavedTemplate $template)
    {
        if ($template->user_id !== $request->user()->id) {
            return response()->json([
                'success' => false,
                'message' => 'Template not found.',
            ], 404);
        }

        $template->delete();

        return response()->json([
            'success' => true,
            'message' => 'Template deleted successfully.',
        ]);
    }

    private function payload(SavedTemplate $template): array
    {
        return [
            'id' => $template->id,
            'name' => $template->name,
            'job_name' => $template->job_name,
            'payload' => $template->payload,
            'total_tags' => $template->total_tags,
            'total_pieces' => $template->total_pieces,
            'created_at' => $template->created_at?->toISOString(),
            'updated_at' => $template->updated_at?->toISOString(),
        ];
    }
}