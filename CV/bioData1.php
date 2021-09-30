<?php
$fname=$_POST["txtFirstName"];
$lname=$_POST["txtLastName"];
$gender=$_POST["rdogender"];
$phoneno=$_POST["txtPhoneno"];
$email=$_POST["txtEmail"];
$country=$_POST["country"];
?>

<html>
    <head>
    <link rel = "stylesheet" href="details.css"> 
    </head>
    <body>
           <center> <h1>Custom resume builder</h1> </center>
            <form name="dataPersonal" action="bioData2.php" method="POST">
            <table>
                <th> <h2> Objective and others <h2> </th>
                <tr>
                   
                    <td><h2>Enter your objective<h2></td>
                    <td><textarea rows="4" cols="20" name="txtObj"></textarea required></textarea>
                    </td>
                </tr>
                <tr>
                    <td><h2>Enter your top 1 skill<h2></td>
                    <td> <input type="text" name="txtSkill1" required>
                    </td>
                </tr>
                <tr>
                    <td><h2>Enter your top 2 skill<h2></td>
                    <td><input type="text" name="txtSkill2"></td>
                </tr>
                <tr>
                    <td><h2>Enter your top 3 skill<h2></td>
                    <td><input type="text" name="txtSkill3"></td>
                </tr>
                <tr>
                    <td><h2>Tell something about your activities<h2></td>
                    <td><input type="text" name="txtActivities"></td>
                </tr>
                <tr>
                    <td><h2>Internship details<h2></td>
                    <td><textarea rows="4" cols="20" name="txtIntern" required></textarea></td>
                </tr>
                    <td>
                     <h2>   <input type="submit" name="submit"> <h2> 
                    </td>
                </tr>
                
            </table>
            <input type="hidden" name="txtFirstName" value="<?php echo $fname; ?>">
            <input type="hidden" name="txtLastName" value="<?php echo $lname; ?>">
            <input type="hidden" name="rdogender" value="<?php echo $gender; ?>">
            <input type="hidden" name="txtPhoneno" value="<?php echo $phoneno; ?>">
            <input type="hidden" name="txtEmail" value="<?php echo $email; ?>">
            <input type="hidden" name="country" value="<?php echo $country; ?>">
    </body>
</html>