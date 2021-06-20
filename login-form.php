<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LOGIN FORM</title>
</head>
<body>
        <h1>LOGIN</h1>

        <?php
            define("filepath", "data.txt");

            $useName = $password = "";
            $userNameErr = $passwordErr = "";
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
                if(!$flag){
                    $userName = test_input($userName);
                    $password = test_input($password);
                    $data = $userName . "," . $password;
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
        <label for="userName">Username:</label>
        <input type="text" id="userName" name="userName" >
        <span style = "color : red;"><?php echo $userNameErr;?></span> <br> <br>

        <label for="password">Password:</label>
        <input type="password" id="password" name="password" >

        <span style = "color : red;"><?php echo $passwordErr;?></span> <br> <br>

        <input class="register_button" type="submit" value="LOGIN">
        </form>
        <span style = "color : green"><?php echo $successMessage; ?> </span> 
        <span style = "color : red"><?php echo $errorMessage; ?> </span>

        <?php
        $fileData = read();
        $fileDataExplode = explode("\n", $fileData);

        echo "<ol>";
        function wrireadte($content){
            $resource = fopen(filepath, "r");
            $fz = filesize(filepath);
            $fr = "";
            if($fz > 0) {
                $fr = fread($resource, $fz);
            }
        fclose($resource);
         return $fr;
        }
        ?>

</body>
</html>