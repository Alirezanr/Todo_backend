<?php

namespace App\Http\Controllers;

use App\Models\Todo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class TodoController extends Controller
{
    /**
     * Get todos from database and return paginated data.
     * @return \Illuminate\Http\JsonResponse
     */
    public function show()
    {
        $todos = DB::table('todos')->paginate(2);
        return response()->json([ "todos" => $todos ], 202);
    }

    /**
     * Create new to-do
     * @param Request $request
     * @return void
     */
    public function create(Request $request)
    {
        $request->validate([ 'title' => 'required' ]);

        $todo = Todo::create([ "title"         => $request->title,
                               "user_id"       => Auth::id(),
                               "description"   => $request->description,
                               "priority"      => ( $request->priority ) ? $request->priority : 'medium',
                               "image_url"     => $request->image_url,
                               "location_lang" => $request->location_lang,
                               "location_lat"  => $request->location_lat ]);

        $todo->save();
        dd($todo);

    }
}
