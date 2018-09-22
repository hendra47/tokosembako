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
    public function store(Request $request){
        jabatan::create($request->all());
        Flash::success('Jabatan saved successfully.');
        return redirect('jabatan');
    }
     public function show($id){
        $data=jabatan::find($id);
        if (empty($data)) {
            Flash::error('Jabatan not found');

            return redirect(route('jabatan.index'));
        }
        return view('jabatan.show')->with('data',$data);
    } 
    
    public function edit($id){
    	$data=jabatan::find($id);
         if (empty($data)) {
            Flash::error('Jabatan not found');

            return redirect(route('jabatan.index'));
        }
    	return view('jabatan.edit')->with('data',$data);
    }
    public function update(Request $request,$id){
    	jabatan::find($id)->update($request->all());
        Flash::success('Jabatan saved successfully.');
        return redirect('jabatan');
    }
    public function destroy($id){
    	jabatan::find($id)->delete();
        Flash::success('Jabatan deleted successfully.');
    	return redirect('jabatan');	
    }

}
