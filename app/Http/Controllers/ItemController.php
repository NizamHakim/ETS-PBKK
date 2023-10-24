<?php

namespace App\Http\Controllers;

use App\Models\Item;
use App\Http\Requests\StoreItemRequest;
use App\Http\Requests\UpdateItemRequest;
use App\Models\Jenis;
use App\Models\Kondisi;
use Illuminate\Support\Facades\DB;

class ItemController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('items.index', [
            'items' => Item::all(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('items.create', [
            'jenis' => Jenis::all(),
            'kondisi' => Kondisi::all()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreItemRequest $request)
    {   
        $validated = $request->validate([
            'jenis_id' => 'required',
            'kondisi_id' => 'required',
            'keterangan' => 'required',
            'jumlah' => 'required|integer',
            'image' => 'required|image|mimes:jpeg,png,jpg'
        ]);
        $validated['kecacatan'] = $request->kecacatan;

        DB::table('items')->insert([
            'jenis_id' => $validated['jenis_id'],
            'kondisi_id' => $validated['kondisi_id'],
            'keterangan' => $validated['keterangan'],
            'jumlah' => $validated['jumlah'],
            'kecacatan' => $validated['kecacatan'],
            'image' => $validated['image']
        ]);
        // Item::create($validated);
        return redirect('/dashboard/items');
    }

    /**
     * Display the specified resource.
     */
    public function show(Item $item)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Item $item)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateItemRequest $request, Item $item)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Item $item)
    {
        //
    }
}
