@extends('layouts.user')
 
@section('title', 'Anime Interval - Watch anime online in high quality')
 
@section('content')
    <div class="row">
            <div class="col-md-6 col-md-offset-1">
             
                 <div class="content-box" style="padding-left: 20px;">
                    
                        <div class="row">
                            <div class="col-md-12">
                                <div class="row" style="color: #ffffff;">
                                    <div class="col-md-4">
                                        <small>
                                            Aired: xd
                                        </small>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="text-center story-title">
                                            <strong>{{$anime_i['name']}}</strong>
                                        </div>
                                    </div>
                                    <div class="col-md-4 text-right">
                                        <small>
                                            Views: xd
                                        </small>
                                    </div>
                                </div>
                                <br>
                            </div>
                            <div class="col-md-3 col-sm-4" style="height: 200px;">
                                <a href="#">
                                    <img src="{{$anime_i['img']}}" alt="" class="story-img">
                                </a>
                            </div>
                            <div class="col-md-9" style="height: 197px; overflow-y: scroll;">
                                <p style="text-align: justify; color: #ffffff;">
                                    <strong> {{$anime_i['genres']}}</strong><span>
                                
                            </span>
                                </p>
                                <p style="text-align: justify; color: #ffffff;">
                                    <strong>Story:</strong><span>
                                {!! $anime_i['sumarry'] !!}
                            </span>
                                </p>
                            </div>
                        </div>
                         <div class="row">
            <div class="col-md-12 ">
                 <div class="content-box" style="padding-left: 20px;">
                    <?php for($i=1;$i<=$anime_i['number_of_e'];$i++){ ?>
           
                <div class="row">
                <div class="episode-list col-md-12 col-sm-4">
                    <div class="video-title text-center" style="padding-bottom: 10px;">
                        <a href="/{{$name_of_anime}}-episode-<?php echo $i; ?>"><strong> EPISODE <?php echo $i; ?></strong></a>
                    </div>
                    
                           
                        </div>
                    </div>
               
                   <?php } ?>
                 </div>
                
            </div>
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
                                                    <a href="{{url($r['url'])}}">
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