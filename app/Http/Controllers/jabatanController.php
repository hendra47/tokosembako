<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\jabatan;

use Flash;


class jabatanController extends Controller
{
    public function index(){
    	$data=jabatan::all();

    	return view('jabatan.index')->with('data',$data);
    }
    public function create(){
    	return view('jabatan.create');
    }
     public function show($id){
        $data=jabatan::find($id);
        return view('jabatan.show')->with('data',$data);
    } 
    public function store(Request $request){
    	jabatan::create($request->all());
        return redirect('jabatan');
    }
    public function edit($id){
    	$data=jabatan::find($id);
    	return view('jabatan.edit')->with('data',$data);
    }
    public function update(Request $request,$id){
    	jabatan::find($id)->update($request->all());
        return redirect('jabatan');
    }
    public function destroy($id){
    	jabatan::find($id)->delete();
        Flash::success('terhapus');
    	return redirect('jabatan');	
    }

}
