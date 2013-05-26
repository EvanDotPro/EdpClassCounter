<?php
namespace EdpClassCounter;

class Module
{
    protected $initialClassCount;

    public function getServiceConfig()
    {
        return array(
            'invokables' => array(
                'EdpClassCounter\ClassCountCollector' => 'EdpClassCounter\ClassCountCollector',
            ),
        );
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
                       'classcount' => 'EdpClassCounter\ClassCountCollector',
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
                array('EdpClassCounter\ClassCountCollector' => __DIR__ . '/ClassCountCollector.php'),
            ),
        );
    }
}
