<?php
declare(strict_types = 1);

namespace Jalismrs\Symfony\Bundle\JalismrsOperationEventBundle\EventListener;

use Jalismrs\Symfony\Bundle\JalismrsOperationEventBundle\Event\OperationCleanEvent;
use Jalismrs\Symfony\Bundle\JalismrsOperationEventBundle\Event\OperationMarkEvent;
use Jalismrs\Symfony\Common\ConsoleEventListenerAbstract;

/**
 * Class OperationEventListener
 *
 * @package Jalismrs\Symfony\Bundle\JalismrsOperationEventBundle
 */
class OperationEventListener extends
    ConsoleEventListenerAbstract
{
    /**
     * onClean
     *
     * @param \Jalismrs\Symfony\Bundle\JalismrsOperationEventBundle\Event\OperationCleanEvent $event
     *
     * @return \Jalismrs\Symfony\Bundle\JalismrsOperationEventBundle\Event\OperationCleanEvent
     */
    public function onOperationClean(
        OperationCleanEvent $event
    ) : OperationCleanEvent {
        $message = "Nettoyage des entités: {$event->getCount()}";
        
        $this
            ->getStyle()
            ->section($message);
        
        return $event;
    }
    
    /**
     * onMark
     *
     * @param \Jalismrs\Symfony\Bundle\JalismrsOperationEventBundle\Event\OperationMarkEvent $event
     *
     * @return \Jalismrs\Symfony\Bundle\JalismrsOperationEventBundle\Event\OperationMarkEvent
     */
    public function onOperationMark(
        OperationMarkEvent $event
    ) : OperationMarkEvent {
        $message = "Marquage des entités: {$event->getCount()}";
        
        $this
            ->getStyle()
            ->section($message);
        
        return $event;
    }
}
