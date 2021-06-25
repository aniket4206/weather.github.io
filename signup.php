<?php
$conn=new mysqli("localhost","root","","jsp");
if($conn)
{
	if(isset($_POST['submit']))
    {
        $fname=$_POST['fname'];
        $lname=$_POST['lname'];
        $email=$_POST['email'];
        $password=$_POST['password'];
        $query="INSERT into signup(id,fname,lname,email,password) values('','$fname','$lname','$email','$password')";
        $result=mysqli_query($conn,$query);
        if($result)
        {
            header("location:main.php");
        }
        else
        {
            header("location:signup.html");
        }
    }
}
else
{
	echo "error in conn";
}
?>
