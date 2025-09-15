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
        $seasons = (new Season())->orderBy('start', 'desc')->findAll();

        // Seskupení po desetiletích jako objekt
        $groupedSeasons = new \stdClass();
        foreach ($seasons as $season) {
            $decade = floor($season->start / 10) * 10;
            if (!property_exists($groupedSeasons, $decade)) {
                $groupedSeasons->$decade = new \stdClass();
            }
            $groupedSeasons->$decade->{$season->id} = $season;
        }

        return view('seasons', ['groupedSeasons' => $groupedSeasons]);
    }

    public function seasonDetail($id)
{
    $season = (new Season())->find($id);

    // JOIN na tabulku lig, abychom získali název ligy
    $competitionsArr = (new \App\Models\LeagueSeason())
        ->select('fot_league_season.*, fot_league.name AS league_name')
        ->join('fot_league', 'fot_league.id = fot_league_season.id_league')
        ->where('id_season', $id)
        ->findAll();

    $competitions = new \stdClass();
    foreach ($competitionsArr as $competition) {
        $competitions->{$competition->id} = $competition;
    }

    return view('seasons_detail', [
        'season' => $season,
        'competitions' => $competitions
    ]);
}


}