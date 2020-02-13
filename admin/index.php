<?php
$db = new PDO('mysql:host=localhost;dbname=netflop', "root", "plop");?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Netflop | Admin</title>
    <link rel="stylesheet" href="../node_modules/@fortawesome/fontawesome-free/css/all.min.css">
    <link rel="stylesheet" href="../static/css/style.css">
</head>
<body>
    <main id="admin">
        <div class="heading-container">
            <h1>Les vidéos</h1>
            <a href="form.php"><i class="fa fa-plus"></i></a>
        </div>
        <!-- <ul>
            <li>
                <a href="form.php?id=1">
                    <img src="https://picsum.photos/id/78/1280/800" alt="Test thumbanil">
                    <div class="description">
                        <h2>Test</h2>
                        <i class="fas fa-edit"></i>
                    </div>
                </a>
            </li>
            <li>
                <a href="form.php?id='1'">
                    <img src="https://picsum.photos/id/78/1280/800" alt="Test thumbanil">
                    <div class="description">
                        <h2>Test</h2>
                        <i class="fas fa-edit"></i>
                    </div>
                </a>
            </li>
            <li>
                <a href="form.php?id='1'">
                    <img src="https://picsum.photos/id/78/1280/800" alt="Test thumbanil">
                    <div class="description">
                        <h2>Test</h2>
                        <i class="fas fa-edit"></i>
                    </div>
                </a>
            </li>
            <li>
                <a href="form.php?id='1'">
                    <img src="https://picsum.photos/id/78/1280/800" alt="Test thumbanil">
                    <div class="description">
                        <h2>Test</h2>
                        <i class="fas fa-edit"></i>
                    </div>
                </a>
            </li>
            <li>
                <a href="form.php?id='1'">
                    <img src="https://picsum.photos/id/78/1280/800" alt="Test thumbanil">
                    <div class="description">
                        <h2>Test</h2>
                        <i class="fas fa-edit"></i>
                    </div>
                </a>
            </li>
            <li>
                <a href="form.php?id='1'">
                    <img src="https://picsum.photos/id/78/1280/800" alt="Test thumbanil">
                    <div class="description">
                        <h2>Test</h2>
                        <i class="fas fa-edit"></i>
                    </div>
                </a>
            </li>
        </ul> -->
        <ul>
<?php
            $req = $db->query('SELECT * FROM video ');
        foreach ($req as $row){
        
        ?>
            <li>
                <a href="form.php?id=<?php echo $row["id"];?>">
                    <img src="<?php echo $row["thumbnail"];?>" alt="Test thumbanil">
                    <div class="description">
                        <h2>Test</h2>
                        <i class="fas fa-edit"></i>
                    </div>
                </a>
            </li>
        
        
        <?php } ?>
            </ul>
    </main>
</body>
</html>