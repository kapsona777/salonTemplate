@extends('layouts.default')
@section('content')

<!-- login page  -->
<div class="main_content ">
    <div class="content login_form">
        <form action="/login" method="post" id="loginForm" class="center">
            <input type="text" name="username" placeholder="Username">
            <input type="password" name="password" placeholder="Password">
            <input type="submit" value="Login">
        </form>
    </div>
</div> 

@stop