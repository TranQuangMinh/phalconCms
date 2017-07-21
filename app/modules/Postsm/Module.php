<?php 
namespace PostsM;

class Module
{

    public function registerAutoloaders()
    {

    }

    public function registerServices($di)
    {
        $dispatcher = $di->get('dispatcher');
        $dispatcher->setDefaultNamespace("Postsm\Backend\Controller");
        $di->set('dispatcher', $dispatcher);
    }

}