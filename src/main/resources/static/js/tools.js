function loginout() {
    if (confirm("是否确定注销?")) {
        $.ajax({
            type: "post",
            url: "check.php",
            data: {
                method: '注销'
            },
            success: function () {
                location.reload();
            }
        })
    }
}

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
