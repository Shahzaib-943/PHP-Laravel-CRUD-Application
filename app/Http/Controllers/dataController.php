<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\entry;

class dataController extends Controller
{
    public function index()
    {
         return view('home');
    }
    public function form_store()
      {
          return view('form');
      }

    public function store(Request $reqs)
    {
        
            $reqs->validate(
                [
                    'name' => 'required',
                    'email' => 'required',
                    'password' =>'required|min:8',
                    //'password' => ['required','Password::min(8)->mixedCase()',],
                    'cnfrmpassword' => 'required|same:password'
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
            return redirect('/')->with('success','Data Entered Successfully');

        
        
    }

    public function show()
    {
        $customers = entry::all();
        // echo "<pre>";
        // print_r($customers);
        // echo "</pre>";

        // $data = compact('customers'); 
        // echo "<pre>";
        // print_r($data);
        // echo "</pre>";
        return view('disp', compact('customers'));
        return view('disp')->with( compact('customers'));
        // return view('disp', ['customers' => $customers]);
        //return view('disp')->with("customers" , $customers);
    }

    public function update()
    {
        $customers = entry::all();
        //$data = compact('customers');
        //return view('/display',compact('customers'));
        return view('display')->with( compact('customers'));
        // return view('display')->with($data);
    }

    public function delete_data($id)
    {

        

         $datas = entry::find($id);
         if(is_null($datas))
         {
            return redirect('/display')->with('unsuccessdel','Data Does\'not Exist');
         }
         else{
            $datas->delete();
            return redirect('/display')->with('successdel','Data Deleted Successfully');
         }
         
         
    }
    public function edit_data($id)
    {
        // echo ("Hello From Update").$id;
        $data = entry::find($id);
        return view('/update',compact('data'));
       // return view('update',['data'=>$data]);
    }

    public function edit(Request $req,$id)
    {
        
        $req->validate(
            [
                'name' => 'required',
                'email' => 'required',
                'password' => 'required|min:8',
                'cnfrmpassword'=> 'required|same:password'
            ]
        );
        
        echo $id;
        $data = entry::find($id);
        $data->name = $req['name'];
        $data->email =$req['email'];
        $data->password = md5($req['password']);
        $data->save();
        return redirect('/display')->with('successupd','Data Updated Successfully'); 

    }
}
