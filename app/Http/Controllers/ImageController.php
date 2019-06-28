<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Services\FileService;

class ImageController extends Controller
{
    public function add(Request $request){
      $file = $request["cover"];
      $image = FileService::upload_image($file);

      return $image->image_path;
    }
}
