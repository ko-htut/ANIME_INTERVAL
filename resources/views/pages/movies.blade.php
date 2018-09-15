@extends('layouts.user')

@section('title', 'Anime Movies - Watch anime movies online in high quality')
<style>
    .thumbnail-badge{
        position:absolute;top:10px;right:20px;background:rgba(0,0,0,.69);color:#ffffff;padding:5px;border-radius:50%;
    }
</style>
@section('content')
    <div class="row">
        <div class="col-md-7 col-md-offset-1">
            <div class="content-box" style="padding-left: 20px;">
                <h3 class="text-center">Anime Movie List</h3>
                <hr>
                <div class="thumbnail-panel">
                    <div class="row">
                        @foreach($movies as $row_movies)
                            <div class="thumbnail col-md-3 col-sm-4 col-xs-12">
                                <a href="{{url('AnimeMovies/'.$row_movies->anime_name).'/Server=Streamango'}}" title="{{$row_movies->anime_name}}">
                                    <img src='{{$row_movies->anime_image}}' alt='' class='img-responsive'>
                                    {{--<p class="thumbnail-badge">
                                        <i class="fa fa-eye">{{$row_movies->total_views}}</i>
                                    </p>--}}
                                    <p class="text text-center">
                                        <b>
                                            {{$row_movies->anime_name}}
                                        </b>
                                    </p>
                                </a>
                            </div>
                        @endforeach
                    </div>
                    {{$movies->links()}}
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="content-box">
                <h4 class="text-center">Latest Updates</h4>
                <hr>
                <div class="row">
                    @foreach($latest as $row_latest_episode)
                        <div class="col-md-12">
                            <div class="row">
                                <div class="latest col-md-12">
                                    <a href="{{url('AnimeSeries/'.$row_latest_episode->anime_name.'/Episode-'.$row_latest_episode->episode.'/Server=Streamango')}}">
                                        {{$row_latest_episode->anime_name}}
                                        ->
                                        {{$row_latest_episode->episode}}
                                        <hr>
                                    </a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
@endsection