<?php
include 'helper.php';
?>

<html>
<?php getHeader("Logout"); ?>
<body>
<?php getNavBar("logout"); ?>


<div class="container">

    <?php
    if (($_SERVER['REQUEST_METHOD'] === 'POST') && isset($_POST["logout"])) {
       logout();
    }

    ?>

    <?php if (isUserLoggedIn()): ?>
        To logout please click below
        <form method='post' class='logout-form'>
            <input type='hidden' name='logout' value='logout'>
            <input type='submit' class='btn btn-primary' name='logout' value='logout'>
        </form>
    <?php else: ?>
        <h2>You are logged out</h2>
    <?php endif; ?>
</div>

<?php getFooter(); ?>
</body>
</html>