<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Employee;

class EmployeeController extends Controller
{
    public function all()
    {
    	$obj = Employee::all();	
    	return response()->json($obj);
    }

    public function store(Request $request)
    {

    	$this->validate($request,[

    		'f_name' => 'required',
    		'l_name' => 'required',
    		'email' => 'required'

    	]);

    	$obj = new Employee();
    	$obj-> f_name = $request-> f_name;
    	$obj-> l_name = $request-> l_name;
    	$obj-> email = $request-> email;
    	$obj-> class = $request-> cls;
    	$obj-> dob = $request-> dob;
    	$obj->save();
    	return ['message' => 'Form Submitted Successfully'];
    }

    public function edit($id)
    {
        $obj = Employee::find($id);
        return response()->json($obj);
    }

    public function update(Request $request,$id) 
    {
        $this->validate($request,[

            'f_name' => 'required',
            'l_name' => 'required',
            'email' => 'required'

        ]);


        $obj = Employee::find($id);
        $obj->f_name = $request-> f_name;
        $obj->l_name = $request-> l_name;
        $obj->email = $request-> email;
        $obj->class = $request-> class;
        $obj->dob = $request-> dob;
        $obj->save();

        return ['msg' => 'update done'];
    }
}
