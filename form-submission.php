<!DOCTYPE html>
<html>
    <head>
        <meta charset = "utf-8">
        <title>Registration form</title>
        <h1>Registration form</h1>
    </head>
    <body>
        <form action="php-validation.php"
        method="POST">
        <fieldset>
            <legend>Basic Information</legend>
            <label for="fname">First Name:</label>
            <input type="text" id="fname" name="fname" value="<?php echo htmlspecialchars($firstName)?>"> <br><br>
            <?php if(isset($firstName_error)){ ?>
                <p><?php echo $firstName_error ?></p>
                
            <?php } ?>
            <label for="lname">Last Name:</label>
            <input type="text" id="lname" name="lname" value="<?php echo htmlspecialchars($lastName)?>"> <br><br>
            <?php if(isset($lastName_error)){ ?>
                <p><?php echo $lastName_error ?></p>
                
            <?php } ?>
            <label for="gender">Gender:</label>
            <input type="radio" id="male" name="male" value="male">
            <label for="male">Male</label>
            <input type="radio" id="female" name="female" value="female">
            <label for="female">Female</label><br><br>
            <?php if(isset($gender_error)){ ?>
                <p><?php echo $gender_error ?></p>
                
            <?php } ?>
            <label for="dob">Date of birth:</label>
            <input type="date" id="dob" name="dob"><br> <br>

            <?php if(isset($dob_error)){ ?>
                <p><?php echo $dob_error ?></p>
                
            <?php } ?>

            <label for="religion">Religion:</label>
            <select name="religion" id="religion">
                <option value="islam">Islam</option>
                <option value="hinduism">Hinduism</option>
                <option value="christianity">Christianity</option>
                <option value="buddhism">Buddhism</option>
            </select>
            <?php if(isset($religion_error)){ ?>
                <p><?php echo $religion_error ?></p>
                
            <?php } ?>

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
            <input type="email" id="email" name="email" value="<?php echo htmlspecialchars($email)?>"> <br> <br>

            <?php if(isset($email_error)){ ?>
                <p><?php echo $email_error ?></p>
                
            <?php } ?>

            <label for="website">Personal Website Link</label>
            <input type="url" id="website" name="website">
        </fieldset>

        <fieldset>
        <legend>Account Information</legend>
        <label for="userName">Username:</label>
        <input type="text" id="userName" name="userName" value="<?php echo htmlspecialchars($username)?>"> <br><br>

        <?php if(isset($username_error)){ ?>
                <p><?php echo $username_error ?></p>
                
            <?php } ?>

        <label for="password">Password:</label>
        <input type="password" id="password" name="password" value="<?php echo htmlspecialchars($password)?>"> <br><br>

        <?php if(isset($password_error)){ ?>
                <p><?php echo $password_error ?></p>
                
            <?php } ?>

        </fieldset>

        <input class="register_button" type="submit" value="REGISTER">
    </form>
    </body>
</html> 