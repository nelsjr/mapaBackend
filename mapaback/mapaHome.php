<?php 
$mealFlavour = [
    1 => [
        "flavour" => "King Batata Doce",
        "carbo" => "Batata Doce",
        "protein" => "Frango",
        "vegetable" => "Brócolis",
        "additional" => "Não possui",
        "seasoning" => "Sal, orégano",
        "image" => "images/kingBatataDoce.jpg"
    ],

    2 => [
        "flavour" => "Arroz c/Carne Móida",
        "carbo" => "Arroz",
        "protein" => "Carne Móida",
        "vegetable" => "Brócolis, cenoura",
        "additional" => "Feijão Preto",
        "seasoning" => "Sal, coentro e chimichurri",
        "image" => "images/carneMoidaArroz.png"
    ],

    3 => [
        "flavour" => "Maromba",
        "carbo" => "Batata Doce",
        "protein" => "Frango",
        "vegetable" => "Não possui",
        "additional" => "Não possui",
        "seasoning" => "Não possui",
        "image" => "images/maromba.jpg"
    ],

    4 => [
        "flavour" => "King Premium",
        "carbo" => "Arroz",
        "protein" => "Frango, ovo",
        "vegetable" => "Brócolis, abobrinha, pimentão",
        "additional" => "Não possui",
        "seasoning" => "Sal, alho, noz moscada",
        "image" => "images/premium.jpg"
    ],

    5 => [
        "flavour" => "Escondidinho de frango",
        "carbo" => "Mandioca",
        "protein" => "Frango",
        "vegetable" => "Não possui",
        "additional" => "Queijo",
        "seasoning" => "Sal, paprica",
        "image" => "images/escondidinhoFrango.jpg"
    ],

    6 => [
        "flavour" => "Nhoque de batata doce",
        "carbo" => "Batata Doce",
        "protein" => "Carne moída",
        "vegetable" => "Não possui",
        "additional" => "Não possui",
        "seasoning" => "Sal, paprica",
        "image" => "images/nhoqueCarne.jpg"
    ],

    7 => [
        "flavour" => "Strogonoff de Frango",
        "carbo" => "Arroz",
        "protein" => "Frango",
        "vegetable" => "Não possui",
        "additional" => "Batata",
        "seasoning" => "Sal, alho, cebola, alecrim",
        "image" => "images/strgonoffFrango.webp"
    ],

    8 => [
        "flavour" => "Macarrão King",
        "carbo" => "Macarrão",
        "protein" => "Carne moída",
        "vegetable" => "Não possui",
        "additional" => "Molho de tomate",
        "seasoning" => "Sal, alho",
        "image" => "images/macarraoCarneMoida.jpg"
    ]
];

?>
<!DOCTYPE html>
<head>
    <link rel="stylesheet" href="mapa.css">
</head>
<main>
    <section class="header">
    <nav id="menu-h">
        <img class="logo" src="images/logo.jpg" alt="Logo"/>
        <ul class="menu">
            <a href="#">Sobre</a>
            <a href="#">Quem Somos</a>
            <a href="#">Contato</a>
        </ul>
    </nav>
    </section>
    <section class="main">
        <div class="banner">
            <img class="banner-img" src="images/banner.jpg" alt="Banner" />
        </div>
        <div>
            <h1>Confira nossas marmitas</h1>
            <div class="meal-container">
                <?php foreach($mealFlavour as $key => $meal): ?>
                <div class="meal">
                    <img class="meal-image" src="<?= $meal["image"];?>"/>
                    <span><?= $meal["flavour"]?></span>
                    <a class="meal-button" href='mapaDetails.php?id=<?= $key ?>'>Ver Mais</a>
                </div>
                <?php endforeach ?>
            </div>
        </div>
    </section>
    <section class="footer">
        <h1 class="footer-title">Quer saber mais?</h1>
        <div class="footer-info-container">
            <div class="info-links">
                <h4>Nossas Páginas</h4>
                <span>Home</span>
                <span>Blog</span>
                <span>Conheça a Dona Rita</span>
                <span>Contato</span>
            </div>
            <div class="info-links">
                <h4>Links Úteis</h4>
                <span>Pólitica de privacidade</span>
                <span>Aviso Legal</span>
                <span>Termos de Uso</span>
            </div>
            <div class="info-links">
                <h4>Sobre o Projeto</h4>
                <span>Projeto de divulgação das marmitas Dona Rita</span>
            </div>
        </div>
    </section>
</main>
