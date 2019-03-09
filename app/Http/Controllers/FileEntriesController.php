<?php

namespace App\Http\Controllers;

use App\FileEntry;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Storage;
use Webpatser\Uuid\Uuid;
use Image;

class FileEntriesController extends Controller
{
    /**
     * muestra todos los files
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        $files = FileEntry::all();

        return view('directory.files.index', compact('files'));
    }

    /**
     * guarda un archivo
     * @param Request $request
     * @throws \Exception
     */
    public function store(Request $request)
    {
        $file = Input::file('file');
        $filename = $file->getClientOriginalName();

        $path = hash('sha256', time());

        if (Storage::disk('uploads')->put($path.'/'.$filename, File::get($file))) {
            $input['filename'] = $filename;
            $input['mime'] = $file->getClientMimeType();
            $input['path'] = $path;
            $input['size'] = $file->getClientSize();
            $input['user_id'] = Auth::user()->id;
            $input['imageable_type'] = Input::get('imageable_type');
            $input['imageable_id'] = Input::get('imageable_id');
            $input['vinculo_padre'] = Input::get('vinculo_padre');
            $input['vinculo'] = Uuid::generate();
            $file = FileEntry::create($input);
        }
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function create()
    {
        return view('directory.files.create');
    }

    /**
     * para mostrar los archivos
     * @param $vinculo
     * @return mixed
     */
    /*public function imageshow($vinculo)
    {
        return Image::make(storage_path() . '/avatars/' . $id . '/' . $image)->response();
    }*/
    public function show($id){

        $filesxcv2 = FileEntry::findOrFail($id);
        //dd($filesxcv2);
        return Storage::disk('uploads')->download($filesxcv2->path.DIRECTORY_SEPARATOR.$filesxcv2->filename);
    }
}
