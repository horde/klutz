<?php

declare(strict_types=1);
/**
 * Klutz configuration class factory
 *
 * Creates instances of the KlutzConfig class.
 *
 * Old pattern: globals $conf; $somethingDetail = $conf['something']['detail']; *
 * New pattern: $config = $injector->get(KlutzConfig::class); $somethingDetail = $config->get('something.detail');
 *
 * Prefer DI over instantiating $config in your code.
 */

namespace Horde\Klutz;

use Horde\Core\Config\ConfigLoader;
use Horde\Injector\Injector;

class KlutzConfigFactory
{
    public function __construct(private Injector $injector) {}

    public function create(): KlutzConfig
    {
        $state = $this->injector->get(ConfigLoader::class)->load('klutz');
        return new KlutzConfig($state->toArray());
    }
}
