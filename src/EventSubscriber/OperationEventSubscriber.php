<?php
declare(strict_types = 1);

namespace Jalismrs\Symfony\Bundle\JalismrsOperationEventBundle\EventSubscriber;

use Jalismrs\Symfony\Bundle\JalismrsOperationEventBundle\Event\OperationCleanEvent;
use Jalismrs\Symfony\Bundle\JalismrsOperationEventBundle\Event\OperationMarkEvent;
use Jalismrs\Symfony\Common\ConsoleEventSubscriberAbstract;

/**
 * Class OperationEventSubscriber
 *
 * @package Jalismrs\Symfony\Bundle\JalismrsOperationEventBundle
 */
class OperationEventSubscriber extends
    ConsoleEventSubscriberAbstract
{
    /**
     * getSubscribedEvents
     *
     * @static
     * @return string[]
     *
     * @codeCoverageIgnore
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
     * @param \Jalismrs\Symfony\Bundle\JalismrsOperationEventBundle\Event\OperationCleanEvent $event
     *
     * @return \Jalismrs\Symfony\Bundle\JalismrsOperationEventBundle\Event\OperationCleanEvent
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
     * @param \Jalismrs\Symfony\Bundle\JalismrsOperationEventBundle\Event\OperationMarkEvent $event
     *
     * @return \Jalismrs\Symfony\Bundle\JalismrsOperationEventBundle\Event\OperationMarkEvent
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
