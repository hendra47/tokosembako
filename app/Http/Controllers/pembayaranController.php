<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\pembayaran;

use Flash;


class pembayaranController extends Controller
{
    public function index(){
    	$data=pembayaran::all();
        
    	return view('pembayaran.index')->with('data',$data); 
    }
    public function create(){
    	//return view('pembayaran.index');
    }
    public function store(Request $request){
    	pembayaran::create($request->all());
    	//return redirect('pembayaran');
    }
    public function show($id){
    	$data=pembayaran::find($id);
    	//return view('pembayaran.show')->with('data',$data);
    }
    public function edit($id){
    	$data=pembayaran::find($id);
    	//return view('pembayaran.edit')->with('data',$data);
    }
    public function update(Request $request,$id){
    	pembayaran::find($id)->update($request->all());
    	//return redirect('pembayaran');
    }
    public function destroy($id){
    	pembayaran::find($id);
    	//return redirect('pembayaran');
    }


}
