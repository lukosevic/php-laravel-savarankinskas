@extends('main')
@section('content')

@include('_partials/top')
<div class="container">
<div class="masters">
    @foreach ($masters as $master)
    <div class="all row">
        <div class="info col-6">
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
                @if(isset($master->service->name))
                <p>{{$master->service->name}}</p>
                @else
                <p>Niekur nedirba</p>
                @endif
            </div>
            <div class="city">
                <p>{{$master->city}}</p>
            </div>
            
        </div>
        <div class="rating col-6">
            <div class="like">
                <div class="Patinka">
                    <form action="/rate/{{$master->id}}" method="get" enctype="multipart/form-data">
                        <p>Patinka: <span class="rating">{{$master->rating}}</span></p>
                    </div>
                    <div class="love">
                        <button type="submit"><i class="fa-solid fa-heart"></i></button>
                    </form>
                    </div>
            </div>
            <div class="edit">
                <div class="delete">
                <a class="edit" href="/master/edit/{{$master->id}}"><i class="fa-solid fa-pen-to-square"></i></a>
                <a class="delete" href="/master/delete/{{$master->id}}"><i class="fa-solid fa-trash-can"></i></a>
                </div>
            </div>
        </div>
    </div>
    @endforeach
</div>
</div>

@endsection