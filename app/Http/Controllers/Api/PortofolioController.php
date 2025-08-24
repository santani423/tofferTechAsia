<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Portofolio;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class PortofolioController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $portofolios = Portofolio::latest()->paginate(10);

        // Tambahkan full url image biar gampang diakses
        $portofolios->getCollection()->transform(function ($item) {
            $item->image = $item->image ? asset('storage/' . $item->image) : null;
            return $item;
        });

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
            'image'       => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
            'link'        => 'nullable|url|max:255',
            'status'      => 'required|in:draft,published',
        ]);

        // simpan file image kalau ada
        $path = null;
        if ($request->hasFile('image')) {
            $path = $request->file('image')->store('portofolio', 'public');
        }

        $validated['slug']  = Str::slug($validated['title']);
        $validated['image'] = $path;

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
        $portofolio->image_url = $portofolio->image ? asset('storage/' . $portofolio->image) : null;

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
            'image'       => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
            'link'        => 'nullable|url|max:255',
            'status'      => 'sometimes|required|in:draft,published',
        ]);

        // Jika ada upload gambar baru
        if ($request->hasFile('image')) {
            // hapus gambar lama kalau ada
            if ($portofolio->image && Storage::disk('public')->exists($portofolio->image)) {
                Storage::disk('public')->delete($portofolio->image);
            }

            $validated['image'] = $request->file('image')->store('portofolio', 'public');
        }

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

        // hapus file gambar dari storage
        if ($portofolio->image && Storage::disk('public')->exists($portofolio->image)) {
            Storage::disk('public')->delete($portofolio->image);
        }

        $portofolio->delete();

        return response()->json([
            'message' => 'Portofolio deleted successfully'
        ]);
    }
}
