<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" 
    integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>
<body>
    <div class="container">
<table class="table table-bordered">
    <thead>
        <tr>
            <th>id</th>
            <th>fname</th>
            <th>lname</th>
            <th>company_id</th>
        </tr>
    </thead>
    <tbody>
       @foreach($selectedemp as $emp)
        <tr>
           
            <td>{{$emp->id}}</td>
            <td>{{$emp->fname}}</td>
            <td>{{$emp->lname}}</td>
            <td>{{$emp->company_id}}</td>

        </tr>
        @endforeach
       
    </tbody>
   </table>
   </div>
</body>
</html>