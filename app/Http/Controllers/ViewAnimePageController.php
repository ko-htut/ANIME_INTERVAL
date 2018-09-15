<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
require('test.php');

class ViewAnimePageController extends Controller
{
 
    public function idk($name_of_anime)
    {
         $series = DB::table('anime')->where('anime_type', 'series')->orderBy('total_views', 'DESC')->paginate(10);
         $movies = DB::table('anime')->where('anime_type', 'movie')->orderBy('total_views', 'DESC')->paginate(10);

        //for Latest Uploads Suggestions
         $latest = DB::table ('streamango')->orderBy('upload_time','DESC')->paginate(17);
         $base_url = "https://gogoanime.sh/";
         $rec = get_recent(file_get_html($base_url));
         $anime_info = file_get_html($base_url."category/".$name_of_anime);
         $spans = $anime_info->find('.type');
        foreach($spans as $sp)
         {
            if (strpos($sp->innertext, '<span>Plot Summary: </span>') !== false  )
                $plot = $sp->innertext;
            if (strpos($sp->innertext, '<span>Genre: </span>') !== false  )
                $genres = $sp->plaintext;
         }
         $anime_i = array(
            'img' => $anime_info->find('.anime_info_body_bg img')[0]->src,
            'name' => $anime_info->find('.anime_info_body_bg h1')[0]->innertext,
            'sumarry' => $plot,
            'number_of_e' => $anime_info->find('#episode_page li a')[0]->ep_end,
            'genres' => $genres
         );
         // $anime_info->find('.anime_video_body_comment_name')[0]->outertext = "";
         //         
         // foreach($spans as $sp)
         // {
         //    if (strpos($sp->innertext, '<span>Genre: </span>') !== false || strpos($sp->innertext, '<span>Type: </span>') !== false )
         //        $sp->outertext = "";
         // }
         // $anime_info->find('.bookmark')[0]->outertext = "";
        return view('pages.anime_page', compact('rec','anime_i','name_of_anime'));
        
    }



}
