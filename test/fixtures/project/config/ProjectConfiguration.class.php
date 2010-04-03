<?php

if (!isset($_SERVER['SYMFONY']))
{
  throw new RuntimeException('Could not find symfony core libraries.');
}

require_once $_SERVER['SYMFONY'].'/autoload/sfCoreAutoload.class.php';
sfCoreAutoload::register();

class ProjectConfiguration extends sfProjectConfiguration
{
  public function setup()
  {
    $this->setPlugins(array('testPlugin'));
    $this->setPluginPath('testPlugin', dirname(__FILE__).'/../../../..');
    
    $this->enablePlugins(array('sfSympalPlugin'));
  }
}