<?php

declare(strict_types=1);

namespace DMF\HotspotWizard\Domain\Model;


/**
 * This file is part of the "Hotspot Wizard" Extension for TYPO3 CMS.
 *
 * For the full copyright and license information, please read the
 * LICENSE.txt file that was distributed with this source code.
 *
 * (c) 2021 Johannes Seipelt <johannes.seipelt@3m5.de>, 3m5.
 */

/**
 * Hotspot
 */
class Hotspot extends \TYPO3\CMS\Extbase\DomainObject\AbstractEntity
{

    /**
     * title
     *
     * @var string
     */
    protected $title = '';

    /**
     * image
     *
     * @var \TYPO3\CMS\Extbase\Domain\Model\FileReference
     * @TYPO3\CMS\Extbase\Annotation\ORM\Cascade("remove")
     */
    protected $image = null;

    /**
     * hotspotPoints
     *
     * @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\DMF\HotspotWizard\Domain\Model\HotspotPoint>
     * @TYPO3\CMS\Extbase\Annotation\ORM\Cascade("remove")
     */
    protected $hotspotPoints = null;

    /**
     * __construct
     */
    public function __construct()
    {

        // Do not remove the next line: It would break the functionality
        $this->initializeObject();
    }

    /**
     * Initializes all ObjectStorage properties when model is reconstructed from DB (where __construct is not called)
     * Do not modify this method!
     * It will be rewritten on each save in the extension builder
     * You may modify the constructor of this class instead
     *
     * @return void
     */
    public function initializeObject()
    {
        $this->hotspotPoints = $this->hotspotPoints ?: new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
    }

    /**
     * Returns the title
     *
     * @return string $title
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Sets the title
     *
     * @param string $title
     * @return void
     */
    public function setTitle(string $title)
    {
        $this->title = $title;
    }

    /**
     * Returns the image
     *
     * @return \TYPO3\CMS\Extbase\Domain\Model\FileReference $image
     */
    public function getImage()
    {
        return $this->image;
    }

    /**
     * Sets the image
     *
     * @param \TYPO3\CMS\Extbase\Domain\Model\FileReference $image
     * @return void
     */
    public function setImage(\TYPO3\CMS\Extbase\Domain\Model\FileReference $image)
    {
        $this->image = $image;
    }

    /**
     * Adds a HotspotPoint
     *
     * @param \DMF\HotspotWizard\Domain\Model\HotspotPoint $hotspotPoint
     * @return void
     */
    public function addHotspotPoint(\DMF\HotspotWizard\Domain\Model\HotspotPoint $hotspotPoint)
    {
        $this->hotspotPoints->attach($hotspotPoint);
    }

    /**
     * Removes a HotspotPoint
     *
     * @param \DMF\HotspotWizard\Domain\Model\HotspotPoint $hotspotPointToRemove The HotspotPoint to be removed
     * @return void
     */
    public function removeHotspotPoint(\DMF\HotspotWizard\Domain\Model\HotspotPoint $hotspotPointToRemove)
    {
        $this->hotspotPoints->detach($hotspotPointToRemove);
    }

    /**
     * Returns the hotspotPoints
     *
     * @return \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\DMF\HotspotWizard\Domain\Model\HotspotPoint> $hotspotPoints
     */
    public function getHotspotPoints()
    {
        return $this->hotspotPoints;
    }

    /**
     * Sets the hotspotPoints
     *
     * @param \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\DMF\HotspotWizard\Domain\Model\HotspotPoint> $hotspotPoints
     * @return void
     */
    public function setHotspotPoints(\TYPO3\CMS\Extbase\Persistence\ObjectStorage $hotspotPoints)
    {
        $this->hotspotPoints = $hotspotPoints;
    }
}
