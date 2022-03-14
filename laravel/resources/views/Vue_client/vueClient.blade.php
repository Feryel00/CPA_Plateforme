<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" href="{{URL::to('/images/icons/bank-logo.jpg')}}">
    <link href="{{ URL::to('/css/vueClient.css')}}" rel="stylesheet" />
    <link href="{{ URL::to('https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css')}}" rel="stylesheet" />
    <link href="{{ URL::to('https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js')}}" rel="stylesheet" />
    <link href="{{ URL::to('https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.0.3/css/font-awesome.css')}}" rel="stylesheet" />
    <link href="{{ URL::to('https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js')}}" rel="stylesheet" />
    <title>Fiche client</title>
    
    <script type="text/javascript">


window.onload=function() {
  horloge('div_horloge');
};


function horloge(el) {
  if(typeof el=="string") { el = document.getElementById(el); }
  function actualiser() {
    var date = new Date();
    //var str = date.getHours();
    //str += ':'+(date.getMinutes()<10?'0':'')+date.getMinutes();
    //str += ':'+(date.getSeconds()<10?'0':'')+date.getSeconds();
    

    el.innerHTML = date;
  }
  actualiser();
  setInterval(actualiser,1000);
}




</script>
</head>
<body>
    @yield('content')



</body>
</html>
