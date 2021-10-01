<?php
declare(strict_types=1);

namespace DMF\HotspotWizard\Tests\Unit\Domain\Model;

use TYPO3\TestingFramework\Core\Unit\UnitTestCase;

/**
 * Test case
 *
 * @author Johannes Seipelt <johannes.seipelt@3m5.de>
 */
class HotspotPointTest extends UnitTestCase
{
    /**
     * @var \DMF\HotspotWizard\Domain\Model\HotspotPoint
     */
    protected $subject;

    protected function setUp()
    {
        parent::setUp();
        $this->subject = new \DMF\HotspotWizard\Domain\Model\HotspotPoint();
    }

    protected function tearDown()
    {
        parent::tearDown();
    }

    /**
     * @test
     */
    public function getXCoordinateReturnsInitialValueForInt()
    {
        self::assertSame(
            0,
            $this->subject->getXCoordinate()
        );
    }

    /**
     * @test
     */
    public function setXCoordinateForIntSetsXCoordinate()
    {
        $this->subject->setXCoordinate(12);

        self::assertAttributeEquals(
            12,
            'xCoordinate',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getYCoordinateReturnsInitialValueForInt()
    {
        self::assertSame(
            0,
            $this->subject->getYCoordinate()
        );
    }

    /**
     * @test
     */
    public function setYCoordinateForIntSetsYCoordinate()
    {
        $this->subject->setYCoordinate(12);

        self::assertAttributeEquals(
            12,
            'yCoordinate',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getDescriptionReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getDescription()
        );
    }

    /**
     * @test
     */
    public function setDescriptionForStringSetsDescription()
    {
        $this->subject->setDescription('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'description',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getLinkReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getLink()
        );
    }

    /**
     * @test
     */
    public function setLinkForStringSetsLink()
    {
        $this->subject->setLink('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'link',
            $this->subject
        );
    }
}
