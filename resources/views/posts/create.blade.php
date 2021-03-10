<div class="container">
    {{-- @if ($errors->any())
      <div class="alert alert-danger">
        <ul>
          @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
          @endforeach
        </ul>
      </div>
    @endif --}}
    <h1>Inserisci una nuovo post</h1>
    <form action="{{ route('posts.store') }}" method="POST">
      @csrf
      @method('POST')
      <div class="form-group">
        <label for="title">Titolo</label>
        <input type="title" class="form-control" id="title" name="title" placeholder="Titolo" value="{{ old("title") }}">
      </div>
      <div class="form-group">
        <label for="subtitle">Sottotitolo</label>
        <input type="subtitle" class="form-control" id="subtitle" name="subtitle" placeholder="Sottotitolo" value="{{ old("subtitle") }}">
      </div>
      <div class="form-group">
        <label for="author">Autore</label>
        <input type="author" class="form-control" id="author" name="author" placeholder="Autore" value="{{ old("author") }}">
      </div>
      <div class="form-group">
        <label for="image">Url immagine</label>
        <textarea class="form-control" id="image" name="image" rows="3" placeholder="URL">{{ old("image") }}</textarea>
      </div>
      <div class="form-group">
        <label for="content">Testo</label>
        <textarea class="form-control" id="content" name="content" rows="3" placeholder="Descrizione">{{ old("content") }}</textarea>
      </div>
      <button type="submit" class="btn btn-primary">Invia</button>
    </form>
  </div>
