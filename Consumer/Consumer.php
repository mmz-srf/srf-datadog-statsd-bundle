<?php

namespace SRF\Bundles\SRFPhpDatadogStatsDBundle\Consumer;

interface Consumer
{

    public function timing($key, $value, $sampleRate = null, $tags = null);
}