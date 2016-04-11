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

use App\Database\Models\BannedWord;
use Illuminate\Foundation\Testing\DatabaseMigrations;

/**
 * Class HomepageTest
 *
 * @package Tests
 */
class HomepageTest extends TestCase
{
    use DatabaseMigrations;

    /**
     * @test
     */
    public function it_shows_words()
    {
        $this->visit('/')
            ->see('eSports Ipsum');
    }
}
