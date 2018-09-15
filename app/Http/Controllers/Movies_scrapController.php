<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
require('test.php');

class Movies_scrapController extends Controller
{
 
    public function home()
    {
         $series = DB::table('anime')->where('anime_type', 'series')->orderBy('total_views', 'DESC')->paginate(10);
         $movies = DB::table('anime')->where('anime_type', 'movie')->orderBy('total_views', 'DESC')->paginate(10);
         if (!isset($_GET['page'])) $_GET['page'] = 1;
        //for Latest Uploads Suggestions
         $latest = DB::table ('streamango')->orderBy('upload_time','DESC')->paginate(17);
         $base_url = "https://gogoanime.sh/";
         $rec = get_recent(file_get_html($base_url));

         $base_url = "https://gogoanime.sh/popular.html?page=".$_GET['page'];
   		 $re = file_get_html($base_url);
   
   		 $main = $re->find('.main_body')[0];
         $lis = $re->find('.items li');
         $news = array();
         foreach ($lis as $li)
         {
            $new = array(
                'img'=> $li->find('.img img')[0]->src,
                'href' => $li->find('.img a')[0]->href,
                'name' => $li->find('.name')[0]->innertext
            );
            array_push($news, $new);
         }

         $pages = $re->find('.anime_name_pagination')[0]->outertext;
        return view('pages.home', compact('series','movies','latest','rec','news','pages'));
        
    }
    public function get_movies()
    {

         if (!isset($_GET['page'])) $_GET['page'] = 1;
        //for Latest Uploads Suggestions
         
         $base_url = "https://gogoanime.sh/";
         $rec = get_recent(file_get_html($base_url));

         $base_url = "https://gogoanime.sh/anime-movies.html?page=".$_GET['page'];
         $re = file_get_html($base_url);
   
         $main = $re->find('.main_body')[0];
         $lis = $re->find('.items li');
         $news = array();
         foreach ($lis as $li)
         {
            $new = array(
                'img'=> $li->find('.img img')[0]->src,
                'href' => $li->find('.img a')[0]->href,
                'name' => $li->find('.name')[0]->innertext
            );
            array_push($news, $new);
         }

         $pages = $re->find('.anime_name_pagination')[0]->outertext;
        return view('pages.moviesscrap', compact('rec','news','pages'));
    }



}
