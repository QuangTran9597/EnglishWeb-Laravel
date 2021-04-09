@extends('pages.layout')
@section('content')
<link rel="stylesheet" href="{{asset('pages/css/topic.css')}}">
<div class="header">
    <a href="{{ route('pages.chooseGame1')}}"><img id='back-button' src="{{asset('pages/image/back-button.png')}}" alt=""></a>
    <h2>Topic</h2>
</div>
    <div class="content">
        <div class="container">
            <div class="row">
            @foreach($topic as $item)
                <div class="col-sm-3">
                    <a href="{{ route('pages.game1', ['id' => $item->id])}}">
                        <div class="item"     >
                        <div class="item__image" style="background-image: url('{{asset('upload/image').'/'.$item->hinhanh}}') ">    
                        </div>
                            <p>{{$item->ten}}</p>
                        </div>
                      
                    </a>  
                </div>

            @endforeach
            </div>
            
        </div>
    </div>

@endsection