<?php
include 'helper.php';
?>

<html>
<?php getHeader("Contact"); ?>
<body>
<?php getNavBar("contact"); ?>

<div class="container">
    <h1>Contact</h1>
    <form action="contact.php" method="post" class="half-width">
        <div class="form-group">
            <label for="firstname">Name</label>
            <input type="text" name="name" class="form-control" id="firstname" placeholder="Type Your Name">
        </div>

        <div class="form-group">
            <label for="exampleInputEmail1">Email address</label>
            <input type="email" name="email" class="form-control" id="exampleInputEmail1" placeholder="Tyoe Your Email">
        </div>

        <div class="form-group">
            <label for="exampleInputPassword1">Write Your Message</label>
            <textarea name="message" class="form-control" rows="10"></textarea>
        </div>
        <button type="submit" class="btn btn-default button">Submit</button>
    </form>
</div>

<?php getFooter(); ?>
</body>
</html>