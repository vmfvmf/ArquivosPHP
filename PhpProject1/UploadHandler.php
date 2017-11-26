<?php

header('Content-Type: text/plain; charset=utf-8');

if ($_FILES['upfile']) {
    echo "ARRAY 1: " . print_r($_FILES['upfile']);
    $file_ary = reArrayFiles($_FILES['upfile']);
    foreach($file_ary as $file){
        uploadFile($file);
    }
}

function uploadFile($file) {
    try {
        echo "arquivo 1" . print_r($file);
        // Undefined | Multiple Files | $_FILES Corruption Attack
        // If this request falls under any of them, treat it invalid.
        if (
                !isset($file['error'])
        //|| is_array($file['error'])
        ) {
            throw new RuntimeException('Invalid parameters.');
        }

        // Check $file['error'] value.
        switch ($file['error']) {
            case UPLOAD_ERR_OK:
                break;
            case UPLOAD_ERR_NO_FILE:
                throw new RuntimeException('No file sent.');
            case UPLOAD_ERR_INI_SIZE:
            case UPLOAD_ERR_FORM_SIZE:
                throw new RuntimeException('Exceeded filesize limit.');
            default:
                throw new RuntimeException('Unknown errors.');
        }

        // You should also check filesize here. 
        if ($file['size'] > 100000000) {
            throw new RuntimeException('Exceeded filesize limit.');
        }

        // DO NOT TRUST $file['mime'] VALUE !!
        // Check MIME Type by yourself.
        $finfo = new finfo(FILEINFO_MIME_TYPE);
        if (false === $ext = array_search(
                $finfo->file($file['tmp_name']), array(
            'jpg' => 'image/jpeg',
            'png' => 'image/png',
            'gif' => 'image/gif',
                ), true
                )) {
           // throw new RuntimeException('Invalid file format.');
        }

        // You should name it uniquely.
        // DO NOT USE $file['name'] WITHOUT ANY VALIDATION !!
        // On this example, obtain safe unique name from its binary data.
        if (!move_uploaded_file(
                        $file['tmp_name'], sprintf('uploads/%s.%s', 
                                sha1_file($file['tmp_name']), $ext
                        )
                )) {
            throw new RuntimeException('Failed to move uploaded file.');
        }
    } catch (RuntimeException $e) {

        echo $e->getMessage();
    }
}
function reArrayFiles($file)
{
    $file_ary = array();
    $file_count = count($file['name']);
    $file_key = array_keys($file);
    
    for($i=0;$i<$file_count;$i++)
    {
        foreach($file_key as $val)
        {
            $file_ary[$i][$val] = $file[$val][$i];
        }
    }
    return $file_ary;
}