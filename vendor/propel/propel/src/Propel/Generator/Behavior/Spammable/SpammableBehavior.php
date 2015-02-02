<?php

namespace Propel\Generator\Behavior\Spammable;

use Propel\Generator\Model\Behavior;
use Propel\Generator\Model\ForeignKey;

class SpammableBehavior extends Behavior
{

    protected $parameters = array();
    protected $spamTable;

    public function modifyTable()
    {
        $this->addSpamTable();
        $this->addBehavior();
    }

    protected function addSpamTable()
    {
        $table = $this->getTable();
        $database = $table->getDatabase();
        $spamTableName = $table->getName() . '_spam';
        $spamTablePhpName = $table->getPhpName() . 'Spam';

        if ($database->hasTable($spamTableName)) {
            $this->spamTable = $database->getTable($spamTableName);
        } else {
            $this->spamTable = $database->addTable(array(
                'name' => $spamTableName,
                'phpName' => $spamTablePhpName,
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
                'name' => 'spam_count',
                'type' => 'integer',
                'required' => 'true',
                'default' => '0'
            ));
            $spamCountIndex = new \Propel\Generator\Model\Index();
            $spamCountIndex->addColumn(array('name' => 'spam_count'));
            $table->addIndex($spamCountIndex);

            $this->spamTable->addColumn(array(
                'name' => 'obj_id',
                'type' => 'integer',
                'required' => 'true',
                'primaryKey' => 'true'
            ));
            $this->spamTable->addColumn(array(
                'name' => 'user_id',
                'type' => 'integer',
                'required' => 'true',
                'primaryKey' => 'true'
            ));
            $this->spamTable->addColumn(array(
                'name' => 'time',
                'type' => 'integer',
                'required' => 'true',
            ));

            $pks = $this->getTable()->getPrimaryKey();
            if (count($pks) > 1) {
                throw new EngineException('The spammable behavior does not support tables with composite primary keys');
            }

            $fkObj = new ForeignKey();
            $fkObj->setForeignTableCommonName($table->getCommonName());
            $fkObj->setForeignSchemaName($table->getSchema());
            $fkObj->setOnDelete(ForeignKey::CASCADE);
            $fkObj->setOnUpdate(ForeignKey::CASCADE);
            foreach ($pks as $column) {
                $fkObj->addReference('obj_id', $column->getName());
            }
            $this->spamTable->addForeignKey($fkObj);

            $userTable = $database->getTable('user');
            $fkUser = new ForeignKey();
            $fkUser->setForeignTableCommonName($userTable->getCommonName());
            $fkUser->setForeignSchemaName($userTable->getSchema());
            $fkUser->setOnDelete(ForeignKey::CASCADE);
            $fkUser->setOnUpdate(ForeignKey::CASCADE);
            $fkUser->addReference('user_id', 'id');
            $this->spamTable->addForeignKey($fkUser);

            $index = new \Propel\Generator\Model\Index();
            $index->addColumn(array('name' => 'time'));
            $this->spamTable->addIndex($index);
        }
    }

    protected function addBehavior()
    {
    }

}
