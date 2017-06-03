<?php

namespace App\Http\Controllers;
use GuzzleHttp\Exception\GuzzleException;
use GuzzleHttp\Client;
use Illuminate\Http\Request;

class MovieController extends Controller
{

    public function index()
    {
        $key = env('API_DBTM');
        $client = new Client();
        $res = $client->request('GET', 'http://api.themoviedb.org/3/movie/top_rated?api_key='.$key.'');
        $genre = $client->request('GET','https://api.themoviedb.org/3/genre/movie/list?api_key='.$key.'');
        $datas = (string) $res->getBody();
        $datagenre = (string) $genre->getBody();
        $data = json_decode($datas, true);
        $genredata = json_decode($datagenre, true);
        //dd($genredata);
        return view('film.film', compact('data','genredata'));
    }
    public function lihat($id)
    {
        $key = env('API_DBTM');
        $client = new Client();
        $res = $client->request('GET', 'http://api.themoviedb.org/3/movie/'.$id.'?api_key='.$key.'');
        $videonya = $client->request('GET','http://api.themoviedb.org/3/movie/'.$id.'/videos?api_key='.$key.'');
        $datas = (string) $res->getBody();
        $datavid = (string) $videonya->getBody();
        $data = json_decode($datas, true);
        $videodata = json_decode($datavid, true);
        //dd($videodata);
        return view('film.nonton', compact('data','videodata'));
    }
}
