<?php

namespace Propel\Generator\Behavior\Mediable;

use Propel\Generator\Model\Behavior;
use Propel\Generator\Model\ForeignKey;

class MediableBehavior extends Behavior
{

    protected $parameters = array();
    protected $mediaTable;

    public function modifyTable()
    {
        $this->addMediaTable();
        $this->addBehavior();
    }

    protected function addMediaTable()
    {
        $table = $this->getTable();
        $database = $table->getDatabase();
        $mediaTableName = $table->getName() . '_media';
        $mediaTablePhpName = $table->getPhpName() . 'Media';

        if ($database->hasTable($mediaTableName)) {
            $this->mediaTable = $database->getTable($mediaTableName);
        } else {
            $this->mediaTable = $database->addTable(array(
                'name' => $mediaTableName,
                'phpName' => $mediaTablePhpName,
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
                'name' => 'media_count',
                'type' => 'integer',
                'required' => 'true',
                'default' => '0'
            ));
            $this->mediaTable->addColumn(array(
                'name' => 'id',
                'type' => 'integer',
                'required' => 'true',
                'primaryKey' => 'true',
                'autoIncrement' => 'true'
            ));
            $this->mediaTable->addColumn(array(
                'name' => 'obj_id',
                'type' => 'integer',
                'required' => 'true'
            ));
            $this->mediaTable->addColumn(array(
                'name' => 'type',
                'type' => 'varchar',
                'size' => '50',
                'required' => 'true',
            ));
            $this->mediaTable->addColumn(array(
                'name' => 'code',
                'type' => 'varchar',
                'size' => '200',
                'required' => 'true',
            ));
            $this->mediaTable->addColumn(array(
                'name' => 'description',
                'type' => 'longvarchar'
            ));

            $pks = $this->getTable()->getPrimaryKey();
            if (count($pks) > 1) {
                throw new \Propel\Generator\Exception\EngineException('The likeable behavior does not support tables with composite primary keys');
            }

            $fkObj = new ForeignKey();
            $fkObj->setForeignTableCommonName($table->getCommonName());
            $fkObj->setForeignSchemaName($table->getSchema());
            $fkObj->setOnDelete(ForeignKey::CASCADE);
            $fkObj->setOnUpdate(ForeignKey::CASCADE);
            foreach ($pks as $column) {
                $fkObj->addReference('obj_id', $column->getName());
            }
            $this->mediaTable->addForeignKey($fkObj);
        }
    }

    protected function addBehavior()
    {
        $behavior = new \Propel\Generator\Behavior\Sortable\SortableBehavior();
        $behavior->addParameter(array('name' => 'rank_column', 'value' => 'position'));
        $this->mediaTable->addBehavior($behavior);
//        $this->mediaTable->addBehavior(array('name' => 'commentable'));
//        $this->mediaTable->addBehavior(array('name' => 'likeable'));
//        $table = $this->getTable();
//        $table->addBehavior($behavior);
    }

}
