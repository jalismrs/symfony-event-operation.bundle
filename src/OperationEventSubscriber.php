<?php
declare(strict_types = 1);

namespace Jalismrs\EventOperationBundle;

use Jalismrs\EventBundle\ConsoleEventSubscriberAbstract;

/**
 * Class OperationEventSubscriber
 *
 * @package Jalismrs\EventOperationBundle
 */
class OperationEventSubscriber extends
    ConsoleEventSubscriberAbstract
{
    /**
     * getSubscribedEvents
     *
     * @static
     * @return string[]
     */
    public static function getSubscribedEvents() : array
    {
        return [
            OperationCleanEvent::class => 'onOperationClean',
            OperationMarkEvent::class  => 'onOperationMark',
        ];
    }
    
    /**
     * onClean
     *
     * @param \Jalismrs\EventOperationBundle\OperationCleanEvent $event
     *
     * @return \Jalismrs\EventOperationBundle\OperationCleanEvent
     */
    public function onOperationClean(
        OperationCleanEvent $event
    ) : OperationCleanEvent {
        if ($this->isActive()) {
            $message = "Nettoyage des entités: {$event->getCount()}";
            
            $this
                ->getStyle()
                ->section($message);
        }
        
        return $event;
    }
    
    /**
     * onMark
     *
     * @param \Jalismrs\EventOperationBundle\OperationMarkEvent $event
     *
     * @return \Jalismrs\EventOperationBundle\OperationMarkEvent
     */
    public function onOperationMark(
        OperationMarkEvent $event
    ) : OperationMarkEvent {
        if ($this->isActive()) {
            $message = "Marquage des entités: {$event->getCount()}";
            
            $this
                ->getStyle()
                ->section($message);
        }
        
        return $event;
    }
}
