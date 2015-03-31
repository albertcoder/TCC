$(document).ready(function(){
$("#search").hide();
$("#list ul").hide();
$("#search_button").click(function(){
$("#search").toggle(1000);	
})
$("#list li").click(function(){
var t=$(this).text();
$("#list ul").hide(1000);
$("#"+t.replace(" ","_")).toggle(2000);
})
})
