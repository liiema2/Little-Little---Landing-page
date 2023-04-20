<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Psy\Readline\Hoa\Console;

class pay extends Controller
{
    //
    public function index(Request $request){

        $name_ticket = $request->input('name_ticket');
        $number_ticket = $request->input('number_ticket');
        $date_use_ticket = $request->input('date_use_ticket');
        $name = $request->input('name');
        $number_phone = $request->input('number_phone');
        $email = $request->input('email');

        return view('pay/pay', [
            'name_ticket' => $name_ticket,
            'number_ticket' => $number_ticket,
            'date_use_ticket' => $date_use_ticket,
            'name' => $name,
            'number_phone' => $number_phone,
            'email' => $email
        ]);
    // return view('pay/pay',['pay' => $request]);
   }
}
