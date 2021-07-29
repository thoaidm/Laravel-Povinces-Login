<form method="post" action="{{route('update')}}">
    @csrf
    @method('PUT')
    id: <input type="text" name="id" value="{{$product->id}}">
    name: <input type="text" name="name" value="{{$product->name}}">
    created_at: <input hidden type="text" name="created_at" value="{{$product->created_at}}">
    updated_at: <input hidden type="text" name="updated_at" value="{{$product->updated_at}}">
    deleted_at: <input hidden type="text" name="deleted_at" value="{{$product->deleted_at}}">

    <button type="submit">Update</button>
</form>
