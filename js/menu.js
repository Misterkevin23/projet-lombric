sfHover = function() {
        var sfEls = document.getElementById("menu").getElementsByTagName("li");
        for (var i=0; i<sfEls.length; i++) {
                sfEls[i].onmouseover=function() {
                        this.className+=" sfhover";
                        $("i").removeClass("fa fa-plus-square-o");
                }
                sfEls[i].onmouseout=function() {
                        this.className=this.className.replace(new RegExp(" sfhover\\b"), "");
                        $("i").removeClass("fa fa-minus-square-o").addClass("fa fa-plus-square-o");
                }
        }
}
if (window.attachEvent) window.attachEvent("onload", sfHover);
