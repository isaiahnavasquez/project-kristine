@extends('layouts.master')

@section('header')
  <style>
    .circle {
      height: 50px;
      width: 50px;
      background-color: #b61827;
      border-radius: 100%;
      float: left;
      margin-right: 10px;
    }
  </style>
@endsection

@section('content')

  <!-- Side navigation -->
  <div class="sidenav">
    <div style="padding:20px;padding-bottom:0">
      <div class="circle"></div>
      <div style="margin-left:10px">
        <h5 class="card-title">{{ '@' . Auth::user()->username }}</h5>
        <h6 class="card-subtitle mb-2 text-muted">{{ ucfirst(Auth::user()->role) }}</h6><hr>
      </div>
    </div>
    <ul class="list-group bmd-list-group-sm" style="margin-top:10px;">
      <li class="list-group-item"><h5>File Manager</h5></li>
      <div style="padding-left:15px">
        <a href="/files/search" class="list-group-item">Search</a>
        <a href="/files/upload" class="list-group-item">Upload</a>
      </div>
    </ul>
    <!-- Show Accounts Manager if user is an admin -->
    <?php if (Auth::user()->role == 'administrator') : ?>
      <ul class="list-group bmd-list-group-sm" style="margin-top:10px;">
        <li class="list-group-item"><h5>Accounts Manager</h5></li>
        <div style="padding-left:15px">
          <a href="/accounts/add" class="list-group-item">Add user</a>
          <a href="/accounts/list" class="list-group-item">Accounts</a>
        </div>
      </ul>
    <?php endif; ?>
  </div>

  <!-- Page content -->
  <div class="main">
    @yield('main-content')
  </div>

@endsection
