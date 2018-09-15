@extends('layouts.user')
 
@section('title', 'Anime Interval - Watch anime online in high quality')
 
@section('content')
<style>
.pagination-list li {
     display: inline-block;
     pading: 10px;
}
.list_search li{
    display: inline-block;
     pading: 10px;
}
</style>

    <div class="row">
         <div class="col-md-6 col-md-offset-1">
                <div class="thumbnail-panel">
                        <div class="row">
                            <div class="col-md-12 col-sm-12 content-box home-content">
                                <h3 class="text-center">Anime list</h3>
                                <hr>
                               <?php 
                                foreach ($news as $n)
                                {
                                    
                               ?>
                                    <div class="thumbnail col-md-3 col-sm-4">
                                <a href="<?php echo $n['href']; ?>">
                                    <img src="<?php echo $n['img']; ?>" alt="" class="img-responsive">
                                    
                                   
                                    <p class="text text-center">
                                        <?php echo $n['name']; ?>
                                    </p>
                                </a>
                            </div>
                                <?php }?>
                               
                            </div>
                            pages:
                            {!! $pages !!}
                            {!! $list_search !!}
                        </div>

                    </div>
               
            </div>
            <div class="col-md-4">
                <div class="row notice-box">
                    <h3 class="text-center">Announcement</h3>
                    <hr>
                    <div class="notice-box">
                        <p class="notice-p">This site is currently under development. You can check out what I've added so far.</p>
                        <p class="notice-p-important">Big changes are coming soon!</p>
                    </div>
                    <div class="notice-box">
                        <p class="notice-p">Anime are available in Streamango Server only.</p>
                        <p class="notice-p-important">Soon other video servers will be available for user satisfaction.</p>
                    </div>
                </div>
       
                      <div class="row notice-box">
                       <h3 class="text-center"> Recent releases: </h3>
                        <hr>
                        <!-- {{ print_r($rec[0]) }} -->
                        <div class="row notice-box">
                        <!-- <div class="col-md-6"> -->
                           <?php 
                            foreach($rec as $r)
                               {// print_r($r); 
                                ?>
                                <div class="col-md-12">
                                            <div class="row">
                                                <div class="latest col-md-12">
                                                    <a href="{{ url($r['url']) }}">
                                                        <?php echo $r['name'];?>
                                                         ->
                                                        <?php echo $r['episode'];?>
                                                        <hr>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <?php
                               }
                            ?>
                               </div>
                            </div>
                    </div>
                </div> 
            </div>
        </div>
@endsection