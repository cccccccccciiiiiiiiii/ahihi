<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class QuanLiHSController extends Controller
{
    public function index () {
        $quan_li = DB::table('students')->orderBy('score','DESC')->get();

        return view('quanli.index', ['students' => $quan_li]);
    }

    public function create () {
        DB::table('students')->get();

        return view('quanli.create');
    }

    public function store (Request $request) {
        $store = $request->except('_token');

        DB::table('students')->insert($store);

        return redirect()->route('quanli.index');
    }

    public function edit ($id) {
        $student = DB::table('students')->where('id', $id)->first();

        return view('quanli.edit',['id'=>$id, 'student'=>$student]);
    }

    public function update (Request $request, $id) {
        $data = $request->except('_token');

        DB::table('students')->where('id', $id)->update($data);

        return redirect()->route('quanli.index');
    }

    public function delete ($id) {
        DB::table('students')->where('id', $id)->delete();

        return redirect()->route('quanli.index');
    }
}
