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


        if($redirect = $this->isUsernameNull($request)) {
            return $redirect;
        }

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
        if($redirect = $this->isUsernameNull($request)) {
            return $redirect;
        }

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

    public function isUsernameNull(Request $request) {
        if(!$request->query('username')) {
            return redirect('login');
        };

        return null;
    }
}
