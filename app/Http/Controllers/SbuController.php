<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Sbu;
use Illuminate\Http\Request;
use Session;

class SbuController extends Controller
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
            $sbu = Sbu::paginate($perPage);
        } else {
            $sbu = Sbu::paginate($perPage);
        }

        return view('admin.sbu.index', compact('sbu'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('admin.sbu.create');
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
        
        Sbu::create($requestData);

        Session::flash('flash_message', 'Sbu added!');

        return redirect('admin/sbu');
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
        $sbu = Sbu::findOrFail($id);

        return view('admin.sbu.show', compact('sbu'));
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
        $sbu = Sbu::findOrFail($id);

        return view('admin.sbu.edit', compact('sbu'));
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
        
        $sbu = Sbu::findOrFail($id);
        $sbu->update($requestData);

        Session::flash('flash_message', 'Sbu updated!');

        return redirect('admin/sbu');
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
        Sbu::destroy($id);

        Session::flash('flash_message', 'Sbu deleted!');

        return redirect('admin/sbu');
    }
}
