@include('partials.nav')
<link rel="stylesheet" type="text/css" href="{{ asset('estilos/Estilologin.css') }}">

@if ($errors->any())
<ul>
        @foreach ($errors->all() as $error )

        <li>{{$error}}</li>
    
@endforeach
<</ul>
@endif

<form method="POST" action="">
    @csrf
    <label for="email">Email:</label>
    <input  name="email" type="email" required autofocus placeholder="Email..."  value="{{old('email')}}">
    <label for="password">Contraseña:</label>
    <input  name="password" type="password" required  placeholder="Contrasena..." >
    <label>
    <input type="checkbox" name="remember">
    Recordar sesion
    </label>
    <button type="submit">Ingresar</button>
</form>
<a href="Create">Registrarse</a>

