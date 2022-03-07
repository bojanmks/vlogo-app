<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends ClientController
{
    public function index() {
        return view("pages.client.contact", $this->data);
    }
}
