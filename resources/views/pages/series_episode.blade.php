@extends('layouts.user')

@section('title', $title.' | Watch '.$title.' online in high quality')

@section('content')
    <div class="row">
        {{--@foreach($anime_series as $row_anime_series)
        <div class="col-md-8 col-md-offset-2">
            <div class="content-box text-center" style="color: #ffffff; margin-bottom: 0;">
                <strong>{{$row_anime_series->anime_series_name}}</strong>
            </div>
        </div>
        @endforeach--}}
        <div class="col-md-7 col-md-offset-1">
            <div class="content-box story-panel">
                @foreach($anime_series as $row_anime_series)
                <div class="row">
                    <div class="col-md-12">

                        <div class="row" style="color: #ffffff;">
                            <div class="col-md-4">
                                    <small>
                                        Aired: {{$row_anime_series->date_aired}}
                                    </small>
                            </div>
                            <div class="col-md-4">
                                <div class="text-center story-title">
                                    <strong>{{$row_anime_series->anime_name}}</strong>
                                </div>
                            </div>
                            <div class="col-md-4 text-right">
                                    <small>
                                        Views: {{$row_anime_series->total_views}}
                                    </small>
                            </div>
                        </div>
                        <br>
                    </div>
                    <div class="col-md-3 col-sm-4" style="height: 200px;">
                        <a href="#">
                            <img src="{{$row_anime_series->anime_image}}" alt="" class="story-img">
                        </a>
                    </div>
                    <div class="col-md-9" style="height: 197px; overflow-y: scroll;">
                        <p style="text-align: justify; color: #ffffff;">
                            <strong>Genres:</strong><span>
                                {{$row_anime_series->anime_genre}}
                            </span>
                        </p>
                        <p style="text-align: justify; color: #ffffff;">
                            <strong>Story:</strong><span>
                                {{$row_anime_series->anime_story}}
                            </span>
                        </p>
                    </div>
                </div>
                @endforeach
            </div>

            <div class="content-box" style="padding-left: 20px;">
                <div class="row">
                    <div class="col-md-12">
                        @foreach($series_episode as $row_series_episode)
                            <div class="col-md-12">
                                <div class="row">
                                    <div class="episode-list col-md-12">
                                        <a href="{{url('AnimeSeries/'.$row_series_episode->anime_name.'/'.$row_series_episode->episode).'/Server=Streamango'}}">
                                            <p class="text-center">
                                                <b>
                                                    {{$row_series_episode->episode}}
                                                </b>
                                            </p>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
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