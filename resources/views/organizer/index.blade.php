<!DOCTYPE html>
<html>
<head>
<style>
#customers {
  font-family: Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

#customers td, #customers th {
  border: 1px solid #ddd;
  padding: 8px;
}

#customers tr:nth-child(even){background-color: #f2f2f2;}

#customers tr:hover {background-color: #ddd;}

#customers th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #04AA6D;
  color: white;
}
</style>
</head>
<body>
<a href="{{route('organizer.create')}}">Create New User</a>
<h1>A Fancy Table</h1>

<table id="customers">
  <tr>
    <th>Company</th>
    <th>Contact</th>
    <th>Action</th>
  </tr>
  @forelse ($organizers as $organizer )
    <tr>
        <td>{{$organizer->name}}</td>
        <td>{{$organizer->lastname}}</td>
        <td><a href="{{ route('organizer.edit', $organizer->id) }}">Edit</a>
        <form action="{{ route('organizer.destroy', $organizer->id) }}" method="POST">
            {{ method_field('DELETE') }}
            @csrf       
            <button class="btn btn-danger">Delete Post</button>
        </form>
        </td>
    </tr>
  @empty
      <h1>Empty List</h1>
  @endforelse
</table>

</body>
</html>





