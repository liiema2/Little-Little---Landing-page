<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Psy\Readline\Hoa\Console;
use Illuminate\Support\Facades\DB;
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
    public function pay(Request $request){

        // dd($request);
        DB::table('pays')->insert([
            'payment_amount' => $request->input('payment_amount'),
            'number_ticket' => $request->input('number_ticket'),
            'date_use' => $request->input('date_use'),
            'infomation_use' => $request->input('infomation_use'),
            'phone' => $request->input('phone'),
            'email' => $request->input('email'),
            'number_card' => $request->input('number_card'),
            'name_card' => $request->input('name_card'),
            'expiry_card' => $request->input('expiry_card'),
            'created_at' => now(),
            'updated_at' => now()
        ]);
        $a = $request->input('number_ticket');
    return view('pay/Paymentsuccess',['ticket'=>$a]);
   }
    public function contact(Request $request){

        //  dd($request->input('usename'));
        DB::table('contact')->insert([
            'name' => $request->input('usename'),
            'phone_number' => $request->input('phone'),
            'email' => $request->input('email'),
            'address' => $request->input('address'),
            'message' => $request->input('message'),


        ]);

    return view('contact/contacted');
   }
}
