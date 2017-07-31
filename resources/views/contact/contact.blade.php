@extends('layouts.app')

@section('content')
    <h1>Contact Page</h1>

    @if(count($people))

        <ul>
            @foreach($people as $person)
                <li>{{ $person }}</li>
            @endforeach
        </ul>

    @endif

@endsection('content')

@section('footer')
    <script>
        //        alert('test');
    </script>
@endsection('footer')