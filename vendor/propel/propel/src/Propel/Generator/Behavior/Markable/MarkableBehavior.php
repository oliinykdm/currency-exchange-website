<?php

namespace Propel\Generator\Behavior\Markable;

use Propel\Generator\Model\Behavior;
use Propel\Generator\Model\ForeignKey;

class MarkableBehavior extends Behavior
{

    protected $parameters = array();
    protected $markTable;

    public function modifyTable()
    {
        $this->addMarkTable();
    }

    protected function addMarkTable()
    {
        $table = $this->getTable();
        $database = $table->getDatabase();
        $markTableName = $table->getName() . '_mark';
        $markTablePhpName = $table->getPhpName() . 'Mark';

        if ($database->hasTable($markTableName)) {
            $this->markTable = $database->getTable($markTableName);
        } else {
            $this->markTable = $database->addTable(array(
                'name' => $markTableName,
                'phpName' => $markTablePhpName,
                'package' => $table->getPackage(),
                'schema' => $table->getSchema(),
                'namespace' => $table->getNamespace() ? '\\' . $table->getNamespace() : null,
                'skipSql' => $table->isSkipSql()
            ));

            // every behavior adding a table should re-execute database behaviors
            foreach ($database->getBehaviors() as $behavior) {
                $behavior->modifyDatabase();
            }

            $table->addColumn(array(
                'name' => 'marks_count',
                'type' => 'integer',
                'required' => 'true',
                'default' => '0'
            ));
            $marksCountIndex = new \Propel\Generator\Model\Index();
            $marksCountIndex->addColumn(array('name' => 'marks_count'));
            $table->addIndex($marksCountIndex);

            $table->addColumn(array(
                'name' => 'marks_sum',
                'type' => 'integer',
                'required' => 'true',
                'default' => '0'
            ));
            $marksSumIndex = new \Propel\Generator\Model\Index();
            $marksSumIndex->addColumn(array('name' => 'marks_sum'));
            $table->addIndex($marksSumIndex);

            $this->markTable->addColumn(array(
                'name' => 'obj_id',
                'type' => 'integer',
                'required' => 'true',
                'primaryKey' => 'true'
            ));
            $this->markTable->addColumn(array(
                'name' => 'user_id',
                'type' => 'integer',
                'required' => 'true',
                'primaryKey' => 'true'
            ));
            $this->markTable->addColumn(array(
                'name' => 'time',
                'type' => 'integer',
                'required' => 'true',
            ));
            $this->markTable->addColumn(array(
                'name' => 'mark',
                'type' => 'integer',
                'required' => 'true',
            ));

            $pks = $this->getTable()->getPrimaryKey();
            if (count($pks) > 1) {
                throw new EngineException('The markable behavior does not support tables with composite primary keys');
            }

            $fkObj = new ForeignKey();
            $fkObj->setForeignTableCommonName($table->getCommonName());
            $fkObj->setForeignSchemaName($table->getSchema());
            $fkObj->setOnDelete(ForeignKey::CASCADE);
            $fkObj->setOnUpdate(ForeignKey::CASCADE);
            foreach ($pks as $column) {
                $fkObj->addReference('obj_id', $column->getName());
            }
            $this->markTable->addForeignKey($fkObj);

            $userTable = $database->getTable('user');
            $fkUser = new ForeignKey();
            $fkUser->setForeignTableCommonName($userTable->getCommonName());
            $fkUser->setForeignSchemaName($userTable->getSchema());
            $fkUser->setOnDelete(ForeignKey::CASCADE);
            $fkUser->setOnUpdate(ForeignKey::CASCADE);
            $fkUser->addReference('user_id', 'id');
            $this->markTable->addForeignKey($fkUser);

            $index = new \Propel\Generator\Model\Index();
            $index->addColumn(array('name' => 'time'));
            $this->markTable->addIndex($index);
        }
    }

}
