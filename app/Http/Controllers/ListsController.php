<?php

namespace todoparrot\Http\Controllers;

use Illuminate\Http\Request;

use todoparrot\Http\Requests;
use todoparrot\Http\Controllers\Controller;

use todoparrot\TodoList;

class ListsController extends Controller
{

    /**
     *  Constructor
     */

    public function __construct() {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $lists = TodoList::orderBy('id', 'DESC')->paginate(10);

        return view('lists.index')->with('lists', $lists);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        $list = new TodoList;
        return view('lists.create')->with('list', $list);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'description' => 'required'
          ]);
        TodoList::create([
            'name' => $request->name,
            'description' => $request->description,
            'complete' => $request->complete || 0
          ]);

          return redirect()->action('ListsController@index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        $list = TodoList::findOrFail($id);

        return view('lists.view')->with('list', $list);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        $list = TodoList::findOrFail($id);

        return view('lists.edit')->with('list', $list);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function update($id, Request $request)
    {
        $list = TodoList::findOrFail($id);

        $this->validate($request, [
            'name' => 'required',
            'description' => 'required'
          ]);

        $list->customUpdate($request->name, $request->description, $request->complete);

        return redirect()->action('ListsController@index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        TodoList::destroy($id);
        return redirect()->action('ListsController@index');
    }
}
