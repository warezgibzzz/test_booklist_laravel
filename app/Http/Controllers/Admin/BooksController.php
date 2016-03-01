<?php

namespace App\Http\Controllers\Admin;

use App\Book;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class BooksController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $title = 'Books list';

        $filter = \DataFilter::source(Book::with('author'));
        $filter->add('title', 'Title', 'text');
        $filter->submit('search');
        $filter->reset('reset');
        $filter->build();

        $grid = \DataGrid::source($filter);
        $grid->attributes(array("class" => "table table-striped"));
        $grid->add('id', 'ID', true)->style("width:70px");
        $grid->add('title', 'Book title', true);
        $grid->add('author.firstname', 'Author first name', true);
        $grid->add('author.lastname', 'Author last name', true);
        $grid->add('created_at|strtotime|date[d.m.Y]', 'Updated at', true);
        $grid->add('updated_at|strtotime|date[d.m.Y]', 'Created at', true);
        $grid->edit('/admin/books/edit', 'Edit', 'modify|delete');
        $grid->paginate(10);

        return view('admin.index', compact('title', 'filter', 'grid'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
