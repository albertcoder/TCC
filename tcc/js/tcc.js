$(document).ready(function(){
$("#list ul").hide();
$("#list li").click(function(){
var t=$(this).text();
$("#list ul").hide(1000);
$("#"+t.replace(" ","_")).show(2000);
})
})
