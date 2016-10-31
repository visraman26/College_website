<html><head>
<title>Doctor</title>
<meta charset="utf-8">
</head>
<body>
<h1>Doctor Information</h1>
<table>
<form name="doctor info" method="post">
<tr><td><label><b>Name</b></label></td>
<td><input type="text" name="drname"></td>
</tr><tr></tr><tr>
</tr>
<tr><td><label><b>Spcialisation</b></label>
<td><input type="text" name="speci"></td></tr><tr>
</tr><tr>
</tr>
<tr><td><label><b>Availible Days</b></label></td>
<td><input type="text" name="avail"></td></tr><tr></tr><tr>

</tr>
</tr>
<tr><td><label><b>Joining Date</b></label></td>
<td><input type="text" name="jdate"></td></tr><tr></tr><tr>
</tr>
<tr><td><a href=""><input type="submit" value="DELETE"></a></td><td><a href=""><input type="submit" name="submit" value="add"></a></td>
</tr>
</table>
<h1>Medicine Information</h1>
<table>
<tr><td><b>Name of Medicine</b></td><td><input type="text" name="mname" ></td><tr></tr><tr></tr></tr>
<tr><td><b>Quantity</b></td><td><input type="text" name="quantity" ></td><tr></tr><tr></tr></tr>
<tr><td><b>Expiry Date</b></td><td><input type="text" name="tDate" ></td><tr></tr><tr></tr></tr>
<tr><td><a href=""><input type="submit" value="CHANGE"></a></td><td><a href=""><input type="submit" name="submit" value="add"></a></td>
<td><a href=""><input type="submit" value="REMOVE"></a></td></tr>
</table>
 <br/><br/> 
 <a href="hos.html">Return</a>

</form>
</body>
</html>
<?php
$conn = mysqli_connect("localhost","root","","test");
//	mysql_select_db("doctor");

      if ($conn->connect_error) {
            echo "Unable to Create Connection:".$this->conn->connect_error;
        }
       
    $query= INSERT INTO `contact`(`drname`, `speci`, `avail`, `jdate`) VALUES ($drname,$speci,$avail,$jdate);
    
       
       if (!$conn->query($query)) {
            echo "Error: ".$this->conn->error;
            return 0;
        }
//       $conn->query($query);
       
	//$s="insert into contact(drname,speci,avail,jdate) values('$drname, '$speci', '$avail', '$jdate')";
    //mysql_query($s);
  
?>
