<?php

include "db.php";
session_start();

$SESSIONid = $_SESSION['productID'];


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>payment page</title>
    <link rel="stylesheet" href="/styles/style.css">
</head>

<body>
    <div class="payment">
        <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>

        <lottie-player src="https://lottie.host/608c2366-69b6-469e-8619-416a04882145/QgZBF8J6fu.json" background="transparent" speed="0.2" style="width: 300px; height: 300px;" loop autoplay></lottie-player>
        <p>Note : if your payment has been successful you get a product <br> link on your mail box so we request to use valid <br> email adress and also any query please contact</p>
        <form action="/pay/buy.php" method="post">
            <input type="email" name="email" placeholder="Enter you Email *" required>
            <input type="text" name="con" placeholder="Enter you contect optional">
            <button>pay</button>
        </form>
    </div>

</body>

</html>