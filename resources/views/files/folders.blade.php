@extends('authentication.dashboard')

@section('header')
	<style type="text/css">
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
			border: 5px solid grey;
			border-radius: 5px;
			text-align: center;
			display: flex;
			flex-direction: column-reverse;
			padding: 10px;
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
				<p><strong>{{ strtoupper($folder->name) }}</strong></p>
			</div>
		@endforeach
	</div>

@endsection

@section('scripts')
@endsection