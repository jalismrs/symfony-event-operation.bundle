<?php
declare(strict_types = 1);

namespace Jalismrs\EventOperationBundle;

use Symfony\Contracts\EventDispatcher\Event;

/**
 * Class MarkEvent
 *
 * @package Jalismrs\EventOperationBundle
 *
 * @codeCoverageIgnore
 */
final class OperationMarkEvent extends
    Event
{
    /**
     * count
     *
     * @var int
     */
    private int $count;

    /**
     * MarkEvent constructor.
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
