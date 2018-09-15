<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use DB;

class MoviesController extends Controller
{
    public function movies()
    {

        $movies = DB::table('anime')->where('anime_type', 'movie')->paginate(40);

        //for Latest Uploads Suggestions
        $latest = DB::table ('streamango')->orderBy('upload_time','DESC')->paginate(17);

        return view('pages.movies', compact('movies','latest'));
    }

    public function movies_video_streamango($anime_movie_name)
    {
        $movies_count = DB::table('anime')-> where('anime_name', $anime_movie_name)->increment('total_views', +1);

        $movie_story = DB::table ('anime')-> where('anime_name', $anime_movie_name)->get();

        $movies = DB::table ('streamango')-> where('anime_name', $anime_movie_name)->get();

        $title = $anime_movie_name;

        return view('pages.movies_video', compact('title','movies','movies_count', 'anime_movie_name','movie_story'));
    }

    public function play_all()
    {
        $play_all = DB::table ('streamango')->orderBy('anime_name','ASC')->paginate(15);

        return view('pages.playall', compact('play_all'));
    }

}
