<?php

namespace App\Http\Controllers;

use App\Models\Rekap;
use Illuminate\Http\Request;

class RekapController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
    }

    public function rekapSC()
    {
        return view('landing_page.rekap-data.rekap-sc');
    }

    public function rekapCS()
    {
        return view('landing_page.rekap-data.rekap-cs');
    }

    public function rekapCC()
    {
        return view('landing_page.rekap-data.rekap-cc');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Rekap  $Rekap
     * @return \Illuminate\Http\Response
     */
    public function show(Rekap $Rekap)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Rekap  $Rekap
     * @return \Illuminate\Http\Response
     */
    public function edit(Rekap $Rekap)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Rekap  $Rekap
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Rekap $Rekap)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Rekap  $Rekap
     * @return \Illuminate\Http\Response
     */
    public function destroy(Rekap $Rekap)
    {
        //
    }
}
