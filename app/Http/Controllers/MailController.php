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

    	/*$message = "Нова заявка з сайту Автодром<br>
        Ім'я: " . $data->name . "<br>
        Телефон: " . $data->tel;
        $headers = "Content-type:text/html;charset=UTF-8" . "\r\n" . "From: admin@chiptuning.com" . "\r\n";
        mail("serhii.bondarenko.ria@gmail.com","Нова заявка з сайту Автодром",$message, $headers);*/

    	return Redirect::to(URL::previous() . "#footer_form")->with(['mailmessage' => 'Заявка успешно отправлена']);
    	//return redirect()->back()->with(['mailmessage' => 'Заявка успешно отправлена']);
    }
}
