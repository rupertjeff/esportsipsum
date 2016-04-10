<?php
/**
 * Name: Main.php
 * Description:
 * Version: 0.0.1
 * Author: jeffr
 * Created: 2016-04-09
 * Last Modified: 2016-04-09
 */
namespace App\Http\Composers;

use Illuminate\View\View;
use Words;

class Main
{
    public function compose(View $view)
    {
        $view->with('content', Words::getParagraphs(config('general.initialParagraphCount', 3), true));
    }
}
