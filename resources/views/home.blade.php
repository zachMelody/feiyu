@extends('layouts.base', ['bodyClass' => 'home'])

@section('body')

        @include('layouts._alerts')


    <section id="banner" style="padding: 90px 0 220px;background: url(//w2ss.xyz/theme/material/images/bg.png);">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <h2 style="margin: 60px;font-size: 50px">Better Internet, For You.</h2>
                    <div class="description"></div>
                    @if (Auth::guest())
                        <a class="btn btn-primary" href="{{ route('register') }}">
                            加入我们
                        </a>
                        <a class="btn btn-default" href="{{ route('forum') }}">
                            我先看看
                        </a>
                    @else
                        <a class="btn btn-default" href="{{ route('threads.create') }}">
                            即刻开始
                        </a>
                    @endif
                </div>
            </div>
        </div>
    </section>

    <section id="software" style="background-color: #29c6a7;padding: 60px 0 40px;">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <h2 style="color: white;margin-bottom: 60px;">Based on the famous open-source & free software.</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4 feature">
                    <div class="icon-box">
                        <i class="fa fa-bolt"></i>
                    </div>
                    <h3>Super Fast</h3>
                    <p style="line-height: 24px;font-weight: 300;margin-bottom: 60px;font-size: 14px;">Bleeding edge techniques using Asynchronous I/O and Event-driven programming.</p>
                </div>
                <div class="col-md-4 feature">
                    <div class="icon-box">
                        <i class="fa fa-shield"></i>
                    </div>
                    <h3>Flexible Encryption</h3>
                    <p style="line-height: 24px;font-weight: 300;margin-bottom: 60px;font-size: 14px;">Secured with industry level encryption algorithm. Flexible to support custom algorithms.</p>
                </div>
                <div class="col-md-4 feature">
                    <div class="icon-box">
                        <i class="fa fa-wifi"></i>
                    </div>
                    <h3>Mobile Ready</h3>
                    <p style="line-height: 24px;font-weight: 300;margin-bottom: 60px;font-size: 14px;">Optimized for mobile device and wireless network, without any keep-alive connections.</p>
                </div>
            </div>
        </div>
    </section>

@endsection
