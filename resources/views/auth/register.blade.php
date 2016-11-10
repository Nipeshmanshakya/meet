<html>
<head>
    <title>Meet</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</head>
<body>
<div class="container">
    <div class="row">
        <div>
            @foreach( $errors->all() as $error )
                <p class="text-danger">{{ $error }}</p>
            @endforeach
        </div>
        <form action="{{ url('register') }}" method="post">
            {!! csrf_field() !!}
            <h1>Register</h1>
            <div class="form-group">
                <label for="">First Name</label>
                <input type="text" class="form-control" name="first_name" value="{{ old('first_name') }}">
                <span class="text-danger">{{ $errors->first('first_name') }}</span>
            </div>
            <div class="form-group">
                <label for="">Last Name</label>
                <input type="text" class="form-control" name="last_name" value="{{ old('last_name') }}">
                <span class="text-danger">{{ $errors->first('last_name') }}</span>
            </div>
            <div class="form-group">
                <label for="">Email</label>
                <input type="text" class="form-control" name="email" value="{{ old('email') }}">
            </div>
            <div class="form-group">
                <label for="">Password</label>
                <input type="text" class="form-control" name="password">
            </div>
            <div class="form-group">
                <label for="">Confirm Password</label>
                <input type="text" class="form-control" name="password_confirmation">
            </div>
            <div class="form-group">
                <button class="btn btn-success">Register</button>
            </div>


        </form>
    </div>
</div>
</body>
</html>