<?php
declare(strict_types=1);

namespace DMF\HotspotWizard\Tests\Unit\Controller;

use TYPO3\TestingFramework\Core\Unit\UnitTestCase;

/**
 * Test case
 *
 * @author Johannes Seipelt <johannes.seipelt@3m5.de>
 */
class HotspotControllerTest extends UnitTestCase
{
    /**
     * @var \DMF\HotspotWizard\Controller\HotspotController
     */
    protected $subject;

    protected function setUp()
    {
        parent::setUp();
        $this->subject = $this->getMockBuilder(\DMF\HotspotWizard\Controller\HotspotController::class)
            ->setMethods(['redirect', 'forward', 'addFlashMessage'])
            ->disableOriginalConstructor()
            ->getMock();
    }

    protected function tearDown()
    {
        parent::tearDown();
    }

    /**
     * @test
     */
    public function listActionFetchesAllHotspotsFromRepositoryAndAssignsThemToView()
    {
        $allHotspots = $this->getMockBuilder(\TYPO3\CMS\Extbase\Persistence\ObjectStorage::class)
            ->disableOriginalConstructor()
            ->getMock();

        $hotspotRepository = $this->getMockBuilder(\::class)
            ->setMethods(['findAll'])
            ->disableOriginalConstructor()
            ->getMock();
        $hotspotRepository->expects(self::once())->method('findAll')->will(self::returnValue($allHotspots));
        $this->inject($this->subject, 'hotspotRepository', $hotspotRepository);

        $view = $this->getMockBuilder(\TYPO3\CMS\Extbase\Mvc\View\ViewInterface::class)->getMock();
        $view->expects(self::once())->method('assign')->with('hotspots', $allHotspots);
        $this->inject($this->subject, 'view', $view);

        $this->subject->listAction();
    }

    /**
     * @test
     */
    public function createActionAddsTheGivenHotspotToHotspotRepository()
    {
        $hotspot = new \DMF\HotspotWizard\Domain\Model\Hotspot();

        $hotspotRepository = $this->getMockBuilder(\::class)
            ->setMethods(['add'])
            ->disableOriginalConstructor()
            ->getMock();

        $hotspotRepository->expects(self::once())->method('add')->with($hotspot);
        $this->inject($this->subject, 'hotspotRepository', $hotspotRepository);

        $this->subject->createAction($hotspot);
    }

    /**
     * @test
     */
    public function editActionAssignsTheGivenHotspotToView()
    {
        $hotspot = new \DMF\HotspotWizard\Domain\Model\Hotspot();

        $view = $this->getMockBuilder(\TYPO3\CMS\Extbase\Mvc\View\ViewInterface::class)->getMock();
        $this->inject($this->subject, 'view', $view);
        $view->expects(self::once())->method('assign')->with('hotspot', $hotspot);

        $this->subject->editAction($hotspot);
    }

    /**
     * @test
     */
    public function updateActionUpdatesTheGivenHotspotInHotspotRepository()
    {
        $hotspot = new \DMF\HotspotWizard\Domain\Model\Hotspot();

        $hotspotRepository = $this->getMockBuilder(\::class)
            ->setMethods(['update'])
            ->disableOriginalConstructor()
            ->getMock();

        $hotspotRepository->expects(self::once())->method('update')->with($hotspot);
        $this->inject($this->subject, 'hotspotRepository', $hotspotRepository);

        $this->subject->updateAction($hotspot);
    }

    /**
     * @test
     */
    public function deleteActionRemovesTheGivenHotspotFromHotspotRepository()
    {
        $hotspot = new \DMF\HotspotWizard\Domain\Model\Hotspot();

        $hotspotRepository = $this->getMockBuilder(\::class)
            ->setMethods(['remove'])
            ->disableOriginalConstructor()
            ->getMock();

        $hotspotRepository->expects(self::once())->method('remove')->with($hotspot);
        $this->inject($this->subject, 'hotspotRepository', $hotspotRepository);

        $this->subject->deleteAction($hotspot);
    }
}
