<?php

namespace App\Models;

use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Support\Facades\File;

class Post{
    public static function find($slug){

        $path = __DIR__ . "/../resources/hello/" . $slug . ".html";

        if (!file_exists($path = resource_path("hello/" . $slug . ".html"))) {
            abort(404);
            throw new ModelNotFoundException();
        }
        return cache()->remember("hello.{hello2}", 1200, fn()=>file_get_contents($path));
    }

    public static function all()
    {
        $files = File::files(resource_path("hello/"));

        return array_map(fn($file) =>$file->getContents(),$files);
    }


}




?>
