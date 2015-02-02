<?php

namespace Propel\Generator\Behavior\Image;

use Propel\Generator\Model\Behavior;

class ImageBehavior extends Behavior
{

    protected $parameters = [
        'column_name' => 'Image',
    ];

    public function modifyTable()
    {
        $table = $this->getTable();
        $columnName = $this->getParameter('column_name');
        if (!$table->hasColumn($columnName)) {
            $column = $this->getTable()->addColumn(array(
                'name' => $columnName . 'Path',
                'type' => 'VARCHAR',
                'size' => '100'
            ));
        }
    }

    public function objectAttributes($builder)
    {
        $columnName = $this->getParameter('column_name');
        $varName = strtolower($columnName);
        $script = <<<EOL
/**
 *
 * @var \ImageField
 */
protected \${$varName};

EOL;
        return $script;
    }

    public function objectMethods($builder)
    {
        $columnName = $this->getParameter('column_name');
        $varName = strtolower($columnName);
        $script = <<<EOL
/**
 *
 * @return \ImageField
 */
public function get{$columnName}()
{
    if (!isset(\$this->{$varName})) {
        \$this->{$varName} = \ImageField::createFromPath(\$this->get{$columnName}Path());
    }
    return \$this->{$varName};
}

EOL;
        return $script;
    }

}
