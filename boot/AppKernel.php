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
        $loader->load($this->getConfigDir() . '/config.yml');
    }

    public function getKernelParameters()
    {
        $parms = parent::getKernelParameters();
        $parms['kernel.config_dir'] = $this->getConfigDir();
        return $parms;
    }

    public function getConfigDir()
    {
        return dirname(__DIR__) . '/etc/' . $this->getEnvironment();
    }

    public function getCacheDir()
    {
        return dirname(__DIR__) . '/tmp/cache/' . $this->getEnvironment();
    }

    public function getLogDir()
    {
        return dirname(__DIR__) . '/var/log';
    }
}
