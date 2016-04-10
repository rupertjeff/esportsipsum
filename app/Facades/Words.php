<?php
/**
 * Name: Words.php
 * Description:
 * Version: 0.0.1
 * Author: jeffr
 * Created: 2016-04-09
 * Last Modified: 2016-04-09
 */
namespace App\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * Class Words
 *
 * @package App\Facades
 */
class Words extends Facade
{
    /**
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'words';
    }

}
