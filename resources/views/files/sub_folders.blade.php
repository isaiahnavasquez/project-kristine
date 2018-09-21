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
			background-color: white;
			min-height: 50px;
			min-width: 200px;
			border-radius: 5px;
			box-shadow: 0 1px 3px rgba(0,0,0,0.12), 0 1px 2px rgba(0,0,0,0.24);
			margin: 10px;
			display: flex;
			align-items: center;
			justify-content: center;
			padding: 5px 20px 0px 20px;
		}

		a {
			color: #f05545;
			text-decoration: none;
		}

		a:hover {
			color: #f05545;
			text-decoration: none;
		}
	</style>
@endsection

@section('main-content')

	<h2 class="title">Folders/{{ strtoupper($folder_name) }}</h2>

	<div class="container">
	@foreach($sub_folders as $folder)
		<div class="folder">
			<h4><a href="/files/view/{{ $folder->id }}">{{ ucwords($folder->name) }}</a></h4>
		</div>
	@endforeach
	</div>


@endsection

@section('scripts')
@endsection