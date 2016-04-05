<?php

namespace PropertyEnum\Model\Behavior\Strategy;

use CakeDC\Enum\Model\Behavior\Strategy\AbstractStrategy;

class PropertyStrategy extends AbstractStrategy
{
    /**
     * enum
     *
     */
    public function enum(array $config = []){
        return (array)$this->_table->enums[$this->config('field')];
    }
}
