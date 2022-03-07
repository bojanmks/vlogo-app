<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthorController extends ClientController
{
    public function __construct() {
        parent::__construct();
        $this->data['authorSocials'] = $this->socialsModel->getAuthorSocials();
    }

    public function index() {
        return view("pages.client.author", $this->data);
    }
}
