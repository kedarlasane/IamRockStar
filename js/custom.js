$(document).ready(function(){
	$(".left").click(function(){
		$("#more").toggle();
	});
	$('#menu').click(function(){
		$('#skip').toggle();
	});
	$("ul li:has(ul)").click(function(){
		$(this).children('ul').toggle();
	});
	$("ul li ul li").hover(function(){
		$(this).parents("li").children('a').css("color","#fff");},function(){$(this).parents("li").children('a').css("color","#000");
	});
	$("#com").click(function(){
		$("#check").toggle();
	});
	$('.tip').poshytip({
		className: 'tip-twitter',
		showTimeout: 10,
		alignTo: 'bottom',
		alignX: 'top',
		offsetX: -90,
		offsetY: 10,
		allowTipHover: false,
		fade: true,
		slide: true
	});
	$('#scroll_left span img').poshytip({
		className: 'tip-twitter',
		showTimeout: 1,
		alignTo: 'target',
		alignX: 'right',
		offsetX:10,
		offsetY: -55,
		allowTipHover: false,
		fade: true,
		slide: true
	});
	$('#scroll_right span img').poshytip({
		className: 'tip-twitter',
		showTimeout: 1,
		alignTo: 'target',
		alignX: 'left',
		offsetX:10,
		offsetY: -55,
		allowTipHover: false,
		fade: true,
		slide: true
	});
	$('input').iCheck({
		checkboxClass: 'icheckbox_square-orange',
		increaseArea: '40%' // optional
	});
	$('input').iCheck('uncheck');
	$('#_com').iCheck('check');
	var count=1;
	$('input').on('ifChecked', function(event){
		$(this).parents("#check span").css("background","#eee");
		var lab=$(this).parents("#check span").children("label").text();
		$("#com").text(lab);
		count++;
	});
	$('input').on('ifUnchecked', function(event){
		$(this).parents("#check span").css("background","#fff");
		count--;
	});
	$(".done").click(function(){
		if(count==1)
		{
			$(this).parent().hide();
		}
		else if(count>1)
		{
			$("#com").html("<a>Selected</a>");
			$(this).parent().hide();
		}
		else
		{
			alert("Select Atleast One Domain");
		}
	});
	$(".inline").colorbox({inline:true, width:"50%", height:"75%",
	onOpen:function(){$("#logo").addClass("box");},
	onCleanup:function(){$("#logo").removeClass("box");}
	});
	$(".iframe").colorbox({iframe:true, width:"49%", height:"70%",
	onOpen:function(){$("#logo").addClass("box");},
	onCleanup:function(){$("#logo").removeClass("box");}
	});
	$(".coupon").colorbox({inline:true, width:"345px", height:"365px",
	onOpen:function(){$("#logo").addClass("box");},
	onCleanup:function(){$("#logo").removeClass("box");}
	});
	$(".blog").colorbox({inline:true, width:"50%", height:"75%", scrolling:"true", 
	onOpen:function(){$("#logo").addClass("box");},
	onCleanup:function(){$("#logo").removeClass("box");}
	});
	
	$('#slide').cycle({ 
		fx:     'turnDown',
	});
	$(window).load(function() {
	$("#load").removeClass("load");
	});
	
	var set=1;
	var total=0;
	$(".success").click(function(){
	$(this).css({"background":"#27ae60","cursor":"default"});
	var data = $(this).children("span").text();
	var price = $(this).children("i").text();
	if(set>1)
	{
	$("#items").append("<tr><td>"+data+"</td><td>"+price+"/-</td></tr>");
	$("#next").append("<input type=hidden name=d"+set+" value="+data+"><input type=hidden name=p"+set+" value="+price+">");
	set++;
	total=total+parseInt(price);
	}
	else 
	{
	$("#items").append("<tr><td>"+data+"</td><td>"+price+"/-</td></tr>");
	$("#next").append("<input type=hidden name=d"+set+" value="+data+"><input type=hidden name=p"+set+" value="+price+">");
	set++;
	total=total+parseInt(price);
    }
    $(".size").html("<input type=hidden name=size value="+set+">");
    $(".total").html("<input type=hidden name=total value="+total+">");
	alert("Item Added to your Cart");
	$(this).text("Added to Cart");
	$("#pay").text("Total Amount : "+total+"/-");
	});
	$(".final").click(function()
	{
		$("#payment").show();
	});
});
function check()
{
  var domain = document.getElementById('domain').value;
    if( /[^a-zA-Z0-9\-]/.test( domain ) ) {
        alert('No special character except dash');
        document.getElementById('domain').focus();
        document.getElementById('domain').style.borderBottom="5px solid #FF0000";
        return false;
    }
    document.domain.submit();
}

