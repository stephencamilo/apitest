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

    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs4/dt-1.10.20/af-2.3.4/r-2.2.3/sp-1.0.1/sl-1.3.1/datatables.min.css" />
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
    <script type="text/javascript" src="https://cdn.datatables.net/v/bs4/dt-1.10.20/af-2.3.4/r-2.2.3/sp-1.0.1/sl-1.3.1/datatables.min.js"></script>

    <script>
      (function($) {
        $(document).ready(function() {
          $('#table_id').DataTable({
            "ajax": "/api/users",
            "responsive": true,
            "columns": [{
                "data": "name"
              },
              {
                "data": "email"
              },
              {
                "data": "logins"
              },
              {
                "data": "active",
                "render": function(data, type, row) {
                  //console.log(data);
                  return (data == 1) ? 'Ativo' : 'Inativo';
                }
              }
            ],
            "lengthMenu": [
              [10, 20, 30, 50, 100],
              [10, 20, 30, 50, 100]
            ],
            //"dom": 'Pfrtip'
          });

        })
      })(jQuery);
    </script>
  </body>
</html>