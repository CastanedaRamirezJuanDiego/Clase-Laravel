<link rel="stylesheet" type="text/css" href="{{ asset('estilos/partials.css') }}">
<nav>
    <a href="/">Inicio</a>
    @auth
      <a href="/Home">Home</a>
      <form action="/logout" method="POST">
        @csrf
        <a href="#" onclick="this.closest('form').submit()"> Logout</a>
      </form>
    @else
      <a href="/login">Login</a>
    @endauth
  </nav>
  
  @if(session('status'))
    <br>
    {{session('status')}}
  @endif


