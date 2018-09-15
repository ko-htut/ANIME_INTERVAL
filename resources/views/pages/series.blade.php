@extends('layouts.user')

@section('title', 'Anime Series - Watch anime series online in high quality')
<style>

</style>
@section('content')
    <div class="row">
        <div class="col-md-7 col-md-offset-1">
            <div class="content-box" style="padding-left: 20px;">
                <h3 class="text-center">Anime Series List</h3>
                <hr>
                <div class="thumbnail-panel">
                    <div class="row">
                        @foreach($series as $row_series)
                            <div class="thumbnail col-md-3 col-sm-4">
                                <a href="{{url('AnimeSeries/'. $row_series->anime_name)}}" title="{{$row_series->anime_name}}">
                                    <img src="{{$row_series->anime_image}}" alt="" class="img-responsive">
                                    {{--<p class="thumbnail-badge-complete">
                                        {{$row_series->anime_status}}
                                    </p>
                                    <p class="thumbnail-badge">
                                        <i class="fa fa-eye">{{$row_series->total_views}}</i>
                                    </p>--}}
                                    <p class="thumbnail-badge">
                                        {{$row_series->anime_status}}
                                    </p>
                                    <p class="text text-center">
                                        <b>
                                            {{$row_series->anime_name}}
                                        </b>
                                    </p>
                                </a>
                            </div>
                        @endforeach
                    </div>
                    {{$series->links()}}
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
