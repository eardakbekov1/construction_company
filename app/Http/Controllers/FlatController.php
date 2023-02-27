<?php

namespace App\Http\Controllers;

use App\Models\Flat;
use App\Models\House;
use Illuminate\Http\Request;

class FlatController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $flats = Flat::latest()->paginate(5);
        $houses = House::all();

        return view('flats.index',compact('flats', 'houses'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $flats = Flat::all();
        $houses = House::all();

        return view('flats.create', compact('flats', 'houses'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $flat = Flat::create($request->all());

        $flat->save();

        return redirect()->route('flats.index')
            ->with('success',"Квартира успешно создана!");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\flat  $flat
     * @return \Illuminate\Http\Response
     */
    public function show(Flat $flat)
    {
        return view('flats.show',compact('flat'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\flat  $flat
     * @return \Illuminate\Http\Response
     */
    public function edit(Flat $flat)
    {
        $houses = House::all();

        return view('flats.edit',compact('flat', 'houses'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\flat  $flat
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Flat $flat)
    {
        $flat->update($request->all());

        return redirect()->route('flats.index')
            ->with('success','Данные о квартире успешно изменены!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\flat  $flat
     * @return \Illuminate\Http\Response
     */
    public function destroy(Flat $flat)
    {
        $flat->delete();

        return redirect()->route('flats.index')
            ->with('success','Квартира успешно удалена!');
    }
}
