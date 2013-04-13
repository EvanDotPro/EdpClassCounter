<?php
namespace ClassCounter;

class Module
{
    protected $initialClassCount;

    public function getServiceConfig()
    {
        return array(
            'invokables' => array(
                'ClassCounter\ClassCountCollector' => 'ClassCounter\ClassCountCollector',
            ),
        );
    }

    public function onBootstrap()
    {
        //$test = new ClassCountCollector();
    }

    public function getConfig()
    {
        return array(
            'zenddevelopertools' => array(
                'toolbar' => array(
                    'entries' => array(
                        'classcount' => 'classcounter/class-count',
                    ),
                ),
                'profiler' => array(
                    'collectors' => array(
                       'classcount' => 'ClassCounter\ClassCountCollector',
                    ),
               ),
            ),
            'view_manager' => array(
                'template_path_stack' => array(__DIR__ . '/view'),
            ),
        );
    }

    public function getAutoloaderConfig()
    {
        return array(
            'Zend\Loader\ClassMapAutoloader' => array(
                array('ClassCounter\ClassCountCollector' => __DIR__ . '/ClassCountCollector.php'),
            ),
        );
    }
}
