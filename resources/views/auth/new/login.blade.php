@extends('auth.base')
@section('main')
<form action="" name="f" method="post" id="login_form">
    {{ csrf_field() }}
    <div class="input_outer">
        <input name="email" class="text" style="color: #FFFFFF !important" type="email" placeholder="请输入账户">
    </div>
    <div class="input_outer">
        <input name="password" class="text" style="color: #FFFFFF !important; position:absolute; z-index:100;"value="" type="password" placeholder="请输入密码">
    </div>
    <div>
        <input type="checkbox" name="is_remember">记住我
    </div>
    @include('auth.info')
    <div>
        <a class="act-but submit" onclick="document:login_form.submit();" style="color: #FFFFFF">登录</a>
    </div>
    <div>
        <a href="{{ url('register') }}" style="margin-top: 10px;color: #FFFFFF;float: right">没有账号？</a>
    </div>
</form>
@endsection