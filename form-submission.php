<!DOCTYPE html>
<html>
    <head>
        <meta charset = "utf-8">
        <title>Registration form</title>
        <h1>Registration form</h1>
    </head>
    <body>

    <?php
            define("filepath", "data.txt");

            $fname= $lname= $gender = $dob = $religion = $email = $useName = $password = "";
            $fnameErr= $lnameErr = $genderErr = $dobErr = $religionErr = $emailErr = $userNameErr = $passwordErr = "";
            $successMessage = $errorMessage ="";
            $flag = false;
            if($_SERVER['REQUEST_METHOD'] === "POST"){
                $userName = $_POST['userName'];
                $password = $_POST['password'];

                if(empty($userName)) {
                    $userNameErr = "User name cannot be empty!";
                    $flag = true;
                }
                if(empty($password)){
                    $passwordErr = "password cannot be empty!";
                    $flag = true;
                }
                
                if(empty($fname)){
                    $fnameErr = "First name cannot be empty!";
                    $flag = true;
                }

                if(empty($lname)){
                    $lnameErr = "Last name cannot be empty!";
                    $flag = true;
                }

                if(empty($gender)){
                    $genderErr = "gender cannot be empty!";
                    $flag = true;
                }

                if(empty($dob)){
                    $dobErr = "Date of birth cannot be empty!";
                    $flag = true;
                }

                if(empty($religion)){
                    $religionErr = "password cannot be empty!";
                    $flag = true;
                }

                if(empty($email)){
                    $emailErr = "email cannot be empty!";
                    $flag = true;
                }

                if(!$flag){
                    $fname = test_input($fname);
                    $lname = test_input($lname);
                    $gender = test_input($gender);
                    $dob = test_input($dob);
                    $religion = test_input($religion);
                    $email = test_input($email);
                    $userName = test_input($userName);
                    $password = test_input($password);
                    $data = $fname . "," . $lname . "," . $gender . "," . $dob . "," . $religion . "," . $email . "," . $userName . "," . $password;
                    $result1 = write($data);
                    if($result1) {
                        $successMessage = "Successfully saved.";
                    }
                    else{
                        $errorMessage = "Error while saving!";
                    }
                    
                }
            }

            function write($content){
                $resource = fopen(filepath, "a");
                $fw = fwrite($resource, $content."
            \n");
            fclose($resource);
             return $fw;
            }


            function test_input($data) {
                $data = trim($data);
                $data = stripcslashes($data);
                $data = htmlspecialchars($data);
                return $data;
            }
        ?>


        <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>"
        method="POST">
        <fieldset>
            <legend>Basic Information</legend>
            <label for="fname">First Name:</label>
            <input type="text" id="fname" name="fname" > 
            <span style = "color : red;"><?php echo $fnameErr;?></span><br><br>
           
            <label for="lname">Last Name:</label>
            <input type="text" id="lname" name="lname" > 
            <span style = "color : red;"><?php echo $lnameErr;?></span> <br><br>
          
            <label for="gender">Gender:</label>
            <input type="radio" id="male" name="male" value="male">
            <label for="male">Male</label>
            <input type="radio" id="female" name="female" value="female">
            <label for="female">Female</label>
            <span style = "color : red;"><?php echo $genderErr;?></span><br><br>
           
            <label for="dob">Date of birth:</label>
            <input type="date" id="dob" name="dob">
            <span style = "color : red;"><?php echo $dobErr;?></span><br> <br>

          

            <label for="religion">Religion:</label>
            <select name="religion" id="religion">
                <option value="islam">Islam</option>
                <option value="hinduism">Hinduism</option>
                <option value="christianity">Christianity</option>
                <option value="buddhism">Buddhism</option>
            </select>
            <span style = "color : red;"><?php echo $religionErr;?></span>
        

        </fieldset>

        <fieldset>
            <legend>Contact Information</legend>
            <label for="presentAddress">Present Address:</label>
            <textarea name="presentAddress" id="presentAddress" cols="30" rows="10"></textarea> <br> <br>
            <label for="permanentAddress">Permanent Address:</label>
            <textarea name="permanentAddress" id="permanentAddress" cols="30" rows="10"></textarea> <br> <br>
            <label for="phone">Phone:</label>
            <input type="tel" id="phone" name="phone"> <br> <br>
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" > 
            <span style = "color : red;"><?php echo $emailErr;?></span><br> <br>

           

            <label for="website">Personal Website Link</label>
            <input type="url" id="website" name="website">
        </fieldset>

        <fieldset>
        <legend>Account Information</legend>
        <label for="userName">Username:</label>
        <input type="text" id="userName" name="userName" > 
        <span style = "color : red;"><?php echo $userNameErr;?></span><br><br>

        

        <label for="password">Password:</label>
        <input type="password" id="password" name="password" > 
        <span style = "color : red;"><?php echo $passwordErr;?></span><br><br>

        </fieldset>

        <input class="register_button" type="submit" value="REGISTER">
    </form>
        <span style = "color : green"><?php echo $successMessage; ?> </span> 
        <span style = "color : red"><?php echo $errorMessage; ?> </span>
    </body>
</html> 