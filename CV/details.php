<html>
    <head>
        <link rel = "stylesheet" href="bg.css"> 
    </head>
    <body>
        <div class="body">
         <center> <h1>Custom resume builder</h1> </center>
            <form name="dataPersonal" action="bioData1.php" method="POST">
            <table> 
                 <th><h2>Personal info </h2> </th>
                <tr>
                    <td> <h3> First Name: <h3></td>
                    <td> <input type="text" name="txtFirstName" required>
                    </td>
                </tr>
                <tr>
                    <td><h3>Last Name:<h3></td>
                    <td> <input type="text" name="txtLastName" >
                    </td>
                </tr>
                <tr>
                    <td><h3>Gender:<h3></td>
                    <td> <h3> <input type="radio" name="rdogender" value="male" required> 
                    Male
                    <input type="radio" name="rdogender" value="female" required> 
                    Female
                   <h3> </td>
                </tr>
                <tr>
                    <td> <h3> Phone number <h3> </td>
                    <td><input type="text" name="txtPhoneno"></td>
                </tr>
                <tr>
                    <td><h3> Email <h3> </td>
                    <td> <input type="email" name="txtEmail" required>
                    </td>
                </tr>
                <tr>
                    <td><h3> Country <h3> </td>
                    <td> <h3> <select name="country">
                        <option> <h3> India </h3> </option>
                        <option> <h3> USA </h3> </option>
                        <option> <h3> London </h3> </option> </h3>
                    </select>
                  </h3>
                </td>

                </tr>
                <tr> <h3>
                    <td>
                        <input type="submit" name="submit">
                    </td>
                </h3>
                </tr>
            </table>
            </form>
    </body>
</html>