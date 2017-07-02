<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Jadwal_ibadah;
use Illuminate\Http\Request;
use Session;

class Jadwal_ibadahController extends Controller
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
            $jadwal_ibadah = Jadwal_ibadah::paginate($perPage);
        } else {
            $jadwal_ibadah = Jadwal_ibadah::paginate($perPage);
        }

        return view('admin.jadwal_ibadah.index', compact('jadwal_ibadah'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('admin.jadwal_ibadah.create');
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
        
        Jadwal_ibadah::create($requestData);

        Session::flash('flash_message', 'Jadwal_ibadah added!');

        return redirect('admin/jadwal_ibadah');
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
        $jadwal_ibadah = Jadwal_ibadah::findOrFail($id);

        return view('admin.jadwal_ibadah.show', compact('jadwal_ibadah'));
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
        $jadwal_ibadah = Jadwal_ibadah::findOrFail($id);

        return view('admin.jadwal_ibadah.edit', compact('jadwal_ibadah'));
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
        
        $jadwal_ibadah = Jadwal_ibadah::findOrFail($id);
        $jadwal_ibadah->update($requestData);

        Session::flash('flash_message', 'Jadwal_ibadah updated!');

        return redirect('admin/jadwal_ibadah');
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
        Jadwal_ibadah::destroy($id);

        Session::flash('flash_message', 'Jadwal_ibadah deleted!');

        return redirect('admin/jadwal_ibadah');
    }
}
