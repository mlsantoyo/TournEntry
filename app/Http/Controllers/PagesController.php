<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index(){
        $title = 'Tournament Registration';
        return view('pages.index')->with('title', $title);
    }

    public function howto(){
        $title = 'How To Use This Site';
                return view('pages.howto')->with('title', $title);
            }

    public function schedule(){
        $title = 'Tournament Schedule';
             return view('tournaments.index')->with('title', $title);
            }
        

}   