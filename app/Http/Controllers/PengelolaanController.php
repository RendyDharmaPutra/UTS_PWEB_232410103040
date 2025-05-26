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

    public function create() {
        return view('add_pengelolaan');
    }

    public function store(Request $request) {
        $data = [
            'name' => $request->input('name'),
            'cost' => $request->input('cost'),
        ];


        // DB::insert('INSERT INTO pengelolaan (name, cost, created_at, updated_at) VALUES (?, ?, ?, ?)', [
        //     $data['name'], $data['cost'], $data['created_at'], $data['updated_at']
        // ]);

        // DB::table('pengelolaan')->insert($data);

        Pengelolaan::create($data);


        return redirect()->route('pengelolaan.index');
    }

     public function edit($id) {
        //  $items = DB::select('SELECT * FROM pengelolaan WHERE id = ?', [$id]);
        //  $item = $items[0] ?? null;

        //  $item = DB::table('pengelolaan')->where('id', $id)->first();

        $item = Pengelolaan::findOrFail($id);


        return view('edit_pengelolaan', compact('item'));
    }

    public function update(Request $request, $id) {
        $data = [
            'name' => $request->input('name'),
            'cost' => $request->input('cost'),
        ];


        // DB::update('UPDATE pengelolaan SET name = ?, cost = ?, updated_at = ? WHERE id = ?', [
        //     $data['name'], $data['cost'], $data['updated_at'], $id
        // ]);

        // DB::table('pengelolaan')->where('id', $id)->update($data);

        $item = Pengelolaan::findOrFail($id);
        $item->update($data);


        return redirect()->route('pengelolaan.index');
    }

    public function destroy($id) {
        // DB::delete('DELETE FROM pengelolaan WHERE id = ?', [$id]);

        // DB::table('pengelolaan')->where('id', $id)->delete();

        $item = Pengelolaan::findOrFail($id);
        $item->delete();


        return redirect()->route('pengelolaan.index');
    }
}
