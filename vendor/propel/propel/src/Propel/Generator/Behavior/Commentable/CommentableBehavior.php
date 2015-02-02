<?php

namespace Propel\Generator\Behavior\Commentable;

use Propel\Generator\Model\Behavior;
use Propel\Generator\Model\ForeignKey;

class CommentableBehavior extends Behavior
{

    protected $parameters = array();
    protected $commentTable;

    public function modifyTable()
    {
        $this->addCommentTable();
        $this->addBehavior();
        $this->addCommentLikeableBehavior();
    }

    protected function addCommentTable()
    {
        $table = $this->getTable();
        $database = $table->getDatabase();
        $commentTableName = $table->getName() . '_comment';
        $commentTablePhpName = $table->getPhpName() . 'Comment';

        if ($database->hasTable($commentTableName)) {
            $this->commentTable = $database->getTable($commentTableName);
        } else {
            $this->commentTable = $database->addTable(array(
                'name' => $commentTableName,
                'phpName' => $commentTablePhpName,
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
                'name' => 'comments_count',
                'type' => 'integer',
                'required' => 'true',
                'default' => '0'
            ));
            $commentsCountIndex = new \Propel\Generator\Model\Index();
            $commentsCountIndex->addColumn(array('name' => 'comments_count'));
            $table->addIndex($commentsCountIndex);

            $this->commentTable->addColumn(array(
                'name' => 'id',
                'type' => 'integer',
                'required' => 'true',
                'primaryKey' => 'true',
                'autoIncrement' => 'true'
            ));
            $this->commentTable->addColumn(array(
                'name' => 'obj_id',
                'type' => 'integer',
                'required' => 'true'
            ));
            $this->commentTable->addColumn(array(
                'name' => 'parent_id',
                'type' => 'integer'
            ));
            $this->commentTable->addColumn(array(
                'name' => 'user_id',
                'type' => 'integer',
                'required' => 'true'
            ));
            $this->commentTable->addColumn(array(
                'name' => 'time',
                'type' => 'integer',
                'required' => 'true',
            ));
            $this->commentTable->addColumn(array(
                'name' => 'text',
                'type' => 'varchar',
                'size' => '1000',
                'required' => 'true',
            ));
            $this->commentTable->addColumn(array(
                'name' => 'spamVotes',
                'type' => 'integer',
                'required' => 'true',
                'default' => '0'
            ));

            if($table->getName() == 'user_wall_message'):
                $this->commentTable->addColumn(array(
                    'name' => 'is_formatted',
                    'type' => 'integer',
                    'required' => 'true',
                    'default' => '0'
                ));
                endif;
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
            $this->commentTable->addForeignKey($fkObj);

            $fkParent = new ForeignKey();
            $fkParent->setForeignTableCommonName($this->commentTable->getCommonName());
            $fkParent->setForeignSchemaName($this->commentTable->getSchema());
            $fkParent->setOnDelete(ForeignKey::CASCADE);
            $fkParent->setOnUpdate(ForeignKey::CASCADE);
            foreach ($pks as $column) {
                $fkParent->addReference('parent_id', $column->getName());
            }
            $this->commentTable->addForeignKey($fkParent);

            $userTable = $database->getTable('user');
            $fkUser = new ForeignKey();
            $fkUser->setForeignTableCommonName($userTable->getCommonName());
            $fkUser->setForeignSchemaName($userTable->getSchema());
            $fkUser->setOnDelete(ForeignKey::CASCADE);
            $fkUser->setOnUpdate(ForeignKey::CASCADE);
            $fkUser->addReference('user_id', 'id');
            $this->commentTable->addForeignKey($fkUser);

            $index = new \Propel\Generator\Model\Index();
            $index->addColumn(array('name' => 'time'));
            $this->commentTable->addIndex($index);
        }
    }

    protected function addBehavior()
    {

    }

    protected function addCommentLikeableBehavior()
    {
        $this->commentTable->addBehavior(array('name' => 'likeable'));
        $this->commentTable->addBehavior(array('name' => 'spammable'));
    }

}
