<?php

declare(strict_types=1);
/**
 * Klutz configuration class
 *
 * Provides access to the Klutz configuration settings.
 *
 * Old pattern: globals $conf; $somethingDetail = $conf['something']['detail']; *
 * New pattern: $config = $injector->get(KlutzConfig::class); $somethingDetail = $config->get('something.detail');
 *
 * Prefer DI over instantiating $config in your code.
 */

namespace Horde\Klutz;

use Horde\Core\Config\State;
use Horde\Injector\Attribute\Factory;

#[Factory(factory: KlutzConfigFactory::class, method: 'create')]
class KlutzConfig extends State {}
