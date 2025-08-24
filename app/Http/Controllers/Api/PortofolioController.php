<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Portofolio;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class PortofolioController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $portofolios = Portofolio::latest()->paginate(10);
        return response()->json($portofolios);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'title'       => 'required|string|max:255',
            'description' => 'nullable|string',
            'image'       => 'nullable|string|max:255',
            'link'        => 'nullable|url|max:255',
            'status'      => 'required|in:draft,published',
        ]);

        $validated['slug'] = Str::slug($validated['title']);

        $portofolio = Portofolio::create($validated);

        return response()->json([
            'message' => 'Portofolio created successfully',
            'data'    => $portofolio
        ], 201);
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $portofolio = Portofolio::findOrFail($id);
        return response()->json($portofolio);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $portofolio = Portofolio::findOrFail($id);

        $validated = $request->validate([
            'title'       => 'sometimes|required|string|max:255',
            'description' => 'nullable|string',
            'image'       => 'nullable|string|max:255',
            'link'        => 'nullable|url|max:255',
            'status'      => 'sometimes|required|in:draft,published',
        ]);

        if (isset($validated['title'])) {
            $validated['slug'] = Str::slug($validated['title']);
        }

        $portofolio->update($validated);

        return response()->json([
            'message' => 'Portofolio updated successfully',
            'data'    => $portofolio
        ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $portofolio = Portofolio::findOrFail($id);
        $portofolio->delete();

        return response()->json([
            'message' => 'Portofolio deleted successfully'
        ]);
    }
}
