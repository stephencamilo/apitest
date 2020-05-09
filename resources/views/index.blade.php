<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>User Table</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs4/dt-1.10.20/af-2.3.4/r-2.2.3/sp-1.0.1/sl-1.3.1/datatables.min.css" />
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
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

    <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>





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
                                console.log(data);
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