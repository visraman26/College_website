<?php
// 000webhost mai maine apna account bnaya hy to wo tumhe free hosting provide krte hy jise tume net me koi bhi page upload krskte hy..usi mai maine apna
//project upload kia hy..isi trh se ye code upload kr dia..or bs kaam hogya mail ka...(srv.00sumthing.com) likh k isilie aa ra hy bcz hm unki company 
// us kr re hy..or bakiyo me "by gmail " likh k aata hy..bcz hmlog gmail use krte hy..

$to="anjali3112soni@gmail.com";        
$subject="Ky haal hy!!";
$message="pagal";
$headers="From : Anjali kumari<201452042iiitvadodara.ac.in>";

if(mail($to,$subject,$message,$headers))       // ye mail function hota hy jo ki predefined hy ..jisme 4 parameters gae hy.....
	echo "Successfully sent email";
else
	echo "Not sent";


?>
