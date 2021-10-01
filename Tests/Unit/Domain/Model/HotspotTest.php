<?php
declare(strict_types=1);

namespace DMF\HotspotWizard\Tests\Unit\Domain\Model;

use TYPO3\TestingFramework\Core\Unit\UnitTestCase;

/**
 * Test case
 *
 * @author Johannes Seipelt <johannes.seipelt@3m5.de>
 */
class HotspotTest extends UnitTestCase
{
    /**
     * @var \DMF\HotspotWizard\Domain\Model\Hotspot
     */
    protected $subject;

    protected function setUp()
    {
        parent::setUp();
        $this->subject = new \DMF\HotspotWizard\Domain\Model\Hotspot();
    }

    protected function tearDown()
    {
        parent::tearDown();
    }

    /**
     * @test
     */
    public function getTitleReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getTitle()
        );
    }

    /**
     * @test
     */
    public function setTitleForStringSetsTitle()
    {
        $this->subject->setTitle('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'title',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getImageReturnsInitialValueForFileReference()
    {
        self::assertEquals(
            null,
            $this->subject->getImage()
        );
    }

    /**
     * @test
     */
    public function setImageForFileReferenceSetsImage()
    {
        $fileReferenceFixture = new \TYPO3\CMS\Extbase\Domain\Model\FileReference();
        $this->subject->setImage($fileReferenceFixture);

        self::assertAttributeEquals(
            $fileReferenceFixture,
            'image',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getHotspotPointsReturnsInitialValueForHotspotPoint()
    {
        $newObjectStorage = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        self::assertEquals(
            $newObjectStorage,
            $this->subject->getHotspotPoints()
        );
    }

    /**
     * @test
     */
    public function setHotspotPointsForObjectStorageContainingHotspotPointSetsHotspotPoints()
    {
        $hotspotPoint = new \DMF\HotspotWizard\Domain\Model\HotspotPoint();
        $objectStorageHoldingExactlyOneHotspotPoints = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        $objectStorageHoldingExactlyOneHotspotPoints->attach($hotspotPoint);
        $this->subject->setHotspotPoints($objectStorageHoldingExactlyOneHotspotPoints);

        self::assertAttributeEquals(
            $objectStorageHoldingExactlyOneHotspotPoints,
            'hotspotPoints',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function addHotspotPointToObjectStorageHoldingHotspotPoints()
    {
        $hotspotPoint = new \DMF\HotspotWizard\Domain\Model\HotspotPoint();
        $hotspotPointsObjectStorageMock = $this->getMockBuilder(\TYPO3\CMS\Extbase\Persistence\ObjectStorage::class)
            ->setMethods(['attach'])
            ->disableOriginalConstructor()
            ->getMock();

        $hotspotPointsObjectStorageMock->expects(self::once())->method('attach')->with(self::equalTo($hotspotPoint));
        $this->inject($this->subject, 'hotspotPoints', $hotspotPointsObjectStorageMock);

        $this->subject->addHotspotPoint($hotspotPoint);
    }

    /**
     * @test
     */
    public function removeHotspotPointFromObjectStorageHoldingHotspotPoints()
    {
        $hotspotPoint = new \DMF\HotspotWizard\Domain\Model\HotspotPoint();
        $hotspotPointsObjectStorageMock = $this->getMockBuilder(\TYPO3\CMS\Extbase\Persistence\ObjectStorage::class)
            ->setMethods(['detach'])
            ->disableOriginalConstructor()
            ->getMock();

        $hotspotPointsObjectStorageMock->expects(self::once())->method('detach')->with(self::equalTo($hotspotPoint));
        $this->inject($this->subject, 'hotspotPoints', $hotspotPointsObjectStorageMock);

        $this->subject->removeHotspotPoint($hotspotPoint);
    }
}
