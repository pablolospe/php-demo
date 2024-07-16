<?php

require_once 'consts.php';
require_once 'functions.php';
// require 'functions.php'; //=> usar sinel  _once si necesitamos importar mas de una vez el módulo
// include 'archivo-inexistente.php'; // -> el Include es como el require, pero no rompe

$data = get_data(API_URL);
$until_message = get_until_message($data['days_until'])
?>

<?php render_template('head', $data); ?>
<?php render_template('main', array_merge(
    $data,
    ["until_message" => $until_message]
)); ?>
<?php render_template('styles'); ?>


