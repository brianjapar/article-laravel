<?php

namespace App\Http\Controllers;

// use Mail;
use Illuminate\Support\Facades\Mail;
use Exception;
use Illuminate\Http\Request;


class EmailController extends Controller
{
    public function sendEmail(Request $request)
{
    try{
        Mail::send('email', ['nama' => $request->nama, 'pesan' => $request->pesan], function ($message) use ($request)
        {
            $message->subject($request->judul);
            $message->from('smoothiepie586@gmail.com', 'Admin');
            $message->to($request->email);
        });
        return back()->with('alert-success','Berhasil Kirim Email');
    }
    catch (Exception $e){
        return response (['status' => false,'errors' => $e->getMessage()]);
    }
}
}
