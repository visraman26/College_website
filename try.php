	<?php
		
		
		
			$con= mysqli_connect("mysql13.000webhost.com","a2005313_root","visraman26","a2005313_hacka");
			if(mysqli_connect_errno())
			{
				die("datbase coonection failed" . mysqli_connect_error() );
			}
			else 
			{
				echo "successfull";
			$query="INSERT INTO signup (username,password,phoneno,email) VALUES ('amit','pass','phone_n','emal')";
			$result= mysqli_query($con,$query);
		
			mysqli_close($con);
		
		
			}
			
		
		?>
		