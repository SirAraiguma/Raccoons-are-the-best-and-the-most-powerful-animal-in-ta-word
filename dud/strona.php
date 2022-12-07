<!DOCTYPE html>
<html lang="PL">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="styl.css" />

    <title>Moje ulubione zwierzątka UwU</title>
</head>
<body?

<div id="Naglowek">

<h2>Kiciunie</h2>  

</div>
<div id="Lewa_Strona">
    <a href="https://www.koty.pl/">Więcej UwUśnych kociaczków</a>
<br>    <a href="https://apetete.pl/blog/ciekawostki-o-kotach/?gclid=EAIaIQobChMIy8XNlLnn-wIVDKmyCh0MuwYREAAYASAAEgLAkfD_BwE">top 10 ciekawostek o kotkach *nie znałeś ich*</a>

</div>

<div id="Prawa_Strona"> 
Najsłodsze kotki na ziemi: <br>
<?php 
    $conn = mysqli_connect ("localhost","root","","kociaczki");
    $wynik = mysqli_query($conn,"SELECT id,imie,lat,rasa FROM koty");
    $ilosc_wierszy= mysqli_num_rows($wynik);
    for ($i=0; $i<$ilosc_wierszy; $i++)
    {
        $id=mysqli_fetch_array($wynik);
        echo $id["id"]." imie ".$id["imie"]." ".$id["lat"].$id["rasa"]." rasa "."<br>";
    };
    mysqli_close($conn); ?>

</div>
<div id="Prawa_Strona2"> 
<?php
    $dirname = "images/";
    $images = glob("$dirname*.{png,jpeg,jpg,gif}", GLOB_BRACE);
    foreach($images as $image) {
        ?>
        <img class="example-image img-responsive" src="<?php echo $image; ?>" />
    <?php    
    }
?>



</div>
<div id="Stopka">
Bartosz Mieluch
</div>

  

</body>
</html>