<?php
$title = 'Home';
include 'includes/header.php';
?>
<div id="side-bar"></div>

<button id="scroll" title="Go to top">Top</button>


<?php include 'includes/help.php' ?>


<button class="flow">Need help?</button>

<div class="container mainpage">
    <h1>September</h1>

    <?php


    foreach ($a as $paragraph) {
        echo '<p>'.$paragraph.'</p>';
    }
    ?>



</div>



<div class="vid">
    <h4>Latvia in september</h4>
<iframe width="560" height="315" src="https://www.youtube.com/embed/T4OTenjOGKg" frameborder="0" allow="accelerometer;
autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
    <p>Remember outweigh do he desirous no cheerful. Do of doors water ye guest. We if prosperous comparison middletons
        at. Park we in lose like at no. An so to preferred convinced distrusts he determine. In musical me my placing
        clothes comfort pleased hearing. Any residence you satisfied and rapturous certainty two. Procured outweigh as
        outlived so so. On in bringing graceful proposal blessing of marriage outlived. Son rent face our loud near.</p>
</div>

<?php include 'includes/footer.php' ?>