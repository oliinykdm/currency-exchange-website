<?php

namespace Model\Base;

use \Exception;
use \PDO;
use Model\ExchangeRates as ChildExchangeRates;
use Model\ExchangeRatesQuery as ChildExchangeRatesQuery;
use Model\Map\ExchangeRatesTableMap;
use Propel\Runtime\Propel;
use Propel\Runtime\ActiveQuery\Criteria;
use Propel\Runtime\ActiveQuery\ModelCriteria;
use Propel\Runtime\Collection\ObjectCollection;
use Propel\Runtime\Connection\ConnectionInterface;
use Propel\Runtime\Exception\PropelException;

/**
 * Base class that represents a query for the 'exchange_rates' table.
 *
 * 
 *
 * @method     ChildExchangeRatesQuery orderById($order = Criteria::ASC) Order by the id column
 * @method     ChildExchangeRatesQuery orderByFrom($order = Criteria::ASC) Order by the from column
 * @method     ChildExchangeRatesQuery orderByTo($order = Criteria::ASC) Order by the to column
 * @method     ChildExchangeRatesQuery orderByValue($order = Criteria::ASC) Order by the value column
 *
 * @method     ChildExchangeRatesQuery groupById() Group by the id column
 * @method     ChildExchangeRatesQuery groupByFrom() Group by the from column
 * @method     ChildExchangeRatesQuery groupByTo() Group by the to column
 * @method     ChildExchangeRatesQuery groupByValue() Group by the value column
 *
 * @method     ChildExchangeRatesQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     ChildExchangeRatesQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     ChildExchangeRatesQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     ChildExchangeRates findOne(ConnectionInterface $con = null) Return the first ChildExchangeRates matching the query
 * @method     ChildExchangeRates findOneOrCreate(ConnectionInterface $con = null) Return the first ChildExchangeRates matching the query, or a new ChildExchangeRates object populated from the query conditions when no match is found
 *
 * @method     ChildExchangeRates findOneById(int $id) Return the first ChildExchangeRates filtered by the id column
 * @method     ChildExchangeRates findOneByFrom(string $from) Return the first ChildExchangeRates filtered by the from column
 * @method     ChildExchangeRates findOneByTo(string $to) Return the first ChildExchangeRates filtered by the to column
 * @method     ChildExchangeRates findOneByValue(string $value) Return the first ChildExchangeRates filtered by the value column
 *
 * @method     ChildExchangeRates[]|ObjectCollection find(ConnectionInterface $con = null) Return ChildExchangeRates objects based on current ModelCriteria
 * @method     ChildExchangeRates[]|ObjectCollection findById(int $id) Return ChildExchangeRates objects filtered by the id column
 * @method     ChildExchangeRates[]|ObjectCollection findByFrom(string $from) Return ChildExchangeRates objects filtered by the from column
 * @method     ChildExchangeRates[]|ObjectCollection findByTo(string $to) Return ChildExchangeRates objects filtered by the to column
 * @method     ChildExchangeRates[]|ObjectCollection findByValue(string $value) Return ChildExchangeRates objects filtered by the value column
 * @method     ChildExchangeRates[]|\Propel\Runtime\Util\PropelModelPager paginate($page = 1, $maxPerPage = 10, ConnectionInterface $con = null) Issue a SELECT query based on the current ModelCriteria and uses a page and a maximum number of results per page to compute an offset and a limit
 *
 */
abstract class ExchangeRatesQuery extends ModelCriteria
{
    
    /**
     * Initializes internal state of \Model\Base\ExchangeRatesQuery object.
     *
     * @param     string $dbName The database name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'obmennik', $modelName = '\\Model\\ExchangeRates', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new ChildExchangeRatesQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param     Criteria $criteria Optional Criteria to build the query from
     *
     * @return ChildExchangeRatesQuery
     */
    public static function create($modelAlias = null, Criteria $criteria = null)
    {
        if ($criteria instanceof ChildExchangeRatesQuery) {
            return $criteria;
        }
        $query = new ChildExchangeRatesQuery();
        if (null !== $modelAlias) {
            $query->setModelAlias($modelAlias);
        }
        if ($criteria instanceof Criteria) {
            $query->mergeWith($criteria);
        }

        return $query;
    }

    /**
     * Find object by primary key.
     * Propel uses the instance pool to skip the database if the object exists.
     * Go fast if the query is untouched.
     *
     * <code>
     * $obj  = $c->findPk(12, $con);
     * </code>
     *
     * @param mixed $key Primary key to use for the query
     * @param ConnectionInterface $con an optional connection object
     *
     * @return ChildExchangeRates|array|mixed the result, formatted by the current formatter
     */
    public function findPk($key, ConnectionInterface $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = ExchangeRatesTableMap::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getServiceContainer()->getReadConnection(ExchangeRatesTableMap::DATABASE_NAME);
        }
        $this->basePreSelect($con);
        if ($this->formatter || $this->modelAlias || $this->with || $this->select
         || $this->selectColumns || $this->asColumns || $this->selectModifiers
         || $this->map || $this->having || $this->joins) {
            return $this->findPkComplex($key, $con);
        } else {
            return $this->findPkSimple($key, $con);
        }
    }

    /**
     * Find object by primary key using raw SQL to go fast.
     * Bypass doSelect() and the object formatter by using generated code.
     *
     * @param     mixed $key Primary key to use for the query
     * @param     ConnectionInterface $con A connection object
     *
     * @return ChildExchangeRates A model object, or null if the key is not found
     */
    protected function findPkSimple($key, ConnectionInterface $con)
    {
        $sql = 'SELECT `ID`, `FROM`, `TO`, `VALUE` FROM `exchange_rates` WHERE `ID` = :p0';
        try {
            $stmt = $con->prepare($sql);            
            $stmt->bindValue(':p0', $key, PDO::PARAM_INT);
            $stmt->execute();
        } catch (Exception $e) {
            Propel::log($e->getMessage(), Propel::LOG_ERR);
            throw new PropelException(sprintf('Unable to execute SELECT statement [%s]', $sql), 0, $e);
        }
        $obj = null;
        if ($row = $stmt->fetch(\PDO::FETCH_NUM)) {
            /** @var ChildExchangeRates $obj */
            $obj = new ChildExchangeRates();
            $obj->hydrate($row);
            ExchangeRatesTableMap::addInstanceToPool($obj, (string) $key);
        }
        $stmt->closeCursor();

        return $obj;
    }

    /**
     * Find object by primary key.
     *
     * @param     mixed $key Primary key to use for the query
     * @param     ConnectionInterface $con A connection object
     *
     * @return ChildExchangeRates|array|mixed the result, formatted by the current formatter
     */
    protected function findPkComplex($key, ConnectionInterface $con)
    {
        // As the query uses a PK condition, no limit(1) is necessary.
        $criteria = $this->isKeepQuery() ? clone $this : $this;
        $dataFetcher = $criteria
            ->filterByPrimaryKey($key)
            ->doSelect($con);

        return $criteria->getFormatter()->init($criteria)->formatOne($dataFetcher);
    }

    /**
     * Find objects by primary key
     * <code>
     * $objs = $c->findPks(array(12, 56, 832), $con);
     * </code>
     * @param     array $keys Primary keys to use for the query
     * @param     ConnectionInterface $con an optional connection object
     *
     * @return ObjectCollection|array|mixed the list of results, formatted by the current formatter
     */
    public function findPks($keys, ConnectionInterface $con = null)
    {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getReadConnection($this->getDbName());
        }
        $this->basePreSelect($con);
        $criteria = $this->isKeepQuery() ? clone $this : $this;
        $dataFetcher = $criteria
            ->filterByPrimaryKeys($keys)
            ->doSelect($con);

        return $criteria->getFormatter()->init($criteria)->format($dataFetcher);
    }

    /**
     * Filter the query by primary key
     *
     * @param     mixed $key Primary key to use for the query
     *
     * @return $this|ChildExchangeRatesQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(ExchangeRatesTableMap::COL_ID, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return $this|ChildExchangeRatesQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(ExchangeRatesTableMap::COL_ID, $keys, Criteria::IN);
    }

    /**
     * Filter the query on the id column
     *
     * Example usage:
     * <code>
     * $query->filterById(1234); // WHERE id = 1234
     * $query->filterById(array(12, 34)); // WHERE id IN (12, 34)
     * $query->filterById(array('min' => 12)); // WHERE id > 12
     * </code>
     *
     * @param     mixed $id The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildExchangeRatesQuery The current query, for fluid interface
     */
    public function filterById($id = null, $comparison = null)
    {
        if (is_array($id)) {
            $useMinMax = false;
            if (isset($id['min'])) {
                $this->addUsingAlias(ExchangeRatesTableMap::COL_ID, $id['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($id['max'])) {
                $this->addUsingAlias(ExchangeRatesTableMap::COL_ID, $id['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ExchangeRatesTableMap::COL_ID, $id, $comparison);
    }

    /**
     * Filter the query on the from column
     *
     * Example usage:
     * <code>
     * $query->filterByFrom('fooValue');   // WHERE from = 'fooValue'
     * $query->filterByFrom('%fooValue%'); // WHERE from LIKE '%fooValue%'
     * </code>
     *
     * @param     string $from The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildExchangeRatesQuery The current query, for fluid interface
     */
    public function filterByFrom($from = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($from)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $from)) {
                $from = str_replace('*', '%', $from);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(ExchangeRatesTableMap::COL_FROM, $from, $comparison);
    }

    /**
     * Filter the query on the to column
     *
     * Example usage:
     * <code>
     * $query->filterByTo('fooValue');   // WHERE to = 'fooValue'
     * $query->filterByTo('%fooValue%'); // WHERE to LIKE '%fooValue%'
     * </code>
     *
     * @param     string $to The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildExchangeRatesQuery The current query, for fluid interface
     */
    public function filterByTo($to = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($to)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $to)) {
                $to = str_replace('*', '%', $to);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(ExchangeRatesTableMap::COL_TO, $to, $comparison);
    }

    /**
     * Filter the query on the value column
     *
     * Example usage:
     * <code>
     * $query->filterByValue('fooValue');   // WHERE value = 'fooValue'
     * $query->filterByValue('%fooValue%'); // WHERE value LIKE '%fooValue%'
     * </code>
     *
     * @param     string $value The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildExchangeRatesQuery The current query, for fluid interface
     */
    public function filterByValue($value = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($value)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $value)) {
                $value = str_replace('*', '%', $value);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(ExchangeRatesTableMap::COL_VALUE, $value, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param   ChildExchangeRates $exchangeRates Object to remove from the list of results
     *
     * @return $this|ChildExchangeRatesQuery The current query, for fluid interface
     */
    public function prune($exchangeRates = null)
    {
        if ($exchangeRates) {
            $this->addUsingAlias(ExchangeRatesTableMap::COL_ID, $exchangeRates->getId(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

    /**
     * Deletes all rows from the exchange_rates table.
     *
     * @param ConnectionInterface $con the connection to use
     * @return int The number of affected rows (if supported by underlying database driver).
     */
    public function doDeleteAll(ConnectionInterface $con = null)
    {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getWriteConnection(ExchangeRatesTableMap::DATABASE_NAME);
        }

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con) {
            $affectedRows = 0; // initialize var to track total num of affected rows
            $affectedRows += parent::doDeleteAll($con);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            ExchangeRatesTableMap::clearInstancePool();
            ExchangeRatesTableMap::clearRelatedInstancePool();

            return $affectedRows;
        });
    }

    /**
     * Performs a DELETE on the database based on the current ModelCriteria
     *
     * @param ConnectionInterface $con the connection to use
     * @return int             The number of affected rows (if supported by underlying database driver).  This includes CASCADE-related rows
     *                         if supported by native driver or if emulated using Propel.
     * @throws PropelException Any exceptions caught during processing will be
     *                         rethrown wrapped into a PropelException.
     */
    public function delete(ConnectionInterface $con = null)
    {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getWriteConnection(ExchangeRatesTableMap::DATABASE_NAME);
        }

        $criteria = $this;

        // Set the correct dbName
        $criteria->setDbName(ExchangeRatesTableMap::DATABASE_NAME);

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con, $criteria) {
            $affectedRows = 0; // initialize var to track total num of affected rows
            
            ExchangeRatesTableMap::removeInstanceFromPool($criteria);
        
            $affectedRows += ModelCriteria::delete($con);
            ExchangeRatesTableMap::clearRelatedInstancePool();

            return $affectedRows;
        });
    }

} // ExchangeRatesQuery
