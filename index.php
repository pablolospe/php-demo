<?php
const API_URL = "https://whenisthenextmcufilm.com/api";
$ch = curl_init(API_URL);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$result = curl_exec($ch);
$data = json_decode($result, true);
curl_close($ch);
//define('LOGO_URL', 'https://upload.wikimedia.org/wikipedia/commons/thumb/2/27/PHP-logo.svg/1280px-PHP-logo.svg.png');
//var_dump($data)
?>

<head>
    <meta charset="UTF-8" />
    <title>Next Marvel Movie</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@picocss/pico@2/css/pico.classless.min.css" />
</head>

<main>
    <hgroup>
        <h1>
            <?= "La próxima peli de Marvel"; ?>
        </h1>
    </hgroup>
    <section>
        <img src="<?= "$data[poster_url]" ?>" alt="Poster" width="200">
        <img src=<?php echo $data['following_production']['poster_url']; ?> alt="Poster" width="200">
    </section>

    <article>
        <p>
            <?= "Faltan $data[days_until] días para el estreno de <b> $data[title] </b>" ?>
        </p>
        <p>
            <?= "Y la próxima es <b>" .  $data['following_production']['title'] . '<b/>' ?>
        </p>
    </article>
</main>




<style>
    :root {
        color-scheme: light dark;
    }

    body {
        display: grid;
        place-content: center;
    }
    section, hgroup{
        display: flex;
        justify-content: center;
    }
    img, p {
        border: solid 2px black;
        border-radius: 1rem;
        text-align: center;
        padding: 0.5rem;
    }
    ul {
        display: flex;
        flex-direction: row;
        gap: 2rem;
    }
</style>