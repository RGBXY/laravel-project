<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\View\View;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    public function show(){ 
        return 'ini bagian show';
    }

    public function create(){ 
        return 'ini bagian create';
    }
}
