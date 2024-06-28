<?php 
    session_start();

    include("config.php");
    if(!isset($_SESSION['valid'])){
        header("Location: index.php");
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Home</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <div class="nav">
        <div class="logo">
            <p><a href="home.php">Riedlenčių parduotuvė</a></p>
        </div>

        <div class="right-links">

                <?php
                
                
                //$id = $_SESSION['valid'];
                //$query = mysqli_query($con, "SELECT*FROM users WHERE Id='$id'");


                //while($result = mysqli_fetch_assoc($query)){
                    //$res_Uname = $result['Username'];
                    //$res_Email = $result['Email'];
                    //$res_Age = $result['Age'];
                    //$res_id = $result['Id'];
                //}

                //echo "<a href='edit.php?Id= $res_id'>Change Profile</a>";
                ?>


            <a href="crud/index.php"> <button class="btn">Forms</button></a>
            <a href="logout.php"> <button class="btn">Log out</button></a>
            
        </div>
    </div>
    <main>

        <!--<div class="main-box top">
            <div class="top">
                <div class="box">
                    <p>Hello <b> <?php //echo $res_Uname ?> </b>, Welcome</p>
                </div>
                <div class="box">
                    <p>Your email is <b><?php //echo $res_Email ?></b>.</p>
                </div>
            </div>
            <div class="bottom">
                <div class="box">
                    <p>And you are <b><?php //echo $res_Age ?></b>.</p>
                </div>
            </div>
            --></div>
    </main>
<div class="p-5">
    <div class="row">
    <div class="card" style="width: 18rem; margin: 30px;">
  <img src="https://ksd-images.lt/display/aikido/store/3703844133645737d6ea52f4fb25bee3.jpg?h=742&w=816" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Riedlentė Nextreme Cruiser Land, juoda. </h5>
    <p class="card-text">Prekės atspalvis gali skirtis nuo matomo nuotraukoje. Prekės aprašymas yra bendro pobūdžio, jame nebūtinai yra paminėtos visos prekės savybės. Internetinėje parduotuvėje skelbiamos prekių kainos, akcijos gali skirtis nuo prekių kainų, akcijų taikomų prekybos, aptarnavimo centruose.</p>
    <a href="#" class="btn btn-primary">Daugiau info.</a>
  </div>
</div>

<div class="card" style="width: 18rem; margin: 30px;">
  <img src="https://ksd-images.lt/display/aikido/cache/441614b387a45e77a9d6ed63a76c72dc.jpeg?h=742&w=816" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Riedlentė Outliner 3108-16, mėlyna/juoda/geltona</h5>
    <p class="card-text">Išskirtinė OUTLINER riedlentė pasižymi universalumu – ji tinkama naudoti tiek patalpose, tiek lauke. Didelio skersmens guminiai ratukai užtikrina lengvą ir sklandų važiavimą ant įvairių paviršių. Mediena suteikia papildomą tvirtumo ir amortizacijos jausmą, padėdama išlaikyti stabilumą ir patogumą kiekviename judesyje.</p>
    <a href="#" class="btn btn-primary">Daugiau info.</a>
  </div>
</div>

<div class="card" style="width: 18rem; margin: 30px;">
  <img src="https://ksd-images.lt/display/aikido/cache/20e8f22c823005281fe9dd694c737f76.jpeg?h=742&w=816" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Riedlentė Outliner P2206, balta</h5>
    <p class="card-text">Išskirtinė OUTLINER riedlentė pasižymi universalumu – ją galima naudoti tiek patalpose, tiek lauke. Ratukai iš poliuretano suteikia švelnų ir lengvą važiavimą ant įvairių paviršių. Kokybiškas plastikas užtikrina tvirtumą ir stabilumą.</p>
    <a href="#" class="btn btn-primary">Daugiau info.</a>
  </div>
</div>

<div class="card" style="width: 18rem; margin: 30px;">
  <img src="https://ksd-images.lt/display/aikido/store/03b751a0a0c52a4f1ef5ead280ab1bb1.jpg?h=742&w=816" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Riedlentė Enero Plastic, rožinė</h5>
    <p class="card-text">RIEDLENTĖ ENERO PLASTIC Šio modelio privalumų sąrašą pradeda patrauklus ir modernus dizainas. Iš plastiko pagamintas denis užtikrina didelį riedlentės patvarumą, lyginant su tradiciniais modeliais, pagamintais iš klijuotos medinės lentos. Viršutinis, slydimui atsparus paviršius užtikrina sukibimą ir stabilumą, todėl važiuodami neprarasite pusiausvyros. </p>
    <a href="#" class="btn btn-primary">Daugiau info.</a>
  </div>
</div>

<div class="card" style="width: 18rem; margin: 30px;">
  <img src="https://ksd-images.lt/display/aikido/cache/4912dcc37fa00e3ef7a03ee74d964241.jpeg?h=742&w=816" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Riedlentė Spokey E-Rush, ruda/juoda</h5>
    <p class="card-text">Spokey riedlentėje derinamos klasikinės riedlentės savybės ir elektros variklio sukuriama varomoji jėga. Valdymas belaidžiu Bluetooth nuotolinio valdymo pulteliu leis padidinti greitį iki 20 km/h, važiuoti atbuline eiga ir stabdyti.</p>
    <a href="#" class="btn btn-primary">Daugiau info.</a>
  </div>
</div>

<div class="card" style="width: 18rem; margin: 30px;">
  <img src="https://ksd-images.lt/display/aikido/store/a372e2cd841268fe781931775bbd8dcb.jpeg?h=742&w=816" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Riedlentė Razor RipStik Air Pro, juoda/pilka</h5>
    <p class="card-text">Ripstik Air – tai įranga mėgstantiems išsiskirti. Vaikams važiuoti riedlente smagu, nes, kai jie įvaldo judėjimą su Ripstik Air, gatvėje nelieka nei vieno, kuris į juos nežiūrėtų. Važinėjimas Ripstik Air yra idealus sprendimas tiems, kurie nori patirti banglenčių ar snieglentės vairavimo jausmą sausumoje, be vandens ir sniego. Nauja, itin lengva ir aerodinamiška lenta leidžia atlikti net sudėtingiausius triukus.</p>
    <a href="#" class="btn btn-primary">Daugiau info.</a>
  </div>
</div>

<div class="card" style="width: 18rem; margin: 30px;">
  <img src="https://ksd-images.lt/display/aikido/cache/713e648eab509dad94880f4cd64e2904.jpeg?h=742&w=816" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Riedlentė Raven Neox, juoda/pilka</h5>
    <p class="card-text">Riedlentė Raven Neox sukurta dideliam greičiui ir patogiam važiavimui. Raven Neox priklauso transporto / kreiserinėms lentoms – ilgiausioms Long Bold šeimos lentoms. Naudojant ilgą pagrindą galima pasiekti didelį greitį minimaliomis pastangomis.</p>
    <a href="#" class="btn btn-primary">Daugiau info.</a>
  </div>
</div>


    </div>
    </div>

    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>