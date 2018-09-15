<?php 
   // require('simple_html_dom.php');
    require('htmlfuncs.php');
   //
    $base_url = "https://gogoanime.sh/";
    $ur_url = "";
    $html = file_get_html($base_url);
   // $element = $html->find(".main_body");
   
    //code for getting the recent anime
    //start
    class Page {
        function fromResponse($r)
        {
            return $r;
        }
        function fromUrl($url, $query)
        {
            return file_get_html($url.$query);
        }
    }
    $page = new Page;
    class Episode {
    public function __construct($name, $url, $videoLinks ) {
       $this->name = $name || null;
       $this->url = $url || null;
       $this->videoLinks = $videoLinks || null;
//       $html = file_get_html($this->url);
    }
    
    public function fetch() {
        $this->videoLinks =  parseVideo($page->fromUrl($this->url));
    }
       
     
     
     // fetch() {
     //   return Page.fromUrl(this.url).then(html.parseVideo).then((videoLinks) => {
     //     this.videoLinks = videoLinks;
     //   }).then(() => this);
     // }
   }
    
    class Anime {
      public function __construct($name, $url, $id, $summary, $genres, $episodes) {
        $this->name = $name || null;
        $this->url = $url || null;
        $this->id = $id || null;
        $this->summary = $summary || null;
        $this->genres = $genres || null;
        $this->episodes = $episodes || null;
        
      }
      public function fetchEpisodes() {
       $url = $base_url + 'load-list-episodes';
       //practic url /load-list-episode?ep_start=0&ep_end=2000&id=40
       $query = "?ep_start=0&ep_end=2000&id=".$this->id;
       $p = file_get_html($url.$query);
       $eps = parseEpisodelisting($p);
       $er = array();
       foreach($eps as $e)
       {
           $l = new Episode($e[name],$e[url], null);
           array_push($er,$l);
       }
       $this->episodes = $er;
    //   foreach($page->find('li a') as $elem)
    //   {
    //     echo $elem->outertext . '<br>';
    //   }
      }
      public function fetchAllEpisodes()
      {
          foreach($this->episodes as $e) print_r($e);
      }
    //   public function fetchInformation()
    //   {
    //       return $this->fromUrl($this->url)
    //   }
      public function fromName($name)
      {
          $r = search($name);
          return new Anime($r[name], $r[url], $r[id], $r[summary], $r[genres], $r[episodes]);
      }
     
    }
   
   
   
    function get_animes_from_page($html)
    {
    foreach($html->find('.last_episodes  li') as $element) 
       echo $element->outertext . '<br>';
    }
   //end
   // echo $html;
   
  
   //search the anime
   
   function search($q)
   {
     $url = $base_url.'search.html?keyword='.$q;
    // https://gogoanime.sh/search.html
     $html = file_get_html($url);
     
   }
   //
   