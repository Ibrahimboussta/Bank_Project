<?php

namespace App\Http\Controllers;

use App\Models\PaidFacture;
use Illuminate\Http\Request;

class PaidFactureController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        return view("facture.facture");
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(PaidFacture $paidFacture)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(PaidFacture $paidFacture)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, PaidFacture $paidFacture)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(PaidFacture $paidFacture)
    {
        //
    }
}
