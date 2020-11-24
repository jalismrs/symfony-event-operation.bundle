<?php
declare(strict_types = 1);

namespace Tests\EventListener;

use Jalismrs\Symfony\Bundle\JalismrsOperationEventBundle\EventListener\OperationEventListener;
use Jalismrs\Symfony\Bundle\JalismrsOperationEventBundle\Event\OperationMarkEvent;
use Jalismrs\Symfony\Bundle\JalismrsOperationEventBundle\Event\OperationCleanEvent;
use PHPUnit\Framework\MockObject\MockObject;
use PHPUnit\Framework\TestCase;
use Symfony\Component\Console\Style\SymfonyStyle;

/**
 * Class OperationEventListenerTest
 *
 * @package Tests\EventListener
 *
 * @covers \Jalismrs\Symfony\Bundle\JalismrsOperationEventBundle\EventListener\OperationEventListener
 */
class OperationEventListenerTest extends
    TestCase
{
    /**
     * mockStyle
     *
     * @var \PHPUnit\Framework\MockObject\MockObject|\Symfony\Component\Console\Style\SymfonyStyle
     */
    private MockObject $mockStyle;
    
    /**
     * testOnOperationClean
     *
     * @return void
     */
    public function testOnOperationClean() : void
    {
        // arrange
        $systemUnderTest = $this->createSUT();
        
        $operationCleanEvent = new OperationCleanEvent(
            1
        );
        
        // expect
        $this->mockStyle
            ->expects(self::once())
            ->method('section')
            ->with(
                self::isType('string'),
            );
        
        // act
        $output = $systemUnderTest->onOperationClean($operationCleanEvent);
        
        // assert
        self::assertSame(
            $operationCleanEvent,
            $output,
        );
    }
    
    /**
     * testOnOperationMark
     *
     * @return void
     */
    public function testOnOperationMark() : void
    {
        // arrange
        $systemUnderTest = $this->createSUT();
        
        $operationMarkEvent = new OperationMarkEvent(
            1
        );
        
        // expect
        $this->mockStyle
            ->expects(self::once())
            ->method('section')
            ->with(
                self::isType('string'),
            );
        
        // act
        $output = $systemUnderTest->onOperationMark($operationMarkEvent);
        
        // assert
        self::assertSame(
            $operationMarkEvent,
            $output,
        );
    }
    
    /**
     * setUp
     *
     * @return void
     */
    protected function setUp() : void
    {
        parent::setUp();
        
        $this->mockStyle = $this->createMock(SymfonyStyle::class);
    }
    
    /**
     * createSUT
     *
     * @return \Jalismrs\Symfony\Bundle\JalismrsOperationEventBundle\EventListener\OperationEventListener
     */
    private function createSUT() : OperationEventListener
    {
        // arrange
        $systemUnderTest = new OperationEventListener();
        
        // act
        $systemUnderTest->setStyle($this->mockStyle);
        
        return $systemUnderTest;
    }
}
