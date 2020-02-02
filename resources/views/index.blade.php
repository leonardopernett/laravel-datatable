<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Datatable</title>
       <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.css">
       <link rel="stylesheet" href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css">
    </head>
    <body>
        <div class="container">
          <div class="row">
            <div class="col-md-8  justify-content-center">
             <div class="card">
               <div class="card-header">
                 <h4 class="text-center">DataTables</h4>
               </div>
               <table id="example" class="table table-striped table-bordered" style="width:100%">
        <thead>
            <tr>
                <th>Id</th>
                <th>Name</th>
                <th>Email</th>
                <th>&nbsp;</th>
               
            </tr>
        </thead>
        <tbody>
       
        </tbody>
     
    </table>
               </div>
             </div>
            </div>
          </div>
        </div>

     
        <script src="https://code.jquery.com/jquery-3.3.1.js"></script> 
        <script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script> 
        <script src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js"></script> 
  
    <script>
        $(document).ready(function() {
            $('#example').DataTable({
              serverSide: true,
                ajax: {
                    url: "api/users",
                    
                },
                columns : [
                      {data: 'id'},
                      {data:'name'},
                      {data:'email'},
                      {data:'btn'}
                    ],

                    language: {
                      search: 'buscar',

                    paginate: {
                        next:'siguietes',
                        previous:'anterior'
                  },

                  info: '_TOTAL_ registros'
                      
                  },

                  
                  select: true

            });
          });
    </script>

    </body>
</html>
