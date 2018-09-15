<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
require('test.php');

class ViewAnimeController extends Controller
{
 
    public function idk($name_of_anime)
    {
        $series = DB::table('anime')->where('anime_type', 'series')->orderBy('total_views', 'DESC')->paginate(10);
         $movies = DB::table('anime')->where('anime_type', 'movie')->orderBy('total_views', 'DESC')->paginate(10);

        //for Latest Uploads Suggestions
         $latest = DB::table ('streamango')->orderBy('upload_time','DESC')->paginate(17);
         $base_url = "https://gogoanime.sh/";
         $rec = get_recent(file_get_html($base_url));
         $the_stream = file_get_html('https://gogoanime.sh/'.$name_of_anime);
    $the_anime = array(
        "server" => $the_stream->find(".anime_video_body_watch")[0]->outertext,
        "name"  => str_replace("gogoanime","anime interval",$the_stream->find("h1")[0]->plaintext),
        "nextorprev" => $the_stream->find(".anime_video_body_episodes")[0]->outertext,

    );
   // echo $the_stream->outertext;
        return view('pages.anime', compact('rec','name_of_anime','the_anime'));
    }



}
