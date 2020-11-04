<?php
declare(strict_types = 1);

namespace Jalismrs\Symfony\Bundle\JalismrsOperationEventBundle\Event;

use Symfony\Contracts\EventDispatcher\Event;

/**
 * Class OperationMarkEvent
 *
 * @package Jalismrs\Symfony\Bundle\JalismrsOperationEventBundle\Event
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
