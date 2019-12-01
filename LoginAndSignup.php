<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>东篱下</title>
    <link rel="stylesheet" href="css\LoginAndSignup.css">
</head>
<body>
<div class="container">
    <img src="image/LoginAndSignup/bc.jpg" alt="">
    <div class="panel">
        <div class="content login">
            <div class="switch">
                <span id='login' class='active'>登录</span><span>/</span><span id='signup'>注册</span>
            </div>
            <form>
                <div id='email' class="input" placeholder='邮箱地址'><input id="user_email" type="text"></div>
                <div id="user" class="input" placeholder='用户名'><input type="text" id="username"></div>
                <div id="pwd" class="input" placeholder='密码'><input type="password" id="password"></div>
                <div id='repeat' class="input" placeholder='确认密码'><input type="password" id="repeat_password"></div>
                <span>忘记密码?</span>
                <button class="check" onclick="return formcheck()" onsubmit="return false">登录</button>
            </form>
        </div>
    </div>
</div>

</body>

<script src="https://cdn.bootcss.com/jquery/3.4.1/jquery.min.js"></script>
<script src="js/Jquery.md5.js"></script>
<script>
    $('#login').click(function () {
        // $('.switch span').removeClass('active');
        $(this).addClass('active');
        $(this).parents('.content').removeClass('signup');
        $(this).parents('.content').addClass('login');
        $('#user').attr('placeholder', '用户名');
        $('#pwd').attr('placeholder', '密码');
        $('form button').text('登录')

    });

    $('#signup').click(function () {
        $('.switch span').removeClass('active');
        $(this).addClass('active');

        $(this).parents('.content').removeClass('login');
        $(this).parents('.content').addClass('signup');
        $('#user').attr('placeholder', '用户名');
        $('#pwd').attr('placeholder', '密码');
        $('#email').attr('placeholder', '邮箱地址');
        $('#repeat').attr('placeholder', '确认密码');
        $('form button').text('注册');
    });

    $('.input input').on('focus', function () {
        $(this).parent().addClass('focus');
    });

    $('.input input').on('blur', function () {
        if ($(this).val() === '')
            $(this).parent().removeClass('focus');
    });

    function formcheck() {
        var username = $('#username').val();
        var password = $('#password').val();
        var email = $('#user_email').val();
        var repeat = $('#repeat_password').val();
        var method = $('.check').text();
        if (method == '注册') {
            flag = true;
            if (username == '') {
                $("#user").attr("placeholder", '用户名(不能为空)');
                flag = false;
            } else
                $("#user").attr("placeholder", '用户名');
            if (password == '') {
                $("#pwd").attr("placeholder", '密码(不能为空)');
                flag = false;
            } else
                $("#pwd").attr("placeholder", '密码');
            if (email == '') {
                $("#email").attr("placeholder", '邮箱地址(不能为空)');
                flag = false;
            } else
                $("#email").attr("placeholder", '邮箱地址');
            if (repeat == '' || repeat != password) {
                $('#repeat').attr("placeholder", '确认密码(密码不一致)');
                flag = false;
            } else
                $('#repeat').attr("placeholder", '确认密码');
            if (!flag)
                return false;
            $.ajax({
                url: '/check.php',
                type: 'post',
                timeout: 2000,
                data: {  // 数据
                    method: $('.check').text(),
                    user: username,
                    pwd: $.md5(password),
                    email: email
                },
                success: function (data) {
                    res = JSON.parse(data);
                    check(res);
                },
                error: function () {
                    alert('网络错误!');
                }
            });
        } else {
            flag = true;
            if (username == '') {
                $("#user").attr("placeholder", '用户名(不能为空)');
                flag = false;
            } else
                $("#user").attr("placeholder", '用户名');
            if (password == '') {
                $("#pwd").attr("placeholder", '密码(不能为空)');
                flag = false;
            } else
                $("#pwd").attr("placeholder", '密码');
            if (!flag)
                return false;
            $.ajax({
                url: '/check.php',
                type: 'post',
                timeout: 2000,
                data: {  // 数据
                    method: $('.check').text(),
                    user: username,
                    pwd: $.md5(password),
                },
                success: function (data) {
                    res = JSON.parse(data);
                    if (res.status_code == 200) {
                        if (res.message == '登录成功') {
                            history.back();
                        } else {
                            alert(res.message);
                        }
                    }
                },
                error: function () {
                    alert('网络错误!');
                }
            });
        }
        return false;

    }


    function check(res) {
        if (res.status_code == 200) {
            alert(res.message);
            var username = $('#username').val('');
            var password = $('#password').val('');
            var email = $('#user_email').val('');
            var repeat = $('#repeat_password').val('');
        } else {
            alert('服务器故障');
        }
    }
</script>
</html>