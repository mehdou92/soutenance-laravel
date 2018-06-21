<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Index Page</title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
  </head>
  <body>
    <div class="container">
    <br />
@if (\Session::has('success'))
    <div class="alert alert-success">
        <p>{{ \Session::get('success') }}</p>
    </div><br />
@endif
<table class="table table-striped">
    <thead>
    <tr>
        <th>ID</th>
        <th>first name</th>
        <th>last name</th>
        <th>username</th>
        <th>Email</th>
        <th>Location</th>
        <th>Hobbies 1</th>
        <th>Hobbies 2</th>
        <th>Hobbies 3</th>
        <th>Created at</th>
    </tr>
    </thead>
    <tbody>

    @foreach($users as $user)
        <tr>

            <td>{{ $user->id }}</td>
            <td>{{ $user -> first_name }}</td>
            <td>{{ $user -> last_name }}</td>
            <td>{{ $user -> username }}</td>
            <td>{{ $user -> email }}</td>
            <td>{{ $user -> location }}</td>
            <td>{{ $user -> tag1 }}</td>
            <td>{{ $user -> tag2 }}</td>
            <td>{{ $user -> tag3 }}</td>
            <td>{{ $user -> created_at }}</td>

        </tr>
    @endforeach
    </tbody>
</table>
</div>
</body>
</html>