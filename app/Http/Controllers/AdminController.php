<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
    	$data_admin = \App\Admin::all();
    	return view('admin.index',['data_admin' => $data_admin]);
    }

    public function create(Request $request)
    {
    	\App\Admin::create($request->all()); 
    	return redirect('/admin')->with('sukses','Data Berhasil Diinput');
    }

    public function edit($id)
    {
        $admin = \App\Admin::find($id);
        return view('admin/edit',['admin' => $admin]);
    }

    public function update(Request $request,$id)
    {
        $admin = \App\Admin::find($id);
        $admin->update($request->all());
        return redirect('/admin')->with('sukses','Data Berhasil Diupdate');
    }

    public function delete($id)
    {
        $admin =  \App\Admin::find($id);
        $admin->delete();
        return redirect('/admin')->with('sukses','Data Berhasil Dihapus');
    }


}
