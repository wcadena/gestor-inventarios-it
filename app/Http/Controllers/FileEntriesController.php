<?php

namespace App\Http\Controllers;

use App\FileEntry;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Storage;
use Webpatser\Uuid\Uuid;

class FileEntriesController extends Controller
{
    public function index()
    {
        $files = FileEntry::all();

        return view('directory.files.index', compact('files'));
    }

    //
    public function uploadFile(Request $request)
    {
        dd($request);
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

            return response()->json([
                'success' => true,
                'id'      => $file->id,
            ], 200);
        }

        return response()->json([
            'success' => false,
        ], 500);
    }

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

    public function create()
    {
        return view('directory.files.create');
    }
}
