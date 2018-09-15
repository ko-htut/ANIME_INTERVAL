@extends('layouts.user')
 
@section('title', 'Anime Interval - Watch anime online in high quality')
 
@section('content')
    <div class="row">
<style>
iframe{
    width:100%;
    height: 560;
}
</style>
            <div class="col-md-7 col-md-offset-1">
             <div class="content-box" style="padding-left: 20px;">
                <div class="video-title" style="padding-bottom: 10px;">
                    <div class="col-md-7 float-left text-left">
                        <a href="#" class="float-left"><strong>{!! $the_anime["name"] !!}</strong></a> 
                    </div>
                    <div class="col-md-5 float-left text-left">
                        <div class="row">
                            <div class="col-md-6">
                                <strong> {!! $the_anime["nextorprev"] !!}</strong> 
                            </div>
                            
                        </div>

                    </div>
                </div>
                <br>
                <br>
                <div class="row">
                    <div class="col-md-12 col-sm-4">
                       {!! $the_anime['server'] !!}
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
           
                     <!--        {{--<div class="col-md-6">
                                    @foreach($latest as $row_latest_episode)
                                        <div class="col-md-12">
                                            <div class="row">
                                                <div class="latest col-md-12">
                                                    <a href="{{url('AnimeSeries/'.$row_latest_episode->anime_name.'/Episode-'.$row_latest_episode->episode.'/Server=Streamango')}}">
                                                        {{$row_latest_episode->anime_name}}
                                                        {{$row_latest_episode->episode}}
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>--}} -->
                    
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