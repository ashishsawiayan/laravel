@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-lg-3 p-5">
            <img src="https://www.carlogos.org/logo/Volkswagen-logo.png" class="rounded-circle" alt="">
        </div>
        <div class="col-lg-9 pt-5">
            <div class="d-flex justify-content-between align-items-baseline">
                <h2>{{$user->username}}</h2>
                <a href="#">Add a post</a>
            </div>
            <div class="d-flex">
                <div class="pr-5"><strong>153</strong> Posts</div>
                <div class="pr-5"><strong>23k</strong> followers</div>
                <div class="pr-5"><strong>212</strong> following</div>
            </div>
            <div class="pt-4 font-weight-bold">
                {{$user->profile->title}}
            </div>

            <div >
                {{$user->profile->description}}
            </div>

            <div>
                <a href=www.test.com> {{$user->profile->url}}</a>
            </div>
        </div>
    </div>
    <div class="row pt-4">

    </div>

</div>
@endsection
