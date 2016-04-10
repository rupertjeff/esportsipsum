<?php
/**
 * Name: Words.php
 * Description:
 * Version: 0.0.1
 * Author: jeffr
 * Created: 2016-04-09
 * Last Modified: 2016-04-09
 */
namespace App\Services;

use App\Contracts\Generator;

/**
 * Class Words
 *
 * @package App\Services
 */
class Words implements Generator
{
    /**
     * @var int
     */
    protected $minSentenceCount;

    /**
     * @var int
     */
    protected $maxSentenceCount;

    /**
     * @var int
     */
    protected $minWordCount;

    /**
     * @var int
     */
    protected $maxWordCount;

    /**
     * @var array
     */
    protected $words;

    /**
     * Words constructor.
     *
     * @param array $words
     * @param int   $minSentenceCount
     * @param int   $maxSentenceCount
     * @param int   $minWordCount
     * @param int   $maxWordCount
     */
    public function __construct(array $words = [], $minSentenceCount = 3, $maxSentenceCount = 6, $minWordCount = 5, $maxWordCount = 16)
    {
        $this->words            = array_unique($words);
        $this->minSentenceCount = $minSentenceCount;
        $this->maxSentenceCount = $maxSentenceCount;
        $this->minWordCount     = $minWordCount;
        $this->maxWordCount     = $maxWordCount;
    }

    /**
     * @param int  $count
     * @param bool $join
     *
     * @return array|string
     */
    public function getParagraphs(int $count = 1, bool $join = false)
    {
        $paragraphs = [];

        while (0 < $count--) {
            $paragraphs[] = $this->getSentences(random_int($this->minSentenceCount, $this->maxSentenceCount), true);
        }

        return $join ? '<p>' . implode('</p><p>', $paragraphs) . '</p>' : $paragraphs;
    }

    /**
     * @param int  $count
     * @param bool $join
     *
     * @return array
     */
    public function getSentences(int $count = 1, bool $join = false)
    {
        $sentences = [];

        while (0 < $count--) {
            $sentences[] = $this->getWords(random_int($this->minWordCount, $this->maxWordCount), true);
        }

        return $join ? implode(' ', $sentences) : $sentences;
    }

    /**
     * @param int  $count
     * @param bool $join
     *
     * @return array|string
     */
    public function getWords(int $count = 1, bool $join = false)
    {
        $words = [];

        $maxSize = count($this->words);
        while (0 < $count--) {
            $words[] = $this->words[random_int(0, $maxSize - 1)];
        }

        return $join ? implode(' ', $words) . '.' : $words;
    }
}
