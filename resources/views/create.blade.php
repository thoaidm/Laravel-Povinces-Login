<form method="post" action="{{route('store')}}">
    @csrf
    name: <input type="text" name="name">
    created_at: <input hidden type="text" name="created_at">
    updated_at: <input hidden type="text" name="updated_at">
    deleted_at: <input hidden type="text" name="deleted_at">
    <button type="submit">Save</button>
</form>
