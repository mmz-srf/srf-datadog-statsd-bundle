<?php

namespace SRF\Bundles\SRFDatadogStatsDBundle\Consumer;

interface Consumer
{

    public function timing($key, $value, $sampleRate = null, $tags = null);
}