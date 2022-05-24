<?php 
    include require __DIR__."/assets/php/db.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="./assets/css/style.css">
    <title>vue dischi php</title>
</head>
<body>

    <header>
        <div class="container-fluid">
            <img src="./assets/img/" alt="">
        </div>
    </header>


    <main>
        <div class="container">
            <div class="row">

                <?php foreach ($dischi as $cover) { ?>
                
                <div class="card_dischi ">
                    <img class="img-fluid" src=" <?php echo $cover["poster"] ?>  " alt="<?php echo $cover["title"] ?>">
                    <h2 class="text-center text-white"><?php echo $cover["title"] ?></h2>
                    <p class="text-center"><?php echo $cover["author"] ?></p>
                    <p class="text-center"><?php echo $cover["year"] ?></p>
                </div>
                
                <?php } ?>

            </div>
        </div>
    </main>

    
</body>
</html>