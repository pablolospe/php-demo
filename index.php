<?php

require_once 'consts.php';
require_once 'functions.php';
require_once 'classes/NextMovie.php';

$next_movie = NextMovie::fetch_and_create_movie(API_URL);
$data = $next_movie->get_data();
$until_message = $next_movie->get_until_message();
// require 'functions.php'; //=> usar sinel  _once si necesitamos importar mas de una vez el módulo
// include 'archivo-inexistente.php'; // -> el Include es como el require, pero no rompe

// $data = get_data(API_URL);
// $until_message = get_until_message($data['days_until'])
?>

<?php render_template('head', $data); ?>
<?php render_template('main', array_merge(
    $data,
    ["until_message" => $until_message]
)); ?>
<?php render_template('styles'); ?>


