# symfony.bundle.event.operation

Adds operation events with their listener

## Test

`phpunit` or `vendor/bin/phpunit`

coverage reports will be available in `var/coverage`

## Use
EventListener is assumed to be active and configured
```php
use Jalismrs\Symfony\Bundle\JalismrsOperationEventBundle\Event\OperationMarkEvent;
use Jalismrs\Symfony\Bundle\JalismrsOperationEventBundle\Event\OperationCleanEvent;
use Symfony\Component\EventDispatcher\EventDispatcher;

class SomeClass {
    private EventDispatcher $eventDispatcher;

    public function someFunction(): void {
        $count = 1;
        $operationMarkEvent = new OperationMarkEvent(
            $count
        );
        $this->eventDispatcher->dispatch($operationMarkEvent);
        
        // do something
        
        $count = 0;
        $operationCleanEvent = new OperationCleanEvent(
            $count
        );
        $this->eventDispatcher->dispatch($operationCleanEvent);
    }
}
```
