var handleCheckTime=function(e){"use strict";return e<10&&(e="0"+e),e},handleStartTime=function(){"use strict";var e,t=new Date,l=t.getHours(),a=t.getMinutes(),s=t.getSeconds();a=handleCheckTime(a),s=handleCheckTime(s),e=l>11?"pm":"am",l=l>12?l-12:l,document.getElementById("time").innerHTML=l+":"+a+e;setTimeout(handleStartTime,500)},handleSelectTable=function(){"use strict";$(document).on("click",'[data-toggle="select-table"]',(function(e){e.preventDefault();var t=$(this).closest(".pos-checkout-table");$(t).hasClass("in-use")&&($('[data-toggle="select-table"]').not(this).closest(".pos-checkout-table").removeClass("selected"),$(t).toggleClass("selected"),$("#pos").toggleClass("pos-mobile-sidebar-toggled"))}))};$(document).ready((function(){handleStartTime(),handleSelectTable(),app.isMobile||$('[data-toggle="select-table"]').first().trigger("click")}));