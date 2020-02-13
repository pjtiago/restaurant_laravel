<?php

namespace Modules\Restaurant\Http\Controllers;

use App\Http\Requests\UserRequest;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;
use Modules\Restaurant\Http\Models\Table;
use Illuminate\Http\RedirectResponse;

class TablesController extends Controller
{
    public function index(Table $model)
    {
        //return 'Bnanana';
        //var_dump($model);die;
        return view('restaurant::tables.index',['tables' => $model->paginate(15)]);
    }

    public function create()
    {
        //return 'Bnanana';
        return view('restaurant::tables.create');
    }

    public function store(UserRequest $request,Table $model) : RedirectResponse
    {
        $model->create($request->All());

        return redirect()->route('table.index')->withStatus(__('table successfully created.'));
    }

    public function edit(Table $table)
    {
        return view('table.edit', compact('table'));
    }

    public function update(UserRequest $request, Table  $table): RedirectResponse
    {
        $table->update($request->All());

        return redirect()->route('table.index')->withStatus(__('table successfully updated.'));
    }

    public function destroy(Table $table) :RedirectResponse
    {
        $table->delete();

        return redirect()->route('table.index')->withStatus(__('table successfully deleted.'));
    }

    public function show(User $user)
    {
        return $user;
    }
}
