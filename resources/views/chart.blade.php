<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="" rel="stylesheet" type="text/css">

 <body>
	<div class="container">
      <div class="row-fluid">
		<nav class="navbar navbar-dark bg-dark">
		  <a class="navbar-brand" href="#">Gráficos painel de controle</a>
		</nav>
        <div>{!! $chart->container() !!}</div>
       </div>
    </div>
   <hr>
    <div class="container">
      <div class="row-fluid">
          
        </div>
    </div>
<script src="//cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.1/Chart.min.js" charset="utf-8"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
 {!! $chart->script() !!}
 </body>
</html>
