<?php
namespace PropertyEnum\Model\Behavior\Strategy;

use CakeDC\Enum\Model\Behavior\Strategy\AbstractStrategy;
use Cake\Core\Configure;

class PropertyStrategy extends AbstractStrategy
{
    /**
     * {@inheritDoc}
     */
    public function enum(array $config = [])
    {
        if (version_compare(Configure::version(), '3.4.0') < 0) {
            return (array)$this->_table->enums[$this->getConfig('field')];
        }

        return (array)$this->_table->enums[$this->config('field')];
    }
}
