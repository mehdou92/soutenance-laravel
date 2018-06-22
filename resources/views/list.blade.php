<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Index Page</title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
</head>
<body>
<div class="container">
    <br/>
    @if (\Session::has('success'))
        <div class="alert alert-success">
            <p>{{ \Session::get('success') }}</p>
        </div><br/>
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
<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            <h3 class="text-center">
                h3. Lorem ipsum dolor sit amet.
            </h3>
            <form role="form" method="post">
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="search-city">
                                Search a city
                            </label>
                            <input type="email" class="form-control" id="search-city" name="city"/>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <div class="dropdown">
                            <button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenuButton"
                                    data-toggle="dropdown">
                                Action
                            </button>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                <a class="dropdown-item disabled" href="#">Action</a> <a class="dropdown-item" href="#">Another
                                    action</a> <a class="dropdown-item" href="#">Something else here</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="dropdown">

                            <button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenuButton"
                                    data-toggle="dropdown">
                                Action
                            </button>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                <a class="dropdown-item disabled" href="#">Action</a> <a class="dropdown-item" href="#">Another
                                    action</a> <a class="dropdown-item" href="#">Something else here</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="dropdown">

                            <button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenuButton"
                                    data-toggle="dropdown">
                                Action
                            </button>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                <a class="dropdown-item disabled" href="#">Action</a> <a class="dropdown-item" href="#">Another
                                    action</a> <a class="dropdown-item" href="#">Something else here</a>
                            </div>
                        </div>
                    </div>
                    <button type="button" class="btn btn-lg btn-success">
                        Button
                    </button>
                </div>
            </form>
        </div>
        <div class="row">
            <div class="col-md-4">
                <h3>
                    h3. Lorem ipsum dolor sit amet.
                </h3>
                <p>
                    Lorem ipsum dolor sit amet, <strong>consectetur adipiscing elit</strong>. Aliquam eget sapien
                    sapien. Curabitur in metus urna. In hac habitasse platea dictumst. Phasellus eu sem sapien, sed
                    vestibulum velit. Nam purus nibh, lacinia non faucibus et, pharetra in dolor. Sed iaculis
                    posuere diam ut cursus. <em>Morbi commodo sodales nisi id sodales. Proin consectetur, nisi id
                        commodo imperdiet, metus nunc consequat lectus, id bibendum diam velit et dui.</em> Proin
                    massa magna, vulputate nec bibendum nec, posuere nec lacus.
                    <small>Aliquam mi erat, aliquam vel luctus eu, pharetra quis elit. Nulla euismod ultrices massa,
                        et feugiat ipsum consequat eu.
                    </small>
                </p>
                <div class="row">
                    <div class="col-md-4">
                        <h3>
                            h3. Lorem ipsum dolor sit amet.
                        </h3>
                        <p>
                            Lorem ipsum dolor sit amet, <strong>consectetur adipiscing elit</strong>. Aliquam eget
                            sapien sapien. Curabitur in metus urna. In hac habitasse platea dictumst. Phasellus eu
                            sem sapien, sed vestibulum velit. Nam purus nibh, lacinia non faucibus et, pharetra in
                            dolor. Sed iaculis posuere diam ut cursus. <em>Morbi commodo sodales nisi id sodales.
                                Proin consectetur, nisi id commodo imperdiet, metus nunc consequat lectus, id
                                bibendum diam velit et dui.</em> Proin massa magna, vulputate nec bibendum nec,
                            posuere nec lacus.
                            <small>Aliquam mi erat, aliquam vel luctus eu, pharetra quis elit. Nulla euismod
                                ultrices massa, et feugiat ipsum consequat eu.
                            </small>
                        </p>
                    </div>
                    <div class="col-md-4">
                        <h3>
                            h3. Lorem ipsum dolor sit amet.
                        </h3>
                        <p>
                            Lorem ipsum dolor sit amet, <strong>consectetur adipiscing elit</strong>. Aliquam eget
                            sapien sapien. Curabitur in metus urna. In hac habitasse platea dictumst. Phasellus eu
                            sem sapien, sed vestibulum velit. Nam purus nibh, lacinia non faucibus et, pharetra in
                            dolor. Sed iaculis posuere diam ut cursus. <em>Morbi commodo sodales nisi id sodales.
                                Proin consectetur, nisi id commodo imperdiet, metus nunc consequat lectus, id
                                bibendum diam velit et dui.</em> Proin massa magna, vulputate nec bibendum nec,
                            posuere nec lacus.
                            <small>Aliquam mi erat, aliquam vel luctus eu, pharetra quis elit. Nulla euismod
                                ultrices massa, et feugiat ipsum consequat eu.
                            </small>
                        </p>
                    </div>
                    <div class="col-md-4">
                        <h3>
                            h3. Lorem ipsum dolor sit amet.
                        </h3>
                        <p>
                            Lorem ipsum dolor sit amet, <strong>consectetur adipiscing elit</strong>. Aliquam eget
                            sapien sapien. Curabitur in metus urna. In hac habitasse platea dictumst. Phasellus eu
                            sem sapien, sed vestibulum velit. Nam purus nibh, lacinia non faucibus et, pharetra in
                            dolor. Sed iaculis posuere diam ut cursus. <em>Morbi commodo sodales nisi id sodales.
                                Proin consectetur, nisi id commodo imperdiet, metus nunc consequat lectus, id
                                bibendum diam velit et dui.</em> Proin massa magna, vulputate nec bibendum nec,
                            posuere nec lacus.
                            <small>Aliquam mi erat, aliquam vel luctus eu, pharetra quis elit. Nulla euismod
                                ultrices massa, et feugiat ipsum consequat eu.
                            </small>
                        </p>
                    </div>
                </div>
                <button type="button" class="btn btn-success btn-lg btn-block">
                    Button
                </button>
            </div>
            <div class="col-md-4">
            </div>
            <div class="col-md-4">
            </div>
        </div>
    </div>
</div>
</div>
</body>
</html>