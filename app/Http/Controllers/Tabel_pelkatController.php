<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Pelkat;
use Illuminate\Http\Request;
use Session;

class Tabel_pelkatController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\View\View
     */
    public function index(Request $request)
    {
        $keyword = $request->get('search');
        $perPage = 25;

        if (!empty($keyword)) {
            $tabel_pelkat = Pelkat::paginate($perPage);
        } else {
            $tabel_pelkat = Pelkat::paginate($perPage);
        }

        return view('admin.tabel_pelkat.index', compact('tabel_pelkat'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('admin.tabel_pelkat.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function store(Request $request)
    {
        
        $requestData = $request->all();
        
        Pelkat::create($requestData);

        Session::flash('flash_message', 'Pelkat added!');

        return redirect('admin/tabel_pelkat');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     *
     * @return \Illuminate\View\View
     */
    public function show($id)
    {
        $tabel_pelkat = Pelkat::findOrFail($id);

        return view('admin.tabel_pelkat.show', compact('tabel_pelkat'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     *
     * @return \Illuminate\View\View
     */
    public function edit($id)
    {
        $tabel_pelkat = Pelkat::findOrFail($id);

        return view('admin.tabel_pelkat.edit', compact('tabel_pelkat'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @param \Illuminate\Http\Request $request
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function update($id, Request $request)
    {
        
        $requestData = $request->all();
        
        $tabel_pelkat = Pelkat::findOrFail($id);
        $tabel_pelkat->update($requestData);

        Session::flash('flash_message', 'Pelkat updated!');

        return redirect('admin/tabel_pelkat');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function destroy($id)
    {
        Pelkat::destroy($id);

        Session::flash('flash_message', 'Pelkat deleted!');

        return redirect('admin/tabel_pelkat');
    }
}
