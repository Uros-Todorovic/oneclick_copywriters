<?php 
      require_once('init.php');
      Helper::not_signed_in($session);

if (empty($_GET['id'])) {
    Helper::redirect("copywriters.php");
}

$copywriter = Copywriter::find_by_id($_GET['id']);
if($copywriter){
    $copywriter->delete_copywriter();
    Helper::redirect("copywriters.php");
} else {
    Helper::redirect("copywriters.php");
} 