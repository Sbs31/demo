<?php

namespace App\Http\Controllers;

use http\Client;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class CatalogController extends Controller
{
    //
    public function getAll()
    {
        $data = DB::table('catalog')->get();
        return response()->json($data);
    }
    public function getUser($id)
    {
        $data = DB::table('users')->find($id);

        return response()->json($data);
    }
}
