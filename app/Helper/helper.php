<?php

use App\Models\User;
use App\Events\AlertEvent;
use App\Events\NewUser;
use App\Models\Church;
use App\Models\Favourite;

function project($name){
	if($name == 'app_name')
	{
		return config('app.name');
	}

	if($name == 'app_favicon_path')
	{
		return asset('/assets/admin/images/logo/favicon.ico');
	}
	if($name == 'app_logo_path')
	{
		return asset('/assets/admin/images/logo/logo.png');
	}
}

// Upload files
function uploadFile($file, $dir, $filecount = null) {
    $ext = $file->getClientOriginalExtension();
    if($ext != ''){
        $fileName = time() . $filecount . '.' . $ext;

    }else{
        $ext = $file->extension();
        $fileName = time() . $filecount . '.' . $ext;

    }

    Storage::disk('public')->putFileAs($dir, $file, $fileName);

    return $fileName;
}


//remove file
function removeFile($file, $dir) {
    $existImage = storage_path() . '/app/public/' . $dir . '/' . $file;
    if (File::exists($existImage)) {
        File::delete($existImage);
    }
}

//times ago calculation
function timeago($date) {
    $timestamp = strtotime($date);	
    
    $strTime = array("second", "minute", "hour", "day", "month", "year");
    $length = array("60","60","24","30","12","10");

    $currentTime = time();
    if($currentTime >= $timestamp) {
        $diff     = time()- $timestamp;
        for($i = 0; $diff >= $length[$i] && $i < count($length)-1; $i++) {
            $diff = $diff / $length[$i];
        }

        $diff = round($diff);
        if($strTime[$i] == 'hour')
        {
            return $diff . "h ago ";    
        }
        if($diff == 1 && $strTime[$i] == 'day')
        {
            return "Yesterday";    
        }
        return $diff . " " . $strTime[$i] . "(s) ago ";
    }
 }

 //Long text to short text 
  if (! function_exists('words')) {
    /**
     * Limit the number of words in a string.
     *
     * @param  string  $value
     * @param  int     $words
     * @param  string  $end
     * @return string
     */
    function words($value, $words = 100, $end = '...')
    {
        return \Illuminate\Support\Str::words($value, $words, $end);
    }
}

//fix string 20 characters
if (! function_exists('short_string')) {
    function short_string($str) {
            $rest = substr($str, 0, 20);
            return $rest;
    }
}

function logo_image_public_path(){
	return asset('/').'storage/integration/';
}

function store_logo_image_path()
{
    return storage_path() . '/app/public/integration/';
}

function image_public_path(){
	return asset('/').'storage/vaults/';
}

function store_image_path()
{
    return storage_path() . '/app/public/vaults/';
}

function resources_public_path(){
	return asset('/').'storage/resources/';
}

function store_resources_path()
{
    return storage_path() . '/app/public/resources/';
}

function NoImagePath()
{
    return asset('/').'img/no-image.png';
}