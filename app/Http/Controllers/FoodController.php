<?php

namespace App\Http\Controllers;

use App\Models\Food;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;

class FoodController extends Controller
{
    /**
     * Menampilkan daftar semua menu makanan.
     */
    public function index(): View
    {
        // Mengambil data terbaru agar menu yang baru ditambah muncul di atas
        $foods = Food::latest()->get(); 
        return view('admin.food.index', compact('foods'));
    }

    /**
     * Menampilkan form untuk menambah menu baru.
     */
    public function create(): View
    {
        $categories = ['Vegetarian', 'Main Course', 'Dessert', 'Drink'];
        return view('admin.food.create', compact('categories'));
    }

    /**
     * Menyimpan menu baru ke database.
     */
    public function store(Request $request): RedirectResponse
    {
        // Menghapus titik pemisah ribuan agar harga menjadi angka utuh (misal: 40.000 -> 40000)
        if ($request->has('price')) {
            $request->merge([
                'price' => str_replace('.', '', $request->price)
            ]);
        }

        $request->validate([
            'name'        => 'required|string|max:255',
            'category'    => 'required|string',
            'price'       => 'required|numeric',
            'description' => 'nullable|string',
            'image'       => 'required|image|mimes:jpeg,png,jpg,webp|max:10240',
        ]);

        $pathGambar = null;
        if ($request->hasFile('image')) {
            $pathGambar = $request->file('image')->store('foods', 'public');
        }

        Food::create([
            'name'        => $request->name,
            'category'    => $request->category,
            'price'       => $request->price,
            'description' => $request->description,
            'image'       => $pathGambar,
        ]);

        return redirect()->route('food.index')->with('success', 'Menu baru berhasil ditambahkan!');
    }

    /**
     * Menampilkan detail menu tertentu.
     */
    public function show(string $id): View
    {
        $food = Food::findOrFail($id);
        return view('admin.food.show', compact('food'));
    }

    /**
     * Menampilkan form edit untuk menu tertentu.
     */
    public function edit(string $id): View
    {
        $food = Food::findOrFail($id); 
        $categories = ['Vegetarian', 'Main Course', 'Dessert', 'Drink'];
        return view('admin.food.edit', compact('food', 'categories'));
    }

    /**
     * Memperbarui data menu di database.
     */
    public function update(Request $request, string $id): RedirectResponse
    {
        // Menghapus titik pemisah ribuan agar harga menjadi angka utuh (misal: 40.000 -> 40000)
        if ($request->has('price')) {
            $request->merge([
                'price' => str_replace('.', '', $request->price)
            ]);
        }

        $request->validate([
            'name'        => 'required|string|max:255',
            'category'    => 'required|string',
            'price'       => 'required|numeric',
            'description' => 'nullable|string',
            'image'       => 'nullable|image|mimes:jpeg,png,jpg,webp|max:10240',
        ]);

        $food = Food::findOrFail($id);
        $pathGambar = $food->image; 
        
        if ($request->hasFile('image')) {
            // Hapus gambar lama jika ada
            if ($food->image) {
                Storage::disk('public')->delete($food->image);
            }
            // Simpan gambar baru
            $pathGambar = $request->file('image')->store('foods', 'public');
        }

        $food->update([
            'name'        => $request->name,
            'category'    => $request->category,
            'price'       => $request->price,
            'description' => $request->description,
            'image'       => $pathGambar, 
        ]);

        return redirect()->route('food.index')->with('success', 'Menu berhasil diperbarui!');
    }

    /**
     * Menghapus menu dari database dan file gambarnya.
     */
    public function destroy(string $id): RedirectResponse
    {
        $food = Food::findOrFail($id);
        
        if ($food->image) {
            Storage::disk('public')->delete($food->image);
        }

        $food->delete();
        return redirect()->route('food.index')->with('success', 'Menu berhasil dihapus!');
    }
}