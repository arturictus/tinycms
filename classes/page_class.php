<?php 
//db_connect();
require_once './php/requires.php';
class page {
	public $Member;
        public $content;
        public $scripts;

	public function __construct (){
		
		$this->pages=get_files_array("./pages");
                $del=array("./pages/",".html",".xhtml",".php");
                foreach ($this->pages as $value) {
                    $value=  str_replace($del, "", $value);
                    $this->clean_pages[]=$value;

                }
                $this->scripts=get_files_array("./scripts");
                   foreach ($this->scripts as $value) {
                    $value=  $this->clean_extension($value);
                    $this->clean_scripts[]=$value;

                }
		}
//This function clean the extensions and folders Paths
// to check if exist a js or css for this page 
// var $page: insert the $_GET['url']
// return the name with out path or extension
// example: "./pages/controllers.html"
// return => controllers
public function clean_extension($page){
    $del=array("./pages/",".html",".xhtml",".php","./scripts/",".css",".js");
    $page=  str_replace($del, "", $page);
    return $page;
}                
		
public function print_page(){
    
                $this->head();
		$this->menu();
		echo $this->content();
		$this->footer();
}


public function login_pannel (){

}
	
public function menu (){
	?>
<div class="navbar navbar-inverse navbar-fixed-top">
      <div class="navbar-inner">
        <div class="container-fluid">
          <button type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="brand" href="index.php">Impro Mastering</a>
          <div class="nav-collapse collapse">
            <p class="navbar-text pull-right">
              Logged in as <a href="#" class="navbar-link">Username</a>
            </p>
            <ul class="nav">
              <li class="active"><a href="#">Home</a></li>
              <li><a href="#about">About</a></li>
              <li><a href="#contact">Contact</a></li>
            </ul>
          </div><!--/.nav-collapse -->
        </div>
      </div>
    </div>
        <div class="container-fluid">
      <div class="row-fluid">
        <div class="span3">
            <form action="#" method="get">
          <div class="well sidebar-nav">
            <ul class="nav nav-list">
              <li class="nav-header">Sidebar</li>
             <?php 
        for ($i=0;$i<count($this->pages) ;$i++){
            if($this->clean_pages[$i]!=".DS_Store"){
                if($this->clean_pages[$i] !="main")
            echo '<li><button class="btn btn-link" name="url" value="'.$this->pages[$i].'">'.$this->clean_pages[$i].'</button></li>';
            //echo '<li><input type="submit" class="btn btn-link" name="url" value="'.$page.'"></li>';
            
            }
        }
       
             ?>
            
            </ul>
          </div><!--/.well -->
            </form>
        </div><!--/span-->
        <div class="span9">
	<?php
	}
        
public function head(){
//session_start();
//db_connect ();
       // require_once './phpjs-master/_tools/PHPJS_library/PHPJS/Library.php';
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Impro mastering Javascript</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Le styles -->
    <link href="./bootstrap/css/bootstrap.css" rel="stylesheet">
    <script src="http://code.jquery.com/jquery.js"></script>
     <script src="js/libs/angular/angular.js"></script>
    <script src="js/phpjs/phpjs.php"></script>
    
   
    <style type="text/css">
      body {
        padding-top: 60px;
        padding-bottom: 40px;
      }
      .sidebar-nav {
        padding: 9px 0;
      }

      @media (max-width: 980px) {
        /* Enable use of floated navbar text */
        .navbar-text.pull-right {
          float: none;
          padding-left: 5px;
          padding-right: 5px;
        }
      }
    </style>
    <link href="./bootstrap/css/bootstrap-responsive.css" rel="stylesheet">

    <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="../assets/js/html5shiv.js"></script>
    <![endif]-->

    <!-- Fav and touch icons -->
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="../assets/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="../assets/ico/apple-touch-icon-114-precomposed.png">
      <link rel="apple-touch-icon-precomposed" sizes="72x72" href="../assets/ico/apple-touch-icon-72-precomposed.png">
                    <link rel="apple-touch-icon-precomposed" href="../assets/ico/apple-touch-icon-57-precomposed.png">
                                   <link rel="shortcut icon" href="../assets/ico/favicon.png">
   <?php echo $this->prepare_scripts();?>
  </head>

  <body>


 <?php
	}
public function check_script($get){ 
    
    if (in_array($this->clean_extension($get), $this->clean_scripts))
            $this->page_script[]='./scripts/'.$this->clean_extension($get).'.js';
    
}
/*        
public function add_scripts($path){
    
    $this->scripts[]=$path;
    
}*/
public function prepare_scripts(){
    //if(count($this->scripts)>0){
        $toecho="";
    if(count($this->page_script)>0){
    foreach ($this->page_script as $script){
        
        $toecho.=' <script src="'.$script.'"></script>';
    }
    return $toecho;
   }
}
public function footer(){
    ?>
        </div><!--/span9-->
       </div><!--/row-->
        <hr>

      <footer>
        <p>&copy; Company 2013</p>
      </footer>

    </div><!--/.fluid-container-->

    <!-- Le javascript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    
    <script src="./bootstrap/js/bootstrap-transition.js"></script>
    <script src="./bootstrap/js/bootstrap-alert.js"></script>
    <script src="./bootstrap/js/bootstrap-modal.js"></script>
    <script src="./bootstrap/js/bootstrap-dropdown.js"></script>
    <script src="./bootstrap/js/bootstrap-scrollspy.js"></script>
    <script src="./bootstrap/js/bootstrap-tab.js"></script>
    <script src="./bootstrap/js/bootstrap-tooltip.js"></script>
    <script src="./bootstrap/js/bootstrap-popover.js"></script>
    <script src="./bootstrap/js/bootstrap-button.js"></script>
    <script src="./bootstrap/js/bootstrap-collapse.js"></script>
    <script src="./bootstrap/js/bootstrap-carousel.js"></script>
    <script src="./bootstrap/js/bootstrap-typeahead.js"></script>

  </body>
</html>

    <?php  
	}
public function content(){
     
     return $this->content;
	}	
public function set_content($page){
   // $string=  require_once $page;
//    $doc=new DOMDocument();
 // $doc->loadHTMLFile($page);
   // $this->content= $doc->saveHTML();
    ob_start();
include($page);
$html = ob_get_contents();
ob_end_clean();
$this->content=$html;
    
}
	
	
	
	}

?>