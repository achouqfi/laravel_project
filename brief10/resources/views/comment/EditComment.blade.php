

    <form action="{{ url('movie/'.$movie->id) }}" method="POST">
        <input type="hidden" name="_method" value="PUT">
        @csrf
        <input type="author" name="author" value="{{ $movie->author }}" >
        <input type="title" name="title" value="{{ $movie->title }}" >
        <input type="file" name="photo" value="{{ $movie->photo }}" >
        <input type="description" name="description" value="{{ $movie->description }}" >
        <input type="submit" name="submit" >
    </form>

