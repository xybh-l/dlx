$(document).ready(function () {
    let username = $.cookie('username');
    let token = $.cookie('token');
    if (username != null && token != null) {
        $("#username").html(username);
        $("#user").append("<span id='logout' style='margin-left: 10px'><a style='font-size: 10px;' href='javascript:void(0);' onclick=logout()>退出</a></span>");

    }else $("#user-icon").css("display",'none');
});

// 设置cookie
function setCookie(c_name, value, expiredays) {
    var exdate = new Date();
    exdate.setDate(exdate.getDate() + expiredays);
    document.cookie = c_name + "=" + escape(value) + "";
    expires = " + exdate.toGMTString() + ";
    path = "/";
}

// 清除cookie
function clearCookie(name) {
    setCookie(name, "", -1);
}

function logout() {
    clearCookie('username');
    clearCookie('token');
    window.location.reload();
}

function create() {
    let notice = $('#notice-text').val();
    let isPrivate;
    if ($('#notice-private').is(':checked')){
        isPrivate = 1;
    } else isPrivate = 0;
    $.ajax({
        url: '/notice/create',
        method: 'post',
        data: {
            'notice': notice,
            'isPrivate': isPrivate
        },
        success: function (data) {
            if (data.statusCode === 200 && data.message === '发送成功!') {
                window.location.reload();
            }else alert(data.message)
        },
        error: function (data) {
            if (data.status===400){
                alert("请先登录!")
            }
        }
    });
}
