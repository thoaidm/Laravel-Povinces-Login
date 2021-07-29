<a href="create">add</a>
<table border="1">
    <thead>
    <tr>
        <td>id</td>
        <td>name</td>
        <td>created</td>
        <td>updated</td>
        <td>deleted</td>
        <td>func</td>
    </tr>
    </thead>
    <tbody>
    @foreach($data as $prod)
        <tr>
            <td>{{$prod->id}}</td>
            <td>{{$prod->name}}</td>
            <td>{{$prod->created_at}}</td>
            <td>{{$prod->updated_at}}</td>
            <td>{{$prod->deleted_at}}</td>
            <td>
                <a href="show">Edit</a>
                Delete
            </td>
        </tr>
    @endforeach
    </tbody>
</table>

