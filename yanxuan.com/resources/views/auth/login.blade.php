@extends('home.index')
@section('demo')
<!-- resources/views/auth/login.blade.php -->
@if (count($errors) > 0)
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
<div style="width: 300px;height:150px;margin-left:400px; margin-top: 50px; background-color: #ccc;">
<form method="POST" action="/auth/login">
    {!! csrf_field() !!}

    <div>
        用户名:
        <input type="email" name="email" value="{{ old('email') }}" style="border: 1px solid red;">
    </div>
    <br>
    <div>
        密密码:
        <input type="password" name="password" id="password" style="border: 1px solid red;">
    </div>
    <br>

    <div>
        <input type="checkbox" name="remember"> Remember Me
    </div>
    <br>
    <div>
        <button type="submit">Login</button>
    </div>
</form>
</div>
@endsection
    