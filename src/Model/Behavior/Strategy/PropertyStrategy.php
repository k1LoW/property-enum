<?php

namespace PropertyEnum\Model\Behavior\Strategy;

use Cake\Core\Configure;
use CakeDC\Enum\Model\Behavior\Strategy\AbstractStrategy;

class PropertyStrategy extends AbstractStrategy
{
    /**
     * {@inheritDoc}
     */
    public function enum(array $config = []): array
    {
        if (version_compare(Configure::version(), '3.4.0') < 0) {
            return (array) $this->_table->enums[$this->config('field')];
        }

        return (array) $this->_table->enums[$this->getConfig('field')];
    }
}
