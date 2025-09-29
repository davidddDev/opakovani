<?php

namespace App\Controllers;

use App\Models\Article;
use App\Models\Season;
use App\Models\LeagueSeason;

class Main extends BaseController
{
    public function index()
    {
        $articleModel = new Article();
        $articles = $articleModel->where('published', 1)
            ->where('top', 1)
            ->orderBy('date', 'desc')
            ->findAll();

        return view('index', ['articles' => $articles]);
    }

    public function detail($id = null)
    {
        $articleModel = new Article();
        $article = $articleModel->where('id', $id)->first();

        return view('article_detail', ['article' => $article]);
    }

    public function articles()
    {
        $articleModel = new Article();
        $articles = $articleModel->where('published', 1)
            ->orderBy('date', 'asc')
            ->findAll();

        return view('articles', ['articles' => $articles]);
    }

    public function seasons()
{
    $seasons = (new Season())
        ->orderBy('start', 'desc')
        ->findAll();

    $groupedSeasons = [];

    foreach ($seasons as $season) {
        $decade = floor($season->start / 10) * 10;
        $groupedSeasons[$decade][$season->id] = $season;
    }

    return view('seasons', [
        'groupedSeasons' => $groupedSeasons
    ]);
}

    
    public function seasonDetail($id)
{
    $season = (new Season())->find($id);

    $competitionsArr = (new \App\Models\LeagueSeason())
        ->select('fot_league_season.*, fot_league.name AS league_name')
        ->join('fot_league', 'fot_league.id = fot_league_season.id_league')
        ->where('id_season', $id)
        ->findAll();

        foreach ($competitionsArr as $competition) {
            $competitions[$competition->id] = $competition;
        }
    
        return view('seasons_detail', [
            'season'       => $season,
            'competitions' => $competitions
        ]);
    }
    public function manageArticles()
{
    $articles = (new Article())
        ->orderBy('id', 'asc') 
        ->findAll();
    return view('articles_manage', ['articles' => $articles]);
}

public function createArticle()
{
    $allLinks = (new Article())->findAll(); // všechny články pro select
    return view('article_form', ['allLinks' => $allLinks]);
}

public function storeArticle()
{
    $model = new Article();
    $data = [
        'title'     => $this->request->getPost('title'),
        'text'      => $this->request->getPost('text'),
        'photo'     => $this->request->getPost('photo'),
        'link'      => $this->request->getPost('link'),
        'top'       => $this->request->getPost('top') ?? 0,
        'published' => $this->request->getPost('published') ?? 1,
        'date'      => time()
    ];
    $model->save($data);
    return redirect()->to('/articles/manage');
}
}