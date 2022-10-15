<?php
include 'helper.php';
?>

<html>
<?php getHeader("Main"); ?>
<body>
<?php getNavBar("home"); ?>

<div class="container">
  <h1>Our Products</h1>  
  <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
      <li data-target="#myCarousel" data-slide-to="3"></li>
      <li data-target="#myCarousel" data-slide-to="4"></li>
      
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner">
      <div class="item active">
        <img src="Images\Screenshot 2022-08-13 085614.png" alt="Los Angeles" style="width:100%;">
      </div>

      <div class="item">
        <img src="Images\s2.jpg" alt="Chicago" style="width:100%;">
      </div>
    
    
    <div class="item">
        <img src="Images\s4.png" alt="bike" style="width:100%;">
      </div>
      
      <div class="item">
        <img src="Images\s5.png" alt="bike" style="width:100%;">
      </div>
   
      

    <div class="item">
        <img src="Images\s6.png" alt="bike" style="width:100%;">
      </div>
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>


<div class="container">
    <div class="video-container">
        <video autoplay="autoplay" muted="muted" loop=""
               class="video">
            <source src="Videos\vid2.webm" type="video/webm">
        </video>
        <div class="centered">
            <h1>Book One to One live session with an expert.</h1>
            <div class="button">
                <a href="contact.php">Contact</a>
            </div>
        </div>
    </div>
</div>

<div class="container">
    <div class="video-container">
        <video autoplay="autoplay" muted="muted" loop=""
               class="video">
            <source src="Videos\vid1.webm" type="video/webm">
        </video>
        <div class="centered">
            <h1>Featured Product Of The Month.</h1>
            <div class="button">
                <a href="featured.php">Featured</a>
            </div>
        </div>
    </div>
</div>

<div class="modal" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Cookie</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <p> This Website uses cookies. Please Click Accept to continue enjoying our site!</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary" id="accept">Accept</button>
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
            </div>
        </div>
    </div>
</div>

<?php getFooter(); ?>

<script>
    function setCookie(cname, cvalue, min) {
        const d = new Date();
        d.setTime(d.getTime() + (min * 60 * 1000));
        let expires = "expires=" + d.toUTCString();
        document.cookie = cname + "=" + cvalue + ";" + expires + ";path=/";
    }

    function getCookie(cname) {
        let name = cname + "=";
        let decodedCookie = decodeURIComponent(document.cookie);
        let ca = decodedCookie.split(';');
        for (let i = 0; i < ca.length; i++) {
            let c = ca[i];
            while (c.charAt(0) == ' ') {
                c = c.substring(1);
            }
            if (c.indexOf(name) == 0) {
                return c.substring(name.length, c.length);
            }
        }
        return "";
    }

    $(function () {
        var cookie = getCookie('allow_cookie');

        if(!cookie) {
            $('.modal').modal('show');
        }

    });

    $('#accept').click(function(){
        $('.modal').modal('hide');
        setCookie('allow_cookie', 1, 1);
    });

    //"allow"


</script>
</body>
</html>