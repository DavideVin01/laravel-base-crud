<form action="{{ route('comics.destroy', $comic->id) }}" method="post">
    @csrf
    @method('delete')

    <input type="submit" value="Cancella" class="btn btn-sm btn-danger shadow-sm">
</form>
