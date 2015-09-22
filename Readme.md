# SRF Datadog StatsD Bundle

## Description
Symfony bundle `SRFDatadogStatsDBundle` integrates the datadog StatsD API to Symonfy


## Installation

**Get the Bundle**

Choose your version from [packagist.org](https://packagist.org/packages/mmz-srf/srf-datadog-statsd-bundle) and add a requirement to your ```composer.json```:

Using the console:

```bash
php composer.phar require mmz-srf/srf-datadog-statsd-bundle
```

Composer will add the dependency to your configuration.

**Register the Bundle**

Add the bundle in your ```app/AppKernel.php``` like this:

```php
public function registerBundles()
{
   $bundles[] = new SRF\Bundles\SRFDatadogStatsDBundle\SRFDatadogStatsDBundle();
}
```

**Update your dependencies**

Run ```php composer.phar update mmz-srf/srf-datadog-statsd-bundle```

**Clear the caches**

Run ```php app/console cache:clear```

**Usage**
* Log to Monolog:*
```php
$this->container->get('srf.metrics.consumer.monolog')->timing('my.key', 4);
```

* Log to Datadog StatsD:*
```php
$this->container->get('srf.metrics.consumer.datadog')->timing('my.key', 4);
```

## License
The Bundle is licensed under MIT. For details, see
[LICENSE](https://github.com/mmz-srf/srf-datadog-statsd-bundle/blob/master/Resources/meta/LICENSE).

Maintained by [@ymc-pabu](https://github.com/ymc-pabu)