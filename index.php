<html>
<head></head>
<body>
<header>
    <link rel="stylesheet" href="style.css">
</header>
<section class="main">
    <div class="action-container js-toggleLight">Toggle light</div>
    <div class="action-container js-toggleWater">Toggle Water</div>
</section>
<footer></footer>
<script
    src="https://code.jquery.com/jquery-3.3.1.js"
    integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60="
    crossorigin="anonymous"></script>
<script>
    $(".js-toggleLight").on("click",function () {
        $.post( "http://192.168.1.25/toggleLight.php", function(e) {
            console.log(e)
        })
    })
    $(".js-toggleWater").on("click",function () {
        $.post( "http://192.168.1.25/toggleWater.php", function(e) {
            console.log(e)
        })
    })

</script>
</body>
</html>
<?php
/**
 * Created by PhpStorm.
 * User: KevinNabeth
 * Date: 01/11/2018
 * Time: 22:12
 */