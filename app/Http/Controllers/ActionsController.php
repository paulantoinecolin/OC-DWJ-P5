<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ActionsController extends Controller
{
    public function download($filename = '')
    {
        $file_path = storage_path() . '/app/public/pdf/' . $filename;
        $headers = array(
            'Content-type' => 'application/pdf',
            'Content-Disposition' => 'attachment; filename=' . $filename,
        );

        // dd($file_path);

        if (file_exists($file_path)) {
            // Send Download
            return \Response::download($file_path, $filename, $headers);
        } else {
            // Error
            exit('Requested file does not exist on our server!');
        }
    }

    public function upload(Request $request)
    {
        $request->file('pdf')->store('/public/membership/');
        return redirect()->back();
    }
}
