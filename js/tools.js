function loginout() {
    if(confirm("是否确定注销?")){
        $.ajax({
            type:"post",
            url:"check.php",
            data:{
                method:'注销'
            },
            success:function() {
                location.reload();
            }
        })
    }
}