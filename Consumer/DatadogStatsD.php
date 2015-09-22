<?php

namespace SRF\Bundles\SRFDatadogStatsDBundle\Service;

use SRF\Bundles\SRFDatadogStatsDBundle\Consumer\Consumer;

class DatadogStatsD implements Consumer
{

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
        \Datadogstatsd::timing($key, $value, $sampleRate, $tags);
    }
}