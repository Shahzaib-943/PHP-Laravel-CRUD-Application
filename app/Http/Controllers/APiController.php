<?php

namespace App\Http\Controllers;
use App\Models\entry;
use Illuminate\Support\Facades\Hash;

use Illuminate\Http\Request;

class APiController extends Controller
{
    public function show()
    {
        $customers = entry::all();
        return ['datas'=>$customers];
        // echo "<pre>";
        // print_r($customers);
        // echo "</pre>";

        // $data = compact('customers'); 
        // echo "<pre>";
        // print_r($data);
        // echo "</pre>";
        // return view('disp', compact('customers'));
        // return view('disp')->with( compact('customers'));
    }

    public function store(Request $reqs)
    {
        
            $reqs->validate(
                [
                    'name' => 'required',
                    'email' => 'required',
                    'password' =>'required|min:8',
                    //'password' => ['required','Password::min(8)->mixedCase()',],
                    //'cnfrmpassword' => 'required|same:password'
                ]
            );
            
            
            // echo "<pre>";
            // print_r($reqs->all());

            $entries = new entry;
            $entries->name = $reqs['name'];
            $entries->email =$reqs['email'];
            //$entries->password=md5($reqs['password']);
            $entries->password=Hash::make($reqs['password']);
            //$entries->cnfrmpassword=md5($reqs['cnfrmpassword']);
            $entries->cnfrmpassword=Hash::make($reqs['cnfrmpassword']);
            $entries->save();
            //echo("Data Entered Successfully");
            // return redirect('/')->with('success','Data Entered Successfully');
            return "Hello World";

        
        
    }
}
