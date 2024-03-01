<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;
use App\Models\Post;


class HomeController extends Controller
{
    public function index()
    {
        return View::make('home')
            ->with('title', '首頁')
            ->with('hello', '大家好～～');
    }

    public function  do()
    {
        return View::make('home')
            ->with('title', '做首頁')
            ->with('hello', '寫下大家好～～!!!');


    }
    public function  connect()
    {
        $post= new Post;
        $post->title = 'Laravel 學習筆記';
        $post->content = 'Laravel 是一個 PHP Web 開發框架。';
        $post->save();



    }
}

