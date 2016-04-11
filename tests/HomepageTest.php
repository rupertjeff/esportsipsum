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

    /**
     * @test
     */
    public function it_allows_for_suggesting_new_words_to_add()
    {
        $this->visit('/')
            ->type('new phrase', 'word')
            ->press('submit')
            ->seeInDatabase('suggested_words', [
                'word' => 'new phrase',
            ]);
    }

    /**
     * @test
     */
    public function it_increments_word_count_when_a_suggestion_is_duplicated()
    {
        $this->visit('/')
            ->type('new phrase', 'word')
            ->press('submit')
            ->seeInDatabase('suggested_words', [
                'word'  => 'new phrase',
                'count' => 1,
            ])
            ->visit('/')
            ->type('new phrase', 'word')
            ->press('submit')
            ->seeInDatabase('suggested_words', [
                'word'  => 'new phrase',
                'count' => 2,
            ])
            ->dontSeeInDatabase('suggested_words', [
                'word'  => 'new phrase',
                'count' => 1,
            ]);
    }

    /**
     * Override to add seed option for acceptance test purposes.
     */
    public function runDatabaseMigrations()
    {
        $this->artisan('migrate', ['--seed' => true]);

        $this->beforeApplicationDestroyed(function () {
            $this->artisan('migrate:rollback');
        });
    }
}
