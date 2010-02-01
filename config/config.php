<?php
include($this->configCache->checkConfig('config/config_handlers.yml'));
foreach ($this->handlers as $handler_path=>$handler_config)
{
    if (strstr($handler_path, '/ex_'))
    {
        $this->configCache->import($handler_path);
    }
}
