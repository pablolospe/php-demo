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

function get_until_message(int $days): string
{
    return match (true) {
        $days === 0 => "se estrena HOY!",
        $days === 1 => "se estrena mañana",
        $days === 2 => "se estrena pasado mañana",
        $days < 7   => "se estrena esta semana",
        $days < 30  => "se estrena este mes",
        default     => "se estrena en $days días"
    };
};
$until_message = get_until_message($data['days_until'])
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
                <?= "<b> $data[title] </b> $until_message" ?>
                <br>
                <?= "Fecha de estreno: " . date('d-m-Y', strtotime($data['release_date']))  ?>
                <br>
                <?= "Y lo próximo es <b>" .  $data['following_production']['title'] . '<b/>' ?>
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

    hgroup,
    article {
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
        transition: filter 0.3s, transform 0.9s;
    }
    
    @media (prefers-color-scheme: light) {
        body {
            background-color: #ffffff;
            color: #000000;
        }
        img:hover {
            transform: 1s;
            filter: drop-shadow(6px 6px 16px black);
            transform: scale(0.8) rotate(720deg);
        }
        header,
        footer {
            background-color: #f0f0f0;
        }

        a {
            color: #007bff;
        }
    }

    /* Estilos específicos para el modo oscuro */
    @media (prefers-color-scheme: dark) {
        body {
            background-color: #121212;
            color: #ffffff;
        }
        img:hover {
            transform: 1s;
            filter: drop-shadow(6px 6px 16px white);
            transform: scale(0.8) rotate(720deg);
        }

        header,
        footer {
            background-color: #1e1e1e;
        }

        a {
            color: #66b2ff;
        }
    }
</style>