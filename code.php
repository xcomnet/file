
<?php if ($is_admin == 'super' || $member['is_auth']) { ?>
<?php } ?>

<?php if(G5_IS_MOBILE) { ?>
<?php } ?>

<?php if(!$is_index) { // 인덱스가 아닌 경우 ?>
<?php } ?>

<?php echo (G5_IS_MOBILE) ? 'PC' : '모바일'; ?>

<?php if($is_member) { // 로그인 상태 ?>
<?php } else { // 로그아웃 상태 ?>
<?php } ?>

<?php include_once(G5_PATH.'/main.php'); ?>

<?php include_once(G5_THEME_PATH.'/main.php');?>
