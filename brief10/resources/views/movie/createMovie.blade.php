

    <form action="{{ url('insert') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <input type="author" name="author">
        <input type="title" name="title">
        <input type="file" name="file">
        <input type="description" name="description">
        <input type="submit" name="submit" >
    </form>

