<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    {{Form::open(array('url'=>'login'))}}
    <h1>Login</h1>
    <p>
      {{$errors->first('email')}}
      {{$errors->first('password')}}
    </p>
    <p>
      {{Form::label('email',"Email")}}
      {{Form::text('email',Input::old('email'),array('placeholder'=>'seu@email.com') )}}
    </p>
    <p>
      {{Form::label('email',"senha")}}
      {{Form::password('password')}}
    </p>
    <p>
      {{Form::submit('Acessar')}}
    </p>
    {{Form::close()}}

    
  </body>
</html>
