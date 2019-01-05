function clock_event(event) {
    $(this).html(event.strftime('%D روز<br> %H ساعت<br> %M دقیقه<br> %S ثانیه'));
}

$("a.major").click(function(){
    alert("yes link clicked");
});