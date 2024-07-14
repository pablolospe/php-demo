<?php
$name = 'Pablo Lospe';
$isDev = true;
$age = 42;

define('LOGO_URL', 'https://upload.wikimedia.org/wikipedia/commons/thumb/2/27/PHP-logo.svg/1280px-PHP-logo.svg.png');

$output = $isOld ? "Eres viejo, lo siento" : "Eres jóven, adelante!";
$isOld = $age > 50;
const MIDDLENAME = 'Xavier';

$languajes = ['Javascript', 'PHP'];
$languajes[2] = 'Python';
$languajes[] = 'Typescript'; //agrega al final tipo .PUSH

$person = [
    'name' => 'Pol',
    'lastname' => 'Lospennato',
    'languajes' => ['Javascript', 'PHP'],
];
$person['name'] = 'Pablo';
$person['languajes'][] = 'Python'
?>

<?php
if ($isOld) {
    echo  "<p>Eres viejo</p>";
} elseif ($isDev) {
    echo  "<p>Eres dev</p>";
} else {
    echo  "<p>Eres Jóven</p>";
}
?>

<?php
$age = 18;

$matchOutput = match (true) {
    $age < 2 => "Baby",
    $age < 13 => "Child",
    $age <= 19 => "Teenager",
    $age > 19 => "Young adult",
    $age >= 40 => "Old adult"
};

var_dump($matchOutput);
?>

<img src="<?= LOGO_URL ?>" alt="PHP Logo" width="200">
<h1>
    <?= "¡Mi primera app!"; ?>
</h1>
<ul>
    <?php foreach ($languajes as $languaje) : ?>
        <li><?= $languaje ?></li>
    <?php endforeach; ?>
</ul>
<div>
    <?= "La persona se llama $person[name] $person[lastname] y estudia los lenguajes "
    ?>
    <?php foreach ($person['languajes'] as $languaje) : ?>
        <span><?= $languaje ?>,</span>
    <?php endforeach; ?>
    etc.
</div>

<h3>
    <?= "Yo soy " . $name . ". Tengo " . $age; ?>
    <br>
    <?= $output; ?>
</h3>

<?php if ($isOld) : ?>
    <p>Eres viejo</p>
<?php elseif ($isDev) : ?>
    <p>Eres dev</p>
<?php else : ?>
    <p>Eres jóven</p>
<?php endif; ?>





<style>
    :root {
        color-scheme: light dark;
    }

    body {
        display: grid;
        place-content: center;
    }
    p {
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