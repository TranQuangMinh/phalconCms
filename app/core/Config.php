<?php 
namespace VINA; 
/**
* 
*/
class Config
{
	
	static function get() {
		$config = array(
			'db' => array(
				'adapter'  => 'Mysql',
		        'host'     => 'localhost',
		        'username' => 'root',
		        'password' => '',
		        'dbname'   => 'yona',
		        'charset'  => 'utf8',
			),
			'loader' => array(
				'namespaces' => array(
					'Application'    => APPLICATION_PATH . '/modules/Applicationm',
					'YonaCMS\Plugin' => APPLICATION_PATH . '/plugins/',
				)
			),
			'base_path' => '/',
			'modules' => array( 
			),
			'cache' => '',
			'assets' => array(
				'js' => ''
			)
		);

		$modules_list = include_once APPLICATION_PATH . '/config/modules.php';
		$systemConfig = include_once APPLICATION_PATH . '/config/system.php';
        require_once APPLICATION_PATH . '/modules/Applicationm/Loader/Modules.php';
        $modules = new \Application\Loader\Modules();
        $modules_config = $modules->modulesConfig($modules_list);

        $config = array_merge_recursive($config, $modules_config, $systemConfig);
		return new \Phalcon\Config($config);
	}
}