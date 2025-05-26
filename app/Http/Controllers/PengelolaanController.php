<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Pengelolaan;

class PengelolaanController extends Controller
{
     public function index() {
        // $needs = DB::select('select * from pengelolaan');
        // $needs = DB::table('pengelolaan')->get();
        $needs = Pengelolaan::all();


        return view('pengelolaan', compact('needs'));
    }
}
