<?php

namespace App\Http\Controllers;

use App\Models\Item;
use Illuminate\Http\Request;

class ItemController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $items = Item::all();

        return view('inventory.items.index', compact('items'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $item = new Item();

        return view('inventory.items.create', compact('item'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $item = new Item();
        $item->code = $request->code;
        $item->reference = $request->reference;
        $item->description1 = $request->description1;
        $item->description2 = $request->description2;
        $item->cost = $request->cost;
        $item->price = $request->price;

        $item->save();

        $request->session()->flash('alert-success', 'The item was register successfully');

        return redirect()->route('items.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Item  $item
     * @return \Illuminate\Http\Response
     */
    public function show(Item $item)
    {
        return view('inventory.items.show', compact('item'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Item  $item
     * @return \Illuminate\Http\Response
     */
    public function edit(Item $item)
    {
        return view('inventory.items.edit', compact('item'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Item  $item
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Item $item)
    {

        $item->code = $request->code;
        $item->reference = $request->reference;
        $item->description1 = $request->description1;
        $item->description2 = $request->description2;
        $item->cost = $request->cost;
        $item->price = $request->price;

        $item->save();

        $request->session()->flash('alert-success', 'The item was updated successfully');

        return redirect()->route('items.index');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Item  $item
     * @return \Illuminate\Http\Response
     */
    public function destroy(Item $item, Request $request)
    {
        $item->delete();

        $request->session()->flash('alert-success', 'The item was delete successfully');

        return redirect()->route('items.index');

    }
}
