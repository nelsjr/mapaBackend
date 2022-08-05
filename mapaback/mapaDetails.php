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
            <div class="meal-container">
                <?php $id = preg_replace('/\D/', '', $_SERVER['REQUEST_URI']); ?>
                <?php foreach($mealFlavour as $key => $meal): ?>
                    <?php if($id == $key): ?>
                        <div class="meal-details">
                            <h1><?= $meal['flavour'] ?></h1>
                            <img src="<?= $meal['image'] ?>" alt="Meal"/>
                            <h2>Ingredientes</h2>
                            <ul class="ingredient">
                                <span>Carboidrato: <?= $meal['carbo'] ?>.</span>
                                <span>Proteina: <?= $meal['protein'] ?>.</span>
                                <span>Salada: <?= $meal['vegetable'] ?>.</span>
                                <span>Adicional: <?= $meal['additional'] ?>.</span>
                                <span>Temperos: <?= $meal['seasoning'] ?>.</span>
                            </ul>
                        </div>
                    <?php endif ?>
                <?php endforeach ?>
            </div>
        </div>
    </section>
</main>