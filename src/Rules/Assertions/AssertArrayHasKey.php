<?php

declare(strict_types=1);

namespace PestConverter\Rules\Assertions;

final class AssertArrayHasKey extends AbstractAssertionToExpectation
{
    protected function assertionName(): string
    {
        return 'assertArrayHasKey';
    }

    protected function expectationName(): string
    {
        return 'toHaveKey';
    }
}
