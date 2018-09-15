@extends('layouts.user')

@section('title', $title.' | Watch '.$title.' online in high quality')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                {{--<br><br><br>
                @foreach($series_episode as $row_series_episode)
                    <div class="col-md-1 text-left" style="color: #ffffff;">
                        Server:
                    </div>
                    <div class="col-md-3 text-right">
                        <select name="" id="" class="form-control" onchange="javascript:handleSelect(this)">
                            <option value="{{url('AnimeSeries/'.$row_series_episode->anime_name.'/Episode-'.$row_series_episode->episode.'/Server=Rapid Video')}}">
                                Rapid Video
                            </option>
                            <option value="{{url('AnimeSeries/'.$row_series_episode->anime_name.'/Episode-'.$row_series_episode->episode.'/Server=Streamango')}}" selected>
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
                @endforeach--}}
                <br><br>
                <div class="content-box" style="padding-left: 20px;">
                    @foreach($series_episode as $row_series_episode)
                        <div class="video-title" style="padding-bottom: 10px;">
                            <div class="col-md-7 float-left text-left">
                                <a href="#" class="float-left"><strong>{{$row_series_episode->anime_name}}</strong></a> -> {{$row_series_episode->episode}}
                            </div>
                            <div class="col-md-5 float-left text-left">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <strong>Next Episode</strong></a> ->
                                        </div>
                                        <div class="col-md-6 formcontrol">
                                            <select name="" id="" class="form-control" onchange="javascript:handleSelect(this)">
                                                <option selected value="{{url('AnimeSeries/'.$row_series_episode->anime_name.'/'.$row_series_episode->episode.'/Server=Streamango')}}">
                                                    {{$row_series_episode->episode}}
                                                </option>
                                                @foreach($all_ep as $row_all_ep)
                                                    <option value="{{url('AnimeSeries/'.$row_all_ep->anime_name.'/'.$row_all_ep->episode.'/Server=Streamango')}}">
                                                        {{$row_all_ep->episode}}
                                                    </option>
                                                @endforeach
                                            </select>
                                            <script type="text/javascript">
                                                function handleSelect(elm)
                                                {
                                                    window.location = elm.value;
                                                }
                                            </script>
                                        </div>
                                    </div>

                            </div>
                        </div>
                        <br>
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