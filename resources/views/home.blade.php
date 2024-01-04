@extends('master')

@section('content')

<div id="login-page" class="page card p-4 mx-auto" style="max-width: 400px;">
    <h2 class="mb-4">Login</h2>
    <form id="login-form" action="/user" method="post">
        <div class="form-group">
            <label for="username">Username:</label>
            <input type="text" id="username" name="username" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="password">Password:</label>
            <input type="password" id="password" name="password" class="form-control" required>
        </div>
        <button type="submit" class="btn btn-primary">Login</button>
    </form>
</div>

@endsection