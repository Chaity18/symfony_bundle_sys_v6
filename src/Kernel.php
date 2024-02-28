<?php

namespace App;

use Symfony\Bundle\FrameworkBundle\Kernel\MicroKernelTrait;
use Symfony\Component\HttpKernel\Kernel as BaseKernel;
use Twig\Extension\ExtensionInterface;

class Kernel extends BaseKernel
{
    use MicroKernelTrait;
}
