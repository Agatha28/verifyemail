<?php

namespace App\Http\Controllers;

use App\Mail\Email;
use App\Mail\EmailAtach;
use App\Models\User;
//use Illuminate\Http\Request;
use App\Notifications\Informasi;
use Illuminate\Support\Facades\Mail;

class EmailController extends Controller
{
    public function kirim(){

        Mail::to('codinginaja@gmail.com')->send(new Email());
        //return new Email();
    }

    public function attach(){
        $text = [
            'subject' => 'Pengiriman Dari Controller'
        ];
        Mail::to('codinginaja@gmail.com')->send(new EmailAtach($text));
    }

    public function notif(){
        $user = User::first();
        $data = [
            'line1' => 'Pesanan Anda Telah Di Setujui',
            'action' => 'Klik OK',
            'line2' => 'Batas Transfer Tanggal...',
        ];
        $user->notify(new Informasi($data));
    }
}
