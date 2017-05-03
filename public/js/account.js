$(document).ready(function() {

    var container = $("#channelInfoContainer");
    var containerPostion = container.offset();
    var maxTop = $("header").height(); // height of header in pixels
    var maxBottom = containerPostion.top; // distance between top of container to top of window
    var top, current;

    $(window).scroll(function() {
    top = $(this).scrollTop();
        if ((top <= maxBottom)) {
            current = maxBottom - top;
            current = current > maxTop ? current : maxTop;
            console.log("B " + current);
            container.animate({"top": (current) + "px"}, 10);
        }
    });

});
