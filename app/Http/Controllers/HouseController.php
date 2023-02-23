<?php

namespace App\Http\Controllers;

use App\Models\House;
use Illuminate\Http\Request;

class HouseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $houses = house::latest()->paginate(5);

        return view('houses.index',compact('houses'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('houses.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $house = house::create($request->all());
        dd($house);
        $house->save();

        return redirect()->route('houses.index')
            ->with('success',"Дом успешно создан!");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\house  $house
     * @return \Illuminate\Http\Response
     */
    public function show(house $house)
    {
        return view('houses.show',compact('house'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\house  $house
     * @return \Illuminate\Http\Response
     */
    public function edit(house $house)
    {
        return view('houses.edit',compact('house'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\house  $house
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, house $house)
    {
        $request->validate([
            'name' => 'required',
        ]);

        $house->update($request->all());

        return redirect()->route('houses.index')
            ->with('success','Дом успешно изменен!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\house  $house
     * @return \Illuminate\Http\Response
     */
    public function destroy(house $house)
    {
        $house->delete();

        return redirect()->route('houses.index')
            ->with('success','Дом успешно удален!');
    }
}
