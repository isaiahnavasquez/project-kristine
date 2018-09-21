@extends('authentication.dashboard')

@section('header')
	<style type="text/css">
		textarea, input { outline: none; }

		.container {
			padding: 20px;
		}

		.title {
			text-align: center;
		}

		.search {
			width: 100%px;
			text-align: center;
		}

		.search-text {
			box-shadow: 0 1px 3px rgba(0,0,0,0.12), 0 1px 2px rgba(0,0,0,0.24);
			background-color: white;
			margin-left: auto;
			margin-right: auto;
			height: 50px;
		    width: 400px;
		    padding: 20px 20px;
		    font-size: 20px;
		}
	</style>
@endsection

@section('main-content')
	<div class="container">
		<h2 class="title">Welcome to <br> Quality Management System <br>for File Archives</h2>
		<br>
		<div class="search">
			<form method="post" action="/files/wildsearch">

				@csrf

				<input id="searchString" class="card search-text" name="search_string">
				<br>
				<button id="search" class="btn btn-primary active">Search</button>
			</form>
		</div>
	</div>
@endsection

@section('scripts')
<script type="text/javascript">

	$('#search').click(function (e) {
		
	});

</script>
@endsection