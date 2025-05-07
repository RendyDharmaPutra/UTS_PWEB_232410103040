<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{

    private $needs = [
        ['name' => 'Makan', 'cost' => 1500000],
        ['name' => 'Transportasi', 'cost' => 500000],
        ['name' => 'Listrik & Air', 'cost' => 300000],
        ['name' => 'Internet', 'cost' => 250000],
        ['name' => 'Belanja Bulanan', 'cost' => 700000],
    ];

    public function loginPage() {
        return view('login');
    }

    public function dashboardPage(Request $request) {
        if($redirect = $this->isUsernameNull($request)) {
            return $redirect;
        }

        $remaining = null;

        if ($request->isMethod('post')) {
            $amount = $request->input('amount');
            $totalNeeds = collect($this->needs)->sum('cost');
            $remaining = $amount - $totalNeeds;
        }

        return view('dashboard', [
            'username' => $request->query('username'),
            'remaining' => $remaining
        ]);
    }

    public function pengelolaanPage() {
        return view('pengelolaan', ['needs' => $this->needs ]);
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
