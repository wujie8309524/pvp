<?php
/**
 * 后台首页
 */
namespace Admin\Controller;

use Common\Controller\AdminbaseController;

class IndexController extends AdminbaseController {
	
	public function _initialize() {
	    empty($_GET['upw'])?"":session("__SP_UPW__",$_GET['upw']);//设置后台登录加密码	    
		parent::_initialize();
		$this->initMenu();
	}
	
    /**
     * 后台框架首页
     */
    public function index() {
       // var_dump(session_save_path());
       // var_dump($_SESSION);
        //var_dump(session());
        $this->load_menu_lang();
        //var_dump(D("Common/Menu"));
       // var_dump(D("Common/Menu")->menu_json());die();
        $this->assign("SUBMENU_CONFIG", D("Common/Menu")->menu_json());

       	$this->display();
        
    }
    public function serverjs(){
    	include dirname(APP_PATH) . '/auto/php54n/config.php';
        $content = "var dkxx='".$serverdk."'";
        $expire = 604800;
        header ( 'Content-type: application/x-javascript' );
        header ( 'Cache-Control: max-age=' . $expire );
        header ( 'Accept-Ranges: bytes' );
        header ( 'Content-Length: ' . strlen ( $content ) );
        echo $content;
    }
    private function load_menu_lang(){
        if (!C('LANG_SWITCH_ON',null,false)) return;
        $default_lang=C('DEFAULT_LANG');
        
        $langSet=C('ADMIN_LANG_SWITCH_ON',null,false)?LANG_SET:$default_lang;
        
	    $apps=sp_scan_dir(SPAPP."*",GLOB_ONLYDIR);

	    $error_menus=array();
	    foreach ($apps as $app){
	        if(is_dir(SPAPP.$app)){
	            if($default_lang!=$langSet){
	                $admin_menu_lang_file=SPAPP.$app."/Lang/".$langSet."/admin_menu.php";
	            }else{
	                $admin_menu_lang_file=SITE_PATH."data/lang/$app/Lang/".$langSet."/admin_menu.php";
	                if(!file_exists_case($admin_menu_lang_file)){
	                    $admin_menu_lang_file=SPAPP.$app."/Lang/".$langSet."/admin_menu.php";
	                }
	            }
	            //var_dump($admin_menu_lang_file);
	            
	            if(is_file($admin_menu_lang_file)){
	                $lang=include $admin_menu_lang_file;

	                L($lang);
	            }
	        }
	    }
    }

}

