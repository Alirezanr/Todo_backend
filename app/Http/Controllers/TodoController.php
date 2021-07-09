<?php

namespace App\Http\Controllers;

use App\Models\Todo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TodoController extends Controller
{
    /**
     * Get todos from database and return paginated data.
     * @return \Illuminate\Http\JsonResponse
     */
    public function show()
    {
        $todos = \auth()->user()->todos;
        if ($todos != null)
        {
            return response()->json([ "message" => "Todos list.",
                                      "todos"   => $todos ], 200);
        } else
        {
            return response()->json([ "message" => "There is no todo",
                                      "todos"   => $todos ], 412);
        }
    }

    public function getSingleTodo()
    {
        $todos = Todo::firstWhere('id', 10);
        if ($todos != null)
        {
            return response()->json([ "message" => "Todos list.",
                                      "todos"   => $todos ], 200);
        } else
        {
            return response()->json([ "message" => "There is no todo",
                                      "todos"   => $todos ], 412);
        }

    }

    /**
     * Create new to-do
     * @param Request $request
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
        $todo->category = $request->category;
        $todo->save();

        return response()->json([ "message" => 'To-do created successfully',
                                  "todo"    => $todo ], 200);
    }

    /**
     * Delete specific to-do with given id
     * @param $id
     * @return \Illuminate\Http\JsonResponse
     */
    public function destroy($id)
    {
        $todo = Todo::firstWhere('id', $id);
        if ($todo != null)
        {
            $todo->delete();
            return response()->json([ "message" => 'To-do deleted successfully.' ], 202);
        } else
        {
            return response()->json([ "message" => 'There is no todo with given id.' ], 412);
        }

    }

    /**
     * Update a to-do.
     * @param Request $request
     * @param $id
     * @return \Illuminate\Http\JsonResponse
     */
    public function update($id)
    {
        $todo = Todo::firstWhere('id', $id);
        if ($todo != null)
        {
            $todo->title = request('title');
            $todo->user_id = Auth::id();
            $todo->description = request('description');
            $todo->category = request('category');
            $todo->priority = ( request('priority') ) ? request('priority') : 'medium';
            $todo->image_url = request('image_url');
            $todo->is_done = request('is_done');
            $todo->location_lang = request('location_lang');
            $todo->location_lat = request('location_lat');

            if ($todo->save())
            {
                return response()->json([ "message" => 'To-do updated successfully.',
                                          "todo"    => $todo ], 200);
            }
        } else
        {
            return response()->json([ "message" => 'Could not find todo' ], 406);
        }

    }

    /**
     * make a to-do done.
     * @param $id
     * @return \Illuminate\Http\JsonResponse
     */
    public function updateStatus($id)
    {
        $todo = Todo::firstWhere('id', $id);
        if ($todo != null)
        {
            $todo->is_done = request('is_done');
            if ($todo->save())
            {
                return response()->json([ "message" => 'To-dos status updated.' ], 200);
            } else
            {
                return response()->json([ "message" => 'Error while updating todo.' ], 406);
            }
        } else
        {
            return response()->json([ "message" => 'Could not find todo' ], 406);
        }
    }

    /**
     * Returns list of todos selected by a category
     * @param $category
     * @return \Illuminate\Http\JsonResponse
     */
    public function getTodosByCategory($category)
    {
        $todos = Todo::where('category', $category)->get();
        return response()->json([ "message" => 'To-do created successfully',
                                  'count'   => $todos->count(),
                                  "todo"    => $todos ], 200);
    }
}
