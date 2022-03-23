<form action="{{ route('comics.destroy', $comic->id) }}" method="post" class="delete-form">
    @csrf
    @method('delete')

    <input type="submit" value="Cancella" class="btn btn-sm btn-danger shadow-sm">
</form>
