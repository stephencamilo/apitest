<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
  <head>
    <title>User Table</title>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <!-- Fonts -->
  </head>

  <body>
    <div class="container">

      <h1>User Table</h1>

      <table id="table_id" class="display">
        <thead>
          <tr>
            <th>Nome</th>
            <th>E-mail</th>
            <th>Nº de logins</th>
            <th>Situação</th>
          </tr>
        </thead>
        <tfoot>
          <tr>
            <th>Nome</th>
            <th>E-mail</th>
            <th>Nº de logins</th>
            <th>Situação</th>
          </tr>
        </tfoot>
      </table>
    </div>

    <script src="{{ asset('js/app.js') }}"></script>
    <script src="{{ asset('js/script.js') }}"></script>
  </body>
</html>