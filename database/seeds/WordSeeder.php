<?php

use App\Database\Models\Word;
use Illuminate\Database\Seeder;

/**
 * Class WordSeeder
 */
class WordSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        collect(config('words'))->map(function (string $word) {
            return [
                'word' => $word,
                'count' => 1000,
            ];
        })->each(function (array $word) {
            Word::create($word);
        });
    }
}
