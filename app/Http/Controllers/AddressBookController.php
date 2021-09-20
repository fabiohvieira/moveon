<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\AddressBook;

class AddressBookController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $addressbook = AddressBook::all();

        return view('addressbook.index', compact('addressbook'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('addressbook.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $addressbook = new AddressBook();
        $addressbook->search_type = $request->search_type;
        $addressbook->name = $request->name;
        $addressbook->tax_id = $request->tax_id;
        $addressbook->address_line1 = $request->address_line1;
        $addressbook->address_line2 = $request->address_line2;
        $addressbook->address_line3 = $request->address_line3;
        $addressbook->address_line4 = $request->address_line4;
        $addressbook->postal_code = $request->postal_code;
        $addressbook->city = $request->city;
        $addressbook->state = $request->state;
        $addressbook->country = $request->country;
        $addressbook->phone_prefix = $request->phone_prefix;
        $addressbook->phone_number = $request->phone_number;
        $addressbook->email = $request->email;

        $addressbook->save();

        return redirect()->route('addressbook.index');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $addressbook = AddressBook::find($id);

        return view('addressbook.edit', compact('addressbook'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

        $addressbook = AddressBook::find($id);
        $addressbook->search_type = $request->search_type;
        $addressbook->name = $request->name;
        $addressbook->tax_id = $request->tax_id;
        $addressbook->address_line1 = $request->address_line1;
        $addressbook->address_line2 = $request->address_line2;
        $addressbook->address_line3 = $request->address_line3;
        $addressbook->address_line4 = $request->address_line4;
        $addressbook->postal_code = $request->postal_code;
        $addressbook->city = $request->city;
        $addressbook->state = $request->state;
        $addressbook->country = $request->country;
        $addressbook->phone_prefix = $request->phone_prefix;
        $addressbook->phone_number = $request->phone_number;
        $addressbook->email = $request->email;
        $addressbook->save();

        return redirect()->route('addressbook.index');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
