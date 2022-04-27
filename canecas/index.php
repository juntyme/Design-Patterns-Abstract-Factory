<?php

interface CanecaFactoryInterface
{
    public function makeCanecaTime(): CanecaTimeInterface;
    public function makeCanecaMoveis(): CanecaMovieInterface;
}

class CanecaFactory implements CanecaFactoryInterface
{

    public function makeCanecaTime(): CanecaTimeInterface
    {
        return new CanecaTime;
    }
    public function makeCanecaMoveis(): CanecaMovieInterface
    {
        return new CanecaMovie;
    }
}

interface CanecaTimeInterface
{
    public function info(string $time);
}

interface CanecaMovieInterface
{
    public function info(string $movie);
}

class CanecaTime implements CanecaTimeInterface
{
    public function info(string $time)
    {
        return "Create Caneca Time {$time}";
    }
}

class CanecaMovie implements CanecaMovieInterface
{
    public function info(string $movie)
    {
        return  "Create Caneca Movie {$movie}";
    }
}

class createCaneca
{
    public function create(CanecaFactoryInterface $caneca)
    {
        var_dump($caneca->makeCanecaTime()->info('Palmeiras'));
    }
}

$caneca = new CreateCaneca;
$caneca->create(new CanecaFactory);
