<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "gym_db";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    echo "DB Connection failed";

    die("Connection failed: " . $conn->connect_error);
}

function getLink($link)
{
    if ($link == "/" || $link == "") {
     
         return "index.php";
     }

    return $link . ".php";
}

function getLoggedInUserName()
{
    if (session_status() === PHP_SESSION_NONE) {
        session_start();
    }
    if (isset($_SESSION['firstname']) && isset($_SESSION['surname'])) {
        return $_SESSION ['firstname'] ."_". $_SESSION['surname'];
    }

}

function getHeader($title)
{
    echo "
    
<head>
    <title>$title</title>
    <link rel='stylesheet' href='https://cdn.jsdelivr.net/npm/bootstrap@3.4.1/dist/css/bootstrap.min.css'>
    <script src='https://code.jquery.com/jquery-3.6.0.min.js'></script>
    <script src='https://cdn.jsdelivr.net/npm/bootstrap@3.4.1/dist/js/bootstrap.min.js'></script>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <link rel='stylesheet' href='css/main.css'/>
</head>";
}

function getNavBar($active)
{
    $cssClass = array(
        "home" => $active == "home" ? "active" : "",
        "info" => $active == "info" ? "active" : "",
        "wanted" => $active == "wanted" ? "active" : "",
        "workshop" => $active == "workshop" ? "active" : "",
        "gallery" => $active == "gallery" ? "active" : "",
        "contact" => $active == "contact" ? "active" : "",
        "featured" => $active == "featured" ? "active" : "",
        "registration" => $active == "registration" ? "active" : "",
    );

    echo "
<nav class='navbar navbar-default'>
    <div class='container-fluid'>
        <div class='navbar-header'>
            <button type='button' class='navbar-toggle collapsed' data-toggle='collapse'
                    data-target='#bs-example-navbar-collapse-1' aria-expanded='false'> <span class='sr-only'>Toggle navigation</span>
                <span class='icon-bar'></span>
                <span class='icon-bar'></span>
                <span class='icon-bar'></span>
            </button>
            <a class='navbar-brand' href='index.php'>HOME GYM EQUIPMENT</a>
        </div>

        <div class='collapse navbar-collapse' id='bs-example-navbar-collapse-1'>
            <ul class='nav navbar-nav navbar-right'>
                <li class='" . $cssClass["home"] . "'><a href='" . getLink("") . "'>Home</a></li>
                <li class='" . $cssClass["info"] . "'><a href='" . getLink("info") . "'>Information</a></li>
                <li class='" . $cssClass["wanted"] . "'><a href='" . getLink("wanted") . "'>Wanted</a></li>
                <li class='" . $cssClass["workshop"] . "'><a href='" . getLink("workshop") . "'>Workshop</a></li>
                <li class='" . $cssClass["gallery"] . "'><a href='" . getLink("gallery") . "'>Gallery</a></li>
                <li class='" . $cssClass["contact"] . "'><a href='" . getLink("contact") . "'>Contact</a></li>
                <li class='" . $cssClass["featured"] . "'><a href='" . getLink("featured") . "'>Featured</a></li>
                <li class='" . $cssClass["registration"] . "'>" . getLoginButton() . "</li>
            </ul>
        </div>
    </div>
</nav>
";
}

function getLoginButton()
{
    if (isUserLoggedIn()) {
//        return "
//
//        <form method='post' class='logout-form'>
//
//        <input type='hidden' name='logout' value='logout'>
//        <input type='submit' class='btn btn-primary' name='logout' value='logout'>
//
//        </form>
//
//        ";

        return "<a href='" . getLink("logout") . "'>Logout</a>";
    } else {
        return "<a href='" . getLink("registration") . "'>Login / Registration</a>";
    }
}

function getFooter()
{
    echo "
<footer class='text-center text-lg-start bg-white text-muted'>
  <section class='d-flex justify-content-center justify-content-lg-between p-4 border-bottom'>
    <div class='me-5 d-none d-lg-block'>
      <span>Get connected with us on social networks:</span>
    </div>
    <br><br>

    <div>
      <a href='' class='me-4 link-grayish'>
        <i class='fab fa-facebook-f'></i>
      </a>
      <a href='' class='me-4 link-grayish'>
        <i class='fab fa-twitter'></i>
      </a>
      <a href='' class='me-4 link-grayish'>
        <i class='fab fa-google'></i>
      </a>
      <a href='' class='me-4 link-grayish'>
        <i class='fab fa-instagram'></i>
      </a>
      <a href='' class='me-4 link-grayish'>
        <i class='fab fa-linkedin'></i>
      </a>
      <a href='' class='me-4 link-grayish'>
        <i class='fab fa-github'></i>
      </a>
    </div>
  </section>

  <section class=''>
    <div class='container text-center text-md-start mt-5'>
      <!-- Grid row -->
      <div class='row mt-3'>
        <!-- Grid column -->
        <div class='col-md-3 col-lg-4 col-xl-3 mx-auto mb-4'>
          <!-- Content -->
          <h6 class='text-uppercase fw-bold mb-4'>
            <i class='fas fa-gem me-3 text-grayish'></i>At Home Gym Equipment.
          </h6>
          <p>
          Give your workout more variety than ever with our accessories, from warmup to cooldown. Increase your body’s capacities every day, from stability to mobility, from power to speed..
          </p>
        </div>
        <!-- Grid column -->
        
        <!-- Grid column -->
        <div class='col-md-55 col-lg-2 col-xl-2 mx-auto mb-4'>
          <!-- Links -->
          <h6 class='text-uppercase fw-bold mb-4'>
            Social Links
            <br><br>
            <br>
            <ul>
                <li>
            
            <a href='https://www.facebook.com' title='Facebook' onclick='_gaq.push(['_trackSocial', 'Facebook', 'Follow', 'Footer', 'undefined', 'True']);'>
                      <img width='30' height='30' alt='Like us on Facebook' src='./images/fb.png'>
                    </a>
                  </li>
                  <br>
                  <li>
                    <a href='https://plus.google.com' title='Google+' onclick='_gaq.push(['_trackSocial', 'GooglePlus', 'Follow', 'Footer', 'undefined', 'True']);'>
                      <img width='30' height='30' alt='Follow us on Google+' src='./images/gplus.png'>
                    </a>
                  </li>
                  <br>
                  <li>
                    <a href='https://pinterest.com' target='_blank'>
                      <img width='30' height='30' alt='Follow us on Pinterest' src='./images/pin-badge.png'>
                    </a>
                  </li>
                <br>  
                  
                  <li>
                    <a  href='http://instagram.com' target='_blank'>
                      <img width='30' height='30' alt='Follow us on Instagram' src='./images/instagram-badge.png'>
                    </a>
                  </li>
                  <br>
                  
                  <li>
                    <a href='https://www.twitter.com' title='Twitter' target='_blank'>
                      <img width='67' height='30' alt='Follow us on Twitter' src='./images/twitter.png'>
                    </a>
                  </li>
                  <br>
                </ul>
        </div>

        <div class='col-md-3 col-lg-2 col-xl-2 mx-auto mb-4'>
          <h6 class='text-uppercase fw-bold mb-4'>
            Useful links
          </h6>
          <p>
            <a href='contact.php' class='text-reset'>Send a Message</a>
          </p>
          <p>
            <a href='Workshop.php' class='text-reset'>Order a repair</a>
          </p>
          <p>
            <a href='Wanted.php' class='text-reset'>Buy used euipments</a>
          </p>
          <p>
            <a href='rss.php' class='text-reset'>RSS FEED</a>
          </p>
          <p>
          <a href='registration.php' class='text-reset'> Login/Signup</a>
        </p>
        <p>
            <a href='info.php' class='text-reset'>Latest News</a>
          </p>
          <p>
            <a href='sitemap.php' class='text-reset'>Sitemap</a>
          </p>
          <p>
          <a href='index.php' class='text-reset'>Back to home</a>
          </p>
        </div>

        <div class='col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4'>
          <h6 class='text-uppercase fw-bold mb-4'>Contact Us</h6>
          <p><i class='fas fa-home me-3 text-grayish'></i> london, Uk</p>
          <p>
            <i class='fas fa-envelope me-3 text-grayish'></i>
            HGE@example.com
          </p>
          <p><i class='fas fa-phone me-3 text-grayish'></i> +44 5975217266</p>
          <p><i class='fas fa-print me-3 text-grayish'></i> +44 7975377566</p>
        </div>
      </div>
    </div>
  </section>
 

  <div class='text-center p-4' style='background-color: rgba(0, 0, 0, 0.025);'>
    © 2022 Copyright:
    <a class='text-reset fw-bold' href='index.php'>Home Gym Equipment</a>
  </div>

</footer>

    ";
}

function checkIfEmailExist($email)
{
    global $conn;
    $sql = "SELECT COUNT(id) FROM `login` WHERE email = '$email'";
    $result = $conn->query($sql);

    return $result->num_rows;
}

function createNewUser($firstname, $surname, $email, $password)
{
    global $conn;
    $sql = "INSERT INTO `login` (firstname , surname , email , password) VALUES ('$firstname','$surname','$email','$password')";
    $conn->query($sql);

}

function saveEquipment($id, $name, $desc, $contact, $user_id)
{
    global $conn;

    if ($id == 0) {
        $sql = "INSERT INTO `equipment` (name , description , created_by_id , contact_info) VALUES ('$name','$desc', $user_id,'$contact')";
    } else {
        $sql = "UPDATE `equipment` SET name = '$name', description = '$desc', contact_info = '$contact' WHERE id = $id AND created_by_id = $user_id";
    }

    if (session_status() === PHP_SESSION_NONE) {
        session_start();
    }

    if ($conn->query($sql)) {
        $_SESSION['message'] = "operation successful";
    } else {
        $_SESSION['message'] = "operation failed";
    }
}

function deleteEquipment($id, $user_id)
{
    global $conn;
    $sql = "DELETE FROM `equipment` WHERE id = $id AND created_by_id = $user_id";
    $conn->query($sql);
}

function findAllEquipment($name)
{
    global $conn;
    $sql = "SELECT * FROM `equipment` WHERE name like '%$name%'";
    $result = $conn->query($sql);

    return processEquipmentResult($result);
}

function getAllEquipment()
{
    global $conn;
    $sql = "SELECT * FROM `equipment`";
    $result = $conn->query($sql);

    return processEquipmentResult($result);
}

function findUsersEquipments($user_id)
{
    global $conn;
    $sql = "SELECT * FROM `equipment` WHERE created_by_id = $user_id";
    $result = $conn->query($sql);

    return processEquipmentResult($result);
}

function findUsersEquipmentsById($user_id, $id)
{
    global $conn;
    $sql = "SELECT * FROM `equipment` WHERE created_by_id = $user_id AND id=$id";
    $result = $conn->query($sql);

    return processEquipmentResult($result);
}

function processEquipmentResult($result)
{
    $equipments = array();

    if ($result->num_rows != 0) {
        for ($x = 0; $x < $result->num_rows; $x++) {
            $row = $result->fetch_assoc();

            if (!isset($row['id'])) {
                continue;
            }

            $temp = array(
                "id" => $row['id'],
                "name" => $row['name'],
                "description" => $row['description'],
                "created_by_id" => $row['created_by_id'],
                "contact_info" => $row['contact_info']
            );

            array_push($equipments, $temp);
        }
    }

    return $equipments;
}

function findUser($email, $password)
{
    global $conn;
    $ip = $_SERVER['REMOTE_ADDR'];

    $check_lock_q = $conn->query("SELECT * FROM `ip_lock`  WHERE ip = '$ip'");

    if ($check_lock_q->num_rows != 0) {
        $check_lock_cursor = $check_lock_q->fetch_assoc();

        $locked_at = $check_lock_cursor['locked_at'];

        $start_date = new DateTime($locked_at);
        $since_start = $start_date->diff(new DateTime(date('d-m-y h:i:s')));

        $minutesDiff = getTotalMinutes($since_start);

        if ($minutesDiff >= 10) {
            $conn->query("DELETE FROM `ip_lock`  WHERE ip = '$ip'");
        } else {
            $waitFor = 10 - $minutesDiff;
            return "Please wait for $waitFor minute(s)";
        }
    }

    $sql = "SELECT * FROM `login` WHERE email = '$email' AND password = '$password'";
    $result = $conn->query($sql);
    $row = $result->num_rows;


    if ($row == 1) {
        session_start();
        $row = $result->fetch_assoc();
        $user_id = $row["id"];
        $firstname = $row["firstname"];
        $surname = $row["surname"];
        $email = $row["email"];
        $_SESSION["id"] = $user_id;
        $_SESSION["firstname"] = $firstname;
        $_SESSION["surname"] = $surname;
        $_SESSION["email"] = $email;

        echo "here";

        header("Location:wanted.php");
    } else {

        $attempt_count_q = $conn->query("SELECT * FROM  `invalid_attempt_count` WHERE ip = '$ip'");
        $attempt_count_result = $attempt_count_q->fetch_assoc();

        if ($attempt_count_q->num_rows == 0) {
            $attempt_count = 0;
        } else {
            $attempt_count = $attempt_count_result['a_count'];
        }


        if ($attempt_count > 2) {
            $now = date('d-m-y h:i:s');
            $lock_table_sql = "INSERT INTO `ip_lock` (ip , locked_at) VALUES ('$ip', '$now')";

            if ($conn->query($lock_table_sql)) {
                $conn->query("DELETE FROM `invalid_attempt_count` WHERE ip = '$ip'");
            }

        } else {

            if ($attempt_count == 0) {
                $invalid_attempt_sql = "INSERT INTO `invalid_attempt_count` (ip , a_count) VALUES ('$ip', $attempt_count + 1)";
            } else {
                $updated_attempt_count = $attempt_count + 1;
                $invalid_attempt_sql = "UPDATE `invalid_attempt_count` SET a_count = $updated_attempt_count WHERE ip = '$ip'";
            }
            $conn->query($invalid_attempt_sql);
        }

        return "Username or Password Invalid";

    }

}

function getTotalMinutes($since_start)
{
    $minutes = $since_start->days * 24 * 60;
    $minutes += $since_start->h * 60;
    $minutes += $since_start->i;
    return $minutes;
}

function isUserLoggedIn()
{
    if (session_status() === PHP_SESSION_NONE) {
        session_start();
    }

    if (session_status() === PHP_SESSION_NONE) {
        return false;
    } else {

        if (isset($_SESSION["id"])) {
            return true;
        } else {
            return false;
        }
    }
}

function logout()
{
    if (session_status() === PHP_SESSION_NONE) {
        session_start();
    }

    if (isset($_SESSION['id'])) {
        unset($_SESSION['id']);
        unset($_SESSION['firstname']);
        unset($_SESSION['surname']);
    }
}

function readSessionMessage()
{
    if (session_status() === PHP_SESSION_NONE) {
        session_start();
    }

    if (isset($_SESSION['message'])) {
        $message = $_SESSION['message'];
        unset($_SESSION['message']);

        return "<div class='alert alert-info' role='alert'>$message</div>";
    }

}


function showUsersEquipments($userId)
{
    $equipments = findUsersEquipments($userId);
    $rows = "";
    for ($x = 0; $x < count($equipments); $x++) {
        $rows = $rows . "<tr>";
        $rows = $rows . "<th>" . $equipments[$x]['id'] . "</th>";
        $rows = $rows . "<th>" . $equipments[$x]['name'] . "</th>";
        $rows = $rows . "<th>" . $equipments[$x]['description'] . "</th>";
        $rows = $rows . "<th>" . $equipments[$x]['contact_info'] . "</th>";
        $rows = $rows . "<th>
                            <form>
                                <input type='hidden' name='equipment_id' value='" . $equipments[$x]['id'] . "'>
                                <button type='submit' class='btn btn-default'>Update</button>                        
                            </form>

                        </th>";
        $rows = $rows . "</tr>";
    }

    $table = "
    
    <div class='table-responsive'>
        <table class='table'>
           <thead>
                <tr>
                  <th scope='col'>#</th>
                  <th scope='col'>Name</th>
                  <th scope='col'>Description</th>
                  <th scope='col'>Contact</th>
                  <th scope='col'>Action</th>
                </tr>
          </thead>
          <tbody>
          $rows
          </tbody>
        </table>
    </div>
    ";
    echo $table;
}

function showSearchResult($name)
{
    $equipments = findAllEquipment($name);
    $rows = "";
    for ($x = 0; $x < count($equipments); $x++) {
        $rows = $rows . "<tr>";
        $rows = $rows . "<th>" . $equipments[$x]['id'] . "</th>";
        $rows = $rows . "<th>" . $equipments[$x]['name'] . "</th>";
        $rows = $rows . "<th>" . $equipments[$x]['description'] . "</th>";
        $rows = $rows . "<th>" . $equipments[$x]['contact_info'] . "</th>";
        $rows = $rows . "</tr>";
    }

    $table = "
    
    <div class='table-responsive'>
        <table class='table'>
           <thead>
                <tr>
                  <th scope='col'>#</th>
                  <th scope='col'>Name</th>
                  <th scope='col'>Description</th>
                  <th scope='col'>Contact</th>
                </tr>
          </thead>
          <tbody>
          $rows
          </tbody>
        </table>
    </div>
    ";
    echo $table;
}

function generateRssFeed()
{
    header( "Content-type: text/xml");
    echo "<?xml version='1.0' encoding='UTF-8'?>
 <rss version='2.0'>
 <channel>
 <title>HGE | RSS</title>
 <link>Note hosted yet!!!</link>
 <description>Home Gym Equipment</description>
 <language>en-us</language>";

    $equipments = getAllEquipment();
    $rows = "<items>";
    for ($x = 0; $x < count($equipments); $x++) {
        $rows = $rows . "<item>";
        $rows = $rows . "<title>" . $equipments[$x]['name'] . "</title>";
        $rows = $rows . "<description>" . $equipments[$x]['description'] . "</description>";
        $rows = $rows . "<contact>" . $equipments[$x]['contact_info'] . "</contact>";
        $rows = $rows . "</item>";
    }

    echo "$rows </items></channel></rss>";
}

?>