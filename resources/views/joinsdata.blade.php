<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <table class="table">
            <thead>
                <tr>
                    <th>id</th>
                    <th>value</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                @foreach($twotables as $twotable)
                <tr>
                    <td>{{twotable.id}}</td>
                    <td>{{twotable.value}}</td>
                    <td></td>
                </tr>
            </tbody>
        </table>
    </div>
</body>
</html>