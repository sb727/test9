<!DOCTYPE html5>
<head lang="en">
    <title>Hotel Detail Description</title>
    <meta charset="UTF-8">
    <meta name="Auther" content="Travelo">
    <meta name="Keywords" content="Travelo">
    <meta name="Description" content="This is Travelo Site.">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="image/x-icon" href="img/favicon.png">
    <link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="../css/mystyle.css">
</head>
<body>
    <div class="container">
       <img src="../img/slide_<?php echo $hotel['name']; ?>.png" class="img-rounded" alt="Cinque Terre" width="504" height="436">
       <div class="slide-detail">
            <h3 class="sub-title-sm"><?php echo $hotel['name']; ?></h3>
            <p class="sub-desc-blu"><?php echo $hotel['location']; ?></p>
            <p class="sub-desc-date"><?php echo $hotel['description']; ?></p>
       </div>
    </div>
</body>
</html>