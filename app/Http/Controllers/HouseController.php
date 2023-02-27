<?php

namespace App\Http\Controllers;

use App\Models\Flat;
use App\Models\House;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HouseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $houses = House::latest()->paginate(5);

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
        $house = House::create($request->all());

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
    public function show(House $house)
    {
        $house_id = $house->id;

        $sql = "SELECT s.id sales_id, s.sale_date sale_date, c.name client_name, f.flat_number flat_number, h.name house_name
                FROM sales s
                left join clients c on s.client_id = c.id
                left join flats f on s.flat_id = f.id
                left join houses h on s.house_id = h.id
                where h.id = ". DB::connection()->getPdo()->quote($house_id);

        $sales = DB::select(DB::raw($sql));

        return view('houses.show',compact('house', 'sales'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\house  $house
     * @return \Illuminate\Http\Response
     */
    public function edit(House $house)
    {
        return view('houses.edit', compact('house'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\house  $house
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, House $house)
    {
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
    public function destroy(House $house)
    {
        $house->delete();

        return redirect()->route('houses.index')
            ->with('success','Дом успешно удален!');
    }
}
