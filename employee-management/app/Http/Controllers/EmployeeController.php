<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    public function index(){
        $dball = Employee::orderBy('surname')->paginate(10);
        return view('index', compact('dball'));
    }


    public function delete($id){
        $dbdel = Employee::find($id);
        $dbdel->delete();
        return redirect()->back();
    }

    public function update($id){
        $post=Employee::find($id);
        return view('edit', compact('post'));

    }

    public function edit(Request $request, $id){

        $post=Employee::find($id);
        $post->Name=$request->Name;
        $post->surname=$request->surname;
        $post->update();
        return redirect('/');

    }

    public function hired($id){

        $employee = Employee::find($id);

        if ($employee->is_hired==false){
            $employee->is_hired=true;

        }else{
            $employee->is_hired=false;
        }
        $employee->save();
        return redirect()->back();
    }

}
