var handleRenderCountdownTimer=function(){var n=new Date;n=new Date(n.getFullYear()+1,0,1),$("#timer").countdown({until:n})};$(document).ready((function(){handleRenderCountdownTimer()}));