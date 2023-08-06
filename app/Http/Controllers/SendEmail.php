<?php

namespace App\Http\Controllers;

use App\Mail\TestMail;
use App\Models\Dummy;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class SendEmail extends Controller
{
    public function index(){
        $person = Dummy::all();
        Mail::to('sadewa@gmail.com')->send(new TestMail($person));
    }
}
