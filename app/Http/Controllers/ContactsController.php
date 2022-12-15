<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactsSendMail;

class ContactsController extends Controller
{
    public function index() {
        return view('contact/index');
    }

    public function confirm(Request $request) {

        $request->validate([
            "email" => "required|email",
            "contactDetail" => "required"
        ]);

        $inputs = $request->all();
        return view('contact/confirm', ["inputs" => $inputs]);
    }

    public function send(Request $request) {

        $request->validate([
            "email" => "required|email",
            "contactDetail" => "required"
        ]);

        $action = $request->input('action');
        $inputs = $request->except('action');

        if($action === "back") {
            return redirect()
            ->route('contact.index')
            ->withInput($inputs);
        }

        // ユーザにメールを送信
        // Mail::to($inputs['email'])->send(new ContactsSendmail($inputs));
        // // 自分にメールを送信
        // Mail::to('yuka.hydrogen.0220')->send(new ContactsSendmail($inputs));

        // 二重送信対策のためトークンを再発行
        $request->session()->regenerateToken();

        // 送信完了ページのviewを表示
        return view('contact.thanks');

        return view('contact/thanks');
    }
}
