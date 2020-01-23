<?php

function upload_img($file = null)
{
    $file = $file['image'];
    $file_name = $file['name'];
    $file_temp_name = $file['tmp_name'];
    $folder = "upload/" . $file_name;
    move_uploaded_file($file_temp_name, $folder);
    return $folder;
}
