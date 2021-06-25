<?php
session_start();
$conn=new mysqli("localhost","root","","jsp");
if($conn)
{
	if(isset($_POST['submit']))
    {
        $email=$_POST['email'];
        $password=$_POST['password'];
        $query="SELECT * FROM signup where email = '$email' AND password = '$password'";
        $result=mysqli_query($conn,$query);
        $count = mysqli_num_rows($result);
        if($count>0)
        {
            $_SESSION['valid']=true;
            header("location:main.php");
        }
        else
        {
            header("location:signin.html");
        }
    }
}
else
{
	echo "error in conn";
}

?>
