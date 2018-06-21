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
            <td>{{ $user -> created_at }}</td>

        </tr>
    @endforeach
    </tbody>
</table>
</div>
</body>
</html>