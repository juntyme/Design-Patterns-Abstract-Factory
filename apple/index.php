<?php
interface AppleFactoryInterface
{
    public function ipad(): AppleInterface;
    public function mac(): AppleInterface;
}

class AppleFactory implements AppleFactoryInterface
{
    public function ipad(): AppleInterface
    {
        return new Ipad;
    }
    public function mac(): AppleInterface
    {
        return new Mac;
    }
}

interface AppleInterface
{
    public function create();
}

class Ipad implements AppleInterface
{
    public function create()
    {
        return "fazendo um Ipad";
    }
}

class Mac implements AppleInterface
{
    public function create()
    {
        return "fazendo um Mac";
    }
}

class CreateApple
{
    public function create(AppleFactoryInterface $apple)
    {
        var_dump($apple->ipad()->create());
    }
}

$apple = new CreateApple;
$apple->create(new AppleFactory);
