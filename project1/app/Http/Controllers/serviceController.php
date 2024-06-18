<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;

class serviceController extends Controller
{
    //
    function show(){
        return view('service');
    }

     public function store(Request $request) 
        {
        $this->validate(request(), [

        'fname' => 'required',
        'lname' => 'required',
        'fathername' => 'required',
        'phone' => 'required',
        'email' => 'required',
        'password' => 'required',
        'address' => 'required',
        'city' => 'required',
        'state' => 'required',
        'pin' => 'required'
    ]);
}
            $data = $request->input();
            {
				$users = new StudInsert;
                $users->fname = $data['fname'];
                $users->lname = $data['lname'];
                $users->fathername = $data['fathername'];
				$users->phone = $data['phone'];
				$users->email = $data['email'];
				$users->password = $data['password'];
				$users->address = $data['address'];
				$users->city = $data['city'];
				$users->state = $data['state'];
				$users->pin = $data['pin'];
				$users->save();
				return redirect('insert')->with('status',"Insert successfully");
			}
		}
    }
}
  




