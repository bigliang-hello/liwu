<?php
/**
 * Created by PhpStorm.
 * User: jc-mac
 * Date: 2019/5/7
 * Time: 下午3:28
 */

namespace App\Utils;

use Intervention\Image\Facades\Image;

class ImageUploadHandler
{
    protected $allow_ext = ["png","jpg","gif","jpeg"];

    public function save($file, $folder, $max_width = false)
    {
        $folder_name = "uploads/images/$folder/" . date("Ym/d", time());
        $upload_path = public_path() . '/' . $folder_name;
        $extension = strtolower($file->getClientOriginalExtension()) ?: 'png';
        $filename = time() . '_' . str_random(10) . '.' . $extension;
        // 如果上传的不是图片将终止操作
        if ( ! in_array($extension, $this->allow_ext)) {
            return false;
        }
        // 将图片移动到我们的目标存储路径中
        $file->move($upload_path, $filename);

        if ($max_width && $extension != 'gif') {

            // 此类中封装的函数，用于裁剪图片
            $this->reduceSize($upload_path . '/' . $filename, $max_width);
        }

        return [
            'path' => config('app.url') . "/$folder_name/$filename"
        ];
    }

    public function reduceSize($file_path, $max_width)
    {
        // 先实例化，传参是文件的磁盘物理路径
        $image = Image::make($file_path);

        // 进行大小调整的操作
        $image->resize($max_width, null, function ($constraint) {

            // 设定宽度是 $max_width，高度等比例双方缩放
            $constraint->aspectRatio();

            // 防止裁图时图片尺寸变大
            $constraint->upsize();
        });

        // 对图片修改后进行保存
        $image->save();
    }
}