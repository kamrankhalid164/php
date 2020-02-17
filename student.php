<?php  
$conn = new mysqli('localhost', 'root', '', 'school management');

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo "ok";



echo "<pre>";
print_r($_POST);
$name=$_POST['fullname'];
$father_name=$_POST['fathername'];
$email=$_POST['email'];
$city=$_POST['city'];
$phone=$_POST['phone'];
$DOB=$_POST['dob'];
$address=$_POST['address'];
$gender=$_POST['gender'];
echo $name;
echo "<br>";
echo $father_name;
echo "<br>";
echo $email;
echo "<br>";
echo $city;
echo "<br>";
echo $phone;
echo "<br>";
echo $DOB;
echo "<br>";
echo $address;
echo "<br>";
echo $gender;
?>