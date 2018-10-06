@extends('authentication.dashboard')

@section('header')
	<style type="text/css">
		a:hover {
			text-decoration: none;
		}

		.title {
			text-align: center;
			margin-top: 20px;
		}

		.container {
			display: flex;
			flex-direction: row;
			flex-wrap: wrap;
			margin: 20px auto;
			width: 700px;
		}

		.folder {
			height: 200px;
			width: 200px;
			margin-top: 20px;
			margin-left: 20px;
			box-shadow: 0 1px 3px rgba(0,0,0,0.12), 0 1px 2px rgba(0,0,0,0.24);
			border-radius: 5px;
			text-align: center;
			display: flex;
			flex-direction: column-reverse;
			padding: 20px;
			background-color: white;
		}

		.edit-form input {
			width: 150px;
			text-align: center;
		}

		.save-button {
			text-align: center;
		}
	</style>
@endsection

@section('main-content')

	<h2 class="title">Folders</h2>

	<div class="container">

		@foreach($folders as $folder)
			<div class="folder">
				<div style="text-align:center">
					<a href="/files/folders/view/{{$folder->id}}" class="btn-control-primary">OPEN</a>
				</div>
				<br>
				<div class="edit-form">
					<!-- <input type="text" value="{{ strtoupper($folder->name) }}"> -->
				</div>
				<p><strong>{{ strtoupper($folder->name) }}</strong></p>
			</div>
		@endforeach
	</div>

	<br>
	<!-- <div class="save-button">
		<button class="btn btn-primary active">Save Changes</button>
	</div> -->

@endsection

@section('scripts')
@endsection