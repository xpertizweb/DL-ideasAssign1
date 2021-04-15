<!DOCTYPE html>
<html lang="en">
 
<head>
    <meta charset="utf-8"/>
    <title></title>
    <link rel="stylesheet" href="//cdn.datatables.net/1.10.12/css/jquery.dataTables.min.css" /> 
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.css" />
    
</head>

<body>

<div class="container">
<div class="row">
<div class="col-12">

<h2>Welcome to DL ideas!...</h2>
<h4>JSON User Data Table</h4> 
<br><br>
</div>
</div>
</div>
<div class="container">
<div class="row">
<div class="col-12">


<table class="table table-striped table-bordered" id="datatable">
    <thead>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>UserName</th>
            <th>Email ID</th>
            <th>Phone</th>
            <th>Website</th>

        </tr>
    </thead>
     
</table>
</div>
</div>
</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.0.0/jquery.js"></script>
<script src="https://cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>
    
<script>
$(document).ready(function() {
    $.ajax({
        url: 'https://jsonplaceholder.typicode.com/users',
        method: 'get',
        dataType: 'json',
        success: function(data){
            var datatable = $('#datatable')
                .DataTable({
                    data: data,
        'columns': [
                        { 'data': 'id' },                    
                        { 'data': 'name' },
                        { 'data': 'username' },
                        { 'data': 'email' },
                        { 'data': 'phone' },
                        { 'data': 'website' },
                       
                    ]
                });
        }
    });
});

</script>



</body>
</html>