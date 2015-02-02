<?php

namespace Model\Base;

use \Exception;
use \PDO;
use Model\UsersPrepare as ChildUsersPrepare;
use Model\UsersPrepareQuery as ChildUsersPrepareQuery;
use Model\Map\UsersPrepareTableMap;
use Propel\Runtime\Propel;
use Propel\Runtime\ActiveQuery\Criteria;
use Propel\Runtime\ActiveQuery\ModelCriteria;
use Propel\Runtime\Collection\ObjectCollection;
use Propel\Runtime\Connection\ConnectionInterface;
use Propel\Runtime\Exception\PropelException;

/**
 * Base class that represents a query for the 'users_prepare' table.
 *
 * 
 *
 * @method     ChildUsersPrepareQuery orderById($order = Criteria::ASC) Order by the id column
 * @method     ChildUsersPrepareQuery orderByUsername($order = Criteria::ASC) Order by the username column
 * @method     ChildUsersPrepareQuery orderByEmail($order = Criteria::ASC) Order by the email column
 * @method     ChildUsersPrepareQuery orderByPassword($order = Criteria::ASC) Order by the password column
 * @method     ChildUsersPrepareQuery orderByActivationCode($order = Criteria::ASC) Order by the activation_code column
 *
 * @method     ChildUsersPrepareQuery groupById() Group by the id column
 * @method     ChildUsersPrepareQuery groupByUsername() Group by the username column
 * @method     ChildUsersPrepareQuery groupByEmail() Group by the email column
 * @method     ChildUsersPrepareQuery groupByPassword() Group by the password column
 * @method     ChildUsersPrepareQuery groupByActivationCode() Group by the activation_code column
 *
 * @method     ChildUsersPrepareQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     ChildUsersPrepareQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     ChildUsersPrepareQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     ChildUsersPrepare findOne(ConnectionInterface $con = null) Return the first ChildUsersPrepare matching the query
 * @method     ChildUsersPrepare findOneOrCreate(ConnectionInterface $con = null) Return the first ChildUsersPrepare matching the query, or a new ChildUsersPrepare object populated from the query conditions when no match is found
 *
 * @method     ChildUsersPrepare findOneById(int $id) Return the first ChildUsersPrepare filtered by the id column
 * @method     ChildUsersPrepare findOneByUsername(string $username) Return the first ChildUsersPrepare filtered by the username column
 * @method     ChildUsersPrepare findOneByEmail(string $email) Return the first ChildUsersPrepare filtered by the email column
 * @method     ChildUsersPrepare findOneByPassword(string $password) Return the first ChildUsersPrepare filtered by the password column
 * @method     ChildUsersPrepare findOneByActivationCode(string $activation_code) Return the first ChildUsersPrepare filtered by the activation_code column
 *
 * @method     ChildUsersPrepare[]|ObjectCollection find(ConnectionInterface $con = null) Return ChildUsersPrepare objects based on current ModelCriteria
 * @method     ChildUsersPrepare[]|ObjectCollection findById(int $id) Return ChildUsersPrepare objects filtered by the id column
 * @method     ChildUsersPrepare[]|ObjectCollection findByUsername(string $username) Return ChildUsersPrepare objects filtered by the username column
 * @method     ChildUsersPrepare[]|ObjectCollection findByEmail(string $email) Return ChildUsersPrepare objects filtered by the email column
 * @method     ChildUsersPrepare[]|ObjectCollection findByPassword(string $password) Return ChildUsersPrepare objects filtered by the password column
 * @method     ChildUsersPrepare[]|ObjectCollection findByActivationCode(string $activation_code) Return ChildUsersPrepare objects filtered by the activation_code column
 * @method     ChildUsersPrepare[]|\Propel\Runtime\Util\PropelModelPager paginate($page = 1, $maxPerPage = 10, ConnectionInterface $con = null) Issue a SELECT query based on the current ModelCriteria and uses a page and a maximum number of results per page to compute an offset and a limit
 *
 */
abstract class UsersPrepareQuery extends ModelCriteria
{
    
    /**
     * Initializes internal state of \Model\Base\UsersPrepareQuery object.
     *
     * @param     string $dbName The database name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'obmennik', $modelName = '\\Model\\UsersPrepare', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new ChildUsersPrepareQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param     Criteria $criteria Optional Criteria to build the query from
     *
     * @return ChildUsersPrepareQuery
     */
    public static function create($modelAlias = null, Criteria $criteria = null)
    {
        if ($criteria instanceof ChildUsersPrepareQuery) {
            return $criteria;
        }
        $query = new ChildUsersPrepareQuery();
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
     * @return ChildUsersPrepare|array|mixed the result, formatted by the current formatter
     */
    public function findPk($key, ConnectionInterface $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = UsersPrepareTableMap::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getServiceContainer()->getReadConnection(UsersPrepareTableMap::DATABASE_NAME);
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
     * @return ChildUsersPrepare A model object, or null if the key is not found
     */
    protected function findPkSimple($key, ConnectionInterface $con)
    {
        $sql = 'SELECT `ID`, `USERNAME`, `EMAIL`, `PASSWORD`, `ACTIVATION_CODE` FROM `users_prepare` WHERE `ID` = :p0';
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
            /** @var ChildUsersPrepare $obj */
            $obj = new ChildUsersPrepare();
            $obj->hydrate($row);
            UsersPrepareTableMap::addInstanceToPool($obj, (string) $key);
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
     * @return ChildUsersPrepare|array|mixed the result, formatted by the current formatter
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
     * @return $this|ChildUsersPrepareQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(UsersPrepareTableMap::COL_ID, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return $this|ChildUsersPrepareQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(UsersPrepareTableMap::COL_ID, $keys, Criteria::IN);
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
     * @return $this|ChildUsersPrepareQuery The current query, for fluid interface
     */
    public function filterById($id = null, $comparison = null)
    {
        if (is_array($id)) {
            $useMinMax = false;
            if (isset($id['min'])) {
                $this->addUsingAlias(UsersPrepareTableMap::COL_ID, $id['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($id['max'])) {
                $this->addUsingAlias(UsersPrepareTableMap::COL_ID, $id['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(UsersPrepareTableMap::COL_ID, $id, $comparison);
    }

    /**
     * Filter the query on the username column
     *
     * Example usage:
     * <code>
     * $query->filterByUsername('fooValue');   // WHERE username = 'fooValue'
     * $query->filterByUsername('%fooValue%'); // WHERE username LIKE '%fooValue%'
     * </code>
     *
     * @param     string $username The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildUsersPrepareQuery The current query, for fluid interface
     */
    public function filterByUsername($username = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($username)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $username)) {
                $username = str_replace('*', '%', $username);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(UsersPrepareTableMap::COL_USERNAME, $username, $comparison);
    }

    /**
     * Filter the query on the email column
     *
     * Example usage:
     * <code>
     * $query->filterByEmail('fooValue');   // WHERE email = 'fooValue'
     * $query->filterByEmail('%fooValue%'); // WHERE email LIKE '%fooValue%'
     * </code>
     *
     * @param     string $email The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildUsersPrepareQuery The current query, for fluid interface
     */
    public function filterByEmail($email = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($email)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $email)) {
                $email = str_replace('*', '%', $email);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(UsersPrepareTableMap::COL_EMAIL, $email, $comparison);
    }

    /**
     * Filter the query on the password column
     *
     * Example usage:
     * <code>
     * $query->filterByPassword('fooValue');   // WHERE password = 'fooValue'
     * $query->filterByPassword('%fooValue%'); // WHERE password LIKE '%fooValue%'
     * </code>
     *
     * @param     string $password The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildUsersPrepareQuery The current query, for fluid interface
     */
    public function filterByPassword($password = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($password)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $password)) {
                $password = str_replace('*', '%', $password);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(UsersPrepareTableMap::COL_PASSWORD, $password, $comparison);
    }

    /**
     * Filter the query on the activation_code column
     *
     * Example usage:
     * <code>
     * $query->filterByActivationCode('fooValue');   // WHERE activation_code = 'fooValue'
     * $query->filterByActivationCode('%fooValue%'); // WHERE activation_code LIKE '%fooValue%'
     * </code>
     *
     * @param     string $activationCode The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildUsersPrepareQuery The current query, for fluid interface
     */
    public function filterByActivationCode($activationCode = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($activationCode)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $activationCode)) {
                $activationCode = str_replace('*', '%', $activationCode);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(UsersPrepareTableMap::COL_ACTIVATION_CODE, $activationCode, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param   ChildUsersPrepare $usersPrepare Object to remove from the list of results
     *
     * @return $this|ChildUsersPrepareQuery The current query, for fluid interface
     */
    public function prune($usersPrepare = null)
    {
        if ($usersPrepare) {
            $this->addUsingAlias(UsersPrepareTableMap::COL_ID, $usersPrepare->getId(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

    /**
     * Deletes all rows from the users_prepare table.
     *
     * @param ConnectionInterface $con the connection to use
     * @return int The number of affected rows (if supported by underlying database driver).
     */
    public function doDeleteAll(ConnectionInterface $con = null)
    {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getWriteConnection(UsersPrepareTableMap::DATABASE_NAME);
        }

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con) {
            $affectedRows = 0; // initialize var to track total num of affected rows
            $affectedRows += parent::doDeleteAll($con);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            UsersPrepareTableMap::clearInstancePool();
            UsersPrepareTableMap::clearRelatedInstancePool();

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
            $con = Propel::getServiceContainer()->getWriteConnection(UsersPrepareTableMap::DATABASE_NAME);
        }

        $criteria = $this;

        // Set the correct dbName
        $criteria->setDbName(UsersPrepareTableMap::DATABASE_NAME);

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con, $criteria) {
            $affectedRows = 0; // initialize var to track total num of affected rows
            
            UsersPrepareTableMap::removeInstanceFromPool($criteria);
        
            $affectedRows += ModelCriteria::delete($con);
            UsersPrepareTableMap::clearRelatedInstancePool();

            return $affectedRows;
        });
    }

} // UsersPrepareQuery
