<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;

class ImageController extends Controller
{
	public function getsocialsImage($filename) {
		$file=Storage::disk('socials')->get($filename);
		return new Response($file,200);
	}

	public function getUserImage($filename) {
		$file=Storage::disk('profiles')->get($filename);
        return new Response($file, 200);
	}
}
