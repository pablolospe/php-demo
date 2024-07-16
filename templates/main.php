<main>
    <hgroup>
        <h3>
            <?= "Pol te dice la próxima peli de Marvel"; ?>
        </h3>
    </hgroup>

    <section>
        <img src="<?= $poster_url ?>" alt="Poster" width="200">
        <img src=<?php echo $following_production['poster_url']; ?> alt="Poster" width="200">
    </section>

    <article>
        <p>
            <?= "<b> $title </b> $until_message" ?>
            <br>
            <?= "Fecha de estreno: " . date('d-m-Y', strtotime($release_date))  ?>
            <br>
            <?= "Y lo próximo es <b>" .  $following_production['title'] . '<b/>' ?>
        </p>
    </article>
</main>