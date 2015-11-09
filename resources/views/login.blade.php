<!DOCTYPE html>
<html>
<head>
    <title>Laravel</title>

    <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">

    <style>
        html, body {
            height: 100%;
        }

        body {
            margin: 0;
            padding: 0;
            width: 100%;
            display: table;
            font-weight: 100;
            font-family: 'Lato';
        }

        .container {
            text-align: center;
            display: table-cell;
            vertical-align: middle;
        }

        .content {
            text-align: center;
            display: inline-block;
        }

        .title {
            font-size: 96px;
        }
    </style>
</head>
<body>
<div class="container">
    <div class="content">
        <div class="title">Login</div>
<<<<<<< HEAD

        <form method="post" action="{{ route('auth.postLogin')}}">
            <!-- //{!! csrf_token() !!} -->
=======
        <form method="post" action="{{route('auth.postLogin')}}">
            {!! csrf_token() !!}
>>>>>>> 45934c70ccf0fc2868000427acc4c62f5f307a4e
            <div class="form-group">
                <label for="email">Email address:</label>
                <input type="email" class="form-control" id="email" name="email">
            </div>
            <div class="form-group">
                <label for="password">Password:</label>
<<<<<<< HEAD
                <input type="password" class="form-control" id="email" name="password">
=======
                <input type="password" class="form-control" id="password" name="password">
>>>>>>> 45934c70ccf0fc2868000427acc4c62f5f307a4e
            </div>
            <div class="checkbox">
                <label><input type="checkbox"> Remember me</label>
            </div>
<<<<<<< HEAD
            <button type="submit" class="btn btn-default">Submit</button>
            <button type="reset" class="btn btn-default">Reset</button>
=======
            <button type="submit" class="btn btn-default">Login</button>
            <button type="reset" class="btn btn-default">Login</button>
>>>>>>> 45934c70ccf0fc2868000427acc4c62f5f307a4e
        </form>
    </div>
</div>
</body>
<<<<<<< HEAD
</html>
=======
</html>
>>>>>>> 45934c70ccf0fc2868000427acc4c62f5f307a4e
