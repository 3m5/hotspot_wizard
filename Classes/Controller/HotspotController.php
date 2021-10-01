<?php

declare(strict_types=1);

namespace DMF\HotspotWizard\Controller;


/**
 * This file is part of the "Hotspot Wizard" Extension for TYPO3 CMS.
 *
 * For the full copyright and license information, please read the
 * LICENSE.txt file that was distributed with this source code.
 *
 * (c) 2021 Johannes Seipelt <johannes.seipelt@3m5.de>, 3m5.
 */

/**
 * HotspotController
 */
class HotspotController extends \TYPO3\CMS\Extbase\Mvc\Controller\ActionController
{

    /**
     * action list
     *
     * @return string|object|null|void
     */
    public function listAction()
    {
        $hotspots = $this->hotspotRepository->findAll();
        $this->view->assign('hotspots', $hotspots);
    }

    /**
     * action new
     *
     * @return string|object|null|void
     */
    public function newAction()
    {
    }

    /**
     * action create
     *
     * @param \DMF\HotspotWizard\Domain\Model\Hotspot $newHotspot
     * @return string|object|null|void
     */
    public function createAction(\DMF\HotspotWizard\Domain\Model\Hotspot $newHotspot)
    {
        $this->addFlashMessage('The object was created. Please be aware that this action is publicly accessible unless you implement an access check. See https://docs.typo3.org/p/friendsoftypo3/extension-builder/master/en-us/User/Index.html', '', \TYPO3\CMS\Core\Messaging\AbstractMessage::WARNING);
        $this->hotspotRepository->add($newHotspot);
        $this->redirect('list');
    }

    /**
     * action edit
     *
     * @param \DMF\HotspotWizard\Domain\Model\Hotspot $hotspot
     * @TYPO3\CMS\Extbase\Annotation\IgnoreValidation("hotspot")
     * @return string|object|null|void
     */
    public function editAction(\DMF\HotspotWizard\Domain\Model\Hotspot $hotspot)
    {
        $this->view->assign('hotspot', $hotspot);
    }

    /**
     * action update
     *
     * @param \DMF\HotspotWizard\Domain\Model\Hotspot $hotspot
     * @return string|object|null|void
     */
    public function updateAction(\DMF\HotspotWizard\Domain\Model\Hotspot $hotspot)
    {
        $this->addFlashMessage('The object was updated. Please be aware that this action is publicly accessible unless you implement an access check. See https://docs.typo3.org/p/friendsoftypo3/extension-builder/master/en-us/User/Index.html', '', \TYPO3\CMS\Core\Messaging\AbstractMessage::WARNING);
        $this->hotspotRepository->update($hotspot);
        $this->redirect('list');
    }

    /**
     * action delete
     *
     * @param \DMF\HotspotWizard\Domain\Model\Hotspot $hotspot
     * @return string|object|null|void
     */
    public function deleteAction(\DMF\HotspotWizard\Domain\Model\Hotspot $hotspot)
    {
        $this->addFlashMessage('The object was deleted. Please be aware that this action is publicly accessible unless you implement an access check. See https://docs.typo3.org/p/friendsoftypo3/extension-builder/master/en-us/User/Index.html', '', \TYPO3\CMS\Core\Messaging\AbstractMessage::WARNING);
        $this->hotspotRepository->remove($hotspot);
        $this->redirect('list');
    }
}
