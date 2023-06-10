<?php

namespace App\Http\Controllers;

use App\Models\apidata;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Http;
//use Carbon\Carbon;
//use Carbon\Carbon;

class HttpController extends Controller
{
   
    public function apimenu()
    {
        return view('apimenu');
    }
   
   
    public function apidata1()
    {
        $api1_1 = Http::get("https://reqres.in/api/users?page=1");
        $api1_2 = Http::get("https://reqres.in/api/users?page=2");
        return view('apidata1',['apidata1'=>$api1_1['data'],'apidata2' => $api1_2['data']]);
    }
    
    
    public function apidata2()
    {
        $api2_1 = HTTP::get('https://jsonplaceholder.typicode.com/users');
        //dd($api3->collect());
        return view('apidata2',['apidata2' => $api2_1->collect()]);

    }

    public function apidatastore()
    {
        $api = HTTP::get('https://jsonplaceholder.typicode.com/users');
        echo "<pre>";
        //echo($api);
        //print_r($api->body());

      //dd ($api->body());

     //dd ($api->collect());
    // echo
     print_r($api->body());
     print_r($api->collect());
     //dd ($api->all());

    //    $current = Carbon::now();
    //    dd ($current);
        // $data =  json_decode($api);
        // print_r ($data);

       // print_r( $data['id']);
        //dd($data);
        // return ($data);
         //dd($data[0]->id);
        // foreach($data as $d){
        //     print_r($d['id']);
        // }



    //     $data1 = new apidata;
    //   //  $data1->id = $data[0]->id;
    //   $i = 0;  
    //   foreach($data as $d){
    //         $data1->name = $d[$i]->name;
    //         $data1->username = $d[$i]->username;
    //         $data1->email = $d[$i]->email;
    //         $i++;
    //     }
        
    //    // $data1->address = $data[0]->address;
    //     $data1->save();
    }


}
 