<?php

namespace App\Controllers;

class Main extends BaseController
{
    public function index()
    {
        $articleModel = new \App\Models\Article();
        $articles = $articleModel->where('published', 1)
            ->where('top', 1)
            ->orderBy('date', 'desc')
            ->findAll();

        return view('index', ['articles' => $articles]);
    }
}