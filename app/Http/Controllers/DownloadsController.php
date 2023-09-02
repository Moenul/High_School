<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pdf;

class DownloadsController extends Controller
{
    public function download($id) {
        $file_id = Pdf::findOrFail($id);
        $file_name = $file_id->file;

        $file_path = public_path($file_name);
        return response()->download($file_path);

    }
}
