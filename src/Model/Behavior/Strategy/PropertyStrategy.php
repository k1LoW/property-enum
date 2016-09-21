<?php
namespace PropertyEnum\Model\Behavior\Strategy;

use CakeDC\Enum\Model\Behavior\Strategy\AbstractStrategy;

class PropertyStrategy extends AbstractStrategy
{
    /**
     * {@inheritDoc}
     */
    public function enum(array $config = [])
    {
        return (array)$this->_table->enums[$this->config('field')];
    }
}
