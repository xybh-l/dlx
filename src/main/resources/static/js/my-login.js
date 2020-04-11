$(function () {
    $("input[type='password'][data-eye]").each(function (i) {
        let $this = $(this);

        $this.wrap($("<div/>", {
            style: 'position:relative'
        }));
        $this.css({
            paddingRight: 60
        });
        $this.after($("<div/>", {
            html: '显示密码',
            class: 'btn btn-primary btn-sm',
            id: 'passeye-toggle-' + i,
            style: 'position:absolute;right:10px;top:50%;transform:translate(0,-50%);padding: 2px 7px;font-size:12px;cursor:pointer;'
        }));
        $this.after($("<input/>", {
            type: 'hidden',
            id: 'passeye-' + i
        }));
        $this.on("keyup paste", function () {
            $("#passeye-" + i).val($(this).val());
        });
        $("#passeye-toggle-" + i).on("click", function () {
            if ($this.hasClass("show")) {
                $this.attr('type', 'password');
                $this.removeClass("show");
                $(this).removeClass("btn-outline-primary");
            } else {
                $this.attr('type', 'text');
                $this.val($("#passeye-" + i).val());
                $this.addClass("show");
                $(this).addClass("btn-outline-primary");
            }
        });
    });
});

$(document).ready(function () {
    let email = $.cookie('email');
    let password = $.cookie('asdf');
    let remember = $.cookie("remember");
    if (email != null && password != null) {
        $("#email").val(email);
        $("#password").val(password);
        $("#remember").attr("checked", true)
    }
});

function login() {
    const email = $("#email").val();
    const password = $("#password").val();
    let remember;
    remember = !$("#remember").attr("checked");
    // alert(email + " " + password + " " + remember);
    $.ajax({
        url: '/check',
        type: "post",
        data: {
            email: email,
            password: password
        },
        success: function (data) {
            let res = data;
            if (res.statusCode === 200 && res.message === '登录成功') {
                if (remember === true) {
                    $.cookie('email', email,{path:"/login"});
                    $.cookie('asdf', password,{path:"/login"});
                    $.cookie('remember', remember,{path:"/login"});
                } else {
                    $.cookie('email', null, {path: "/",expires:0});
                    $.cookie('asdf', null, {path: "/",expires:0});
                    $.cookie('remember', null, {path: "/",expires:0});
                }
                $.cookie('token', res.token);
                $(location).attr("href",document.referrer);
            } else {
                alert("账号或密码错误");
            }
        },
        error: function () {
            alert("服务器错误!")
        }
    })
}

