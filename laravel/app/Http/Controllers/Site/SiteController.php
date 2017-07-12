<?php

namespace App\Http\Controllers\Site;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SiteController extends Controller
{
    
    public function __construct() {
        
        //$this->middleware('auth')->only('contatos');
    }
    
    public function index()
    {
        return view('site.home.index');
    }
    
    public function contatos()
    {
        return 'página de contatos';
    }
}
