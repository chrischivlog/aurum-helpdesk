
<?php
include('../../assets/header.php');

if (isset($_GET['push'])) {

  include('./class/send_push.php');
} elseif (isset($_GET['verify']) == '1') {

  include('./class/send_verify.php');
} else{
  ?><meta http-equiv="refresh" content="0; URL=<?php echo $url;?>"><?php  
}

include '../../assets/footer.php'; ?>