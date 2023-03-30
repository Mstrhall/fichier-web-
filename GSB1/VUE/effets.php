<!DOCTYPE html>
<html>
  <head>
    <title>Informations sur un médicament</title>
  </head>
  <body>
    <h1>Informations sur un médicament</h1>
    <h2>Nom médicament : </h2>
    <?php echo $nomMedoc ?>
    <h2>Effet thérapeutique(s) :</h2>
    <?php foreach ($effetsTerap as $unEffetTerap){
      echo $unEffetTerap;
    }?>
    <h2>Effet secondaire(s)</h2>
    <?php foreach ($effetsSecond as $unEffetSecond){
      echo $unEffetTerap;
    }?>
  </body>
</html>