<?php

use Symfony\Component\Config\Loader\LoaderInterface;
use Symfony\Component\HttpKernel\Kernel;
use Symfony\Component\HttpKernel\KernelInterface;

class AppKernel extends Kernel implements KernelInterface
{
    public function registerBundles()
    {
        return array(
            new Symfony\Bundle\FrameworkBundle\FrameworkBundle(),
        );
    }

    public function registerContainerConfiguration(LoaderInterface $loader)
    {
        $loader->load(__DIR__ . '/../etc/' . $this->getEnvironment() . '/config.yml');
    }

    public function getCacheDir()
    {
        return __DIR__ . '/../tmp/cache/' . $this->environment;
    }

    public function getLogDir()
    {
        return __DIR__ . '/../var/log';
    }
}
