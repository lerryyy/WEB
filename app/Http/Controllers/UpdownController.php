<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Input;
use Validator;
use Redirect;
use App\FileModel;

use DB;

class UpdownController extends Controller
{
    //
    public function getView(){
    	return view('frontend.uploadsfile');
    }

       public function insertfile(){
    	
    	$filetitle =Input::get('file_title'); 
    	$file =Input::file('filenam'); 

    	//echo $filetitle;
    	//echo $file;

    	$rules = array(
    		'file_title' => 'required',
    		'filenam' => 'required|max:10000|mimes:doc,docx,
    		jpeg,png,jpg,xlx,xlsx'
    		);

    	$validator = Validator::make(Input::all(), $rules);
    	if ($validator->fails()) {
    		$messages=$validator->messages();
    		return Redirect::to('uploadfile')->withInput()->withErrors($validator);

    	} else if ($validator->passes()) {
    	//	echo "sukses validator";
        //}
            if(Input::file('filenam')->isValid()){

                //medapatkan image ekstensinya 
                $extension = Input::file('filenam')->getClientOriginalExtension();
                $filename =rand(11111,99999).'.'.$extension;
                
               $destinationPath ='download';

                 $file->move($destinationPath,$filename);
 
                $data=array(
                    'file_title' => $filetitle,
                    'file_name' => $filename
                    );
                FileModel::insert($data);

                $notification = array(
                        'message' => 'File Uploaded sucessfully!',
                        'alert-type' => 'Success'
                         );
                return Redirect::to('uploadfile')->with($notification);

            } else {
                $notification = array(
                        'message' => 'File valid upload!',
                        'alert-type' => 'Error'
                         );

                return Redirect::to('uploadfile')->with($notification);
            }
        } 
           
    }
    public function downfun(){
        $downloads=DB::table('filetable')->get();
        return view('download.viewfile',compact('downloads'));
    }
}
