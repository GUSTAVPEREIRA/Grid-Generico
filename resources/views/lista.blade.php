<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
    <div class="container mt-4">
      <table class="table table-borderless" id="example" class="display" style="width:100%">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">Name</th>
                    <th scope="col">Position</th>
                    <th scope="col">Office</th>
                    <th scope="col">Age</th>
                    <th scope="col">Start date</th>
                    <th scope="col">Salary</th>
                </tr>
            </thead>
            <tbody>
              <?php foreach ($items as $item => $value): ?>


              <tr>
                  <td scope="row">{{$value['Name']}}</td>
                  <td>{{$value['Position']}}</td>
                  <td>{{$value['Office']}}</td>
                  <td>{{$value['Age']}}</td>
                  <td>{{$value['Start_date']}}</td>
                  <td>{{$value['Salary']}}</td>
              </tr>
            <?php endforeach; ?>
            </tbody>
        </table>
    </div>
    <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
    <script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
    <script type="text/javascript">
    $(document).ready(function() {
      $('#example').DataTable( {
        "language": {
            "lengthMenu": "Exibir _MENU_ resultados por página",
            "zeroRecords": "Sem resultados - desculpe",
            "info": "Mostrando página _PAGE_ of _PAGES_",
            "infoEmpty": "Sem resultados disponíveis",
            "infoFiltered": "(Filtrado por _MAX_ resultados)",
            "decimal":        "",
            "emptyTable":     "Sem dados disponíveis na tabela",
            "infoPostFix":    "",
            "thousands":      ",",
            "loadingRecords": "Carregando...",
            "processing":     "Processando...",
            "search":         "Buscar:",
            "paginate": {
                "first":      "Primeiro",
                "last":       "Último",
                "next":       "Próximo",
                "previous":   "Anterior"
            },
            "aria": {
                "sortAscending":  ": activate to sort column ascending",
                "sortDescending": ": activate to sort column descending"
            }
        }
    } );

    } );
    </script>

<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>
