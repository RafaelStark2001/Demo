<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="/crear-contacto" method="POST">
        @csrf
        <ul>
          <li>
            <label for="name">Nombre:</label>
            <input type="text" id="name" name="user_name" />
          </li>
          <li>
            <label for="mail">Correo electrónico:</label>
            <input type="email" id="mail" name="user_mail" />
          </li>
          <li>
            <label for="msg">Mensaje:</label>
            <textarea id="msg" name="user_message"></textarea>
          </li>
          <button type="submit">
            Enviar
          </button>
        </ul>
      </form>
</body>
</html>
