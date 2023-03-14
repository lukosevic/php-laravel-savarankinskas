@extends('main')
@section('content')

    <div class="results">
        <ul>
            @if(isset($results))
            @foreach ($results as $result)
            <li>{{$result->name}}
            </li>
            @endforeach
        </ul>
        @endif
    </div>
</form>

@endsection