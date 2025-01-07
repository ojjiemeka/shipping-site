var barChart,handleRenderChartJs=function(){Chart.defaults.font.family=app.font.bodyFontFamily,Chart.defaults.font.size=10,Chart.defaults.color=app.color.bodyColor,Chart.defaults.borderColor=app.color.borderColor,Chart.defaults.plugins.tooltip.padding={left:8,right:12,top:8,bottom:8},Chart.defaults.plugins.tooltip.cornerRadius=0,Chart.defaults.plugins.tooltip.titleMarginBottom=5,Chart.defaults.plugins.tooltip.titleFont.family=app.font.bodyFontFamily,Chart.defaults.plugins.tooltip.titleFont.weight=app.font.bodyFontWeight,Chart.defaults.plugins.tooltip.footerFont.family=app.font.bodyFontFamily,Chart.defaults.plugins.tooltip.displayColors=!0,Chart.defaults.plugins.tooltip.boxPadding=5,Chart.defaults.scale.grid.color=app.color.borderColor,Chart.defaults.scale.beginAtZero=!0,Chart.defaults.scale.ticks.backdropColor="rgba(255,255,255, 0)";var t=document.getElementById("barChart");barChart=new Chart(t,{type:"bar",data:{labels:["S","M","T","W","T","F","S"],datasets:[{label:"Total Visitors",data:[37,31,36,34,43,31,50],backgroundColor:app.color.theme,borderColor:"transparent"},{label:"Returning Visitors",data:[27,21,16,14,23,11,30],backgroundColor:"rgba("+app.color.whiteRgb+", .25)",borderColor:"transparent"}]},options:{maintainAspectRatio:!1}})};$(document).ready((function(){handleRenderChartJs(),$(document).on("theme-reload",(function(){barChart.destroy(),handleRenderChartJs()}))}));