<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TransferController extends Controller
{
    //

    public function index() {
        return view('transfer.transfer');
    }
    
    public function store() {

        return back()->with('success' , 'transfer successfully');
    }
}
