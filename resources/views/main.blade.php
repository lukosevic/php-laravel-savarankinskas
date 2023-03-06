<!DOCTYPE html>
<html lang="en">
@include('_partials/head')
<body>
    <div class="container">
        @include('_partials/top')
    </div>
    <div class="container">  
        @yield('content')
    </div>
    <script src="{{asset('js/bootstrap.bundle.min.js')}}"></script>
</body>
</html>