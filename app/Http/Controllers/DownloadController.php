<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DownloadController extends Controller
{
    public function downloadPdf()
    {
        $filePath = public_path('downloads/SGIS');
        $filename = 'SGIS';

        return response()->download($filePath, $filename);
    }
}
