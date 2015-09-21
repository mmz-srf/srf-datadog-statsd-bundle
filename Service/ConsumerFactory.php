<?php

namespace SRF\Bundles\SRFPhpDatadogStatsDBundle\Service;

use Symfony\Component\DependencyInjection\ContainerInterface;

class ConsumerFactory
{
    private $consumerServiceIdentifier;

    /**
     * @var ContainerInterface
     */
    private $container;

    public function __construct($consumerServiceIdentifier)
    {
        $this->consumerServiceIdentifier = $consumerServiceIdentifier;
        return $this;
    }

    /**
     * Sets the Container.
     *
     * @param ContainerInterface|null $container A ContainerInterface instance or null
     *
     * @api
     */
    public function setContainer(ContainerInterface $container = null)
    {
        $this->container = $container;
    }

    public function getConsumer()
    {
        return $this->container->get($this->consumerServiceIdentifier);
    }


}