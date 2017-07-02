<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Album_image;
use Illuminate\Http\Request;
use Session;

class Album_imageController extends Controller
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
            $album_image = Album_image::paginate($perPage);
        } else {
            $album_image = Album_image::paginate($perPage);
        }

        return view('admin.album_image.index', compact('album_image'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('admin.album_image.create');
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
        
        Album_image::create($requestData);

        Session::flash('flash_message', 'Album_image added!');

        return redirect('admin/album_image');
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
        $album_image = Album_image::findOrFail($id);

        return view('admin.album_image.show', compact('album_image'));
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
        $album_image = Album_image::findOrFail($id);

        return view('admin.album_image.edit', compact('album_image'));
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
        
        $album_image = Album_image::findOrFail($id);
        $album_image->update($requestData);

        Session::flash('flash_message', 'Album_image updated!');

        return redirect('admin/album_image');
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
        Album_image::destroy($id);

        Session::flash('flash_message', 'Album_image deleted!');

        return redirect('admin/album_image');
    }
}
