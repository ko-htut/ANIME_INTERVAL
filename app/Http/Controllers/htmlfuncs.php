<?php
    require('simple_html_dom.php');
    $base_url = "https://gogoanime.sh/";
    function parseSearchResult($html)
    {
        global $base_url;
        $ar = [];
        foreach ($html->find('.items li .name a') as $el)
        {
            array_push($ar, 
            array(
                "name" => $el->innertext,
                "url" => $base_url.$el->href));
        }
        return $ar;
    }
    function parseEpisodelisting($html)
    {
        global $base_url;
        $ar = [];
        foreach ($html->find('li a') as $el)
        {
            array_push($ar, array(
                "name" => $el->title,
                "url" => $base_url.$el->href));
            //need to ster.
            
        }
        return $ar;
    }
    function get_recent($html)
    {
        global $base_url;
        $ar = [];
        foreach ($html->find('.last_episodes li') as $el)
        {
            array_push($ar, array(
                "name" => $el->find('a')[0]->title,
                "url" => $base_url.$el->find('a')[0]->href,
                'episode' => $el->find('.episode')[0]->innertext));
            //need to ster.
            
        }
        return $ar;
    }
    function parseAnimePage($html)
    {
        global $base_url;
        
        foreach ($html->find("#movie_id") as $el) $id = $el->value;
        return array(
            "id" => $id,
            "url" => $base_url.$html->find('[rel="canonical"]')[0]->href,
            "name" => $html->find('.anime_info_body h1')[0]->innertext,
            "summary" =>  "none yet,need to add",
            "genres" => "none yet, need to add"
            );
            
    }
//     const VideoProviders = {
//   Vidstreaming(url) {
//     return got(url).then(resp => cheerio.load(resp.body))
//     .then($ =>
//       $('video source').map((i, val) => ({
//         name: $(val).attr('label'),
//         url: $(val).attr('src'),
//       })).get());
//   },
// };

// function parseVideo($) {
//   const vidStreaming = $('[data-video*="https://vidstreaming.io/"]').attr('data-video');
//   debug(`Found Vidstreaming link: ${vidStreaming}`);

//   if (vidStreaming != null) {
//     return VideoProviders.Vidstreaming(vidStreaming);
//   }

//   return null;
// }
    function parseVideo($html)
    {
        $vidS = $html->find('[data-video^="//vidstreaming.io"]');
     //   foreach ($vidS as $vid)  print_r($vid);
        return $vidS[0]->getAttribute('data-video');
   //     return $vidS[0]['data-video'];
        echo ":zbs";
     //   print_r($vidS);
    } 
    
    // // // $base_url = "https://gogoanime.sh/";
    // // //$ur_url = "";
     $html = file_get_html("https://gogoanime.sh/free-dive-to-the-future-episode-5");
 //   echo parseVideo($html);
    // //print_r(parseSearchResult($html));
    // $c = parseAnimePage($html);
    // print_r($c);
    