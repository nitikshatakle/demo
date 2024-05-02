<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class testingController extends Controller
{
    //  function display()
    // {
    //     return 'Hello from Display!';
    // }
    // public function getParam(Request $request)
    // {
    //     $name = $request->name;
    //     return $name;
    // }
    public function appointment(Request $request){
        $service = htmlspecialchars($request->Service);
        $doctor = htmlspecialchars($request->Doctor);
        $name = htmlspecialchars($request->Name);
        $email = htmlspecialchars($request->Email);
        $date = htmlspecialchars($request->Date);
        $time = htmlspecialchars($request->Time);
        DB::insert("INSERT INTO `users`(`Service`, `Doctor`, `Name`, `Email`, `Date`, `Time`) VALUES ('".$service."','".$doctor."','".$name."','".$email."','".$date."','".$time."')");
    }


}
