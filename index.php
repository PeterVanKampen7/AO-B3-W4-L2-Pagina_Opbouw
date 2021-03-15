<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style/style.css">
    <title>Fantasy Books</title>
</head>
<body>
    <div id="content">      
        <?php 
            include("includes/header.php");      
            
            if(isset($_GET["page"])){
                include("includes/".$_GET["page"].".php");
            } else { 
                include("includes/home.php");
            }
            
            include("includes/footer.php"); 
        ?>
    </div>   
</body>
</html>