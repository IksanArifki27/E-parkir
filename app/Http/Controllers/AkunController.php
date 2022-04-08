<?php

namespace App\Http\Controllers;

use App\Models\akun;
use App\Http\Requests\StoreakunRequest;
use App\Http\Requests\UpdateakunRequest;

class AkunController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
     * @param  \App\Http\Requests\StoreakunRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreakunRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\akun  $akun
     * @return \Illuminate\Http\Response
     */
    public function show(akun $akun)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\akun  $akun
     * @return \Illuminate\Http\Response
     */
    public function edit(akun $akun)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateakunRequest  $request
     * @param  \App\Models\akun  $akun
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateakunRequest $request, akun $akun)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\akun  $akun
     * @return \Illuminate\Http\Response
     */
    public function destroy(akun $akun)
    {
        //
    }
}
