<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
require('test.php');

class SearchController extends Controller
{
 
    public function searchit()
    {
         $base_url = "https://gogoanime.sh/";
         $rec = get_recent(file_get_html($base_url));
         

         if (!isset($_GET['page'])) $_GET['page'] = 1;
         $z = $_GET;
         $base_url = "https://gogoanime.sh/search.html?keyword=".$_GET['keyword']."&"."page=".$_GET['page'];

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
        return view('pages.search', compact('rec','z','main','news','pages'));
        
    }



}
