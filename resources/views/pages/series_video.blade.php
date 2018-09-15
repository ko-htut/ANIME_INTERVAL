@extends('layouts.user')

@section('title', $title.' anime series| Watch '.$title.' anime series online in high quality')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <br><br><br>
                @foreach($series_episode as $row_series_episode)
                    <div class="col-md-1 text-left" style="color: #ffffff;">
                        Server:
                    </div>
                    <div class="col-md-3 text-right">
                        <select name="" id="" class="form-control" onchange="javascript:handleSelect(this)">
                            <option value="{{url('AnimeSeries/'.$row_series_episode->anime_name.'/Episode-'.$row_series_episode->episode.'/Server=Rapid Video')}}" selected>
                                Rapid Video
                            </option>
                            <option value="{{url('AnimeSeries/'.$row_series_episode->anime_name.'/Episode-'.$row_series_episode->episode.'/Server=Streamango')}}">
                                Streamango
                            </option>
                        </select>
                        <script type="text/javascript">
                            function handleSelect(elm)
                            {
                                window.location = elm.value;
                            }
                        </script>
                    </div>
                @endforeach
                <br><br>
                <div class="content-box" style="padding-left: 20px;">
                    @foreach($series_episode as $row_series_episode)
                        <div class="video-title" style="padding-bottom: 10px;">
                            <div class="col-md-9 float-left text-left">
                                <a href="#" class="float-left"><strong>{{$row_series_episode->anime_name}}</strong></a> -> {{$row_series_episode->episode}}
                            </div>
                        </div>
                        <br>
                        <div class="row">
                            <div class="col-md-12 col-sm-4">
                                <iframe width="100%" height="506" src="{{$row_series_episode->video}}" frameborder="0" marginwidth=0 marginheight=0 scrolling=no allowfullscreen></iframe>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
@endsection