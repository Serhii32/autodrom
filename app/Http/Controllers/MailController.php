<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\FooterFormMailRequest;
use App\Mail\FooterFormMail;
use Illuminate\Support\Facades\Mail;

class MailController extends Controller
{
    public function send(FooterFormMailRequest $data)
    {
    	Mail::to("serhii.bondarenko.ria@gmail.com")->send(new FooterFormMail($data));

    	return redirect()->route('page.index')->with(['mailmessage' => 'Заявка успешно отправлена']);
    }
}
