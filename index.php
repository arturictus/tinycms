<?php 
include_once 'classes/page_class.php';
$page=new page;
if($_GET){
    $page->set_content($_GET['url']);
    $page->check_script($_GET['url']);
}
else{
$page->set_content('pages/main.xhtml');}

//do_dump($page->js);
$page->print_page();
?>