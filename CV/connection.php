<?php
$fname=$_POST["txtFirstName"];
$lname=$_POST["txtLastName"];
$gender=$_POST["rdogender"];
$phoneno=$_POST["txtPhoneno"];
$email=$_POST["txtEmail"];
$country=$_POST["country"];

$obj=$_POST["txtObj"];
$skill1=$_POST["txtSkill1"];
$skill2=$_POST["txtSkill2"];
$skill3=$_POST["txtSkill3"];
$activities=$_POST["txtActivities"];
$internship=$_POST["txtIntern"];

$sname=$_POST["txtSchoolName"];
$s10th=$_POST["txt10th"];
$sboard=$_POST["txtSchoolBoard"];
$spass=$_POST["txtSchoolPassing"];
$cname=$_POST["txtCollegeName"];
$c12th=$_POST["txt12th"];
$cboard=$_POST["txtCollegeBoard"];
$cpass=$_POST["txtCollegePassing"];
$ename=$_POST["txtEngg"];
$euniv=$_POST["txtUniversity"];
$ecgpa=$_POST["txtEnggCGPA"];
$epass=$_POST["txtEnggPassing"];

$conn=new mysqli('localhost:3307','root','','resume');
if($conn->connect_error)
{
    die('connection failed:'.$conn->connect_error);
}
else{
$stmt=$conn->prepare("insert into resumedata values(?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)");
$stmt->bind_param("sssisssssssssisisisissi",$fname,$lname,$gender,$phoneno,
$email,$country,$obj,$skill1,$skill2,$skill3,$activities,$internship,
$sname,$s10th,$sboard,$spass,$cname,$c12th,$cboard,$cpass,$ename,$euniv,$epass);
$stmt->store_result();
$stmt->execute();
echo "successfull";
$stmt->close();
$conn->close();
}

?>

