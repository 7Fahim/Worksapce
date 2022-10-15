<?php
include 'helper.php';
?>

<html>
<?php getHeader("Information"); ?>
<body>
<?php getNavBar("featured"); ?>

<div class="container">
    <div class="row1">
        <div class="col-md-9">
            <h1>Our top three featured wearable fitness products of the month.</h1>
            <br>
            <h2>These are our top selling wearable fitness products.  </h2>
            <div class="row1 workshop-content fitness-content">
            <div class="col-md-6">
                    <img src="Images\3555c62fb28a659aa19e2ede8fcebe00.png" class="img-responsive img-rounded" alt="Wearable fitness products image">
                </div>   
            <br>
            <br>
            <div class="col-md-6">
                    <h2 class="text-center">
                        FITNESS TRACKERS

                    </h2>

                    <div>
                        The current boom in fitness technology really began with the basic fitness tracker. Worn around
                        your wrist like a bracelet,
                        this wellness staple — which started simply as way to track how many steps you took per day —
                        has grown into a fan favorite for keeping up with all sorts of metrics. You can now monitor your
                        heart rate or even track how much shuteye you get each night!
                    </div>

                    <div class="top-margin-10">
                        <div class="button">
                            <a href="contact.php">Buy Now</a>
                        </div>
                    </div>

                </div>
                <div class="col-md-6">
                    <img src="images/ft.jpg" class="img-responsive img-rounded" alt="Fitness Tracker Image">
                </div>
            </div>

            <div class="row1 workshop-content watch-content">
                <div class="col-md-6">
                    <h2 class="text-center">
                        SMARTWATCHES

                    </h2>

                    <div>
                        Smartwatches are kind of like the overachieving little brother of the fitness tracker. With more options and capabilities, smart watches give you all the health and fitness data of a traditional fitness tracker with the additional perks of texting, music, phone calls, and internet access. It's basically like having a tiny smartphone strapped to your wrist!
                    </div>

                    <div class="top-margin-10">
                        <div class="button">
                            <a href="contact.php">Buy Now</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <img src="Images\smart watch.jpg" class="img-responsive img-rounded" alt="Smart Watch Image">
                </div>
            </div>

            <div class="row1 workshop-content ring-content">
                <div class="col-md-6">
                    <h2 class="text-center">
                        SMART RINGS

                    </h2>

                    <div>
                        Tracking your workouts and measuring your results can be as easy as sliding some cutting-edge fitness technology onto your finger. With sensors inside the band of smart rings, you can measure the metrics you care about most and enjoy a battery life that lasts up to three days. Of all the options, this piece of wearable teach is definitely the smallest and lightest.
                    </div>

                    <div class="top-margin-10">
                        <div class="button">
                            <a href="contact.php">Buy Now</a>
                        </div>
                    </div>
                </div>
                <br>
                <br>

                <div class="col-md-6">
                    <img src="images/rings.jpg" class="img-responsive img-rounded" alt="Smart Rings Image">
                </div>
            </div>
        </div>
        <div class="col-md-2">
            <h2 class="all">Wearable Fitness Technology Categories</h2>
            <br>
            <ul>
                <li class="fitness">FITNESS TRACKERS</li>
                <br>
                <br>
                <li class="watch">SMARTWATCHES</li>
                <br>
                <br>
                <li class="ring">SMART RINGS</li>
                <br>
                <br>

            </ul>
        </div>
    </div>
</div>

<?php getFooter(); ?>
<script>
    $(function () {
        $('.fitness').click(function () {
            $('.workshop-content').hide();
            $('.fitness-content').show();
        });

        $('.watch').click(function () {
            $('.workshop-content').hide();
            $('.watch-content').show();
        });

        $('.ring').click(function () {
            $('.workshop-content').hide();
            $('.ring-content').show();
        });

        $('.all').click(function(){
            $('.workshop-content').show();
        });

    });

</script>
</body>
</html>