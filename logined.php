<?php
//get values from the form logined.php file
$username = $_post['username'];
$password = $_post['password'];
// to pervent mysql injection
$username = stripcslashes($username);
$password = stripcslashes($password);
$username = mysql_real_escape_string($username);
$password = mysql_real_escape_string($password);
//connect to the server and select database
mysql_connect("localhost","root","");
mysql_select_db("college");
//query the database  for user
$result = mysql_query("select*from login where username ='$username' and '$password'") or die("failed to query database ".mysql_error());
$row = mysql_fetch_array($result);
if ($row['username']) == $username && $row['password'] == $password ){
    echo "login success".$row['username'];
} else{
    echo"failed to login";
}




/*
if(isset($_POST['submit']))
{
    $connect = mysql_connect("localhost" , "root" , "")or die("cannot connect to server"); 
    mysql_select_db("mywebsite")or die("cannot connect to database"); 
    $servername = "localhost"; 
    $username = "root"; 
    $password = ""; 
    $conn = new mysqli($servername, $username, $password); 
    if ($conn->connect_error) { 
    die("Connection failed: " . $conn->connect_error); 
    
    }  
    echo "<br>Connected successfully<br>"; 
  
}

/* if(isset($_POST['submit']))
{

   $con=new mysqli("localhost","root","",)mysql_select_db('login1');
   $username=$_POST['name'];
   $password=$_POST['text'];
  

   /*if($con)
   {
       echo "Connected succesfully";
   }
   else 
   {
       echo "Connection failed";
   }


   if(!empty($username) || !empty($password) || )
   {
        $sql="insert into registration (username,password) values ('$username','$password')";
        if($con->query($sql)==TRUE)
        {
            echo "Logined succesfully";
           echo <a href="<?php echo $registration;?>">  </a>
        }
        else
        {
            echo "Something went wrong,please try again later" .$con->error;
        }
   }
   else
   {
       echo "Please enter all the credentials";
   }
}
?>


