<?php

interface LivroFactoryInterface
{
    public function makeDramaLivro(): LivroInterface;
    public function makeComedyLivro(): LivroInterface;
}

class LivroFactory implements LivroFactoryInterface
{
    public function makeDramaLivro(): LivroInterface
    {
        return new LivroDrama;
    }
    public function makeComedyLivro(): LivroInterface
    {
        return new LivroComedy;
    }
}

class EbookFactory implements LivroFactoryInterface
{
    public function makeDramaLivro(): LivroInterface
    {
        return new EbookDrama;
    }
    public function makeComedyLivro(): LivroInterface
    {
        return new EbookComedy;
    }
}


interface LivroInterface
{
    public function info();
}

class LivroComedy implements LivroInterface
{
    public function info()
    {
        return 'Livro de Comédia';
    }
}

class LivroDrama implements LivroInterface
{
    public function info()
    {
        return 'Livro de Drama';
    }
}


class EbookComedy implements LivroInterface
{
    public function info()
    {
        return 'Ebook de Comédia';
    }
}

class EbookDrama implements LivroInterface
{
    public function info()
    {
        return 'Ebook de Drama';
    }
}

class CreateBook
{
    public function create(LivroFactoryInterface $livro)
    {
        var_dump($livro->makeDramaLivro()->info());
    }
}

$livro = new CreateBook;
$livro->create(new EbookFactory);
