<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
require('test.php');

class HomeController extends Controller
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
  		 $rep = file_get_html($base_url);
   
    	 $recently =  $rep->find('.added_series_body ')[0];
         $base_url = "https://gogoanime.sh/popular.html?page=".$_GET['page'];
         $recs = array();
         foreach($recently->find('li') as $l)
         {
         	$n = array(
         		'name' => $l->find('a')[0]->innertext,
         		'href' => $l->find('a')[0]->href,
         		'img' =>  file_get_html('https://gogoanime.sh'.$l->find('a')[0]->href)->find('.anime_info_body_bg img')[0]->src
         	);
         	array_push($recs,$n);
         }

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
        return view('pages.home', compact('series','movies','latest','rec','news','pages','recs'));
        
    }



}
