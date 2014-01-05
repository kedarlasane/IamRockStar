<?php
$domain=$_GET['domain']; 
function status()
{
if(rand(0,1)=="0")
	$div="<div class=\"msg success\">It is Available</div>";
else
	$div="<div class=\"msg fail\">Sorry It is Taken</div>";
	return $div;
}
echo "<table id=\"result\">";
echo "<tr><td>".$domain.".CO.IN</td><td>".status()."<td></tr>";
echo "<tr><td>".$domain.".CO.UK</td><td>".status()."<td></tr>";
echo "<tr><td>".$domain.".US</td><td>".status()."<td></tr>";
echo "<tr><td>".$domain.".MOBI</td><td>".status()."<td></tr>";
echo "<tr><td>".$domain.".XXX</td><td>".status()."<td></tr>";
echo "<tr><td>".$domain.".EU</td><td>".status()."<td></tr>";
echo "<tr><td>".$domain.".AC.IN</td><td>".status()."<td></tr>";
echo "<tr><td>".$domain.".EDU</td><td>".status()."<td></tr>";
echo "</table>";
?>