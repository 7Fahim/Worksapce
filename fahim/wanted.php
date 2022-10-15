<?php
include 'helper.php';
?>

<html>
<?php getHeader("Wanted"); ?>
<body>
<?php getNavBar("wanted"); ?>
<h2> User: </h2>
<?php echo getLoggedInUserName()?>

<div class="container">
    <?php if (isUserLoggedIn()): ?>

        <div class="row">
            <div class="col-md-6">
                <form action="<?php echo getLink("wanted") ?>" method="post">
                    <?php

                    if (($_SERVER['REQUEST_METHOD'] === 'GET') && isset($_GET["equipment_id"])) {
                        $id = $_GET["equipment_id"];
                        $result = findUsersEquipmentsById($_SESSION["id"], $id);

                        $name = $result[0]['name'];
                        $description = $result[0]['description'];
                        $contact = $result[0]['contact_info'];
                    }

                    if (($_SERVER['REQUEST_METHOD'] === 'POST') && isset($_POST["wanted"])) {
                        $name = htmlspecialchars(strip_tags($_POST["name"]));
                        $description = htmlspecialchars(strip_tags($_POST["description"]));
                        $contact = htmlspecialchars(strip_tags($_POST["contact"]));
                        $id = htmlspecialchars(strip_tags($_POST["id"]));

                        $isValidName = strlen(isValid("name", 3, 100)) == 0;
                        $isValidContact = strlen(isValid("contact", 3, 100)) == 0;
                        $isValidDescription = strlen(isValid("description", 3, 500)) == 0;

                        if ($isValidName && $isValidDescription && $isValidContact) {
                            saveEquipment($id, $name, $description, $contact, $_SESSION["id"]);
                            echo readSessionMessage();

                            $id = 0;
                            $result = findUsersEquipmentsById($_SESSION["id"], $id);

                            $name = "";
                            $description = "";
                            $contact = "";
                        }
                    }
                    ?>
                    <h2>Add/Update</h2>

                    <input type="hidden" name="wanted" value="wanted">
                    <input type="hidden" name="id" value="<?php echo isset($id) ? $id : 0 ?>">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Name</label>
                        <input type="text" name="name" class="form-control"
                               value="<?php echo isset($name) ? $name : "" ?>">
                        <?php echo isValid("name", 3, 100) ?>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Contact</label>
                        <input type="text" name="contact" class="form-control"
                               value="<?php echo isset($contact) ? $contact : "" ?>">
                        <?php echo isValid("contact", 3, 100) ?>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Description</label>
                        <textarea name="description"
                                  class="form-control"><?php echo isset($description) ? $description : "" ?> </textarea>
                        <?php echo isValid("description", 3, 500) ?>
                    </div>
                    <button type="submit" class="btn btn-default">Submit</button>
                </form>
            </div>
            <div class="col-md-6 list-scroll">
                <h2>My listings</h2>
                <?php showUsersEquipments($_SESSION["id"]) ?>
            </div>
        </div>

        <div>
            <form action="<?php echo getLink("wanted") ?>" method="post">
                <input type="hidden" name="search" value="search">
                <div class="form-group">
                    <label for="exampleInputEmail1">Search by name</label>
                    <input type="text" name="search_name" class="form-control">
                </div>
                <button type="submit" class="btn btn-default">Search</button>
            </form>
        </div>

        <div>
            <?php
            if (($_SERVER['REQUEST_METHOD'] === 'POST') && isset($_POST["search"])) {
                showSearchResult($_POST["search_name"]);
            }

            ?>
        </div>


    <?php else: ?>
        <h2>Please login to view details</h2>
    <?php endif; ?>
</div>
<?php
function isValid($selector, $minLength, $maxLength)
{
    if (($_SERVER['REQUEST_METHOD'] === 'POST') && isset($_POST["wanted"])) {
        $item = htmlspecialchars(strip_tags($_POST[$selector]));

        if (strlen($item) < $minLength) {
            return "invalid. Need at least $minLength characters";
        }

        if (strlen($item) > $maxLength) {
            return "invalid. Max $maxLength characters allowed";
        }
    }
}

?>
<?php getFooter(); ?>
</body>
</html>