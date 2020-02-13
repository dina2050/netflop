<?php 
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

?>

<?php
$db = new PDO('mysql:host=localhost;dbname=netflop', "root", "plop");

     if(isset($_POST["title"]) && isset($_POST["synopsis"]) && isset($_POST["thumbnail"])&& isset($_POST["category"]) ){
         if(!isset($_GET["id"])){

             $sql="INSERT INTO video (titre, synopsis, thumbnail,category) VALUES (?,?,?,?)";
             $stmt= $db->prepare($sql);
             $stmt->execute([$_POST["title"],$_POST["synopsis"],$_POST["thumbnail"],$_POST["category"]]);
         }
         else{
            $req = $db->query('UPDATE video SET titre = "' .$_POST["title"].'", synopsis= "'.$_POST["synopsis"]. '", thumbnail="'.$_POST["synopsis"]. '",category="'.$_POST["category"]. '" WHERE id="' .$_GET["id"].'"');
         }
        
    }
    if (isset($_GET["id"])){

        $req = $db->query('SELECT * FROM video WHERE id="'.$_GET["id"].'"');
        $movie = $req->fetch();
    }
    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Netflop | Admin - Edition</title>
    <link rel="stylesheet" href="../node_modules/@fortawesome/fontawesome-free/css/all.min.css">
    <link rel="stylesheet" href="../static/css/style.css">
</head>
<body>
    <main id="admin">
        <h1>Edition</h1>
        <form method="POST">
            <label for="title">Titre</label>
            <input type="text" id="title" name="title" value="<?php echo $movie["titre"];?>">
    
            <label for="synopsis">Synopsis</label>
            <textarea name="synopsis" id="synopsis" cols="30" rows="10"><?php echo $movie["synopsis"];?></textarea>
    
            <label for="thumbnail">Affiche</label>
            <input type="text" id="thumbnail" name="thumbnail" value="<?php echo $movie["thumbnail"];?>">
    
            <label for="category">Category</label>
            <select name="category" id="category">
            <?php
            if (isset($_POST["category"])){
                
                echo $_POST["category"];
                    
                }
                
                ?>
                <option  value="recent">Ajouts récents</option>
                <option selected value="movie">Film</option>
                <option  value="serie">Série</option>
           
            </select>
            <input type="submit" value="Envoyer">
        </form>
    </main>
</body>
</html>