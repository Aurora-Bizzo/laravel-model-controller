@extends('layouts\layout')

@section('content')
    <div>
        <div class="comics">
            <div class="container-xl">
                <div class="title">
                    <h2>CURRENT SERIES</h2>
                </div>
                <div class="content">
                    @foreach($comics as $key => $comic)
                        <a href="/comics/{{$key}}">
                            <div class="comic">
                                <div class="thumb">
                                    <img class="thumb-img" src="{{$comic['thumb']}}">
                                </div>
                                <div class="series text-white">
                                    {{$comic['title']}}
                                </div>
                            </div>
                        </a>
                    @endforeach
                    <div class="load-btn">
                        <button><strong>LOAD MORE</strong></button>
                    </div>
                </div>
            </div>
        </div>
        <div class="top-footer">
            <div class="row">
                <div class="col-12">
                    <div class="container-xl">
                        <ul>
                            
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection