<?php

$base64_string = $_POST['base64_string'];

$savename = uniqid() . '.jpeg'; //localResizeIMG压缩后的图片都是jpeg格式

$savepath = '../upload/' . $savename;

echo $savepath;


$image = base64_to_img($base64_string, $savepath);
$url = 'http://221.10.2.222:5680/api/wx/Files?filetypekey=W3siZGVzYyI6ICIiLCJtb2R1bGUiOjEwMDYsInJlbGF0ZWlkIjowLCJyZW1hcmsiOiAiIiwic2l6ZSI6ICIiLCAidGltZSI6ICIifV0=';
if ($image) {
   
        echo '{"status":1,"content":"上传成功","url":"' . $image . '","picname":"' . $picname . '"}';
   
} else {
    echo '{"status":0,"content":"上传失败"}';
}

function base64_to_img($base64_string, $output_file) {
    $ifp = fopen($output_file, "wb");
    fwrite($ifp, base64_decode($base64_string));
    fclose($ifp);
    return( $output_file );
}
