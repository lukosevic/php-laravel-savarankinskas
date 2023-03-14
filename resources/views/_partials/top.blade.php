<div class="d-flex row controls">
    <div class="add-service">
        <a href="/add-service">Pridėti servisą</a>
    </div>
    <div class="add-master">
        <a href="/add-master">Pridėti meistrą</a>
    </div>
    <div class="show-service">
        <a href="/show-service">Redaguoti servisus</a>
    </div>
</div>
<div class="d-flex flex-row top">
    <div class="search">
        <form action="/searchResults" method="post">
        <input type="text" class="search" name="search" placeholder="Paieška">
    </div>
    <div class="specialization">
        <select name="specialization" id="" class="specialization">
            <option selected disabled>Specializacija</option>
            @foreach ($masters as $master)
            <option value="{{$master->specialization}}">{{$master->specialization}}</option>
            @endforeach
        </select>
    </div>
    <div class="service">
        <select name="service" id="">
            <option selected disabled>Servisas</option>
            @foreach ($services as $service)
            <option value="{{$service->id}}">{{$service->name}}</option>
            @endforeach
        </select>
    </div>
    <div class="city">
        <select name="city" id="">
            <option selected disabled>Miestas</option>
            @foreach ($masters as $master)
            <option value="{{$master->city}}">{{$master->city}}</option>
            @endforeach
        </select>
    </div>
    <div class="gender">
        <select name="gender" id="">
            <option selected disabled>Lytis</option>
            @foreach ($masters as $master)
            <option value="{{$master->gender}}">{{$master->gender}}</option>
            @endforeach
        </select>
    </div>
    <div class="rating">
        <input type="range" min="0">
        </select>
    </div>
    <div class="go">
        <button type="submit"><i class="fa-solid fa-magnifying-glass"></i></button>
    </div>
</form>
</div>
</div>
<div class="container">
