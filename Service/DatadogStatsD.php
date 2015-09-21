<?php

namespace SRF\Bundles\SRFPhpDatadogStatsDBundle\Service;

class DatadogStatsD
{

    /**
     * Log timing information
     *
     * @param string $stat The metric to in log timing info for.
     * @param float $time The ellapsed time (ms) to log
     * @param float|1 $sampleRate the rate (0-1) for sampling.
     **/
    public function timing($key, $value, $sampleRate, $tags)
    {
        \Datadogstatsd::timing($key, $value, $sampleRate, $tags);
    }
}