# SRF Datadog StatsD Bundle

## Description
Symfony bundle `SRFDatadogStatsDBundle` integrates the datadog StatsD API to Symonfy


## Installation

**Get the Bundle**

Choose your version from [packagist.org](https://packagist.org/packages/mmz-srf/srf-datadog-statsd-bundle) and add a requirement to your ```composer.json```:

Using the console:

```bash
php composer.phar require --dev mmz-srf/srf-datadog-statsd-bundle
```

Composer will add the dependency to your configuration.

**Register the Bundle**

Add the bundle in your ```app/AppKernel.php``` like this:

```php
public function registerBundles()
{
   switch ($this->getEnvironment())
       {
           case "dev":
               $bundles[] = new SRF\Bundles\EzLegacyDebugBundle\SRFEzLegacyDebugBundle();
       }
```

**Update your dependencies**

Run ```php composer.phar update mmz-srf/srf-datadog-statsd-bundle```

**Clear the caches**

Run ```php app/console cache:clear```


## License
The Bundle is licensed under MIT. For details, see
[LICENSE](https://github.com/mmz-srf/srf-datadog-statsd-bundle/blob/master/Resources/meta/LICENSE).

Maintained by [@csr_](https://github.com/csr_)