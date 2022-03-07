<?php

namespace App\Http\Controllers;

use App\Models\Nav;
use App\Models\Restaurant;
use App\Models\Social;
use Illuminate\Http\Request;

class ClientController extends MyController
{
    protected $socialsModel;
    protected $navModel;

    public function __construct() {
        parent::__construct();

        $this->socialsModel = new Social();
        $this->data["socials"] = $this->socialsModel->getSocials();

        $this->navModel = new Nav();
        $this->data['nav'] = $this->navModel->getClientNav();
    }
}
