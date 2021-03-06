<?php

namespace JohanQuiroga\Container;

abstract class Provider
{
    /**
     * @var \JohanQuiroga\Container\Container
     */
    protected $container;

    public function __construct(Container $container)
    {
        $this->container = $container;
    }

    abstract public function register();
}