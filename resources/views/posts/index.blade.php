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
    <h1>Pagine Index</h1>

    <div class="d-flex flex-wrap justify-content-center">

      @foreach ($posts as $post)
      <div class="card" style="width: 18rem;">
        <img class="card-img-top" src="{{ $post->image }}" alt="{{ $post->title }}">
        <div class="card-body">
          <h5 class="card-title">{{ $post->title }}</h5>
          <p class="card-text">{{ substr($post->content, 0, 100) }}</p>
          <a href="{{ route('posts.show', $post->slug)  }}" class="btn btn-lg btn-outline-primary">Vai al post</a>
        </div>
      </div>
      @endforeach
    </div>



  </body>
</html>
