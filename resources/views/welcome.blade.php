@extends('layouts.master')

@section('title')
  Geoff's Laravel Test
@endsection

@section('content')
  <div class="row">
      <div class="col-md-6">
        <h3>Create Account</h3>
        <form action="{{ route('signup') }}" method="post">
          <div class="form-group">
            <label for="email">Your E-mail</label>
            <input class="form-control" type="text" name="email" id="email">
          </div>
          <div class="form-group">
            <label for="first_name">Your First Name</label>
            <input class="form-control" type="text" name="first_name" id="first_name">
          </div>
          <div class="form-group">
            <label for="password">Your Password</label>
            <input class="form-control" type="password" name="password" id="password">
          </div>
          <div class="form-group">
            <label for="password_conf">Confirm Password</label>
            <input class="form-control" type="password" name="password_conf" id="password_conf">
          </div>
          <button type="submit" class="btn btn-primary">Create</button>
          <input type="hidden" name="_token" value="{{ Session::token() }}">
        </form>
      </div>
      <div class="col-md-6">
        <h3>Sign In</h3>
        <form action="#" method="post">
          <div class="form-group">
            <label for="email">Your E-mail</label>
            <input class="form-control" type="text" name="email" id="email">
          </div>
          <div class="form-group">
            <label for="password">Your Password</label>
            <input class="form-control" type="pasword" name="password" id="password">
          </div>
          <button type="submit" class="btn btn-primary">Sign In</button>
        </form>
      </div>
  </div>
@endsection
