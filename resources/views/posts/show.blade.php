<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>last-repo</title>
    {{-- css --}}
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">

  </head>

  <body>
    <h1>Dettaglio post</h1>

        <div class="container">
          <h1>{{ $post->title }}</h1>
          <h2>{{ $post->subtitle }}</h2>
          <img src="{{ $post->image }}" alt="{{ $post->title }}">
          <h3>{{ $post->author }}</h3>
          <p>{{ $post->content }}</p>
        </div>

        <a href="{{ route('posts.index') }}" class="btn btn-lg btn-outline-primary">Vai al post</a> 

  </body>
</html>
