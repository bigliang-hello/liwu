<?php

namespace App\Http\Controllers\Api;

use App\Utils\ImageUploadHandler;
use Illuminate\Http\Request;

class ImageController extends Controller
{
    public function store(Request $request, ImageUploadHandler $uploadHandler)
    {
        dd(111);
        $result = $uploadHandler->save($request->file, str_plural('cover'), 200);
        return $this->response->array($result);
    }
}
