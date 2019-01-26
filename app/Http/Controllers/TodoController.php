<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App;
use App\Todo;
use Task;

class TodoController extends Controller
{
    public function index(){

    	$data = Todo::all();
    	return view('index')->with('data', $data);
    }
    public function store(Request $request){

    	$workName = $request->input('workName');
    	$data=array(
    			'work'=>$workName,
    			'status'=>'Incomplete'
    	);
    	$response = App\Todo::create($data);

    	if ($response) {
    		return redirect()->back()->with('Success', 'Task Inserted Successfully!');
    	}
    }

    public function edit($id){
    	
    	$data = Todo::find($id);
    	return view('todo-edit')->with('data', $data);
    }

    public function update($id, Request $request){
    	
    	$data = array(
    			'work'=>$request->input('workName'),
    			'status'=>$request->input('status')
    	);
    	$response = Todo::find($id)->update($data);
    	if ($response) {
    		return redirect('/')->with('Success', 'Task Updated Successfully!');
    	}
    	
    }

    public function delete($id){
    	
    	$response = Todo::find($id)->delete();
    	if ($response) {
    		return redirect('/')->with('Success', 'Task deleted Successfully!');
    	}
    	
    }
}
