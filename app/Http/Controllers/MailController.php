<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContactRequest;
use App\Mail\ContactMail;
use Illuminate\Http\Request;

class MailController extends MyController
{
    public function contact(ContactRequest $request) {
        try {
            \Mail::to("bojanm245@gmail.com")->send(new ContactMail($request->get("email"), $request->get("subject"), $request->get("message")));

            $this->logAction("User sent a contact message.", $request);

            return redirect()->back()->with("messages", ["Your email was sent successfully."]);
        } catch(Exception $ex) {
            $uniqueId = uniqid();
            \Log::error($uniqueId . " " . $ex->getMessage());
            return redirect()->back()->withErrors(["We encountered an error.", "Error ID: " . $uniqueId]);
        }
    }
}
