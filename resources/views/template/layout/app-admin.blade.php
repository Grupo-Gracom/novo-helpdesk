<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>@yield('titulo')</title>
	<link href="{{asset('assets/css/bootstrap.min.css')}}" rel="stylesheet">
	<link href="{{asset('assets/css/font-awesome.min.css')}}" rel="stylesheet">
	<link href="{{asset('assets/css/datepicker3.css')}}" rel="stylesheet">
	<link href="{{asset('assets/css/styles.css')}}" rel="stylesheet">
	<meta name="csrf-token" content="{{ csrf_token() }}">
	<link href="https://fonts.googleapis.com/css?family=Montserrat:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
    <link href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css" rel="stylesheet">
    <script src="{{asset('assets/js/chart-data.js')}}"></script>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.1.25/jquery.fancybox.min.css" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.1.25/jquery.fancybox.min.js"></script>
    <script src="{{asset('vendors/Chart.js/dist/Chart.min.js')}}"></script>
	<script src="//cdn.datatables.net/1.10.25/js/jquery.dataTables.min.js"></script>
	
</head>
<body>
    @yield('conteudo')
	<script src="{{asset('assets/js/bootstrap.min.js')}}"></script>
<script src="{{asset('assets/js/bootstrap-datepicker.js')}}"></script>
	<script src="{{asset('assets/js/custom.js')}}"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.15/jquery.mask.js"></script>
	<script>
        $(document).ready(function(){
          $('.telefone').mask('(00) 00000-0000');
        });
    </script>
	<script>
		$(document).ready(function() {
    		$('.list').DataTable({
				"oLanguage":{
					"sUrl" : "../br/br.txt"
				}
			});
		});
	</script>
</body>
</html>
