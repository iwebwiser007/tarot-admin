<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ClientController extends Controller
{
    public function index(){
        return view('admin.client.index');
    }

    public function clientDetails(){
        return view('admin.client.client_details');
    }

    public function clientApproval(){
        return view('admin.client.client_approval');
    }
}
