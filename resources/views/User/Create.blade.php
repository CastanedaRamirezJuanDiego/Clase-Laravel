@include('partials.nav')
<form action="/store" method="POST">
    @csrf
    <div>
      <label for="name">Name:</label>
      <input type="text" name="name" id="name" required>
    </div>
    <div>
      <label for="email">Email:</label>
      <input type="email" name="email" id="email" required>
    </div>
    <div>
      <label for="App">App:</label>
      <input type="Text" name="App" id="App" required>
    </div>
    <div>
        <label for="fn">fn:</label>
        <input type="text" name="fn" id="fn" required>
      </div>
      <div>
        <label for="Genero">Genero:</label>
        <input type="text" name="Genero" id="Genero" required>
      </div>
      <div>
        <label for="Datos">Datos:</label>
        <input type="Text" name="Datos" id="Datos" required>
      </div>
      <div>
        <label for="Pasatiempo">Pasatiempo:</label>
        <input type="Text" name="Pasatiempo" id="Pasatiempo" required>
      </div>
      <div>
        <label for="password">Password:</label>
        <input type="password" name="password" id="password" required>
      </div>
    <div>
      <button type="submit">Registrarse</button>
    </div>
  </form>