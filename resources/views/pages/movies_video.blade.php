@extends('layouts.user')

@section('title', $title.' | Watch '.$title.' movie online in high quality')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="content-box" style="padding-left: 20px;">
                    @foreach($movie_story as $row_movie_story)
                        <div class="row">
                            <div class="col-md-12">
                                <div class="row" style="color: #ffffff;">
                                    <div class="col-md-4">
                                        <small>
                                            Aired: {{$row_movie_story->date_aired}}
                                        </small>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="text-center story-title">
                                            <strong>{{$row_movie_story->anime_name}}</strong>
                                        </div>
                                    </div>
                                    <div class="col-md-4 text-right">
                                        <small>
                                            Views: {{$row_movie_story->total_views}}
                                        </small>
                                    </div>
                                </div>
                                <br>
                            </div>
                            <div class="col-md-3 col-sm-4" style="height: 200px;">
                                <a href="#">
                                    <img src="{{$row_movie_story->anime_image}}" alt="" class="story-img">
                                </a>
                            </div>
                            <div class="col-md-9" style="height: 197px; overflow-y: scroll;">
                                <p style="text-align: justify; color: #ffffff;">
                                    <strong>Genres:</strong><span>
                                {{$row_movie_story->anime_genre}}
                            </span>
                                </p>
                                <p style="text-align: justify; color: #ffffff;">
                                    <strong>Story:</strong><span>
                                {{$row_movie_story->anime_story}}
                            </span>
                                </p>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="content-box" style="padding-left: 20px;">
                    @foreach($movies as $row_movies)
                    <div class="video-title" style="padding-bottom: 10px;">
                        <a href="#"><strong> {{$row_movies->anime_name}}</strong></a>
                    </div>
                    <div class="row">
                        <div class="col-md-12 col-sm-4">
                            <iframe width="100%" height="506" src="{{$row_movies->video}}?autoplay=1" frameborder="0" marginwidth=0 marginheight=0 scrolling=no allow="autoplay; encrypted-media" allowfullscreen></iframe>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
@endsection