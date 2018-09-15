@extends('layouts.user')
@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="content-box">
                <h3 class="text-center">Anime Series List</h3>
                <hr>
                <div class="thumbnail-panel">
                    <div class="row">
                        @foreach($play_all as $row_play_all)
                            <div class="content-box col-md-3 col-sm-4" style="padding-bottom: 20px;width: 200px; height: 200px;">
                                <iframe width="100%" height="100px" src="{{$row_play_all->video}}?autoplay=1" frameborder="0" marginwidth=0 marginheight=0 scrolling=no allow="autoplay; encrypted-media" allowfullscreen></iframe>
                                <p class="title text-center">
                                    <b>
                                        {{$row_play_all->anime_name}}{{$row_play_all->episode}}
                                    </b>
                                </p>
                            </div>
                        @endforeach
                        {{$play_all->links()}}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
