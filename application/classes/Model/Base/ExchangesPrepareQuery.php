<?php

namespace Model\Base;

use \Exception;
use \PDO;
use Model\ExchangesPrepare as ChildExchangesPrepare;
use Model\ExchangesPrepareQuery as ChildExchangesPrepareQuery;
use Model\Map\ExchangesPrepareTableMap;
use Propel\Runtime\Propel;
use Propel\Runtime\ActiveQuery\Criteria;
use Propel\Runtime\ActiveQuery\ModelCriteria;
use Propel\Runtime\Collection\ObjectCollection;
use Propel\Runtime\Connection\ConnectionInterface;
use Propel\Runtime\Exception\PropelException;

/**
 * Base class that represents a query for the 'exchanges_prepare' table.
 *
 * 
 *
 * @method     ChildExchangesPrepareQuery orderById($order = Criteria::ASC) Order by the id column
 * @method     ChildExchangesPrepareQuery orderByUserid($order = Criteria::ASC) Order by the userid column
 * @method     ChildExchangesPrepareQuery orderBySurname($order = Criteria::ASC) Order by the surname column
 * @method     ChildExchangesPrepareQuery orderByFirstname($order = Criteria::ASC) Order by the firstname column
 * @method     ChildExchangesPrepareQuery orderByPatronymic($order = Criteria::ASC) Order by the patronymic column
 * @method     ChildExchangesPrepareQuery orderByEmail($order = Criteria::ASC) Order by the email column
 * @method     ChildExchangesPrepareQuery orderByPhone($order = Criteria::ASC) Order by the phone column
 * @method     ChildExchangesPrepareQuery orderByPaymentDetailsFrom($order = Criteria::ASC) Order by the payment_details_from column
 * @method     ChildExchangesPrepareQuery orderByPaymentDetailsTo($order = Criteria::ASC) Order by the payment_details_to column
 * @method     ChildExchangesPrepareQuery orderByChangeFromCurr($order = Criteria::ASC) Order by the change_from_curr column
 * @method     ChildExchangesPrepareQuery orderByChangeToCurr($order = Criteria::ASC) Order by the change_to_curr column
 * @method     ChildExchangesPrepareQuery orderByChangeFromAmount($order = Criteria::ASC) Order by the change_from_amount column
 * @method     ChildExchangesPrepareQuery orderByChangeToAmount($order = Criteria::ASC) Order by the change_to_amount column
 * @method     ChildExchangesPrepareQuery orderByExchangeDate($order = Criteria::ASC) Order by the exchange_date column
 * @method     ChildExchangesPrepareQuery orderByExchangeUniqid($order = Criteria::ASC) Order by the exchange_uniqid column
 * @method     ChildExchangesPrepareQuery orderByExchangeStatus($order = Criteria::ASC) Order by the exchange_status column
 *
 * @method     ChildExchangesPrepareQuery groupById() Group by the id column
 * @method     ChildExchangesPrepareQuery groupByUserid() Group by the userid column
 * @method     ChildExchangesPrepareQuery groupBySurname() Group by the surname column
 * @method     ChildExchangesPrepareQuery groupByFirstname() Group by the firstname column
 * @method     ChildExchangesPrepareQuery groupByPatronymic() Group by the patronymic column
 * @method     ChildExchangesPrepareQuery groupByEmail() Group by the email column
 * @method     ChildExchangesPrepareQuery groupByPhone() Group by the phone column
 * @method     ChildExchangesPrepareQuery groupByPaymentDetailsFrom() Group by the payment_details_from column
 * @method     ChildExchangesPrepareQuery groupByPaymentDetailsTo() Group by the payment_details_to column
 * @method     ChildExchangesPrepareQuery groupByChangeFromCurr() Group by the change_from_curr column
 * @method     ChildExchangesPrepareQuery groupByChangeToCurr() Group by the change_to_curr column
 * @method     ChildExchangesPrepareQuery groupByChangeFromAmount() Group by the change_from_amount column
 * @method     ChildExchangesPrepareQuery groupByChangeToAmount() Group by the change_to_amount column
 * @method     ChildExchangesPrepareQuery groupByExchangeDate() Group by the exchange_date column
 * @method     ChildExchangesPrepareQuery groupByExchangeUniqid() Group by the exchange_uniqid column
 * @method     ChildExchangesPrepareQuery groupByExchangeStatus() Group by the exchange_status column
 *
 * @method     ChildExchangesPrepareQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     ChildExchangesPrepareQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     ChildExchangesPrepareQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     ChildExchangesPrepare findOne(ConnectionInterface $con = null) Return the first ChildExchangesPrepare matching the query
 * @method     ChildExchangesPrepare findOneOrCreate(ConnectionInterface $con = null) Return the first ChildExchangesPrepare matching the query, or a new ChildExchangesPrepare object populated from the query conditions when no match is found
 *
 * @method     ChildExchangesPrepare findOneById(int $id) Return the first ChildExchangesPrepare filtered by the id column
 * @method     ChildExchangesPrepare findOneByUserid(int $userid) Return the first ChildExchangesPrepare filtered by the userid column
 * @method     ChildExchangesPrepare findOneBySurname(string $surname) Return the first ChildExchangesPrepare filtered by the surname column
 * @method     ChildExchangesPrepare findOneByFirstname(string $firstname) Return the first ChildExchangesPrepare filtered by the firstname column
 * @method     ChildExchangesPrepare findOneByPatronymic(string $patronymic) Return the first ChildExchangesPrepare filtered by the patronymic column
 * @method     ChildExchangesPrepare findOneByEmail(string $email) Return the first ChildExchangesPrepare filtered by the email column
 * @method     ChildExchangesPrepare findOneByPhone(string $phone) Return the first ChildExchangesPrepare filtered by the phone column
 * @method     ChildExchangesPrepare findOneByPaymentDetailsFrom(string $payment_details_from) Return the first ChildExchangesPrepare filtered by the payment_details_from column
 * @method     ChildExchangesPrepare findOneByPaymentDetailsTo(string $payment_details_to) Return the first ChildExchangesPrepare filtered by the payment_details_to column
 * @method     ChildExchangesPrepare findOneByChangeFromCurr(string $change_from_curr) Return the first ChildExchangesPrepare filtered by the change_from_curr column
 * @method     ChildExchangesPrepare findOneByChangeToCurr(string $change_to_curr) Return the first ChildExchangesPrepare filtered by the change_to_curr column
 * @method     ChildExchangesPrepare findOneByChangeFromAmount(string $change_from_amount) Return the first ChildExchangesPrepare filtered by the change_from_amount column
 * @method     ChildExchangesPrepare findOneByChangeToAmount(string $change_to_amount) Return the first ChildExchangesPrepare filtered by the change_to_amount column
 * @method     ChildExchangesPrepare findOneByExchangeDate(string $exchange_date) Return the first ChildExchangesPrepare filtered by the exchange_date column
 * @method     ChildExchangesPrepare findOneByExchangeUniqid(string $exchange_uniqid) Return the first ChildExchangesPrepare filtered by the exchange_uniqid column
 * @method     ChildExchangesPrepare findOneByExchangeStatus(string $exchange_status) Return the first ChildExchangesPrepare filtered by the exchange_status column
 *
 * @method     ChildExchangesPrepare[]|ObjectCollection find(ConnectionInterface $con = null) Return ChildExchangesPrepare objects based on current ModelCriteria
 * @method     ChildExchangesPrepare[]|ObjectCollection findById(int $id) Return ChildExchangesPrepare objects filtered by the id column
 * @method     ChildExchangesPrepare[]|ObjectCollection findByUserid(int $userid) Return ChildExchangesPrepare objects filtered by the userid column
 * @method     ChildExchangesPrepare[]|ObjectCollection findBySurname(string $surname) Return ChildExchangesPrepare objects filtered by the surname column
 * @method     ChildExchangesPrepare[]|ObjectCollection findByFirstname(string $firstname) Return ChildExchangesPrepare objects filtered by the firstname column
 * @method     ChildExchangesPrepare[]|ObjectCollection findByPatronymic(string $patronymic) Return ChildExchangesPrepare objects filtered by the patronymic column
 * @method     ChildExchangesPrepare[]|ObjectCollection findByEmail(string $email) Return ChildExchangesPrepare objects filtered by the email column
 * @method     ChildExchangesPrepare[]|ObjectCollection findByPhone(string $phone) Return ChildExchangesPrepare objects filtered by the phone column
 * @method     ChildExchangesPrepare[]|ObjectCollection findByPaymentDetailsFrom(string $payment_details_from) Return ChildExchangesPrepare objects filtered by the payment_details_from column
 * @method     ChildExchangesPrepare[]|ObjectCollection findByPaymentDetailsTo(string $payment_details_to) Return ChildExchangesPrepare objects filtered by the payment_details_to column
 * @method     ChildExchangesPrepare[]|ObjectCollection findByChangeFromCurr(string $change_from_curr) Return ChildExchangesPrepare objects filtered by the change_from_curr column
 * @method     ChildExchangesPrepare[]|ObjectCollection findByChangeToCurr(string $change_to_curr) Return ChildExchangesPrepare objects filtered by the change_to_curr column
 * @method     ChildExchangesPrepare[]|ObjectCollection findByChangeFromAmount(string $change_from_amount) Return ChildExchangesPrepare objects filtered by the change_from_amount column
 * @method     ChildExchangesPrepare[]|ObjectCollection findByChangeToAmount(string $change_to_amount) Return ChildExchangesPrepare objects filtered by the change_to_amount column
 * @method     ChildExchangesPrepare[]|ObjectCollection findByExchangeDate(string $exchange_date) Return ChildExchangesPrepare objects filtered by the exchange_date column
 * @method     ChildExchangesPrepare[]|ObjectCollection findByExchangeUniqid(string $exchange_uniqid) Return ChildExchangesPrepare objects filtered by the exchange_uniqid column
 * @method     ChildExchangesPrepare[]|ObjectCollection findByExchangeStatus(string $exchange_status) Return ChildExchangesPrepare objects filtered by the exchange_status column
 * @method     ChildExchangesPrepare[]|\Propel\Runtime\Util\PropelModelPager paginate($page = 1, $maxPerPage = 10, ConnectionInterface $con = null) Issue a SELECT query based on the current ModelCriteria and uses a page and a maximum number of results per page to compute an offset and a limit
 *
 */
abstract class ExchangesPrepareQuery extends ModelCriteria
{
    
    /**
     * Initializes internal state of \Model\Base\ExchangesPrepareQuery object.
     *
     * @param     string $dbName The database name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'obmennik', $modelName = '\\Model\\ExchangesPrepare', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new ChildExchangesPrepareQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param     Criteria $criteria Optional Criteria to build the query from
     *
     * @return ChildExchangesPrepareQuery
     */
    public static function create($modelAlias = null, Criteria $criteria = null)
    {
        if ($criteria instanceof ChildExchangesPrepareQuery) {
            return $criteria;
        }
        $query = new ChildExchangesPrepareQuery();
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
     * @return ChildExchangesPrepare|array|mixed the result, formatted by the current formatter
     */
    public function findPk($key, ConnectionInterface $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = ExchangesPrepareTableMap::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getServiceContainer()->getReadConnection(ExchangesPrepareTableMap::DATABASE_NAME);
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
     * @return ChildExchangesPrepare A model object, or null if the key is not found
     */
    protected function findPkSimple($key, ConnectionInterface $con)
    {
        $sql = 'SELECT `ID`, `USERID`, `SURNAME`, `FIRSTNAME`, `PATRONYMIC`, `EMAIL`, `PHONE`, `PAYMENT_DETAILS_FROM`, `PAYMENT_DETAILS_TO`, `CHANGE_FROM_CURR`, `CHANGE_TO_CURR`, `CHANGE_FROM_AMOUNT`, `CHANGE_TO_AMOUNT`, `EXCHANGE_DATE`, `EXCHANGE_UNIQID`, `EXCHANGE_STATUS` FROM `exchanges_prepare` WHERE `ID` = :p0';
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
            /** @var ChildExchangesPrepare $obj */
            $obj = new ChildExchangesPrepare();
            $obj->hydrate($row);
            ExchangesPrepareTableMap::addInstanceToPool($obj, (string) $key);
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
     * @return ChildExchangesPrepare|array|mixed the result, formatted by the current formatter
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
     * @return $this|ChildExchangesPrepareQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(ExchangesPrepareTableMap::COL_ID, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return $this|ChildExchangesPrepareQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(ExchangesPrepareTableMap::COL_ID, $keys, Criteria::IN);
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
     * @return $this|ChildExchangesPrepareQuery The current query, for fluid interface
     */
    public function filterById($id = null, $comparison = null)
    {
        if (is_array($id)) {
            $useMinMax = false;
            if (isset($id['min'])) {
                $this->addUsingAlias(ExchangesPrepareTableMap::COL_ID, $id['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($id['max'])) {
                $this->addUsingAlias(ExchangesPrepareTableMap::COL_ID, $id['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ExchangesPrepareTableMap::COL_ID, $id, $comparison);
    }

    /**
     * Filter the query on the userid column
     *
     * Example usage:
     * <code>
     * $query->filterByUserid(1234); // WHERE userid = 1234
     * $query->filterByUserid(array(12, 34)); // WHERE userid IN (12, 34)
     * $query->filterByUserid(array('min' => 12)); // WHERE userid > 12
     * </code>
     *
     * @param     mixed $userid The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildExchangesPrepareQuery The current query, for fluid interface
     */
    public function filterByUserid($userid = null, $comparison = null)
    {
        if (is_array($userid)) {
            $useMinMax = false;
            if (isset($userid['min'])) {
                $this->addUsingAlias(ExchangesPrepareTableMap::COL_USERID, $userid['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($userid['max'])) {
                $this->addUsingAlias(ExchangesPrepareTableMap::COL_USERID, $userid['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ExchangesPrepareTableMap::COL_USERID, $userid, $comparison);
    }

    /**
     * Filter the query on the surname column
     *
     * Example usage:
     * <code>
     * $query->filterBySurname('fooValue');   // WHERE surname = 'fooValue'
     * $query->filterBySurname('%fooValue%'); // WHERE surname LIKE '%fooValue%'
     * </code>
     *
     * @param     string $surname The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildExchangesPrepareQuery The current query, for fluid interface
     */
    public function filterBySurname($surname = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($surname)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $surname)) {
                $surname = str_replace('*', '%', $surname);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(ExchangesPrepareTableMap::COL_SURNAME, $surname, $comparison);
    }

    /**
     * Filter the query on the firstname column
     *
     * Example usage:
     * <code>
     * $query->filterByFirstname('fooValue');   // WHERE firstname = 'fooValue'
     * $query->filterByFirstname('%fooValue%'); // WHERE firstname LIKE '%fooValue%'
     * </code>
     *
     * @param     string $firstname The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildExchangesPrepareQuery The current query, for fluid interface
     */
    public function filterByFirstname($firstname = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($firstname)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $firstname)) {
                $firstname = str_replace('*', '%', $firstname);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(ExchangesPrepareTableMap::COL_FIRSTNAME, $firstname, $comparison);
    }

    /**
     * Filter the query on the patronymic column
     *
     * Example usage:
     * <code>
     * $query->filterByPatronymic('fooValue');   // WHERE patronymic = 'fooValue'
     * $query->filterByPatronymic('%fooValue%'); // WHERE patronymic LIKE '%fooValue%'
     * </code>
     *
     * @param     string $patronymic The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildExchangesPrepareQuery The current query, for fluid interface
     */
    public function filterByPatronymic($patronymic = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($patronymic)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $patronymic)) {
                $patronymic = str_replace('*', '%', $patronymic);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(ExchangesPrepareTableMap::COL_PATRONYMIC, $patronymic, $comparison);
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
     * @return $this|ChildExchangesPrepareQuery The current query, for fluid interface
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

        return $this->addUsingAlias(ExchangesPrepareTableMap::COL_EMAIL, $email, $comparison);
    }

    /**
     * Filter the query on the phone column
     *
     * Example usage:
     * <code>
     * $query->filterByPhone('fooValue');   // WHERE phone = 'fooValue'
     * $query->filterByPhone('%fooValue%'); // WHERE phone LIKE '%fooValue%'
     * </code>
     *
     * @param     string $phone The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildExchangesPrepareQuery The current query, for fluid interface
     */
    public function filterByPhone($phone = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($phone)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $phone)) {
                $phone = str_replace('*', '%', $phone);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(ExchangesPrepareTableMap::COL_PHONE, $phone, $comparison);
    }

    /**
     * Filter the query on the payment_details_from column
     *
     * Example usage:
     * <code>
     * $query->filterByPaymentDetailsFrom('fooValue');   // WHERE payment_details_from = 'fooValue'
     * $query->filterByPaymentDetailsFrom('%fooValue%'); // WHERE payment_details_from LIKE '%fooValue%'
     * </code>
     *
     * @param     string $paymentDetailsFrom The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildExchangesPrepareQuery The current query, for fluid interface
     */
    public function filterByPaymentDetailsFrom($paymentDetailsFrom = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($paymentDetailsFrom)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $paymentDetailsFrom)) {
                $paymentDetailsFrom = str_replace('*', '%', $paymentDetailsFrom);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(ExchangesPrepareTableMap::COL_PAYMENT_DETAILS_FROM, $paymentDetailsFrom, $comparison);
    }

    /**
     * Filter the query on the payment_details_to column
     *
     * Example usage:
     * <code>
     * $query->filterByPaymentDetailsTo('fooValue');   // WHERE payment_details_to = 'fooValue'
     * $query->filterByPaymentDetailsTo('%fooValue%'); // WHERE payment_details_to LIKE '%fooValue%'
     * </code>
     *
     * @param     string $paymentDetailsTo The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildExchangesPrepareQuery The current query, for fluid interface
     */
    public function filterByPaymentDetailsTo($paymentDetailsTo = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($paymentDetailsTo)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $paymentDetailsTo)) {
                $paymentDetailsTo = str_replace('*', '%', $paymentDetailsTo);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(ExchangesPrepareTableMap::COL_PAYMENT_DETAILS_TO, $paymentDetailsTo, $comparison);
    }

    /**
     * Filter the query on the change_from_curr column
     *
     * Example usage:
     * <code>
     * $query->filterByChangeFromCurr('fooValue');   // WHERE change_from_curr = 'fooValue'
     * $query->filterByChangeFromCurr('%fooValue%'); // WHERE change_from_curr LIKE '%fooValue%'
     * </code>
     *
     * @param     string $changeFromCurr The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildExchangesPrepareQuery The current query, for fluid interface
     */
    public function filterByChangeFromCurr($changeFromCurr = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($changeFromCurr)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $changeFromCurr)) {
                $changeFromCurr = str_replace('*', '%', $changeFromCurr);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(ExchangesPrepareTableMap::COL_CHANGE_FROM_CURR, $changeFromCurr, $comparison);
    }

    /**
     * Filter the query on the change_to_curr column
     *
     * Example usage:
     * <code>
     * $query->filterByChangeToCurr('fooValue');   // WHERE change_to_curr = 'fooValue'
     * $query->filterByChangeToCurr('%fooValue%'); // WHERE change_to_curr LIKE '%fooValue%'
     * </code>
     *
     * @param     string $changeToCurr The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildExchangesPrepareQuery The current query, for fluid interface
     */
    public function filterByChangeToCurr($changeToCurr = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($changeToCurr)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $changeToCurr)) {
                $changeToCurr = str_replace('*', '%', $changeToCurr);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(ExchangesPrepareTableMap::COL_CHANGE_TO_CURR, $changeToCurr, $comparison);
    }

    /**
     * Filter the query on the change_from_amount column
     *
     * Example usage:
     * <code>
     * $query->filterByChangeFromAmount('fooValue');   // WHERE change_from_amount = 'fooValue'
     * $query->filterByChangeFromAmount('%fooValue%'); // WHERE change_from_amount LIKE '%fooValue%'
     * </code>
     *
     * @param     string $changeFromAmount The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildExchangesPrepareQuery The current query, for fluid interface
     */
    public function filterByChangeFromAmount($changeFromAmount = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($changeFromAmount)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $changeFromAmount)) {
                $changeFromAmount = str_replace('*', '%', $changeFromAmount);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(ExchangesPrepareTableMap::COL_CHANGE_FROM_AMOUNT, $changeFromAmount, $comparison);
    }

    /**
     * Filter the query on the change_to_amount column
     *
     * Example usage:
     * <code>
     * $query->filterByChangeToAmount('fooValue');   // WHERE change_to_amount = 'fooValue'
     * $query->filterByChangeToAmount('%fooValue%'); // WHERE change_to_amount LIKE '%fooValue%'
     * </code>
     *
     * @param     string $changeToAmount The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildExchangesPrepareQuery The current query, for fluid interface
     */
    public function filterByChangeToAmount($changeToAmount = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($changeToAmount)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $changeToAmount)) {
                $changeToAmount = str_replace('*', '%', $changeToAmount);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(ExchangesPrepareTableMap::COL_CHANGE_TO_AMOUNT, $changeToAmount, $comparison);
    }

    /**
     * Filter the query on the exchange_date column
     *
     * Example usage:
     * <code>
     * $query->filterByExchangeDate('fooValue');   // WHERE exchange_date = 'fooValue'
     * $query->filterByExchangeDate('%fooValue%'); // WHERE exchange_date LIKE '%fooValue%'
     * </code>
     *
     * @param     string $exchangeDate The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildExchangesPrepareQuery The current query, for fluid interface
     */
    public function filterByExchangeDate($exchangeDate = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($exchangeDate)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $exchangeDate)) {
                $exchangeDate = str_replace('*', '%', $exchangeDate);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(ExchangesPrepareTableMap::COL_EXCHANGE_DATE, $exchangeDate, $comparison);
    }

    /**
     * Filter the query on the exchange_uniqid column
     *
     * Example usage:
     * <code>
     * $query->filterByExchangeUniqid('fooValue');   // WHERE exchange_uniqid = 'fooValue'
     * $query->filterByExchangeUniqid('%fooValue%'); // WHERE exchange_uniqid LIKE '%fooValue%'
     * </code>
     *
     * @param     string $exchangeUniqid The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildExchangesPrepareQuery The current query, for fluid interface
     */
    public function filterByExchangeUniqid($exchangeUniqid = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($exchangeUniqid)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $exchangeUniqid)) {
                $exchangeUniqid = str_replace('*', '%', $exchangeUniqid);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(ExchangesPrepareTableMap::COL_EXCHANGE_UNIQID, $exchangeUniqid, $comparison);
    }

    /**
     * Filter the query on the exchange_status column
     *
     * Example usage:
     * <code>
     * $query->filterByExchangeStatus('fooValue');   // WHERE exchange_status = 'fooValue'
     * $query->filterByExchangeStatus('%fooValue%'); // WHERE exchange_status LIKE '%fooValue%'
     * </code>
     *
     * @param     string $exchangeStatus The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildExchangesPrepareQuery The current query, for fluid interface
     */
    public function filterByExchangeStatus($exchangeStatus = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($exchangeStatus)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $exchangeStatus)) {
                $exchangeStatus = str_replace('*', '%', $exchangeStatus);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(ExchangesPrepareTableMap::COL_EXCHANGE_STATUS, $exchangeStatus, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param   ChildExchangesPrepare $exchangesPrepare Object to remove from the list of results
     *
     * @return $this|ChildExchangesPrepareQuery The current query, for fluid interface
     */
    public function prune($exchangesPrepare = null)
    {
        if ($exchangesPrepare) {
            $this->addUsingAlias(ExchangesPrepareTableMap::COL_ID, $exchangesPrepare->getId(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

    /**
     * Deletes all rows from the exchanges_prepare table.
     *
     * @param ConnectionInterface $con the connection to use
     * @return int The number of affected rows (if supported by underlying database driver).
     */
    public function doDeleteAll(ConnectionInterface $con = null)
    {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getWriteConnection(ExchangesPrepareTableMap::DATABASE_NAME);
        }

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con) {
            $affectedRows = 0; // initialize var to track total num of affected rows
            $affectedRows += parent::doDeleteAll($con);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            ExchangesPrepareTableMap::clearInstancePool();
            ExchangesPrepareTableMap::clearRelatedInstancePool();

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
            $con = Propel::getServiceContainer()->getWriteConnection(ExchangesPrepareTableMap::DATABASE_NAME);
        }

        $criteria = $this;

        // Set the correct dbName
        $criteria->setDbName(ExchangesPrepareTableMap::DATABASE_NAME);

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con, $criteria) {
            $affectedRows = 0; // initialize var to track total num of affected rows
            
            ExchangesPrepareTableMap::removeInstanceFromPool($criteria);
        
            $affectedRows += ModelCriteria::delete($con);
            ExchangesPrepareTableMap::clearRelatedInstancePool();

            return $affectedRows;
        });
    }

} // ExchangesPrepareQuery
