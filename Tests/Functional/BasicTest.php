<?php
declare(strict_types=1);

namespace DMF\HotspotWizard\Tests\Functional;

use TYPO3\TestingFramework\Core\Functional\FunctionalTestCase;

/**
 * Test case
 *
 * @author Johannes Seipelt <johannes.seipelt@3m5.de>
 */
class BasicTest extends FunctionalTestCase
{
    /**
     * @var array
     */
    protected $testExtensionsToLoad = [
        'typo3conf/ext/hotspot_wizard',
    ];

    /**
     * Just a dummy to show that at least one test is actually executed
     *
     * @test
     */
    public function dummy()
    {
        $this->assertTrue(true);
    }
}
