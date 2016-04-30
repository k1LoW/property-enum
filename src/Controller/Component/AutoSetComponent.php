<?php
namespace PropertyEnum\Controller\Component;

use Cake\Controller\Component;
use Cake\Utility\Inflector;
use Cake\ORM\TableRegistry;

class AutoSetComponent extends Component
{
    public function startup()
    {
        $controller = $this->_registry->getController();
        $table = $controller->loadModel();
        $tableAlias = $table->table();
        if (empty($table->enums)) {
            return;
        }
        foreach($table->enums as $field => $enum) {
            $controller->set(
                Inflector::pluralize(Inflector::variable($field)),
                $table->enum($field)
            );
        }
    }
}
