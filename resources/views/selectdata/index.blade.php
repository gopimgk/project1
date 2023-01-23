<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href=’https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/themes/ui-lightness/jquery-ui.css’
     rel=’stylesheet’>
     <link href=
'https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/themes/ui-lightness/jquery-ui.css'
          rel='stylesheet'>
      
    <script src=
"https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js" >
    </script>
      
    <script src=
"https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js" >
    </script>
</head>
<body>

    <select name="" id="">
    <option value="">select-country</option>
        @foreach($country as $countr)
        <li>{{$countr->country}}</li>
       
        
        <option value="">{{$countr->country}}</option>
        @endforeach
    </select>
    <select name="" id="">
    <option value="">selecet-department</option>
    @foreach($department as $depart)
        <li>{{$depart->value}}</li>
       
        
        <option value="">{{$depart->value}}</option>
        @endforeach
    </select>
    <select name="" id="">
    <option value="">selecet-emploee</option>
    @foreach($employee as $employee)
        <li>{{$employee->value}}</li>
       
        
        <option value="">{{$employee->value}}</option>
        @endforeach
    </select>
    Start-date <input type="text" name="sdate" id="start-date">
   End-date <input type="text" name="edate" id="end-date">
   <button class="btn" id="sub">submit</button>
   <table class="table">
    <thead>
        <tr>
            <th>id</th>
            <th>fname</th>
            <th>lname</th>
            <th>company_id</th>
        </tr>
    </thead>
    <tbody id="tb">
        
    </tbody>
   </table>

  
</body>
<script>
    $("#start-date").datepicker();
    $("#end-date").datepicker();
    $("#sub").click(function(){
       
        
    var startdate=$("#start-date").val();
    var enddate=$("#end-date").val();
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
   
    $.ajax({
        url:"{{ route('selectdata.store') }}",
        type:"POST",
        data:{startdate:startdate,enddate:enddate},
        dataType: 'JSON',
        success:function(datas){
            var tr+=
            for(let data of datas){
            var tr=`<tr>
                    <td>${data.id}</td>
                    <td>${data.fname}</id>
                    <td>${data.lname}</td>
                    <td>${data.company_id}</td>
                    </tr>
                    `;
                $("#tb").append(tr);
            }
            console.log(data);
        },
        error: function(data){
                console.log(data);
    }
});
});
</script>
</html>