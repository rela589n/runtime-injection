<?php

declare(strict_types=1);

namespace Rela589n\RuntimeInjection\Container;

interface InjectionContainer
{
    public function injectTo(object $injectable): void;
}
