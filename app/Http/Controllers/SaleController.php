<?php

namespace App\Http\Controllers;

use App\Models\Sale;
use Illuminate\Http\Request;

class SaleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sales = Sale::latest()->paginate(5);

        return view('sales.index',compact('sales'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('sales.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $sale = Sale::create($request->all());

        $sale->save();

        return redirect()->route('sales.index')
            ->with('success',"Сведения о подписании договора о купле-продаже квартиры успешно внесены в базу данных!");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\sale  $sale
     * @return \Illuminate\Http\Response
     */
    public function show(Sale $sale)
    {
        return view('sales.show',compact('sale'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\sale  $sale
     * @return \Illuminate\Http\Response
     */
    public function edit(Sale $sale)
    {
        return view('sales.edit',compact('sale'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\sale  $sale
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Sale $sale)
    {
        $sale->update($request->all());

        return redirect()->route('sales.index')
            ->with('success','Данные о договоре купле-продажи квартиры успешно изменены!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\sale  $sale
     * @return \Illuminate\Http\Response
     */
    public function destroy(Sale $sale)
    {
        $sale->delete();

        return redirect()->route('sales.index')
            ->with('success','Данные о сделке купле-продажи квартиры успешно удалены!');
    }
}
