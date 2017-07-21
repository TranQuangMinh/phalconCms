<?php 
namespace Postsm;

class Routes
{

    public function init($router)
    {
        $router->add('/admin/posts', array(
            'namespace'  => 'Postsm\Backend\Controller',
            'module'     => 'Postsm',
            'controller' => 'index',
            'action'     => 'index',
        ))->setName('post_admin_index');

        $router->add('/posts', array(
            'namespace'  => 'Postsm\Frontend\Controller',
            'module'     => 'Postsm',
            'controller' => 'index',
            'action'     => 'index',
        ))->setName('post_frontend_index');

        return $router;
    }
}
