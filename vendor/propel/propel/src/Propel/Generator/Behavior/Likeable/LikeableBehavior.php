<?php

namespace Propel\Generator\Behavior\Likeable;

use Propel\Generator\Model\Behavior;
use Propel\Generator\Model\ForeignKey;

class LikeableBehavior extends Behavior
{

    protected $parameters = array();
    protected $likeTable;

    public function modifyTable()
    {
        $this->addLikeTable();
        $this->addBehavior();
    }

    protected function addLikeTable()
    {
        $table = $this->getTable();
        $database = $table->getDatabase();
        $likeTableName = $table->getName() . '_like';
        $likeTablePhpName = $table->getPhpName() . 'Like';

        if ($database->hasTable($likeTableName)) {
            $this->likeTable = $database->getTable($likeTableName);
        } else {
            $this->likeTable = $database->addTable(array(
                'name' => $likeTableName,
                'phpName' => $likeTablePhpName,
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
                'name' => 'likes_count',
                'type' => 'integer',
                'required' => 'true',
                'default' => '0'
            ));
            $likesCountIndex = new \Propel\Generator\Model\Index();
            $likesCountIndex->addColumn(array('name' => 'likes_count'));
            $table->addIndex($likesCountIndex);

            $this->likeTable->addColumn(array(
                'name' => 'obj_id',
                'type' => 'integer',
                'required' => 'true',
                'primaryKey' => 'true'
            ));
            $this->likeTable->addColumn(array(
                'name' => 'user_id',
                'type' => 'integer',
                'required' => 'true',
                'primaryKey' => 'true'
            ));
            $this->likeTable->addColumn(array(
                'name' => 'time',
                'type' => 'integer',
                'required' => 'true',
            ));

            $pks = $this->getTable()->getPrimaryKey();
            if (count($pks) > 1) {
                throw new EngineException('The likeable behavior does not support tables with composite primary keys');
            }

            $fkObj = new ForeignKey();
            $fkObj->setForeignTableCommonName($table->getCommonName());
            $fkObj->setForeignSchemaName($table->getSchema());
            $fkObj->setOnDelete(ForeignKey::CASCADE);
            $fkObj->setOnUpdate(ForeignKey::CASCADE);
            foreach ($pks as $column) {
                $fkObj->addReference('obj_id', $column->getName());
            }
            $this->likeTable->addForeignKey($fkObj);

            $userTable = $database->getTable('user');
            $fkUser = new ForeignKey();
            $fkUser->setForeignTableCommonName($userTable->getCommonName());
            $fkUser->setForeignSchemaName($userTable->getSchema());
            $fkUser->setOnDelete(ForeignKey::CASCADE);
            $fkUser->setOnUpdate(ForeignKey::CASCADE);
            $fkUser->addReference('user_id', 'id');
            $this->likeTable->addForeignKey($fkUser);

            $index = new \Propel\Generator\Model\Index();
            $index->addColumn(array('name' => 'time'));
            $this->likeTable->addIndex($index);
        }
    }

    protected function addBehavior()
    {
    }

}
