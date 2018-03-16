@extends('layouts.master')

@section('header')

  @include('layouts.header')

@endsection

@section('content')
  <div style="height:100%;width:100%;">
    <div class="card auth-card">
      <div class="card-body">
        <h5 class="card-title">Login</h5>
        <p class="card-text">

          <form method="POST" action="/login">

            @csrf

            <div class="form-group">
              <label for="username">Username</label>
              <input type="text" class="form-control" id="username" name="username" required>
            </div>
            <div class="form-group">
              <label for="password">Password</label>
              <input type="password" class="form-control" id="password" name="password" required>
            </div>
            <div class="form-group" style="text-align:right">
              <button type="submit" class="btn btn-primary active">Submit</button>
            </div>
          </form>
          <?php if ($errors->any()) : ?>
            <p style="text-align:center;color:red">Login Failed, try again.</p>
          <?php endif; ?>
        </p>
      </div>
    </div>
  </div>

@endsection

@section('scripts')

  @include('layouts.scripts')

@endsection
