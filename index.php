<?php require __DIR__ . '/database.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Php Dischi</title>

    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Fredoka+One&family=Montserrat:wght@100;200;300;400;500&family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;1,300;1,400;1,500;1,600;1,700&family=PT+Sans:ital,wght@0,400;0,700;1,400;1,700&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;1,100;1,300;1,400&display=swap">
</head>
<body>
    <header>
        <!--Logo Header-->
        <img src="../assets/img/logo-spotify.png" alt="logo" class="small-logo">
    </header>

    <main>
        <div class="albums-container">
            <div class="cards">
                
            <?php foreach($database as $disc) { ?>
                <div class="card">
                    <img class="album-poster" src="<?php echo $disc['poster']; ?>" alt="<?php echo $disc['title']; ?>">
                    <h4><?php echo $disc['title']; ?></h4>
                    <h5><?php echo $disc['author']; ?></h5>
                    <h5><?php echo $disc['year']; ?></h5>
                </div>
            <?php } ?>

            </div>
        </div>
    </main>
</body>
</html>