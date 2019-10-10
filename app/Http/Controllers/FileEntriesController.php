<?php

namespace App\Http\Controllers;

use App\FileEntry;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;
use Image;
use Webpatser\Uuid\Uuid;

class FileEntriesController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('authEmp:system');
    }

    /**
     * muestra todos los files.
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        $files = FileEntry::all();

        return view('directory.files.index', compact('files'));
    }

    /**
     * guarda un archivo.
     *
     * @param Request $request
     *
     * @throws \Exception
     */
    public function store(Request $request)
    {
        $file = $request->file('file');
        $filename = $file->getClientOriginalName();

        $path = hash('sha256', time());

        if (Storage::disk('uploads')->put($path.'/'.$filename, File::get($file))) {
            $input['filename'] = $filename;
            $input['mime'] = $file->getClientMimeType();
            $input['path'] = $path;
            $input['size'] = $file->getClientSize();
            $input['user_id'] = Auth::user()->id;
            $input['imageable_type'] = $request->imageable_type;
            $input['imageable_id'] = $request->imageable_id;
            $input['vinculo_padre'] = $request->vinculo_padre;
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
     * para mostrar los archivos.
     *
     * @param $vinculo
     *
     * @return mixed
     */
    /*public function imageshow($vinculo)
    {
        return Image::make(storage_path() . '/avatars/' . $id . '/' . $image)->response();
    }*/
    public function show($id)
    {
        $filesxcv2 = FileEntry::findOrFail($id);
        //dd($filesxcv2);
        return Storage::disk('uploads')->download($filesxcv2->path.DIRECTORY_SEPARATOR.$filesxcv2->filename);
    }

    /**
     * borrar a.
     *
     * @param $id
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function destroy($id)
    {
        $filesxcv2 = FileEntry::findOrFail($id);
        Storage::disk('uploads')->download($filesxcv2->path.DIRECTORY_SEPARATOR.$filesxcv2->filename);
        FileEntry::destroy($id);
    }
}
