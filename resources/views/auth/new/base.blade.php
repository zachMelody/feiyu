<!DOCTYPE html>
<html lang="en" class="no-js">
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>login</title>
    <link rel="stylesheet" type="text/css" href="auth_res/css/normalize.css" />
    <link rel="stylesheet" type="text/css" href="auth_res/css/demo.css" />
    <!--必要样式-->
    <link rel="stylesheet" type="text/css" href="auth_res/css/component.css" />
    <!--[if IE]>
    <script src="auth_res/js/html5.js"></script>
    <![endif]-->
</head>
<body>
<div class="container demo-1">
    <div class="content">
        <div id="large-header" class="large-header">
            <canvas id="demo-canvas"></canvas>
            <div class="logo_box">
                <h3>欢迎你</h3>
                @section('main')
                @show
            </div>
        </div>
    </div>
</div><!-- /container -->
<script src="auth_res/js/TweenLite.min.js"></script>
<script src="auth_res/js/EasePack.min.js"></script>
<script src="auth_res/js/rAF.js"></script>
<script src="auth_res/js/demo-1.js"></script>
<div style="text-align:center;">
</div>
</body>
</html>