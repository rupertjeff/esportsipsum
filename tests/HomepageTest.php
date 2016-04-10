<?php
/**
 * Name: HomepageTest.php
 * Description:
 * Version: 0.0.1
 * Author: jeffr
 * Created: 2016-04-09
 * Last Modified: 2016-04-09
 */
namespace Tests;

/**
 * Class HomepageTest
 *
 * @package Tests
 */
class HomepageTest extends TestCase
{
    /**
     * @test
     */
    public function it_shows_words()
    {
        $this->visit('/')
            ->see('eSports Ipsum');
    }
}
