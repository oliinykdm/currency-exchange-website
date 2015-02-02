<?php

namespace Propel\Generator\Behavior\Webpage;

use Propel\Generator\Model\Behavior;

class WebpageBehavior extends Behavior
{

    protected $parameters = array();
    protected $columns = array(
        array(
            'name' => 'url',
            'type' => 'VARCHAR',
            'size' => '200',
            'required' => 'true'
        ),
        array(
            'name' => 'page_template',
            'type' => 'VARCHAR',
            'size' => '200'
        ),
        array(
            'name' => 'meta_title',
            'type' => 'VARCHAR',
            'size' => '200'
        ),
        array(
            'name' => 'meta_description',
            'type' => 'LONGVARCHAR'
        ),
        array(
            'name' => 'meta_keywords',
            'type' => 'LONGVARCHAR'
        ),
        array(
            'name' => 'page_active',
            'type' => 'BOOLEAN',
            'default' => 1,
            'required' => 'true',
        ),
    );

    public function modifyTable()
    {
        $table = $this->getTable();
        foreach ($this->columns as $column) {
            $columnName = $column['name'];
            if (!$table->hasColumn($columnName)) {
                $this->getTable()->addColumn($column);
            }
        }
        $index = new \Propel\Generator\Model\Index();
        $index->addColumn(array('name' => 'Url'));
        $table->addIndex($index);
    }

}
