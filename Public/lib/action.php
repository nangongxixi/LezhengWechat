<?php

if ($_GET) {
    $action = $_GET['act'];
    if ($action == 'delimg') {
        $filename = $_POST['imagename'];
        if (!empty($filename)) {
            unlink('../upload/' . $filename);
            echo '1';
        } else {
            echo '删除失败.';
        }
    }
} else {
    $picname = $_FILES['thumImg']['name'];
    $picsize = $_FILES['thumImg']['size'];
    if ($picname != "") {
        if ($picsize > 512000) { //限制上传大小 
            echo '图片大小不能超过500k';
            exit;
        }
        $type = strstr($picname, '.'); //限制上传格式 
        if ($type != ".gif" && $type != ".jpg") {
            echo '图片格式不对！';
            exit;
        }
        $rand = rand(100, 999);
        $pics = date("YmdHis") . $rand . $type; //命名图片名称 
        //上传路径 
        $pic_path = "../upload/" . $pics;
        move_uploaded_file($_FILES['thumImg']['tmp_name'], $pic_path);
    }
    $size = round($picsize / 1024, 2); //转换成kb 
    $arr = array(
        'name' => $picname,
        'pic' => $pics,
        'size' => $size
    );
    echo json_encode($arr); //输出json数据 
}



