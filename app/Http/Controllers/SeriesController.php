<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class SeriesController extends Controller
{

    public function series()
    {


        $series = DB::table('anime')->where('anime_type', 'series')-> orderBy('anime_name', 'ASC')->paginate(40);

        //for Latest Uploads Suggestions
        $latest = DB::table ('streamango')->orderBy('upload_time','DESC')->paginate(17);

        return view('pages.series', compact('series','latest'));
        //return view('pages.series')->withMovies($series);
    }

    public function series_episode($anime_series_name)
    {
        //for series.blade.php -> thumbnails
        $anime_series = DB::table ('anime')-> where('anime_name', $anime_series_name)->get();

        //for incrementing -> total views -> on anime table
        $series = DB::table('anime')-> where([
            ['anime_name', $anime_series_name],
            ['anime_type','series']
        ])
            ->increment('total_views', +1);

        //for series_episode.blade.php -> episode list
        $series_episode = DB::table ('streamango')-> where('anime_name', $anime_series_name)->get();

        //for Latest Uploads Suggestions
        $latest = DB::table ('streamango')->orderBy('upload_time','DESC')->paginate(17);

        //for head -> title
        $title = $anime_series_name;

        return view('pages.series_episode', compact('title','series_episode','anime_series','series','latest'));
    }

    public function series_video_rapid_video($anime_series_name, $series_episode_number)
    {
        $series_episode = DB::table ('streamango')  -> where('anime_name', $anime_series_name)
                                                    -> where('episode', $series_episode_number)
                                                    ->get();

        $title = $anime_series_name;

        return view('pages.series_video', compact('title','series_episode'));
    }
    public function series_video_streamango($anime_series_name, $series_episode_number)
    {
        $series_episode = DB::table ('streamango')  -> where('anime_name', $anime_series_name)
                                                    -> where('episode', $series_episode_number)
                                                    ->get();

        $all_ep = DB::table ('streamango')  -> where('anime_name', $anime_series_name)->get();

        $title = $anime_series_name;

        return view('pages.series_video_streamango', compact('title','series_episode','all_ep'));
    }

}
