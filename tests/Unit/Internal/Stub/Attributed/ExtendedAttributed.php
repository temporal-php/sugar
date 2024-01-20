<?php

declare(strict_types=1);

namespace Temporal\Sugar\Tests\Unit\Internal\Stub\Attributed;

use Temporal\Sugar\Attribute\TaskQueue;

#[TaskQueue(name: 'test-queue-extended')]
final class ExtendedAttributed extends AbstractAttributed
{
}