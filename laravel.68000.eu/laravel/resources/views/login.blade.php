<!DOCTYPE html>
<html>
    <head>
        <title>Mega Driver Custom</title>
         {!! Html::style('css/style.css') !!}
        <link href="//fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script> 
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

        <!-- Optional theme -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">

        <!-- Latest compiled and minified JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>

        
    </head>
    <body>
        <div class="container">

        <div class="logo">
            <a href="md-soft"><img src="../resources/assets/img/logo.png"/></a>
        </div>

            <div class="content">
              
              {!! Form::open(array('url' => 'login')) !!}
              {!! Form::label('username', 'Username:') !!}
              {!! Form::text('username', '') !!}

              {!! Form::label('password', 'Passwort:') !!}
              {!! Form::password('password') !!}

              {!! Form::submit('Login') !!}
              {!! Form::close() !!}
                
            </div>

            <div class="footer">
                © 2016 aiko68k | <a href="devlog">devlog</a>
            </div>
        </div>
    </body>
</html>