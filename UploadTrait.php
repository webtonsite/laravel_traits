<?php

namespace App\Traits;

trait UploadTrait{
	public function uploadFile($file, $disk, $time_in_filename=true){
		if($time_in_filename)
        	$filename = time() .'_'. $file->getClientOriginalName();
        else
        	$filename = $file->getClientOriginalName();
        $path = $file->storeAs($disk, $filename);
        return $disk.'/'.$filename;
	}
}