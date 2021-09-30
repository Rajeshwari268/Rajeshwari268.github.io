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
?>

<html>
    <head>
    <link rel = "stylesheet" href="details.css"> 
    </head>
    <body>
          <center><h1>Professional info</h1> </center>
            <form name="dataPersonal" action="finalCV.php" method="POST">
            <table>
                <th><h2> Educational details <h2> </th>
                <tr>
                    <td><h2> School Name <h2> </td>
                    <td> <input type="text" name="txtSchoolName" required>
                    </td>
                </tr>
                <tr>
                    <td><h2> 10th percentage/CGPA<h2> </td>
                    <td> <input type="text" name="txt10th" required>
                    </td>
                </tr>
                <tr>
                    <td><h2> 10th board </td>
                    <td> <input type="text" name="txtSchoolBoard" required>
                    </td>
                </tr>
                <tr>
                    <td> <h2> Year of passing of 10th<h2> </td>
                    <td> <input type="text" name="txtSchoolPassing" required>
                    </td>
                </tr>
                <tr>
                    <td><h2>College Name<h2></td>
                    <td> <input type="text" name="txtCollegeName" required>
                    </td>
                </tr>
                <tr>
                    <td><h2>12th percentage/CGPA<h2> </td>
                    <td> <input type="text" name="txt12th" required>
                    </td>
                </tr>
                <tr>
                    <td><h2>12th board<h2> </td>
                    <td> <input type="text" name="txtCollegeBoard" required>
                    </td>
                </tr>
                <tr>
                    <td><h2>Year of passing of 12th<h2></td>
                    <td> <input type="text" name="txtCollegePassing" required>
                    </td>
                </tr>
                <tr>
                    <td><h2>Engineering college name<h2></td>
                    <td> <input type="text" name="txtEngg" required>
                    </td>
                </tr>
                <tr>
                    <td><h2>University name<h2></td>
                    <td> <input type="text" name="txtUniversity" required>
                    </td>
                </tr>
                <tr>
                    <td><h2>CGPA/percentage<h2></td>
                    <td> <input type="text" name="txtEnggCGPA" required>
                    </td>
                </tr>
                <tr>
                    <td><h2>Year of passing of Engineering<h2></td>
                    <td> <input type="text" name="txtEnggPassing" required>
                    </td>
                </tr>
                <tr>
                    <td><h2>College<h2> </td>
                    <td> <input type="text" name="txtCollege" required>
                    </td>
                    <td>
                        <input type="date" name="dataCollege">
                    </td>
                </tr>
                </tr>
                    <td>
                        <input type="submit" name="submit">
                    </td>
                </tr>
                
            </table>
            <input type="hidden" name="txtFirstName" value="<?php echo $fname; ?>">
            <input type="hidden" name="txtLastName" value="<?php echo $lname; ?>">
            <input type="hidden" name="rdogender" value="<?php echo $gender; ?>">
            <input type="hidden" name="txtPhoneno" value="<?php echo $phoneno; ?>">
            <input type="hidden" name="txtEmail" value="<?php echo $email; ?>">
            <input type="hidden" name="country" value="<?php echo $country; ?>">

            <input type="hidden" name="txtObj" value="<?php echo $obj; ?>">
            <input type="hidden" name="txtSkill1" value="<?php echo $skill1; ?>">
            <input type="hidden" name="txtSkill2" value="<?php echo $skill2; ?>">
            <input type="hidden" name="txtSkill3" value="<?php echo $skill3; ?>">
            <input type="hidden" name="txtActivities" value="<?php echo $activities; ?>">
            <input type="hidden" name="txtIntern" value="<?php echo $internship; ?>">
            </form>
    </body>
</html>