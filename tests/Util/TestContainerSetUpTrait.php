<?php

declare(strict_types=1);

namespace Tests\Util;

use Inject\Container\InjectionEntryPointContainer;
use PHPUnit\Framework\TestCase;

/** @see TestCase */
trait TestContainerSetUpTrait
{
    /** @var TestInjectionContainer */
    protected $testContainer;

    protected function setUp(): void
    {
        $this->testContainer = new TestInjectionContainer();
        $rootContainer = InjectionEntryPointContainer::getSelf();
        $rootContainer->wrapContainer($this->testContainer);
    }
}