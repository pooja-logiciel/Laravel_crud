<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class updates extends Controller
{
    public function submit(Request $request){
        $data=array('name'=>$request->input('name'),"email"=>$request->input('email'));
        DB::table('details')->insert($data);
        return back();
    }

    //display the data 
    public function display(){
        $data=DB::table('details')->get()->Toarray();
        return view('template',compact('data'));
    }
    //delete the data from the database
    public function delete($id){
        DB::delete('delete from details where id = ?',[$id]);
        return back();
    }
    //edit the value
    public function edit($id){
        $result = DB::select('select * from details where id = ?', [$id]);
        return view('editform',compact('result'));
    }
    //updates the table
    public function update_data(Request $request){
        // $updateUser = DB::table('users')->where('id','$request->id')
        // ->update(array('email' => '$request->email', 'name' => '$request->name'));
        //  return redirect('display');
    }
}
