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
                    'password' =>'required|min:3',
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
           // $entries->cnfrmpassword=Hash::make($reqs['cnfrmpassword']);
            $entries->save();
            //echo("Data Entered Successfully");
            // return redirect('/')->with('success','Data Entered Successfully');
            return "Data Entered Successfully";

        
        
    }

    public function delete($id)
    {
        $data = entry::find($id);
        if(is_null($data))
        {
            return ["message" => "Data Does Not Exist"];
        }
        else
        {
            $data->delete();
            return ["message" => "Data Deleted Successfully"];
        }
    }

    public function update(Request $request, $id)
    {
        $request->validate([

            'name' => 'required',
            'email' => 'required',
            'password' => 'required|min:3',
            'confirm_password'=> 'required|same:password'
        ]);

        $data = entry::find($id);
        if(!is_null($data))
        {
        $data->name = $request['name'];
        $data->email = $request['email'];
        $data->password = Hash::make($request['password']);
        $data->save();
        return ["message" => "Data Updated Successfully"];
        }
        else
        {
            return ['message' => 'Data Does Not Exist'];
        }
        
    }
}
