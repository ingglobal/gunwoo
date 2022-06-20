<?php
include_once('./_common.php');
include_once(G5_PATH.'/head.sub.php');
add_stylesheet('<link rel="stylesheet" href="'.G5_USER_ADMIN_SQL_URL.'/css/sql.css">', 0);
add_javascript('<script src="'.G5_USER_ADMIN_SQL_URL.'/js/sql.js"></script>', 0);
?>
<div id="sql_head">
    <a class="<?=(($g5['file_name'] == 'index')?'focus':'')?>" href="<?=G5_USER_ADMIN_SQL_URL?>">SQL홈</a>
    <a class="" href="<?=G5_USER_ADMIN_URL?>">관리자홈</a>
    <a class="<?=(($g5['file_name'] == '_default_excel_upload')?'focus':'')?>" href="<?=G5_USER_ADMIN_SQL_URL?>/_default_excel_upload.php">엑셀업로드</a>
    <a class="<?=(($g5['file_name'] == 'add_companies_direct')?'focus':'')?>" href="<?=G5_USER_ADMIN_SQL_URL?>/add_companies_direct.php">기존업체DB등록(직접)</a>
    <a class="<?=(($g5['file_name'] == 'add_products_direct')?'focus':'')?>" href="<?=G5_USER_ADMIN_SQL_URL?>/add_products_direct.php">기존제품DB등록(직접)</a>
    <a class="<?=(($g5['file_name'] == 'add_companies')?'focus':'')?>" href="<?=G5_USER_ADMIN_SQL_URL?>/add_companies.php">기존업체DB등록</a>
    <a class="<?=(($g5['file_name'] == 'add_products')?'focus':'')?>" href="<?=G5_USER_ADMIN_SQL_URL?>/add_products.php">기존제품DB등록</a>
</div>
<div id="sql_container">
