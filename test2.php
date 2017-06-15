<?php
echo "hi";
$names = array ("rahul","sachin","main"=>"anil","ashok","kumar");
foreach ($names as $name)
echo "$name <br/>";
foreach ($names as $x=>$name)
echo "$x = > $name <br/>" ;
?><?php
function square($in_value,$in_key){
echo $in_value*$in_value;
echo "<br/>";}
$ints=array(1,2,3,4,5,6);
array_walk($ints,'square');
$con=mysql_connect('localhost','root','');
if($con)
echo "<h1>success</h1>";
?>