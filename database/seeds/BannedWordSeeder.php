<?php

use App\Database\Models\BannedWord;
use Illuminate\Database\Seeder;

/**
 * Class BannedWordSeeder
 */
class BannedWordSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        collect($this->getBannedWords())->map(function ($word) {
            return [
                'word' => $word,
            ];
        })->each(function (array $word) {
            BannedWord::create($word);
        });
    }

    /**
     * @return array
     */
    protected function getBannedWords(): array
    {
        $curl      = new \Curl\Curl();
        $locations = config('banned.locations');
        $words     = [];

        foreach ($locations as $url) {
            $curl->get($url);
            $words = array_merge($words, explode("\n", $curl->response));
        }

        return array_filter($words);
    }
}
