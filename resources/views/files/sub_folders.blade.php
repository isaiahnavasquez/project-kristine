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

	<h1>Hello</h1>

@endsection

@section('scripts')
@endsection