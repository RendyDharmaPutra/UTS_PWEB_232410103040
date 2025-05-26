<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Pengelolaan;


class PageController extends Controller
{

    public function loginPage() {
        return view('login');
    }

    public function dashboardPage(Request $request) {
        $needs = Pengelolaan::all();

        $remaining = null;

        if ($request->isMethod('post')) {
            $amount = $request->input('amount');
            $totalNeeds = collect($needs)->sum('cost');
            $remaining = $amount - $totalNeeds;
        }

        return view('dashboard', [
            'username' => $request->query('username'),
            'remaining' => $remaining
        ]);
    }

    public function pengelolaanPage() {
        // $needs = DB::select('select * from pengelolaan');
        // $needs = DB::table('pengelolaan')->get();
        $needs = Pengelolaan::all();


        return view('pengelolaan', compact('needs'));
    }

    public function profilePage(Request $request) {
        return view('profile');
    }

    public function loginAction(Request $request) {
        $username = $request->input('username');
        $password = $request->input('password');


        if($password === 'admin123') {
            return redirect()->route('dashboard', compact('username'));
        }

        return redirect()->route('login')->with('error', 'Password tidak valid');
    }

    public function logoutAction() {
        return redirect('login');
    }
}
