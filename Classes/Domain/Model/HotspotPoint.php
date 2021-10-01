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
 * HotspotPoint
 */
class HotspotPoint extends \TYPO3\CMS\Extbase\DomainObject\AbstractEntity
{

    /**
     * xCoordinate
     *
     * @var int
     */
    protected $xCoordinate = 0;

    /**
     * yCoordinate
     *
     * @var int
     */
    protected $yCoordinate = 0;

    /**
     * description
     *
     * @var string
     */
    protected $description = '';

    /**
     * link
     *
     * @var string
     */
    protected $link = '';

    /**
     * Returns the xCoordinate
     *
     * @return int $xCoordinate
     */
    public function getXCoordinate()
    {
        return $this->xCoordinate;
    }

    /**
     * Sets the xCoordinate
     *
     * @param int $xCoordinate
     * @return void
     */
    public function setXCoordinate(int $xCoordinate)
    {
        $this->xCoordinate = $xCoordinate;
    }

    /**
     * Returns the yCoordinate
     *
     * @return int $yCoordinate
     */
    public function getYCoordinate()
    {
        return $this->yCoordinate;
    }

    /**
     * Sets the yCoordinate
     *
     * @param int $yCoordinate
     * @return void
     */
    public function setYCoordinate(int $yCoordinate)
    {
        $this->yCoordinate = $yCoordinate;
    }

    /**
     * Returns the description
     *
     * @return string $description
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Sets the description
     *
     * @param string $description
     * @return void
     */
    public function setDescription(string $description)
    {
        $this->description = $description;
    }

    /**
     * Returns the link
     *
     * @return string $link
     */
    public function getLink()
    {
        return $this->link;
    }

    /**
     * Sets the link
     *
     * @param string $link
     * @return void
     */
    public function setLink(string $link)
    {
        $this->link = $link;
    }
}
