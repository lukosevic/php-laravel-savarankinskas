<div class="container">
    <div class="d-flex flex-row top">
        <div class="search">
            <input type="text" class="search" name="search" placeholder="Paieška">
        </div>
        <div class="specialization">
            <select name="specialization" id="" class="specialization">
                <option selected disabled>Specializacija</option>
                
            </select>
        </div>
        <div class="service">
            <select name="service" id="">
                <option selected disabled>Servisas</option>
                {{--@foreach ($services as $service)
                <option value="{{$service->name}}">{{$service->name}}</option>
                @endforeach--}}
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
            </select>
        </div>
        <div class="rating">
            <select name="rating" id="">
                <option selected disabled>Reitingas</option>
            </select>
        </div>
    </div>
</div>
<div class="container">
    <div class="d-flex row">
        <div class="add-service">
            <a href="/add-service">Pridėti servisą</a>
        </div>
        <div class="add-master">
            <a href="/add-master">Pridėti meistrą</a>
        </div>
    </div>
</div>