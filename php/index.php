<?php 
    require __DIR__ . "/../database.php"
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>
    <main>
        <div class="container">
            <div class="row row-cols-4">
                <?php foreach ($database as $value) { ?>
                    <div class="container-box">    
                        <img src=<?php echo $value["poster"] ?>></img>
                        <h2><?php echo $value["title"] ?></h2>
                        <p><?php echo $value["author"] ?></p>
                        <p><?php echo $value["year"] ?></p>
                    </div>
                <?php } ?>
            </div>
        </div>
    </main>
</body>
</html>