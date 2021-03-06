<?php

namespace SRF\Bundles\SRFDatadogStatsDBundle\Consumer;

use Psr\Log\LoggerInterface;

class Monolog implements Consumer
{

    private $logger;

    public function __construct(LoggerInterface $logger)
    {
        $this->logger = $logger;
    }
    /**
     * Log timing information
     *
     * @param string $stat The metric to in log timing info for.
     * @param float $time The ellapsed time (ms) to log
     * @param float|1 $sampleRate the rate (0-1) for sampling.
     * @param array $tags
     **/
    public function timing($key, $value, $sampleRate = null, $tags = null)
    {
        $this->logger->info($key."\t".$value, array('PERFORMANCE'));
    }
}