<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\contact;

use App\Mail\consultancy;

class ReserveController extends Controller
{
    public function send()
    {

        $data = [
            'email' => request('email'),
            'name' => request('name'),
            //'select' => request('select'),
            'notes' => request('notes'),
            'mobile' => request('mobile')
        ];
        //dd($data['name']);

        // try {
        //    \Mail::to('info@globalsupplying.com')->send(new contact($data));
        // } catch (\Exception $e) {
        //     dd($e->getMessage());
        // }

        return redirect('/contact-ar');
    }



    public function reserve_consultancy()
    {

        $data = [
            'email' => request('email'),
            'name' => request('name'),
            'select' => request('select'),
            'notes' => request('notes'),
            'mobile' => request('mobile')
        ];
        //dd($data['name']);

        //   try {
        //      \Mail::to('tech@ideasowners.net')->send(new consultancy($data));
        //  } catch (\Exception $e) {
        //      dd($e->getMessage());
        //}
        return redirect('/reserve-consultant');
    }
}
