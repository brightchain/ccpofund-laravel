//页面加载判断是否有cookie
onload = checkCookie();

function checkCookie() {
    var withe = document.documentElement.clientWidth;

    var smtstk = getCookie('smtstk');
    if (smtstk == "no") {//如果有cookie则不再展示
        document.getElementById("tstk").style.display = "none";
    }
    else if(withe<768){
         document.getElementById("tstk").style.display = "none";
    }
    else {
        document.getElementById("tstk").style.display = "block";
    }
}
//读取cookie
function getCookie(cname) {
    var name = cname + "=";
    var ca = document.cookie.split(';');
    for (var i = 0; i < ca.length; i++) {
        var c = ca[i];
        while (c.charAt(0) == ' ') c = c.substring(1);
        if (c.indexOf(name) != -1) return c.substring(name.length, c.length);
    }
    return "";
}

//确定进入页面，如果勾选不再提示则设置cookie
function innerview() {
    if (document.getElementById("remember").checked) {
        setCookie("smtstk", "no");
    }
    document.getElementById("tstk").style.display = "none";
}
//设置cookie
function setCookie(cname, cvalue) {
    var c = cname + "=" + cvalue + ";path=/;";
    document.cookie = c;
}

//离开
function backview() {
    location.href = "http://www.ccpofund.com"
}