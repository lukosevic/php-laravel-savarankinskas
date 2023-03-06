@extends('main')
@section('content')


<div class="masters">
    @foreach ($masters as $master)
    <div class="row">
        <div class="card col-6">
            <div class="img">
            <img src="{{asset('/storage/'.$master->photo)}}">
            </div>
            <div class="name">
                <p>{{$master->name}}</p>
            </div>
            <div class="lastName">
                <p>{{$master->lastName}}</p>
            </div>
            <div class="service">
                <p>{{$master->service->name}}</p>
            </div>
            <div class="city">
                <p>{{$master->city}}</p>
            </div>
            <div class="delete">
                <a href="/master/delete/{{$master->id}}">naikinti</a>
            </div>
        </div>
        <div class="rating col-6">
        </div>
    </div>
    @endforeach
</div>

@endsection