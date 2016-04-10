<?php
/**
 * Name: Generator.php
 * Description:
 * Version: 0.0.1
 * Author: jeffr
 * Created: 2016-04-09
 * Last Modified: 2016-04-09
 */
namespace App\Contracts;

/**
 * Class Words
 *
 * @package App\Services
 */
interface Generator
{
    /**
     * @param int  $count
     * @param bool $join
     *
     * @return array|string
     */
    public function getParagraphs(int $count = 1, bool $join = false);

    /**
     * @param int  $count
     * @param bool $join
     *
     * @return array|string
     */
    public function getSentences(int $count = 1, bool $join = false);

    /**
     * @param int  $count
     * @param bool $join
     *
     * @return array|string
     */
    public function getWords(int $count = 1, bool $join = false);
}
