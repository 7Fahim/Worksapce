<?php
include 'helper.php';
?>

<html>
<?php getHeader("Gallery"); ?>
<body>
<?php getNavBar("gallery"); ?>

<div class="container gallery-container">

    <h1>Our Products<span class="rss"><a href="rss.php">(rss)</a></span></h1>

    <p class="page-description text-center"></p>

    <div class="tz-gallery">

        <div class="row">
        
       
        
            <div class="col-sm-12 col-md-4">
                <a class="lightbox" href="Images\p7.webp">
                    <img src="Images\p7.webp" alt="Equipments Images">
                </a>
            </div>

            <div class="col-sm-6 col-md-4">
                <a class="lightbox" href="Images\p1.png ">
                    <img src="Images\p1.png" alt="Equipments Images">
                </a>
            </div>

            <div class="col-sm-6 col-md-4">
                <a class="lightbox" href=" Images\p4.webp">
                    <img src="Images\p4.webp" alt="Equipments Images">
                </a>
            </div>

        
            <div class="col-sm-12 col-md-8">
                <a class="lightbox" href="Images\youcef-chenzer-Zwrrfoh4VSM-unsplash.jpg">
                    <img src="Images\youcef-chenzer-Zwrrfoh4VSM-unsplash.jpg" alt="Equipments Images">
                </a>
            </div>
            <div class="col-sm-6 col-md-4">
                <a class="lightbox" href="Images\pp.png ">
                    <img src="Images\pp.png " alt="Equipments Images">
                </a>
            </div>


            <div class="col-sm-6 col-md-4">
                <a class="lightbox" href="Images\free-waight-multy-home-gym-500x500.jpg">
                    <img src="Images\free-waight-multy-home-gym-500x500.jpg">
                </a>
            </div>
            

        </div>

    </div>

</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.8.1/baguetteBox.min.js"></script>
<script>
    baguetteBox.run('.tz-gallery');
</script>

<?php getFooter(); ?>
</body>
</html>