<?php
declare(strict_types = 1);

namespace Jalismrs\EventOperationBundle;

use Symfony\Contracts\EventDispatcher\Event;

/**
 * Class CleanEvent
 *
 * @package Jalismrs\EventOperationBundle
 *
 * @codeCoverageIgnore
 */
final class OperationCleanEvent extends
    Event
{
    /**
     * count
     *
     * @var int
     */
    private int $count;

    /**
     * CleanEvent constructor.
     *
     * @param int $count
     */
    public function __construct(
        int $count
    ) {
        $this->count = $count;
    }

    /**
     * getCount
     *
     * @return int
     */
    public function getCount() : int
    {
        return $this->count;
    }
}
