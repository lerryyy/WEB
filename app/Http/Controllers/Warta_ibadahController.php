<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Warta_ibadah;
use Illuminate\Http\Request;
use Session;

class Warta_ibadahController extends Controller
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
            $warta_ibadah = Warta_ibadah::paginate($perPage);
        } else {
            $warta_ibadah = Warta_ibadah::paginate($perPage);
        }

        return view('admin.warta_ibadah.index', compact('warta_ibadah'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('admin.warta_ibadah.create');
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
        
        Warta_ibadah::create($requestData);

        Session::flash('flash_message', 'Warta_ibadah added!');

        return redirect('admin/warta_ibadah');
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
        $warta_ibadah = Warta_ibadah::findOrFail($id);

        return view('admin.warta_ibadah.show', compact('warta_ibadah'));
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
        $warta_ibadah = Warta_ibadah::findOrFail($id);

        return view('admin.warta_ibadah.edit', compact('warta_ibadah'));
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
        
        $warta_ibadah = Warta_ibadah::findOrFail($id);
        $warta_ibadah->update($requestData);

        Session::flash('flash_message', 'Warta_ibadah updated!');

        return redirect('admin/warta_ibadah');
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
        Warta_ibadah::destroy($id);

        Session::flash('flash_message', 'Warta_ibadah deleted!');

        return redirect('admin/warta_ibadah');
    }
}
