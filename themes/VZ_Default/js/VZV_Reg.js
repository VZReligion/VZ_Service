//表单验证

///注册验证
function CheckReg() {
    var ckuname = /^[0-9a-zA-Z_@\.-]+$/;
    if ($("#reg_username").val() == "") {
        alert("用户名不能为空！");
        $("#reg_username").focus();
        return false;
    }
    else if ($("#reg_username").val().length < 6 || $("#reg_username").val().length > 16) {
        alert("用户名长度为6~16位字符！");
        $("#reg_username").focus();
        return false;
    }
    else if (!ckuname.test($("#reg_username").val())) {
        alert("请使用[数字/字母/中划线/下划线/@.]！");
        $("#reg_username").focus();
        return false;
    }


    var ckmail = /^\w+([-+.]\w+)*@\w+([-.]\w+)*\.\w+([-.]\w+)*$/;
    if ($("#reg_email").val() == "") {
        alert("E-mail不能为空！");
        $("#reg_email").focus();
        return false;
    }
    else if (!ckmail.test($("#reg_email").val())) {
        alert("E-mail格式不正确！");
        $("#reg_email").focus();
        return false;
    }
    var ckupwd = /^[0-9a-zA-Z_-]+$/;
    if ($("#reg_password").val() == "") {
        alert("密码不能为空！");
        $("#reg_password").focus();
        return false;
    }
    else if ($("#reg_password").val().length < 6 || $("#reg_password").val().length > 16) {
        alert("密码长度为6~16位字符！");
        $("#reg_password").focus();
        return false;
    }
    else if (!ckupwd.test($("#reg_password").val())) {
        alert("请使用[数字/字母/中划线/下划线]！");
        $("#password").focus();
        return false;
    }


    if ($("#reg_repassword").val() == "") {
        alert("确认密码不能为空！");
        $("#reg_repassword").focus();
        return false;
    }
    else if ($("#reg_repassword").val() != $("#reg_password").val()) {
        alert("两次输入的密码不相同！");
        $("#reg_repassword").focus();
        return false;
    }


    /*

    var chage = /\D/;
    if (chage.test($("#age").val())) {
        alert("年龄只能为数字！");
        $("#age").focus();
        return false;
    } else {
        if ($("#age").val() > 120) {
            alert("年龄过大！");
            $("#age").focus();
            return false;
        }
    }*/
    return true;

}
