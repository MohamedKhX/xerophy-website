<?php

namespace App\Controllers;

class DocsController extends Controller
{
    public function index()
    {
        $this->render('Docs/index.html');
    }
}