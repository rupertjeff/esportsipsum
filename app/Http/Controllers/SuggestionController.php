<?php
/**
 * Name: SuggestionController.php
 * Description:
 * Version: 0.0.1
 * Author: jeffr
 * Created: 2016-04-10
 * Last Modified: 2016-04-10
 */
namespace App\Http\Controllers;

use App\Database\Models\SuggestedWord;
use App\Database\Models\Word;
use App\Http\Requests\Suggestion\Create as CreateRequest;

/**
 * Class SuggestionController
 *
 * @package App\Http\Controllers
 */
class SuggestionController extends Controller
{
    /**
     * @param CreateRequest $request
     *
     * @return \Illuminate\Http\JsonResponse|\Illuminate\Http\RedirectResponse
     */
    public function store(CreateRequest $request)
    {
        $attributes = $request->only(['word']);
        if (0 < Word::where($attributes)->count()) {
            $word = Word::where($attributes)->first();
            $word->count++;
            $word->save();
        } elseif (0 < SuggestedWord::where($attributes)->count()) {
            $word = SuggestedWord::where($attributes)->first();
            $word->count++;
            $word->save();
        } else {
            SuggestedWord::create($attributes);
        }
        
        if ($request->wantsJson()) {
            return response()
                ->json();
        }
        
        return redirect()
            ->route('home');
    }
}
