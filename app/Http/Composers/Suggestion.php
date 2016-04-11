<?php
/**
 * Name: Suggestion.php
 * Description:
 * Version: 0.0.1
 * Author: jeffr
 * Created: 2016-04-10
 * Last Modified: 2016-04-10
 */
namespace App\Http\Composers;

use Illuminate\View\View;

/**
 * Class Suggestion
 *
 * @package App\Http\Composers
 */
class Suggestion
{
    /**
     * @param View $view
     */
    public function compose(View $view)
    {
        $view->with('formSetup', [
            'route' => 'suggestions.store',
        ]);
    }
}
