<?php

namespace Model\Map;

use Model\UsersPrepare;
use Model\UsersPrepareQuery;
use Propel\Runtime\Propel;
use Propel\Runtime\ActiveQuery\Criteria;
use Propel\Runtime\ActiveQuery\InstancePoolTrait;
use Propel\Runtime\Connection\ConnectionInterface;
use Propel\Runtime\DataFetcher\DataFetcherInterface;
use Propel\Runtime\Exception\PropelException;
use Propel\Runtime\Map\RelationMap;
use Propel\Runtime\Map\TableMap;
use Propel\Runtime\Map\TableMapTrait;


/**
 * This class defines the structure of the 'users_prepare' table.
 *
 *
 *
 * This map class is used by Propel to do runtime db structure discovery.
 * For example, the createSelectSql() method checks the type of a given column used in an
 * ORDER BY clause to know whether it needs to apply SQL to make the ORDER BY case-insensitive
 * (i.e. if it's a text column type).
 *
 */
class UsersPrepareTableMap extends TableMap
{
    use InstancePoolTrait;
    use TableMapTrait;

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'Model.Map.UsersPrepareTableMap';

    /**
     * The default database name for this class
     */
    const DATABASE_NAME = 'obmennik';

    /**
     * The table name for this class
     */
    const TABLE_NAME = 'users_prepare';

    /**
     * The related Propel class for this table
     */
    const OM_CLASS = '\\Model\\UsersPrepare';

    /**
     * A class that can be returned by this tableMap
     */
    const CLASS_DEFAULT = 'Model.UsersPrepare';

    /**
     * The total number of columns
     */
    const NUM_COLUMNS = 5;

    /**
     * The number of lazy-loaded columns
     */
    const NUM_LAZY_LOAD_COLUMNS = 0;

    /**
     * The number of columns to hydrate (NUM_COLUMNS - NUM_LAZY_LOAD_COLUMNS)
     */
    const NUM_HYDRATE_COLUMNS = 5;

    /**
     * the column name for the ID field
     */
    const COL_ID = 'users_prepare.ID';

    /**
     * the column name for the USERNAME field
     */
    const COL_USERNAME = 'users_prepare.USERNAME';

    /**
     * the column name for the EMAIL field
     */
    const COL_EMAIL = 'users_prepare.EMAIL';

    /**
     * the column name for the PASSWORD field
     */
    const COL_PASSWORD = 'users_prepare.PASSWORD';

    /**
     * the column name for the ACTIVATION_CODE field
     */
    const COL_ACTIVATION_CODE = 'users_prepare.ACTIVATION_CODE';

    /**
     * The default string format for model objects of the related table
     */
    const DEFAULT_STRING_FORMAT = 'YAML';

    /**
     * holds an array of fieldnames
     *
     * first dimension keys are the type constants
     * e.g. self::$fieldNames[self::TYPE_PHPNAME][0] = 'Id'
     */
    protected static $fieldNames = array (
        self::TYPE_PHPNAME       => array('Id', 'Username', 'Email', 'Password', 'ActivationCode', ),
        self::TYPE_STUDLYPHPNAME => array('id', 'username', 'email', 'password', 'activationCode', ),
        self::TYPE_COLNAME       => array(UsersPrepareTableMap::COL_ID, UsersPrepareTableMap::COL_USERNAME, UsersPrepareTableMap::COL_EMAIL, UsersPrepareTableMap::COL_PASSWORD, UsersPrepareTableMap::COL_ACTIVATION_CODE, ),
        self::TYPE_RAW_COLNAME   => array('COL_ID', 'COL_USERNAME', 'COL_EMAIL', 'COL_PASSWORD', 'COL_ACTIVATION_CODE', ),
        self::TYPE_FIELDNAME     => array('id', 'username', 'email', 'password', 'activation_code', ),
        self::TYPE_NUM           => array(0, 1, 2, 3, 4, )
    );

    /**
     * holds an array of keys for quick access to the fieldnames array
     *
     * first dimension keys are the type constants
     * e.g. self::$fieldKeys[self::TYPE_PHPNAME]['Id'] = 0
     */
    protected static $fieldKeys = array (
        self::TYPE_PHPNAME       => array('Id' => 0, 'Username' => 1, 'Email' => 2, 'Password' => 3, 'ActivationCode' => 4, ),
        self::TYPE_STUDLYPHPNAME => array('id' => 0, 'username' => 1, 'email' => 2, 'password' => 3, 'activationCode' => 4, ),
        self::TYPE_COLNAME       => array(UsersPrepareTableMap::COL_ID => 0, UsersPrepareTableMap::COL_USERNAME => 1, UsersPrepareTableMap::COL_EMAIL => 2, UsersPrepareTableMap::COL_PASSWORD => 3, UsersPrepareTableMap::COL_ACTIVATION_CODE => 4, ),
        self::TYPE_RAW_COLNAME   => array('COL_ID' => 0, 'COL_USERNAME' => 1, 'COL_EMAIL' => 2, 'COL_PASSWORD' => 3, 'COL_ACTIVATION_CODE' => 4, ),
        self::TYPE_FIELDNAME     => array('id' => 0, 'username' => 1, 'email' => 2, 'password' => 3, 'activation_code' => 4, ),
        self::TYPE_NUM           => array(0, 1, 2, 3, 4, )
    );

    /**
     * Initialize the table attributes and columns
     * Relations are not initialized by this method since they are lazy loaded
     *
     * @return void
     * @throws PropelException
     */
    public function initialize()
    {
        // attributes
        $this->setName('users_prepare');
        $this->setPhpName('UsersPrepare');
        $this->setClassName('\\Model\\UsersPrepare');
        $this->setPackage('Model');
        $this->setUseIdGenerator(true);
        // columns
        $this->addPrimaryKey('ID', 'Id', 'INTEGER', true, null, null);
        $this->addColumn('USERNAME', 'Username', 'VARCHAR', true, 64, null);
        $this->addColumn('EMAIL', 'Email', 'VARCHAR', true, 64, null);
        $this->addColumn('PASSWORD', 'Password', 'VARCHAR', true, 64, null);
        $this->addColumn('ACTIVATION_CODE', 'ActivationCode', 'VARCHAR', true, 64, null);
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
    } // buildRelations()

    /**
     * Retrieves a string version of the primary key from the DB resultset row that can be used to uniquely identify a row in this table.
     *
     * For tables with a single-column primary key, that simple pkey value will be returned.  For tables with
     * a multi-column primary key, a serialize()d version of the primary key will be returned.
     *
     * @param array  $row       resultset row.
     * @param int    $offset    The 0-based offset for reading from the resultset row.
     * @param string $indexType One of the class type constants TableMap::TYPE_PHPNAME, TableMap::TYPE_STUDLYPHPNAME
     *                           TableMap::TYPE_COLNAME, TableMap::TYPE_FIELDNAME, TableMap::TYPE_NUM
     *
     * @return string The primary key hash of the row
     */
    public static function getPrimaryKeyHashFromRow($row, $offset = 0, $indexType = TableMap::TYPE_NUM)
    {
        // If the PK cannot be derived from the row, return NULL.
        if ($row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Id', TableMap::TYPE_PHPNAME, $indexType)] === null) {
            return null;
        }

        return (string) $row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Id', TableMap::TYPE_PHPNAME, $indexType)];
    }

    /**
     * Retrieves the primary key from the DB resultset row
     * For tables with a single-column primary key, that simple pkey value will be returned.  For tables with
     * a multi-column primary key, an array of the primary key columns will be returned.
     *
     * @param array  $row       resultset row.
     * @param int    $offset    The 0-based offset for reading from the resultset row.
     * @param string $indexType One of the class type constants TableMap::TYPE_PHPNAME, TableMap::TYPE_STUDLYPHPNAME
     *                           TableMap::TYPE_COLNAME, TableMap::TYPE_FIELDNAME, TableMap::TYPE_NUM
     *
     * @return mixed The primary key of the row
     */
    public static function getPrimaryKeyFromRow($row, $offset = 0, $indexType = TableMap::TYPE_NUM)
    {
        return (int) $row[
            $indexType == TableMap::TYPE_NUM
                ? 0 + $offset
                : self::translateFieldName('Id', TableMap::TYPE_PHPNAME, $indexType)
        ];
    }
    
    /**
     * The class that the tableMap will make instances of.
     *
     * If $withPrefix is true, the returned path
     * uses a dot-path notation which is translated into a path
     * relative to a location on the PHP include_path.
     * (e.g. path.to.MyClass -> 'path/to/MyClass.php')
     *
     * @param boolean $withPrefix Whether or not to return the path with the class name
     * @return string path.to.ClassName
     */
    public static function getOMClass($withPrefix = true)
    {
        return $withPrefix ? UsersPrepareTableMap::CLASS_DEFAULT : UsersPrepareTableMap::OM_CLASS;
    }

    /**
     * Populates an object of the default type or an object that inherit from the default.
     *
     * @param array  $row       row returned by DataFetcher->fetch().
     * @param int    $offset    The 0-based offset for reading from the resultset row.
     * @param string $indexType The index type of $row. Mostly DataFetcher->getIndexType().
                                 One of the class type constants TableMap::TYPE_PHPNAME, TableMap::TYPE_STUDLYPHPNAME
     *                           TableMap::TYPE_COLNAME, TableMap::TYPE_FIELDNAME, TableMap::TYPE_NUM.
     *
     * @throws PropelException Any exceptions caught during processing will be
     *                         rethrown wrapped into a PropelException.
     * @return array           (UsersPrepare object, last column rank)
     */
    public static function populateObject($row, $offset = 0, $indexType = TableMap::TYPE_NUM)
    {
        $key = UsersPrepareTableMap::getPrimaryKeyHashFromRow($row, $offset, $indexType);
        if (null !== ($obj = UsersPrepareTableMap::getInstanceFromPool($key))) {
            // We no longer rehydrate the object, since this can cause data loss.
            // See http://www.propelorm.org/ticket/509
            // $obj->hydrate($row, $offset, true); // rehydrate
            $col = $offset + UsersPrepareTableMap::NUM_HYDRATE_COLUMNS;
        } else {
            $cls = UsersPrepareTableMap::OM_CLASS;
            /** @var UsersPrepare $obj */
            $obj = new $cls();
            $col = $obj->hydrate($row, $offset, false, $indexType);
            UsersPrepareTableMap::addInstanceToPool($obj, $key);
        }

        return array($obj, $col);
    }

    /**
     * The returned array will contain objects of the default type or
     * objects that inherit from the default.
     *
     * @param DataFetcherInterface $dataFetcher
     * @return array
     * @throws PropelException Any exceptions caught during processing will be
     *                         rethrown wrapped into a PropelException.
     */
    public static function populateObjects(DataFetcherInterface $dataFetcher)
    {
        $results = array();
    
        // set the class once to avoid overhead in the loop
        $cls = static::getOMClass(false);
        // populate the object(s)
        while ($row = $dataFetcher->fetch()) {
            $key = UsersPrepareTableMap::getPrimaryKeyHashFromRow($row, 0, $dataFetcher->getIndexType());
            if (null !== ($obj = UsersPrepareTableMap::getInstanceFromPool($key))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj->hydrate($row, 0, true); // rehydrate
                $results[] = $obj;
            } else {
                /** @var UsersPrepare $obj */
                $obj = new $cls();
                $obj->hydrate($row);
                $results[] = $obj;
                UsersPrepareTableMap::addInstanceToPool($obj, $key);
            } // if key exists
        }

        return $results;
    }
    /**
     * Add all the columns needed to create a new object.
     *
     * Note: any columns that were marked with lazyLoad="true" in the
     * XML schema will not be added to the select list and only loaded
     * on demand.
     *
     * @param Criteria $criteria object containing the columns to add.
     * @param string   $alias    optional table alias
     * @throws PropelException Any exceptions caught during processing will be
     *                         rethrown wrapped into a PropelException.
     */
    public static function addSelectColumns(Criteria $criteria, $alias = null)
    {
        if (null === $alias) {
            $criteria->addSelectColumn(UsersPrepareTableMap::COL_ID);
            $criteria->addSelectColumn(UsersPrepareTableMap::COL_USERNAME);
            $criteria->addSelectColumn(UsersPrepareTableMap::COL_EMAIL);
            $criteria->addSelectColumn(UsersPrepareTableMap::COL_PASSWORD);
            $criteria->addSelectColumn(UsersPrepareTableMap::COL_ACTIVATION_CODE);
        } else {
            $criteria->addSelectColumn($alias . '.ID');
            $criteria->addSelectColumn($alias . '.USERNAME');
            $criteria->addSelectColumn($alias . '.EMAIL');
            $criteria->addSelectColumn($alias . '.PASSWORD');
            $criteria->addSelectColumn($alias . '.ACTIVATION_CODE');
        }
    }

    /**
     * Returns the TableMap related to this object.
     * This method is not needed for general use but a specific application could have a need.
     * @return TableMap
     * @throws PropelException Any exceptions caught during processing will be
     *                         rethrown wrapped into a PropelException.
     */
    public static function getTableMap()
    {
        return Propel::getServiceContainer()->getDatabaseMap(UsersPrepareTableMap::DATABASE_NAME)->getTable(UsersPrepareTableMap::TABLE_NAME);
    }

    /**
     * Add a TableMap instance to the database for this tableMap class.
     */
    public static function buildTableMap()
    {
        $dbMap = Propel::getServiceContainer()->getDatabaseMap(UsersPrepareTableMap::DATABASE_NAME);
        if (!$dbMap->hasTable(UsersPrepareTableMap::TABLE_NAME)) {
            $dbMap->addTableObject(new UsersPrepareTableMap());
        }
    }

    /**
     * Performs a DELETE on the database, given a UsersPrepare or Criteria object OR a primary key value.
     *
     * @param mixed               $values Criteria or UsersPrepare object or primary key or array of primary keys
     *              which is used to create the DELETE statement
     * @param  ConnectionInterface $con the connection to use
     * @return int             The number of affected rows (if supported by underlying database driver).  This includes CASCADE-related rows
     *                         if supported by native driver or if emulated using Propel.
     * @throws PropelException Any exceptions caught during processing will be
     *                         rethrown wrapped into a PropelException.
     */
     public static function doDelete($values, ConnectionInterface $con = null)
     {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getWriteConnection(UsersPrepareTableMap::DATABASE_NAME);
        }

        if ($values instanceof Criteria) {
            // rename for clarity
            $criteria = $values;
        } elseif ($values instanceof \Model\UsersPrepare) { // it's a model object
            // create criteria based on pk values
            $criteria = $values->buildPkeyCriteria();
        } else { // it's a primary key, or an array of pks
            $criteria = new Criteria(UsersPrepareTableMap::DATABASE_NAME);
            $criteria->add(UsersPrepareTableMap::COL_ID, (array) $values, Criteria::IN);
        }

        $query = UsersPrepareQuery::create()->mergeWith($criteria);

        if ($values instanceof Criteria) {
            UsersPrepareTableMap::clearInstancePool();
        } elseif (!is_object($values)) { // it's a primary key, or an array of pks
            foreach ((array) $values as $singleval) {
                UsersPrepareTableMap::removeInstanceFromPool($singleval);
            }
        }

        return $query->delete($con);
    }

    /**
     * Deletes all rows from the users_prepare table.
     *
     * @param ConnectionInterface $con the connection to use
     * @return int The number of affected rows (if supported by underlying database driver).
     */
    public static function doDeleteAll(ConnectionInterface $con = null)
    {
        return UsersPrepareQuery::create()->doDeleteAll($con);
    }

    /**
     * Performs an INSERT on the database, given a UsersPrepare or Criteria object.
     *
     * @param mixed               $criteria Criteria or UsersPrepare object containing data that is used to create the INSERT statement.
     * @param ConnectionInterface $con the ConnectionInterface connection to use
     * @return mixed           The new primary key.
     * @throws PropelException Any exceptions caught during processing will be
     *                         rethrown wrapped into a PropelException.
     */
    public static function doInsert($criteria, ConnectionInterface $con = null)
    {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getWriteConnection(UsersPrepareTableMap::DATABASE_NAME);
        }

        if ($criteria instanceof Criteria) {
            $criteria = clone $criteria; // rename for clarity
        } else {
            $criteria = $criteria->buildCriteria(); // build Criteria from UsersPrepare object
        }

        if ($criteria->containsKey(UsersPrepareTableMap::COL_ID) && $criteria->keyContainsValue(UsersPrepareTableMap::COL_ID) ) {
            throw new PropelException('Cannot insert a value for auto-increment primary key ('.UsersPrepareTableMap::COL_ID.')');
        }


        // Set the correct dbName
        $query = UsersPrepareQuery::create()->mergeWith($criteria);

        // use transaction because $criteria could contain info
        // for more than one table (I guess, conceivably)
        return $con->transaction(function () use ($con, $query) {
            return $query->doInsert($con);
        });
    }

} // UsersPrepareTableMap
// This is the static code needed to register the TableMap for this table with the main Propel class.
//
UsersPrepareTableMap::buildTableMap();
