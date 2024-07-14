<?php
declare(strict_types=1);

const API_URL = "https://whenisthenextmcufilm.com/api";

function get_data(string $url): array
{
    $result = file_get_contents($url);
    $data = json_decode($result, true);
    return $data;
};
$data = get_data(API_URL);
?>

<head>
    <meta charset="UTF-8" />
    <title>Next Marvel Movie</title>
    <link rel="icon" href="/assets/favicon.ico" type="image/x-icon">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@picocss/pico@2/css/pico.classless.min.css" />
</head>

<body>
    <main>
        <hgroup>
            <h3>
                <?= "Pol te dice la próxima peli de Marvel"; ?>
            </h3>
        </hgroup>
        <section>
            <img src="<?= "$data[poster_url]" ?>" alt="Poster" width="200">
            <img src=<?php echo $data['following_production']['poster_url']; ?> alt="Poster" width="200">
        </section>

        <article>
            <p>
                <?= "Faltan $data[days_until] días para el estreno de <b> $data[title] </b>" ?>
                <br>
                <?= "Se estrena el " . date('d-m-Y', strtotime($data['release_date']))  ?>
                <br>
                <?= "Y la próxima es <b>" .  $data['following_production']['title'] . '<b/>' ?>
            </p>
        </article>
    </main>
</body>



<style>
    :root {
        color-scheme: light dark;
    }

    body {
        display: grid;
        place-content: center;
    }

    hgroup {
        text-align: center;
    }

    section {
        display: flex;
        justify-content: space-between;
    }
    img {
        border-radius: 1rem;
        text-align: center;
        padding: 0.5rem;
        transition: filter 0.3s, transform 0.5s;
    }

    img:hover {
        transform: 1s;
        filter: drop-shadow(6px 6px 16px white);
        transform: scale(0.8) rotate(360deg);
    }
</style>