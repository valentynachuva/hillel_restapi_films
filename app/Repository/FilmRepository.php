<?php

namespace App\Repository;


use App\Films;

class FilmRepository implements FilmRepositoryInterface
{
    /**
     * @var Films
     */
    private $model;

    public function __construct()
    {
        $this->model = app(Films::class);
    }

    /**
     * @param string $title
     * @return Films|null
     */
    public function findFilmByTitle(string $title): ?Films
    {
        $film = $this->model->whereLike('title', $title)->first();
        return $film;
    }

    /**
     * @param array $data
     * @return int
     */
    public function addFilm(array $data): int
    {
        // TODO: Implement addFilm() method.
    }

}