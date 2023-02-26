@extends('layouts\layout')

@section('content')
    <div class="blue-bar">
        <div class="container w-55 m-auto h-100">
            <div class="row">
                <div class="col-12">
                    <img class="detail-img" src="{{$comic_detail['thumb']}}">
                </div>
            </div>
        </div>
    </div>
    <div class="container w-55 m-auto h-100">
        <div class="row">
            <div class="col-8 my-5">
                <h2>{{$comic_detail['title']}}</h2>
                <div class="container">
                    <div class="row">
                        <div class="border-bottom col-8 bg-green text-white d-flex justify-content-between border-secondary">
                            <div>U.S. Price: {{$comic_detail['price']}}</div>
                            <div>AVIABLE</div>
                        </div>
                        <div class="border-bottom border-left col-4 bg-green border-secondary text-white text-center">
                            Check Aviability <i class="fa-solid fa-caret-down"></i>
                        </div>
                    </div>
                </div>
                <p class="py-3">
                    {{$comic_detail['description']}}
                </p>
            </div>
            <div class="col-4 my-5">
                <h6>ADVERTISEMENT</h6>
                <img src="../resources/img/adv.jpg" alt="">
            </div>
        </div>
        <div class="row pb-5">
            <div class="col-6">
                <table class="table">
                    <thead>
                      <tr>
                        <th scope="col"><h4>Talent</h4></th>
                        <th scope="col"></th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <th scope="row">Art by:</th>
                        <td class="sky-blue">{{implode(', ', $comic_detail['artists'])}}</td>
                      </tr>
                      <tr>
                        <th scope="row">Written by:</th>
                        <td class="sky-blue">{{implode(', ', $comic_detail['writers'])}}</td>
                      </tr>
                    </tbody>
                  </table>
            </div>
            <div class="col-6">
                <table class="table">
                    <thead>
                      <tr>
                        <th scope="col"><h4>Specs</h4></th>
                        <th scope="col"></th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <th scope="row">Series:</th>
                        <td class="sky-blue">{{$comic_detail['series']}}</td>
                      </tr>
                      <tr>
                        <th scope="row">U.S. Price:</th>
                        <td>{{$comic_detail['price']}}</td>
                      </tr>
                      <tr>
                        <th scope="row">On Sale Date:</th>
                        <td>{{$comic_detail['sale_date']}}</td>
                      </tr>
                    </tbody>
                  </table>
            </div>
        </div>
    </div>
    <div class="row mt-5 margin border-top border-gray">
        <div class="w-55 m-auto d-flex">
            <div class="col-3 border border-gray">
                <span class="text-muted">DIGITAL COMICS</span>
                <img src="" alt="">
            </div>
            <div class="col-3 border border-gray">
                <span class="text-muted">SHOP DC</span>
                <img src="" alt="">
            </div>
            <div class="col-3 border border-gray">
                <span class="text-muted">COMIC SHPO DC</span>
                <img src="" alt="">
            </div>
            <div class="col-3 border border-gray">
                <span class="text-muted">SUBSCRIPTION</span>
                <img src="" alt="">
            </div>
        </div>
    </div>
@endsection