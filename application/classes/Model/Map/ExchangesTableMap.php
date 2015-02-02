<?php

namespace Model\Map;

use Model\Exchanges;
use Model\ExchangesQuery;
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
 * This class defines the structure of the 'exchanges' table.
 *
 *
 *
 * This map class is used by Propel to do runtime db structure discovery.
 * For example, the createSelectSql() method checks the type of a given column used in an
 * ORDER BY clause to know whether it needs to apply SQL to make the ORDER BY case-insensitive
 * (i.e. if it's a text column type).
 *
 */
class ExchangesTableMap extends TableMap
{
    use InstancePoolTrait;
    use TableMapTrait;

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'Model.Map.ExchangesTableMap';

    /**
     * The default database name for this class
     */
    const DATABASE_NAME = 'obmennik';

    /**
     * The table name for this class
     */
    const TABLE_NAME = 'exchanges';

    /**
     * The related Propel class for this table
     */
    const OM_CLASS = '\\Model\\Exchanges';

    /**
     * A class that can be returned by this tableMap
     */
    const CLASS_DEFAULT = 'Model.Exchanges';

    /**
     * The total number of columns
     */
    const NUM_COLUMNS = 16;

    /**
     * The number of lazy-loaded columns
     */
    const NUM_LAZY_LOAD_COLUMNS = 0;

    /**
     * The number of columns to hydrate (NUM_COLUMNS - NUM_LAZY_LOAD_COLUMNS)
     */
    const NUM_HYDRATE_COLUMNS = 16;

    /**
     * the column name for the ID field
     */
    const COL_ID = 'exchanges.ID';

    /**
     * the column name for the USERID field
     */
    const COL_USERID = 'exchanges.USERID';

    /**
     * the column name for the SURNAME field
     */
    const COL_SURNAME = 'exchanges.SURNAME';

    /**
     * the column name for the FIRSTNAME field
     */
    const COL_FIRSTNAME = 'exchanges.FIRSTNAME';

    /**
     * the column name for the PATRONYMIC field
     */
    const COL_PATRONYMIC = 'exchanges.PATRONYMIC';

    /**
     * the column name for the EMAIL field
     */
    const COL_EMAIL = 'exchanges.EMAIL';

    /**
     * the column name for the PHONE field
     */
    const COL_PHONE = 'exchanges.PHONE';

    /**
     * the column name for the PAYMENT_DETAILS_FROM field
     */
    const COL_PAYMENT_DETAILS_FROM = 'exchanges.PAYMENT_DETAILS_FROM';

    /**
     * the column name for the PAYMENT_DETAILS_TO field
     */
    const COL_PAYMENT_DETAILS_TO = 'exchanges.PAYMENT_DETAILS_TO';

    /**
     * the column name for the CHANGE_FROM_CURR field
     */
    const COL_CHANGE_FROM_CURR = 'exchanges.CHANGE_FROM_CURR';

    /**
     * the column name for the CHANGE_TO_CURR field
     */
    const COL_CHANGE_TO_CURR = 'exchanges.CHANGE_TO_CURR';

    /**
     * the column name for the CHANGE_FROM_AMOUNT field
     */
    const COL_CHANGE_FROM_AMOUNT = 'exchanges.CHANGE_FROM_AMOUNT';

    /**
     * the column name for the CHANGE_TO_AMOUNT field
     */
    const COL_CHANGE_TO_AMOUNT = 'exchanges.CHANGE_TO_AMOUNT';

    /**
     * the column name for the EXCHANGE_DATE field
     */
    const COL_EXCHANGE_DATE = 'exchanges.EXCHANGE_DATE';

    /**
     * the column name for the EXCHANGE_UNIQID field
     */
    const COL_EXCHANGE_UNIQID = 'exchanges.EXCHANGE_UNIQID';

    /**
     * the column name for the EXCHANGE_STATUS field
     */
    const COL_EXCHANGE_STATUS = 'exchanges.EXCHANGE_STATUS';

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
        self::TYPE_PHPNAME       => array('Id', 'Userid', 'Surname', 'Firstname', 'Patronymic', 'Email', 'Phone', 'PaymentDetailsFrom', 'PaymentDetailsTo', 'ChangeFromCurr', 'ChangeToCurr', 'ChangeFromAmount', 'ChangeToAmount', 'ExchangeDate', 'ExchangeUniqid', 'ExchangeStatus', ),
        self::TYPE_STUDLYPHPNAME => array('id', 'userid', 'surname', 'firstname', 'patronymic', 'email', 'phone', 'paymentDetailsFrom', 'paymentDetailsTo', 'changeFromCurr', 'changeToCurr', 'changeFromAmount', 'changeToAmount', 'exchangeDate', 'exchangeUniqid', 'exchangeStatus', ),
        self::TYPE_COLNAME       => array(ExchangesTableMap::COL_ID, ExchangesTableMap::COL_USERID, ExchangesTableMap::COL_SURNAME, ExchangesTableMap::COL_FIRSTNAME, ExchangesTableMap::COL_PATRONYMIC, ExchangesTableMap::COL_EMAIL, ExchangesTableMap::COL_PHONE, ExchangesTableMap::COL_PAYMENT_DETAILS_FROM, ExchangesTableMap::COL_PAYMENT_DETAILS_TO, ExchangesTableMap::COL_CHANGE_FROM_CURR, ExchangesTableMap::COL_CHANGE_TO_CURR, ExchangesTableMap::COL_CHANGE_FROM_AMOUNT, ExchangesTableMap::COL_CHANGE_TO_AMOUNT, ExchangesTableMap::COL_EXCHANGE_DATE, ExchangesTableMap::COL_EXCHANGE_UNIQID, ExchangesTableMap::COL_EXCHANGE_STATUS, ),
        self::TYPE_RAW_COLNAME   => array('COL_ID', 'COL_USERID', 'COL_SURNAME', 'COL_FIRSTNAME', 'COL_PATRONYMIC', 'COL_EMAIL', 'COL_PHONE', 'COL_PAYMENT_DETAILS_FROM', 'COL_PAYMENT_DETAILS_TO', 'COL_CHANGE_FROM_CURR', 'COL_CHANGE_TO_CURR', 'COL_CHANGE_FROM_AMOUNT', 'COL_CHANGE_TO_AMOUNT', 'COL_EXCHANGE_DATE', 'COL_EXCHANGE_UNIQID', 'COL_EXCHANGE_STATUS', ),
        self::TYPE_FIELDNAME     => array('id', 'userid', 'surname', 'firstname', 'patronymic', 'email', 'phone', 'payment_details_from', 'payment_details_to', 'change_from_curr', 'change_to_curr', 'change_from_amount', 'change_to_amount', 'exchange_date', 'exchange_uniqid', 'exchange_status', ),
        self::TYPE_NUM           => array(0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, )
    );

    /**
     * holds an array of keys for quick access to the fieldnames array
     *
     * first dimension keys are the type constants
     * e.g. self::$fieldKeys[self::TYPE_PHPNAME]['Id'] = 0
     */
    protected static $fieldKeys = array (
        self::TYPE_PHPNAME       => array('Id' => 0, 'Userid' => 1, 'Surname' => 2, 'Firstname' => 3, 'Patronymic' => 4, 'Email' => 5, 'Phone' => 6, 'PaymentDetailsFrom' => 7, 'PaymentDetailsTo' => 8, 'ChangeFromCurr' => 9, 'ChangeToCurr' => 10, 'ChangeFromAmount' => 11, 'ChangeToAmount' => 12, 'ExchangeDate' => 13, 'ExchangeUniqid' => 14, 'ExchangeStatus' => 15, ),
        self::TYPE_STUDLYPHPNAME => array('id' => 0, 'userid' => 1, 'surname' => 2, 'firstname' => 3, 'patronymic' => 4, 'email' => 5, 'phone' => 6, 'paymentDetailsFrom' => 7, 'paymentDetailsTo' => 8, 'changeFromCurr' => 9, 'changeToCurr' => 10, 'changeFromAmount' => 11, 'changeToAmount' => 12, 'exchangeDate' => 13, 'exchangeUniqid' => 14, 'exchangeStatus' => 15, ),
        self::TYPE_COLNAME       => array(ExchangesTableMap::COL_ID => 0, ExchangesTableMap::COL_USERID => 1, ExchangesTableMap::COL_SURNAME => 2, ExchangesTableMap::COL_FIRSTNAME => 3, ExchangesTableMap::COL_PATRONYMIC => 4, ExchangesTableMap::COL_EMAIL => 5, ExchangesTableMap::COL_PHONE => 6, ExchangesTableMap::COL_PAYMENT_DETAILS_FROM => 7, ExchangesTableMap::COL_PAYMENT_DETAILS_TO => 8, ExchangesTableMap::COL_CHANGE_FROM_CURR => 9, ExchangesTableMap::COL_CHANGE_TO_CURR => 10, ExchangesTableMap::COL_CHANGE_FROM_AMOUNT => 11, ExchangesTableMap::COL_CHANGE_TO_AMOUNT => 12, ExchangesTableMap::COL_EXCHANGE_DATE => 13, ExchangesTableMap::COL_EXCHANGE_UNIQID => 14, ExchangesTableMap::COL_EXCHANGE_STATUS => 15, ),
        self::TYPE_RAW_COLNAME   => array('COL_ID' => 0, 'COL_USERID' => 1, 'COL_SURNAME' => 2, 'COL_FIRSTNAME' => 3, 'COL_PATRONYMIC' => 4, 'COL_EMAIL' => 5, 'COL_PHONE' => 6, 'COL_PAYMENT_DETAILS_FROM' => 7, 'COL_PAYMENT_DETAILS_TO' => 8, 'COL_CHANGE_FROM_CURR' => 9, 'COL_CHANGE_TO_CURR' => 10, 'COL_CHANGE_FROM_AMOUNT' => 11, 'COL_CHANGE_TO_AMOUNT' => 12, 'COL_EXCHANGE_DATE' => 13, 'COL_EXCHANGE_UNIQID' => 14, 'COL_EXCHANGE_STATUS' => 15, ),
        self::TYPE_FIELDNAME     => array('id' => 0, 'userid' => 1, 'surname' => 2, 'firstname' => 3, 'patronymic' => 4, 'email' => 5, 'phone' => 6, 'payment_details_from' => 7, 'payment_details_to' => 8, 'change_from_curr' => 9, 'change_to_curr' => 10, 'change_from_amount' => 11, 'change_to_amount' => 12, 'exchange_date' => 13, 'exchange_uniqid' => 14, 'exchange_status' => 15, ),
        self::TYPE_NUM           => array(0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, )
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
        $this->setName('exchanges');
        $this->setPhpName('Exchanges');
        $this->setClassName('\\Model\\Exchanges');
        $this->setPackage('Model');
        $this->setUseIdGenerator(true);
        // columns
        $this->addPrimaryKey('ID', 'Id', 'INTEGER', true, null, null);
        $this->addColumn('USERID', 'Userid', 'INTEGER', true, null, 0);
        $this->addColumn('SURNAME', 'Surname', 'VARCHAR', false, 255, null);
        $this->addColumn('FIRSTNAME', 'Firstname', 'VARCHAR', false, 255, null);
        $this->addColumn('PATRONYMIC', 'Patronymic', 'VARCHAR', false, 255, null);
        $this->addColumn('EMAIL', 'Email', 'VARCHAR', false, 255, null);
        $this->addColumn('PHONE', 'Phone', 'VARCHAR', false, 255, null);
        $this->addColumn('PAYMENT_DETAILS_FROM', 'PaymentDetailsFrom', 'VARCHAR', true, 64, null);
        $this->addColumn('PAYMENT_DETAILS_TO', 'PaymentDetailsTo', 'VARCHAR', true, 64, null);
        $this->addColumn('CHANGE_FROM_CURR', 'ChangeFromCurr', 'VARCHAR', true, 64, null);
        $this->addColumn('CHANGE_TO_CURR', 'ChangeToCurr', 'VARCHAR', true, 64, null);
        $this->addColumn('CHANGE_FROM_AMOUNT', 'ChangeFromAmount', 'VARCHAR', true, 64, null);
        $this->addColumn('CHANGE_TO_AMOUNT', 'ChangeToAmount', 'VARCHAR', true, 64, null);
        $this->addColumn('EXCHANGE_DATE', 'ExchangeDate', 'VARCHAR', false, 255, null);
        $this->addColumn('EXCHANGE_UNIQID', 'ExchangeUniqid', 'VARCHAR', false, 255, null);
        $this->addColumn('EXCHANGE_STATUS', 'ExchangeStatus', 'VARCHAR', false, 255, null);
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
        return $withPrefix ? ExchangesTableMap::CLASS_DEFAULT : ExchangesTableMap::OM_CLASS;
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
     * @return array           (Exchanges object, last column rank)
     */
    public static function populateObject($row, $offset = 0, $indexType = TableMap::TYPE_NUM)
    {
        $key = ExchangesTableMap::getPrimaryKeyHashFromRow($row, $offset, $indexType);
        if (null !== ($obj = ExchangesTableMap::getInstanceFromPool($key))) {
            // We no longer rehydrate the object, since this can cause data loss.
            // See http://www.propelorm.org/ticket/509
            // $obj->hydrate($row, $offset, true); // rehydrate
            $col = $offset + ExchangesTableMap::NUM_HYDRATE_COLUMNS;
        } else {
            $cls = ExchangesTableMap::OM_CLASS;
            /** @var Exchanges $obj */
            $obj = new $cls();
            $col = $obj->hydrate($row, $offset, false, $indexType);
            ExchangesTableMap::addInstanceToPool($obj, $key);
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
            $key = ExchangesTableMap::getPrimaryKeyHashFromRow($row, 0, $dataFetcher->getIndexType());
            if (null !== ($obj = ExchangesTableMap::getInstanceFromPool($key))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj->hydrate($row, 0, true); // rehydrate
                $results[] = $obj;
            } else {
                /** @var Exchanges $obj */
                $obj = new $cls();
                $obj->hydrate($row);
                $results[] = $obj;
                ExchangesTableMap::addInstanceToPool($obj, $key);
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
            $criteria->addSelectColumn(ExchangesTableMap::COL_ID);
            $criteria->addSelectColumn(ExchangesTableMap::COL_USERID);
            $criteria->addSelectColumn(ExchangesTableMap::COL_SURNAME);
            $criteria->addSelectColumn(ExchangesTableMap::COL_FIRSTNAME);
            $criteria->addSelectColumn(ExchangesTableMap::COL_PATRONYMIC);
            $criteria->addSelectColumn(ExchangesTableMap::COL_EMAIL);
            $criteria->addSelectColumn(ExchangesTableMap::COL_PHONE);
            $criteria->addSelectColumn(ExchangesTableMap::COL_PAYMENT_DETAILS_FROM);
            $criteria->addSelectColumn(ExchangesTableMap::COL_PAYMENT_DETAILS_TO);
            $criteria->addSelectColumn(ExchangesTableMap::COL_CHANGE_FROM_CURR);
            $criteria->addSelectColumn(ExchangesTableMap::COL_CHANGE_TO_CURR);
            $criteria->addSelectColumn(ExchangesTableMap::COL_CHANGE_FROM_AMOUNT);
            $criteria->addSelectColumn(ExchangesTableMap::COL_CHANGE_TO_AMOUNT);
            $criteria->addSelectColumn(ExchangesTableMap::COL_EXCHANGE_DATE);
            $criteria->addSelectColumn(ExchangesTableMap::COL_EXCHANGE_UNIQID);
            $criteria->addSelectColumn(ExchangesTableMap::COL_EXCHANGE_STATUS);
        } else {
            $criteria->addSelectColumn($alias . '.ID');
            $criteria->addSelectColumn($alias . '.USERID');
            $criteria->addSelectColumn($alias . '.SURNAME');
            $criteria->addSelectColumn($alias . '.FIRSTNAME');
            $criteria->addSelectColumn($alias . '.PATRONYMIC');
            $criteria->addSelectColumn($alias . '.EMAIL');
            $criteria->addSelectColumn($alias . '.PHONE');
            $criteria->addSelectColumn($alias . '.PAYMENT_DETAILS_FROM');
            $criteria->addSelectColumn($alias . '.PAYMENT_DETAILS_TO');
            $criteria->addSelectColumn($alias . '.CHANGE_FROM_CURR');
            $criteria->addSelectColumn($alias . '.CHANGE_TO_CURR');
            $criteria->addSelectColumn($alias . '.CHANGE_FROM_AMOUNT');
            $criteria->addSelectColumn($alias . '.CHANGE_TO_AMOUNT');
            $criteria->addSelectColumn($alias . '.EXCHANGE_DATE');
            $criteria->addSelectColumn($alias . '.EXCHANGE_UNIQID');
            $criteria->addSelectColumn($alias . '.EXCHANGE_STATUS');
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
        return Propel::getServiceContainer()->getDatabaseMap(ExchangesTableMap::DATABASE_NAME)->getTable(ExchangesTableMap::TABLE_NAME);
    }

    /**
     * Add a TableMap instance to the database for this tableMap class.
     */
    public static function buildTableMap()
    {
        $dbMap = Propel::getServiceContainer()->getDatabaseMap(ExchangesTableMap::DATABASE_NAME);
        if (!$dbMap->hasTable(ExchangesTableMap::TABLE_NAME)) {
            $dbMap->addTableObject(new ExchangesTableMap());
        }
    }

    /**
     * Performs a DELETE on the database, given a Exchanges or Criteria object OR a primary key value.
     *
     * @param mixed               $values Criteria or Exchanges object or primary key or array of primary keys
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
            $con = Propel::getServiceContainer()->getWriteConnection(ExchangesTableMap::DATABASE_NAME);
        }

        if ($values instanceof Criteria) {
            // rename for clarity
            $criteria = $values;
        } elseif ($values instanceof \Model\Exchanges) { // it's a model object
            // create criteria based on pk values
            $criteria = $values->buildPkeyCriteria();
        } else { // it's a primary key, or an array of pks
            $criteria = new Criteria(ExchangesTableMap::DATABASE_NAME);
            $criteria->add(ExchangesTableMap::COL_ID, (array) $values, Criteria::IN);
        }

        $query = ExchangesQuery::create()->mergeWith($criteria);

        if ($values instanceof Criteria) {
            ExchangesTableMap::clearInstancePool();
        } elseif (!is_object($values)) { // it's a primary key, or an array of pks
            foreach ((array) $values as $singleval) {
                ExchangesTableMap::removeInstanceFromPool($singleval);
            }
        }

        return $query->delete($con);
    }

    /**
     * Deletes all rows from the exchanges table.
     *
     * @param ConnectionInterface $con the connection to use
     * @return int The number of affected rows (if supported by underlying database driver).
     */
    public static function doDeleteAll(ConnectionInterface $con = null)
    {
        return ExchangesQuery::create()->doDeleteAll($con);
    }

    /**
     * Performs an INSERT on the database, given a Exchanges or Criteria object.
     *
     * @param mixed               $criteria Criteria or Exchanges object containing data that is used to create the INSERT statement.
     * @param ConnectionInterface $con the ConnectionInterface connection to use
     * @return mixed           The new primary key.
     * @throws PropelException Any exceptions caught during processing will be
     *                         rethrown wrapped into a PropelException.
     */
    public static function doInsert($criteria, ConnectionInterface $con = null)
    {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getWriteConnection(ExchangesTableMap::DATABASE_NAME);
        }

        if ($criteria instanceof Criteria) {
            $criteria = clone $criteria; // rename for clarity
        } else {
            $criteria = $criteria->buildCriteria(); // build Criteria from Exchanges object
        }

        if ($criteria->containsKey(ExchangesTableMap::COL_ID) && $criteria->keyContainsValue(ExchangesTableMap::COL_ID) ) {
            throw new PropelException('Cannot insert a value for auto-increment primary key ('.ExchangesTableMap::COL_ID.')');
        }


        // Set the correct dbName
        $query = ExchangesQuery::create()->mergeWith($criteria);

        // use transaction because $criteria could contain info
        // for more than one table (I guess, conceivably)
        return $con->transaction(function () use ($con, $query) {
            return $query->doInsert($con);
        });
    }

} // ExchangesTableMap
// This is the static code needed to register the TableMap for this table with the main Propel class.
//
ExchangesTableMap::buildTableMap();
