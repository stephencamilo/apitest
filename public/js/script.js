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