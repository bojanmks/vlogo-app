<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;

class ImageUpload extends Model
{
    public function uploadResized(Request $request, $path, $width, $height = null) {
        $image = $request->file('image');
        $imageName = rand(1, 99999) . time() . '.' . $image->extension();

        $filePath = public_path($path);
        $img = Image::make($image->path());
        $img->resize($width, $height, function ($const) {
            $const->aspectRatio();
        })->save($filePath . $imageName);

        if($width != null && $height != null) {
            $canvas = Image::canvas($width, $height);
            $canvas->insert($img, 'center');
            $canvas->save($filePath . $imageName);
        }

        return $imageName;
    }
}
