<?php
namespace EdpClassCounter;

use ZendDeveloperTools\Collector\AbstractCollector;
use Zend\Mvc\MvcEvent;

class ClassCountCollector extends AbstractCollector
{
    protected $initialClassCount;

    public function __construct()
    {
        $this->initialClassCount = count(get_declared_classes());
    }

    public function getClassCount()
    {
        return count(get_declared_classes()) - $this->initialClassCount;
    }

    public function getName()
    {
        return 'classcount';
    }

    public function getPriority()
    {
        return 0;
    }

    public function collect(MvcEvent $mvcEvent)
    {
        // nothing to do here
    }
}
