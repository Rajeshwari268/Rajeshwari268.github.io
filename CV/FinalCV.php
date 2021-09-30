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
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />

    <!-- Font Awesome -->
    <script src="https://kit.fontawesome.com/996973c893.js"></script>

    <!-- Style -->
    <link rel="stylesheet" href="style.css" />

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,500,700,800,900&display=swap"
      rel="stylesheet"/>
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" crossorigin="anonymous">
    <script src="pdf.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.9.2/html2pdf.bundle.js"></script>
    <title>Resume</title>
  </head>
  <body>
  <div>
        <div>
            <div>
                <button class="btn btn-primary" id="download"> download pdf</button>
            </div>
            <div>
                <div class="card" id="invoice">
       
    <div class="box">
      <div class="header">
        <div class="header-center">
          <div class="name">
            <h1 class="first-name"><?php echo $fname; ?></h1>
            <h1 class="last-name"><?php echo $lname; ?></h1>
          </div>
        </div>
        <div class="header-right">
          <div class="email">
            <p><?php echo $email; ?></p>
            <i class="fas fa-envelope"></i>
          </div>
          
          <div class="phone">
            <p><?php echo $phoneno; ?></p>
            <i class="fas fa-phone"></i>
          </div>
        </div>
      </div>
      <hr />
      <div class="objective">
        <div class="obj-heading grey">
          <i class="fas fa-bullseye icon"></i>
          <h2>Objectve</h2>
        </div>
        <p>
        <?php echo $obj; ?>
        </p>
      </div>
      <div class="Internship">
        <div class="obj-heading grey">
          <i class="fas fa-bullseye icon"></i>
          <h2>Internship</h2>
        </div>
        <p>
        <?php echo $internship; ?>
        </p>
      </div>
      <div class="education">
        <div class="ed-heading grey">
          <i class="fas fa-school icon"></i>
          <h2>Education</h2>
        </div>

        <table>
          <tr>
            <th>Board</th>
            <th>Institution</th>
            <th>Year of passing</th>
            <th>Percentage/GPA</th>
          </tr>
          <tr>
            <td><?php echo $euniv; ?></td>
            <td><?php echo $ename; ?></td>
            <td><?php echo $epass; ?></td>
            <td><?php echo $ecgpa; ?></td>
          </tr>
          <tr>
            <td><?php echo $cboard; ?></td>
            <td><?php echo $cname; ?></td>
            <td><?php echo $cpass; ?></td>
            <td><?php echo $c12th; ?></td>
          </tr>
          <tr>
            <td><?php echo $sboard; ?></td>
            <td><?php echo $sname; ?></td>
            <td><?php echo $spass; ?></td>
            <td><?php echo $s10th; ?></td>
          </tr>
        </table>
      </div>
      <div class="skills">
          <div class="skills-heading grey">
                <i class="fas fa-tools icon"></i>
                <h2>Skills</h2>
          </div>

        <ul>
          <li><?php echo $skill1; ?></li>
          <li><?php echo $skill2; ?></li>
          <li><?php echo $skill3; ?></li>
        </ul>
      </div>
      <div class="activities">
        <div class="act-heading grey">
          <i class="fab fa-creative-commons-nd icon"></i>
          <h2>Activities</h2>
        </div>
        <p>
        <?php echo $activities; ?>
        </p>
      </div>
    </div>
  </body>
</html>
