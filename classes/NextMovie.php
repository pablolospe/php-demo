<?php

declare(strict_types=1);

class NextMovie
{
    // Constructor
    public function __construct(
        private string $title,
        private int $days_until,
        private array $following_production,
        private string $poster_url,
        private string $release_date,
    ) {}

    // Métodos

    public function get_until_message(): string
    {
        $days = $this->days_until;
        return match (true) {
            $days === 0 => "se estrena HOY!!!!!",
            $days === 1 => "se estrena mañana!!!!",
            $days === 2 => "se estrena pasado mañana!!!",
            $days < 7   => "se estrena esta semana!!",
            $days < 30  => "se estrena este mes!",
            default     => "se estrena en $days días"
        };
    }


    public static function fetch_and_create_movie(string $api_url): NextMovie
    {
        $result = file_get_contents($api_url);
        $data = json_decode($result, true);

        return new self(
            $data["title"],
            $data["days_until"],
            $data["following_production"],
            $data["poster_url"],
            $data["release_date"],
        );
    }
    public function get_data()
    {
        return get_object_vars($this);
    }
}
