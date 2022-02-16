<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class UserController extends Controller
{
    public function showUser(){

        $response = Http::get("https://reqres.in/api/users");

        $userdata =json_decode($response) ;
        
        $data1 = $userdata->data;
 
        $data = (array)$data1;
        return view('user', compact('data'));
    }

    public function addUser(Request $request){
        $response1 = Http::post("https://reqres.in/api/users", [
            
                "name"=> "stephen",
                "job"=> "Web developer"
                
        ]);
     dd($response1->json());
    }

    public function updateUser($id)
    {
            $response1 = Http::put('https://reqres.in/api/users/'.$id , [
            
                "name"=> "Lawrence",
                "job"=> "Web developer"
                
        ]);
     dd($response1->json());
    }

      public function deleteUser($id)
    {
            $response1 = Http::delete('https://reqres.in/api/users/'.$id );
     dd($response1);
    }
}
