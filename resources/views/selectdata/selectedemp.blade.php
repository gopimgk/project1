<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Document</title>
    <link href=’https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/themes/ui-lightness/jquery-ui.css’
     rel=’stylesheet’>
     <link href=
'https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/themes/ui-lightness/jquery-ui.css'
          rel='stylesheet'>
      
    <script src=
"https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js" >
    </script>
      <script src = "https://ajax.aspnetCDN.com/ajax/jQuery/jQuery-1.9.0.min.js"></script>
    <script src=
"https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js" >
    </script>
</head>
<body>

   Start-date <input type="text" name="sdate" id="start-date">
   End-date <input type="text" name="edate" id="end-date">
   <button class="btn" id="sub">submit</button>
   
   
  
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
        url:"{{url('selectedemp')}}",
        type:"POST",
        data:{startdate:startdate,enddate:enddate},
        success:function(data){
            console.log(data);
        },
        error: function(data){
                console.log(data);
    }
});
});
</script>
</html>