@foreach ($posts as $post )
<a href="/posts/{{$post->id}}">
    {{$post->title}}
</a>
@endforeach