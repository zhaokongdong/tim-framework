<?php

namespace App\Controllers;

use Interop\Container\ContainerInterface;

abstract class Controller
{
    /**
     * 接收配置容器
     * @var ContainerInterface
     */
    protected $ci;

    public function __construct(ContainerInterface $ci)
    {
        $this->ci = $ci;
    }

}