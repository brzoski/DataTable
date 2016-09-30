<!DOCTYPE html>
<html>
<head>
    <title>Laravel</title>

    <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">
<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
<!-- <link rel="stylesheet" type="text/css" href="//cdn.datatables.net/1.10.12/css/jquery.dataTables.min.css"> -->
<link rel="stylesheet" href="https://cdn.datatables.net/1.10.12/css/dataTables.bootstrap.min.css">


    
</head>
<body>
    <div class="container">
            <h1>Postagens:</h1>
            <table class="table table-striped table-bordered" width="100%" cellspacing="0" id="myTable">
                <thead>
                <tr>
                    <th>Id</th>
                    <th>Titulo</th>
                </tr>
                </thead>
                <!--<tbody>
                     foreach($posts as $post)
                        <tr>
                            <td> $post->id </td>
                            <td> $post->title </td>
                        </tr>
                    endforeach 
                </tbody>-->
            </table>

    </div>



<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.3/jquery.min.js"></script>
<script src="//cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>
    <script>
    $(document).ready(function(){
    $('#myTable').DataTable({
        "processing": true,
        "serverSide": true,
        "ajax": "api/postagens",
        "columns": [
            {data: 'id'},
            {data: 'title'},
        ]
    });

});
    </script>
</body>
</html>
