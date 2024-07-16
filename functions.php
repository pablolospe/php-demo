<?php

declare(strict_types=1);

function render_template(string $template, array $data = [])
{
    extract($data); // el método extract extrae como variables los elementos de un array asociativo
    require "templates/$template.php";
};

function get_data(string $url): array
{
    $result = file_get_contents($url);
    $data = json_decode($result, true);
    return $data;
};

function get_until_message(int $days): string
{
    return match (true) {
        $days === 0 => "se estrena HOY!!!!!",
        $days === 1 => "se estrena mañana!!!!",
        $days === 2 => "se estrena pasado mañana!!!",
        $days < 7   => "se estrena esta semana!!",
        $days < 30  => "se estrena este mes!",
        default     => "se estrena en $days días"
    };
};
