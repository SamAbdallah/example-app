<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

class TestController extends Controller{
    
    public function sayHi(){
        $message = "From DB";

        return response()->json([
            "status" => "Success",
            "message" => $message
        ], 200);
    }



    public function random(){
        $arr=["Ali","Ahmad","Joseph","Mikel"];
        echo $arr[array_rand($arr)];

    }

    public function random_groups(){
        $arr1=['Ali','Ahmad','Joseph','Mikel','Elia','Manesa'];
        $chunckedArray=array_chunk($arr1,3);
        echo $chunckedArray;


    }

    public function seconds(){
        $y1=2022;
        $y2=1732;
        $years=$y1-$y2;
        $seconds=($years*31536000);
        echo $seconds;

    }

    public function text(){
        $json = file_get_contents('https://icanhazdadjoke.com/slack');
        $obj = json_decode($json);
        ini_set("allow_url_fopen", 1);

    }



}