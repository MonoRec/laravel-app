test

@if(count($posts) > 1)
@foreach($posts as $post)
    {{ $post->title }}<br>
    @endforeach

    @else
    {{ $posts }}
    @endif

