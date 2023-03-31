<!DOCTYPE html>
<html>
<head>

        <meta charset="UTF-8">
    <title>Informations sur un médicament</title>
        <link rel="stylesheet" type="text/css" href="VUE/style.css">
        <link rel="stylesheet" type="text/css" href="VUE/css/bootstrap.css">
        <div class="container">
            <!--<iframe src="VUE/menu.php" width="100%" height="60px" frameborder="0"></iframe>-->
            <div class="row">
                <div class=" col-3">
                    <a href="index.php">
                        <img src="VUE/lelogo.png" class="img-responsive d-inline-block align-top" alt="LOGO GSB" width="300">
                    </a>
                </div>


                <div class="col-9">

                    <?php require_once "VUE/menu.php";?>

                </div>
    </head>

</head>
<body>
<h1>Informations sur un médicament</h1>
<h2>Nom médicament : </h2>
<?php echo $nomMedoc ?>
<h2>Effet thérapeutique(s) :</h2>
<?php foreach ($effetsTerap as $unEffetTerap){
   echo $unEffetTerap[1];
   echo "<br>";
}?>
<h2>Effet secondaire(s)</h2>
<?php foreach ($effetsSecond as $unEffetSecond){
    echo $unEffetSecond[1];
	echo "<br>";
}?>
</body>
</html>
