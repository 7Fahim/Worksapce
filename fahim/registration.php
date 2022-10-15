<?php
include 'helper.php';
?>

<html>
<?php getHeader("Login/Registration"); ?>
<body>
<?php getNavBar("registration"); ?>

<div class="container">
    <div class="row">
        <div class="col-md-6">
            <div class="container login-container center">
                <form action="<?php echo getLink("registration") ?>" method="post">
                    <h2>Login</h2>
                    <?php

                    if (($_SERVER['REQUEST_METHOD'] === 'POST') && isset($_POST["login"])) {
                        $email = htmlspecialchars(strip_tags($_POST["login_email"]));
                        $password = htmlspecialchars(strip_tags($_POST["login_password"]));

                        echo findUser($email, $password);
                    }

                    ?>
                    <input type="hidden" name="login" value="login">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Email address</label>
                        <input type="email" name="login_email" class="form-control" id="exampleInputEmail1" placeholder="Enter Email">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Password</label>
                        <input type="password" name="login_password" class="form-control" id="exampleInputPassword1"
                               placeholder="Enter Password">
                    </div>
                    <button type="submit" class="btn btn-default">Submit</button>
                </form>
            </div>

        </div>
        <div class="col-md-6">
            <div class="container registration-container center">
            <form action="<?php echo getLink("registration") ?>" method="post">
                    <h2>Registration</h2>

                    <?php

                    if (($_SERVER['REQUEST_METHOD'] === 'POST') && isset($_POST["registration"])) {
                        $firstname = htmlspecialchars(strip_tags($_POST["firstname"]));
                        $surname = htmlspecialchars(strip_tags($_POST["surname"]));
                        $email = htmlspecialchars(strip_tags($_POST["email"]));
                        $password = htmlspecialchars(strip_tags($_POST["password"]));

                        $isValidName = strlen(isValid("firstname")) == 0;
                        $isValidSurname = strlen(isValid("surname")) == 0;
                        $isValidPassword = strlen(isValid("password")) == 0;

                        if ($isValidName && $isValidSurname && $isValidPassword) {
                            if (checkIfEmailExist($email) != 0) {
                                createNewUser($firstname, $surname, $email, $password);
                            } else {
                                echo "User with this email already exist!";
                            }
                        }
                    }

                    ?>

                    <input type="hidden" name="registration" value="registration">
                    <div class="form-group">
                        <label for="firstname">Firstname</label>
                        <input type="text" name="firstname" class="form-control" id="firstname" placeholder="Type your first name">
                        <?php echo isValid("firstname"); ?>
                    </div>

                    <div class="form-group">
                        <label for="firstname">Surname</label>
                        <input type="text" name="surname" class="form-control" id="surname" placeholder="Type your first name">
                        <?php echo isValid("surname"); ?>
                    </div>

                    <div class="form-group">
                        <label for="exampleInputEmail1">Email address</label>
                        <input type="email" name="email" class="form-control" id="exampleInputEmail1" placeholder="Email">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Create Password</label>
                        <input type="password" name="password" class="form-control" id="exampleInputPassword1"
                               placeholder="Type New Password">
                        <?php echo isValid("password"); ?>
                    </div>
                    <button type="submit" class="btn btn-default">Submit</button>
                </form>
            </div>
        </div>
    </div>
</div>




<?php

function isValid($selector)
{
    if (($_SERVER['REQUEST_METHOD'] === 'POST') && isset($_POST["registration"])) {
        $item = htmlspecialchars(strip_tags($_POST[$selector]));

        if (strlen($item) < 3) {
            return "invalid. Need at least 3 characters";
        }

        if (strlen($item) > 50) {
            return "invalid. Max 50 characters allowed";
        }
    }
}

?>
<?php getFooter(); ?>
</body>
</html>