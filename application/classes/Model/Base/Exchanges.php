<?php

namespace Model\Base;

use \Exception;
use \PDO;
use Model\ExchangesQuery as ChildExchangesQuery;
use Model\Map\ExchangesTableMap;
use Propel\Runtime\Propel;
use Propel\Runtime\ActiveQuery\Criteria;
use Propel\Runtime\ActiveQuery\ModelCriteria;
use Propel\Runtime\ActiveRecord\ActiveRecordInterface;
use Propel\Runtime\Collection\Collection;
use Propel\Runtime\Connection\ConnectionInterface;
use Propel\Runtime\Exception\BadMethodCallException;
use Propel\Runtime\Exception\LogicException;
use Propel\Runtime\Exception\PropelException;
use Propel\Runtime\Map\TableMap;
use Propel\Runtime\Parser\AbstractParser;

abstract class Exchanges implements ActiveRecordInterface 
{
    /**
     * TableMap class name
     */
    const TABLE_MAP = '\\Model\\Map\\ExchangesTableMap';


    /**
     * attribute to determine if this object has previously been saved.
     * @var boolean
     */
    protected $new = true;

    /**
     * attribute to determine whether this object has been deleted.
     * @var boolean
     */
    protected $deleted = false;

    /**
     * The columns that have been modified in current object.
     * Tracking modified columns allows us to only update modified columns.
     * @var array
     */
    protected $modifiedColumns = array();

    /**
     * The (virtual) columns that are added at runtime
     * The formatters can add supplementary columns based on a resultset
     * @var array
     */
    protected $virtualColumns = array();

    /**
     * The value for the id field.
     * @var        int
     */
    protected $id;

    /**
     * The value for the userid field.
     * Note: this column has a database default value of: 0
     * @var        int
     */
    protected $userid;

    /**
     * The value for the surname field.
     * @var        string
     */
    protected $surname;

    /**
     * The value for the firstname field.
     * @var        string
     */
    protected $firstname;

    /**
     * The value for the patronymic field.
     * @var        string
     */
    protected $patronymic;

    /**
     * The value for the email field.
     * @var        string
     */
    protected $email;

    /**
     * The value for the phone field.
     * @var        string
     */
    protected $phone;

    /**
     * The value for the payment_details_from field.
     * @var        string
     */
    protected $payment_details_from;

    /**
     * The value for the payment_details_to field.
     * @var        string
     */
    protected $payment_details_to;

    /**
     * The value for the change_from_curr field.
     * @var        string
     */
    protected $change_from_curr;

    /**
     * The value for the change_to_curr field.
     * @var        string
     */
    protected $change_to_curr;

    /**
     * The value for the change_from_amount field.
     * @var        string
     */
    protected $change_from_amount;

    /**
     * The value for the change_to_amount field.
     * @var        string
     */
    protected $change_to_amount;

    /**
     * The value for the exchange_date field.
     * @var        string
     */
    protected $exchange_date;

    /**
     * The value for the exchange_uniqid field.
     * @var        string
     */
    protected $exchange_uniqid;

    /**
     * The value for the exchange_status field.
     * @var        string
     */
    protected $exchange_status;

    /**
     * Flag to prevent endless save loop, if this object is referenced
     * by another object which falls in this transaction.
     *
     * @var boolean
     */
    protected $alreadyInSave = false;

    /**
     * Applies default values to this object.
     * This method should be called from the object's constructor (or
     * equivalent initialization method).
     * @see __construct()
     */
    public function applyDefaultValues()
    {
        $this->userid = 0;
    }

    /**
     * Initializes internal state of Model\Base\Exchanges object.
     * @see applyDefaults()
     */
    public function __construct()
    {
        $this->applyDefaultValues();
    }

    /**
     * Returns whether the object has been modified.
     *
     * @return boolean True if the object has been modified.
     */
    public function isModified()
    {
        return !!$this->modifiedColumns;
    }

    /**
     * Has specified column been modified?
     *
     * @param  string  $col column fully qualified name (TableMap::TYPE_COLNAME), e.g. Book::AUTHOR_ID
     * @return boolean True if $col has been modified.
     */
    public function isColumnModified($col)
    {
        return $this->modifiedColumns && isset($this->modifiedColumns[$col]);
    }

    /**
     * Get the columns that have been modified in this object.
     * @return array A unique list of the modified column names for this object.
     */
    public function getModifiedColumns()
    {
        return $this->modifiedColumns ? array_keys($this->modifiedColumns) : [];
    }

    /**
     * Returns whether the object has ever been saved.  This will
     * be false, if the object was retrieved from storage or was created
     * and then saved.
     *
     * @return boolean true, if the object has never been persisted.
     */
    public function isNew()
    {
        return $this->new;
    }

    /**
     * Setter for the isNew attribute.  This method will be called
     * by Propel-generated children and objects.
     *
     * @param boolean $b the state of the object.
     */
    public function setNew($b)
    {
        $this->new = (boolean) $b;
    }

    /**
     * Whether this object has been deleted.
     * @return boolean The deleted state of this object.
     */
    public function isDeleted()
    {
        return $this->deleted;
    }

    /**
     * Specify whether this object has been deleted.
     * @param  boolean $b The deleted state of this object.
     * @return void
     */
    public function setDeleted($b)
    {
        $this->deleted = (boolean) $b;
    }

    /**
     * Sets the modified state for the object to be false.
     * @param  string $col If supplied, only the specified column is reset.
     * @return void
     */
    public function resetModified($col = null)
    {
        if (null !== $col) {
            if (isset($this->modifiedColumns[$col])) {
                unset($this->modifiedColumns[$col]);
            }
        } else {
            $this->modifiedColumns = array();
        }
    }

    /**
     * Compares this with another <code>Exchanges</code> instance.  If
     * <code>obj</code> is an instance of <code>Exchanges</code>, delegates to
     * <code>equals(Exchanges)</code>.  Otherwise, returns <code>false</code>.
     *
     * @param  mixed   $obj The object to compare to.
     * @return boolean Whether equal to the object specified.
     */
    public function equals($obj)
    {
        if (!$obj instanceof static) {
            return false;
        }

        if ($this === $obj) {
            return true;
        }

        if (null === $this->getPrimaryKey() || null === $obj->getPrimaryKey()) {
            return false;
        }

        return $this->getPrimaryKey() === $obj->getPrimaryKey();
    }

    /**
     * Get the associative array of the virtual columns in this object
     *
     * @return array
     */
    public function getVirtualColumns()
    {
        return $this->virtualColumns;
    }

    /**
     * Checks the existence of a virtual column in this object
     *
     * @param  string  $name The virtual column name
     * @return boolean
     */
    public function hasVirtualColumn($name)
    {
        return array_key_exists($name, $this->virtualColumns);
    }

    /**
     * Get the value of a virtual column in this object
     *
     * @param  string $name The virtual column name
     * @return mixed
     *
     * @throws PropelException
     */
    public function getVirtualColumn($name)
    {
        if (!$this->hasVirtualColumn($name)) {
            throw new PropelException(sprintf('Cannot get value of inexistent virtual column %s.', $name));
        }

        return $this->virtualColumns[$name];
    }

    /**
     * Set the value of a virtual column in this object
     *
     * @param string $name  The virtual column name
     * @param mixed  $value The value to give to the virtual column
     *
     * @return $this|Exchanges The current object, for fluid interface
     */
    public function setVirtualColumn($name, $value)
    {
        $this->virtualColumns[$name] = $value;

        return $this;
    }

    /**
     * Logs a message using Propel::log().
     *
     * @param  string  $msg
     * @param  int     $priority One of the Propel::LOG_* logging levels
     * @return boolean
     */
    protected function log($msg, $priority = Propel::LOG_INFO)
    {
        return Propel::log(get_class($this) . ': ' . $msg, $priority);
    }

    /**
     * Export the current object properties to a string, using a given parser format
     * <code>
     * $book = BookQuery::create()->findPk(9012);
     * echo $book->exportTo('JSON');
     *  => {"Id":9012,"Title":"Don Juan","ISBN":"0140422161","Price":12.99,"PublisherId":1234,"AuthorId":5678}');
     * </code>
     *
     * @param  mixed   $parser                 A AbstractParser instance, or a format name ('XML', 'YAML', 'JSON', 'CSV')
     * @param  boolean $includeLazyLoadColumns (optional) Whether to include lazy load(ed) columns. Defaults to TRUE.
     * @return string  The exported data
     */
    public function exportTo($parser, $includeLazyLoadColumns = true)
    {
        if (!$parser instanceof AbstractParser) {
            $parser = AbstractParser::getParser($parser);
        }

        return $parser->fromArray($this->toArray(TableMap::TYPE_PHPNAME, $includeLazyLoadColumns, array(), true));
    }

    /**
     * Clean up internal collections prior to serializing
     * Avoids recursive loops that turn into segmentation faults when serializing
     */
    public function __sleep()
    {
        $this->clearAllReferences();

        return array_keys(get_object_vars($this));
    }

    /**
     * Get the [id] column value.
     * 
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Get the [userid] column value.
     * 
     * @return int
     */
    public function getUserid()
    {
        return $this->userid;
    }

    /**
     * Get the [surname] column value.
     * 
     * @return string
     */
    public function getSurname()
    {
        return $this->surname;
    }

    /**
     * Get the [firstname] column value.
     * 
     * @return string
     */
    public function getFirstname()
    {
        return $this->firstname;
    }

    /**
     * Get the [patronymic] column value.
     * 
     * @return string
     */
    public function getPatronymic()
    {
        return $this->patronymic;
    }

    /**
     * Get the [email] column value.
     * 
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Get the [phone] column value.
     * 
     * @return string
     */
    public function getPhone()
    {
        return $this->phone;
    }

    /**
     * Get the [payment_details_from] column value.
     * 
     * @return string
     */
    public function getPaymentDetailsFrom()
    {
        return $this->payment_details_from;
    }

    /**
     * Get the [payment_details_to] column value.
     * 
     * @return string
     */
    public function getPaymentDetailsTo()
    {
        return $this->payment_details_to;
    }

    /**
     * Get the [change_from_curr] column value.
     * 
     * @return string
     */
    public function getChangeFromCurr()
    {
        return $this->change_from_curr;
    }

    /**
     * Get the [change_to_curr] column value.
     * 
     * @return string
     */
    public function getChangeToCurr()
    {
        return $this->change_to_curr;
    }

    /**
     * Get the [change_from_amount] column value.
     * 
     * @return string
     */
    public function getChangeFromAmount()
    {
        return $this->change_from_amount;
    }

    /**
     * Get the [change_to_amount] column value.
     * 
     * @return string
     */
    public function getChangeToAmount()
    {
        return $this->change_to_amount;
    }

    /**
     * Get the [exchange_date] column value.
     * 
     * @return string
     */
    public function getExchangeDate()
    {
        return $this->exchange_date;
    }

    /**
     * Get the [exchange_uniqid] column value.
     * 
     * @return string
     */
    public function getExchangeUniqid()
    {
        return $this->exchange_uniqid;
    }

    /**
     * Get the [exchange_status] column value.
     * 
     * @return string
     */
    public function getExchangeStatus()
    {
        return $this->exchange_status;
    }

    /**
     * Indicates whether the columns in this object are only set to default values.
     *
     * This method can be used in conjunction with isModified() to indicate whether an object is both
     * modified _and_ has some values set which are non-default.
     *
     * @return boolean Whether the columns in this object are only been set with default values.
     */
    public function hasOnlyDefaultValues()
    {
            if ($this->userid !== 0) {
                return false;
            }

        // otherwise, everything was equal, so return TRUE
        return true;
    } // hasOnlyDefaultValues()

    /**
     * Hydrates (populates) the object variables with values from the database resultset.
     *
     * An offset (0-based "start column") is specified so that objects can be hydrated
     * with a subset of the columns in the resultset rows.  This is needed, for example,
     * for results of JOIN queries where the resultset row includes columns from two or
     * more tables.
     *
     * @param array   $row       The row returned by DataFetcher->fetch().
     * @param int     $startcol  0-based offset column which indicates which restultset column to start with.
     * @param boolean $rehydrate Whether this object is being re-hydrated from the database.
     * @param string  $indexType The index type of $row. Mostly DataFetcher->getIndexType().
                                  One of the class type constants TableMap::TYPE_PHPNAME, TableMap::TYPE_STUDLYPHPNAME
     *                            TableMap::TYPE_COLNAME, TableMap::TYPE_FIELDNAME, TableMap::TYPE_NUM.
     *
     * @return int             next starting column
     * @throws PropelException - Any caught Exception will be rewrapped as a PropelException.
     */
    public function hydrate($row, $startcol = 0, $rehydrate = false, $indexType = TableMap::TYPE_NUM)
    {
        try {

            $col = $row[TableMap::TYPE_NUM == $indexType ? 0 + $startcol : ExchangesTableMap::translateFieldName('Id', TableMap::TYPE_PHPNAME, $indexType)];
            $this->id = (null !== $col) ? (int) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 1 + $startcol : ExchangesTableMap::translateFieldName('Userid', TableMap::TYPE_PHPNAME, $indexType)];
            $this->userid = (null !== $col) ? (int) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 2 + $startcol : ExchangesTableMap::translateFieldName('Surname', TableMap::TYPE_PHPNAME, $indexType)];
            $this->surname = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 3 + $startcol : ExchangesTableMap::translateFieldName('Firstname', TableMap::TYPE_PHPNAME, $indexType)];
            $this->firstname = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 4 + $startcol : ExchangesTableMap::translateFieldName('Patronymic', TableMap::TYPE_PHPNAME, $indexType)];
            $this->patronymic = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 5 + $startcol : ExchangesTableMap::translateFieldName('Email', TableMap::TYPE_PHPNAME, $indexType)];
            $this->email = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 6 + $startcol : ExchangesTableMap::translateFieldName('Phone', TableMap::TYPE_PHPNAME, $indexType)];
            $this->phone = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 7 + $startcol : ExchangesTableMap::translateFieldName('PaymentDetailsFrom', TableMap::TYPE_PHPNAME, $indexType)];
            $this->payment_details_from = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 8 + $startcol : ExchangesTableMap::translateFieldName('PaymentDetailsTo', TableMap::TYPE_PHPNAME, $indexType)];
            $this->payment_details_to = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 9 + $startcol : ExchangesTableMap::translateFieldName('ChangeFromCurr', TableMap::TYPE_PHPNAME, $indexType)];
            $this->change_from_curr = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 10 + $startcol : ExchangesTableMap::translateFieldName('ChangeToCurr', TableMap::TYPE_PHPNAME, $indexType)];
            $this->change_to_curr = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 11 + $startcol : ExchangesTableMap::translateFieldName('ChangeFromAmount', TableMap::TYPE_PHPNAME, $indexType)];
            $this->change_from_amount = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 12 + $startcol : ExchangesTableMap::translateFieldName('ChangeToAmount', TableMap::TYPE_PHPNAME, $indexType)];
            $this->change_to_amount = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 13 + $startcol : ExchangesTableMap::translateFieldName('ExchangeDate', TableMap::TYPE_PHPNAME, $indexType)];
            $this->exchange_date = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 14 + $startcol : ExchangesTableMap::translateFieldName('ExchangeUniqid', TableMap::TYPE_PHPNAME, $indexType)];
            $this->exchange_uniqid = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 15 + $startcol : ExchangesTableMap::translateFieldName('ExchangeStatus', TableMap::TYPE_PHPNAME, $indexType)];
            $this->exchange_status = (null !== $col) ? (string) $col : null;
            $this->resetModified();

            $this->setNew(false);

            if ($rehydrate) {
                $this->ensureConsistency();
            }

            return $startcol + 16; // 16 = ExchangesTableMap::NUM_HYDRATE_COLUMNS.

        } catch (Exception $e) {
            throw new PropelException(sprintf('Error populating %s object', '\\Model\\Exchanges'), 0, $e);
        }
    }

    /**
     * Checks and repairs the internal consistency of the object.
     *
     * This method is executed after an already-instantiated object is re-hydrated
     * from the database.  It exists to check any foreign keys to make sure that
     * the objects related to the current object are correct based on foreign key.
     *
     * You can override this method in the stub class, but you should always invoke
     * the base method from the overridden method (i.e. parent::ensureConsistency()),
     * in case your model changes.
     *
     * @throws PropelException
     */
    public function ensureConsistency()
    {
    } // ensureConsistency

    /**
     * Set the value of [id] column.
     * 
     * @param  int $v new value
     * @return $this|\Model\Exchanges The current object (for fluent API support)
     */
    public function setId($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        if ($this->id !== $v) {
            $this->id = $v;
            $this->modifiedColumns[ExchangesTableMap::COL_ID] = true;
        }

        return $this;
    } // setId()

    /**
     * Set the value of [userid] column.
     * 
     * @param  int $v new value
     * @return $this|\Model\Exchanges The current object (for fluent API support)
     */
    public function setUserid($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        if ($this->userid !== $v) {
            $this->userid = $v;
            $this->modifiedColumns[ExchangesTableMap::COL_USERID] = true;
        }

        return $this;
    } // setUserid()

    /**
     * Set the value of [surname] column.
     * 
     * @param  string $v new value
     * @return $this|\Model\Exchanges The current object (for fluent API support)
     */
    public function setSurname($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->surname !== $v) {
            $this->surname = $v;
            $this->modifiedColumns[ExchangesTableMap::COL_SURNAME] = true;
        }

        return $this;
    } // setSurname()

    /**
     * Set the value of [firstname] column.
     * 
     * @param  string $v new value
     * @return $this|\Model\Exchanges The current object (for fluent API support)
     */
    public function setFirstname($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->firstname !== $v) {
            $this->firstname = $v;
            $this->modifiedColumns[ExchangesTableMap::COL_FIRSTNAME] = true;
        }

        return $this;
    } // setFirstname()

    /**
     * Set the value of [patronymic] column.
     * 
     * @param  string $v new value
     * @return $this|\Model\Exchanges The current object (for fluent API support)
     */
    public function setPatronymic($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->patronymic !== $v) {
            $this->patronymic = $v;
            $this->modifiedColumns[ExchangesTableMap::COL_PATRONYMIC] = true;
        }

        return $this;
    } // setPatronymic()

    /**
     * Set the value of [email] column.
     * 
     * @param  string $v new value
     * @return $this|\Model\Exchanges The current object (for fluent API support)
     */
    public function setEmail($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->email !== $v) {
            $this->email = $v;
            $this->modifiedColumns[ExchangesTableMap::COL_EMAIL] = true;
        }

        return $this;
    } // setEmail()

    /**
     * Set the value of [phone] column.
     * 
     * @param  string $v new value
     * @return $this|\Model\Exchanges The current object (for fluent API support)
     */
    public function setPhone($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->phone !== $v) {
            $this->phone = $v;
            $this->modifiedColumns[ExchangesTableMap::COL_PHONE] = true;
        }

        return $this;
    } // setPhone()

    /**
     * Set the value of [payment_details_from] column.
     * 
     * @param  string $v new value
     * @return $this|\Model\Exchanges The current object (for fluent API support)
     */
    public function setPaymentDetailsFrom($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->payment_details_from !== $v) {
            $this->payment_details_from = $v;
            $this->modifiedColumns[ExchangesTableMap::COL_PAYMENT_DETAILS_FROM] = true;
        }

        return $this;
    } // setPaymentDetailsFrom()

    /**
     * Set the value of [payment_details_to] column.
     * 
     * @param  string $v new value
     * @return $this|\Model\Exchanges The current object (for fluent API support)
     */
    public function setPaymentDetailsTo($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->payment_details_to !== $v) {
            $this->payment_details_to = $v;
            $this->modifiedColumns[ExchangesTableMap::COL_PAYMENT_DETAILS_TO] = true;
        }

        return $this;
    } // setPaymentDetailsTo()

    /**
     * Set the value of [change_from_curr] column.
     * 
     * @param  string $v new value
     * @return $this|\Model\Exchanges The current object (for fluent API support)
     */
    public function setChangeFromCurr($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->change_from_curr !== $v) {
            $this->change_from_curr = $v;
            $this->modifiedColumns[ExchangesTableMap::COL_CHANGE_FROM_CURR] = true;
        }

        return $this;
    } // setChangeFromCurr()

    /**
     * Set the value of [change_to_curr] column.
     * 
     * @param  string $v new value
     * @return $this|\Model\Exchanges The current object (for fluent API support)
     */
    public function setChangeToCurr($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->change_to_curr !== $v) {
            $this->change_to_curr = $v;
            $this->modifiedColumns[ExchangesTableMap::COL_CHANGE_TO_CURR] = true;
        }

        return $this;
    } // setChangeToCurr()

    /**
     * Set the value of [change_from_amount] column.
     * 
     * @param  string $v new value
     * @return $this|\Model\Exchanges The current object (for fluent API support)
     */
    public function setChangeFromAmount($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->change_from_amount !== $v) {
            $this->change_from_amount = $v;
            $this->modifiedColumns[ExchangesTableMap::COL_CHANGE_FROM_AMOUNT] = true;
        }

        return $this;
    } // setChangeFromAmount()

    /**
     * Set the value of [change_to_amount] column.
     * 
     * @param  string $v new value
     * @return $this|\Model\Exchanges The current object (for fluent API support)
     */
    public function setChangeToAmount($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->change_to_amount !== $v) {
            $this->change_to_amount = $v;
            $this->modifiedColumns[ExchangesTableMap::COL_CHANGE_TO_AMOUNT] = true;
        }

        return $this;
    } // setChangeToAmount()

    /**
     * Set the value of [exchange_date] column.
     * 
     * @param  string $v new value
     * @return $this|\Model\Exchanges The current object (for fluent API support)
     */
    public function setExchangeDate($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->exchange_date !== $v) {
            $this->exchange_date = $v;
            $this->modifiedColumns[ExchangesTableMap::COL_EXCHANGE_DATE] = true;
        }

        return $this;
    } // setExchangeDate()

    /**
     * Set the value of [exchange_uniqid] column.
     * 
     * @param  string $v new value
     * @return $this|\Model\Exchanges The current object (for fluent API support)
     */
    public function setExchangeUniqid($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->exchange_uniqid !== $v) {
            $this->exchange_uniqid = $v;
            $this->modifiedColumns[ExchangesTableMap::COL_EXCHANGE_UNIQID] = true;
        }

        return $this;
    } // setExchangeUniqid()

    /**
     * Set the value of [exchange_status] column.
     * 
     * @param  string $v new value
     * @return $this|\Model\Exchanges The current object (for fluent API support)
     */
    public function setExchangeStatus($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->exchange_status !== $v) {
            $this->exchange_status = $v;
            $this->modifiedColumns[ExchangesTableMap::COL_EXCHANGE_STATUS] = true;
        }

        return $this;
    } // setExchangeStatus()

    /**
     * Reloads this object from datastore based on primary key and (optionally) resets all associated objects.
     *
     * This will only work if the object has been saved and has a valid primary key set.
     *
     * @param      boolean $deep (optional) Whether to also de-associated any related objects.
     * @param      ConnectionInterface $con (optional) The ConnectionInterface connection to use.
     * @return void
     * @throws PropelException - if this object is deleted, unsaved or doesn't have pk match in db
     */
    public function reload($deep = false, ConnectionInterface $con = null)
    {
        if ($this->isDeleted()) {
            throw new PropelException("Cannot reload a deleted object.");
        }

        if ($this->isNew()) {
            throw new PropelException("Cannot reload an unsaved object.");
        }

        if ($con === null) {
            $con = Propel::getServiceContainer()->getReadConnection(ExchangesTableMap::DATABASE_NAME);
        }

        // We don't need to alter the object instance pool; we're just modifying this instance
        // already in the pool.

        $dataFetcher = ChildExchangesQuery::create(null, $this->buildPkeyCriteria())->setFormatter(ModelCriteria::FORMAT_STATEMENT)->find($con);
        $row = $dataFetcher->fetch();
        $dataFetcher->close();
        if (!$row) {
            throw new PropelException('Cannot find matching row in the database to reload object values.');
        }
        $this->hydrate($row, 0, true, $dataFetcher->getIndexType()); // rehydrate

        if ($deep) {  // also de-associate any related objects?

        } // if (deep)
    }

    /**
     * Removes this object from datastore and sets delete attribute.
     *
     * @param      ConnectionInterface $con
     * @return void
     * @throws PropelException
     * @see Exchanges::setDeleted()
     * @see Exchanges::isDeleted()
     */
    public function delete(ConnectionInterface $con = null)
    {
        if ($this->isDeleted()) {
            throw new PropelException("This object has already been deleted.");
        }

        if ($con === null) {
            $con = Propel::getServiceContainer()->getWriteConnection(ExchangesTableMap::DATABASE_NAME);
        }

        $con->transaction(function () use ($con) {
            $deleteQuery = ChildExchangesQuery::create()
                ->filterByPrimaryKey($this->getPrimaryKey());
            $ret = $this->preDelete($con);
            if ($ret) {
                $deleteQuery->delete($con);
                $this->postDelete($con);
                $this->setDeleted(true);
            }
        });
    }

    /**
     * Persists this object to the database.
     *
     * If the object is new, it inserts it; otherwise an update is performed.
     * All modified related objects will also be persisted in the doSave()
     * method.  This method wraps all precipitate database operations in a
     * single transaction.
     *
     * @param      ConnectionInterface $con
     * @return int             The number of rows affected by this insert/update and any referring fk objects' save() operations.
     * @throws PropelException
     * @see doSave()
     */
    public function save(ConnectionInterface $con = null)
    {
        if ($this->isDeleted()) {
            throw new PropelException("You cannot save an object that has been deleted.");
        }

        if ($con === null) {
            $con = Propel::getServiceContainer()->getWriteConnection(ExchangesTableMap::DATABASE_NAME);
        }

        return $con->transaction(function () use ($con) {
            $isInsert = $this->isNew();
            $ret = $this->preSave($con);
            if ($isInsert) {
                $ret = $ret && $this->preInsert($con);
            } else {
                $ret = $ret && $this->preUpdate($con);
            }
            if ($ret) {
                $affectedRows = $this->doSave($con);
                if ($isInsert) {
                    $this->postInsert($con);
                } else {
                    $this->postUpdate($con);
                }
                $this->postSave($con);
                ExchangesTableMap::addInstanceToPool($this);
            } else {
                $affectedRows = 0;
            }

            return $affectedRows;
        });
    }

    /**
     * Performs the work of inserting or updating the row in the database.
     *
     * If the object is new, it inserts it; otherwise an update is performed.
     * All related objects are also updated in this method.
     *
     * @param      ConnectionInterface $con
     * @return int             The number of rows affected by this insert/update and any referring fk objects' save() operations.
     * @throws PropelException
     * @see save()
     */
    protected function doSave(ConnectionInterface $con)
    {
        $affectedRows = 0; // initialize var to track total num of affected rows
        if (!$this->alreadyInSave) {
            $this->alreadyInSave = true;

            if ($this->isNew() || $this->isModified()) {
                // persist changes
                if ($this->isNew()) {
                    $this->doInsert($con);
                } else {
                    $this->doUpdate($con);
                }
                $affectedRows += 1;
                $this->resetModified();
            }

            $this->alreadyInSave = false;

        }

        return $affectedRows;
    } // doSave()

    /**
     * Insert the row in the database.
     *
     * @param      ConnectionInterface $con
     *
     * @throws PropelException
     * @see doSave()
     */
    protected function doInsert(ConnectionInterface $con)
    {
        $modifiedColumns = array();
        $index = 0;

        $this->modifiedColumns[ExchangesTableMap::COL_ID] = true;
        if (null !== $this->id) {
            throw new PropelException('Cannot insert a value for auto-increment primary key (' . ExchangesTableMap::COL_ID . ')');
        }

         // check the columns in natural order for more readable SQL queries
        if ($this->isColumnModified(ExchangesTableMap::COL_ID)) {
            $modifiedColumns[':p' . $index++]  = '`ID`';
        }
        if ($this->isColumnModified(ExchangesTableMap::COL_USERID)) {
            $modifiedColumns[':p' . $index++]  = '`USERID`';
        }
        if ($this->isColumnModified(ExchangesTableMap::COL_SURNAME)) {
            $modifiedColumns[':p' . $index++]  = '`SURNAME`';
        }
        if ($this->isColumnModified(ExchangesTableMap::COL_FIRSTNAME)) {
            $modifiedColumns[':p' . $index++]  = '`FIRSTNAME`';
        }
        if ($this->isColumnModified(ExchangesTableMap::COL_PATRONYMIC)) {
            $modifiedColumns[':p' . $index++]  = '`PATRONYMIC`';
        }
        if ($this->isColumnModified(ExchangesTableMap::COL_EMAIL)) {
            $modifiedColumns[':p' . $index++]  = '`EMAIL`';
        }
        if ($this->isColumnModified(ExchangesTableMap::COL_PHONE)) {
            $modifiedColumns[':p' . $index++]  = '`PHONE`';
        }
        if ($this->isColumnModified(ExchangesTableMap::COL_PAYMENT_DETAILS_FROM)) {
            $modifiedColumns[':p' . $index++]  = '`PAYMENT_DETAILS_FROM`';
        }
        if ($this->isColumnModified(ExchangesTableMap::COL_PAYMENT_DETAILS_TO)) {
            $modifiedColumns[':p' . $index++]  = '`PAYMENT_DETAILS_TO`';
        }
        if ($this->isColumnModified(ExchangesTableMap::COL_CHANGE_FROM_CURR)) {
            $modifiedColumns[':p' . $index++]  = '`CHANGE_FROM_CURR`';
        }
        if ($this->isColumnModified(ExchangesTableMap::COL_CHANGE_TO_CURR)) {
            $modifiedColumns[':p' . $index++]  = '`CHANGE_TO_CURR`';
        }
        if ($this->isColumnModified(ExchangesTableMap::COL_CHANGE_FROM_AMOUNT)) {
            $modifiedColumns[':p' . $index++]  = '`CHANGE_FROM_AMOUNT`';
        }
        if ($this->isColumnModified(ExchangesTableMap::COL_CHANGE_TO_AMOUNT)) {
            $modifiedColumns[':p' . $index++]  = '`CHANGE_TO_AMOUNT`';
        }
        if ($this->isColumnModified(ExchangesTableMap::COL_EXCHANGE_DATE)) {
            $modifiedColumns[':p' . $index++]  = '`EXCHANGE_DATE`';
        }
        if ($this->isColumnModified(ExchangesTableMap::COL_EXCHANGE_UNIQID)) {
            $modifiedColumns[':p' . $index++]  = '`EXCHANGE_UNIQID`';
        }
        if ($this->isColumnModified(ExchangesTableMap::COL_EXCHANGE_STATUS)) {
            $modifiedColumns[':p' . $index++]  = '`EXCHANGE_STATUS`';
        }

        $sql = sprintf(
            'INSERT INTO `exchanges` (%s) VALUES (%s)',
            implode(', ', $modifiedColumns),
            implode(', ', array_keys($modifiedColumns))
        );

        try {
            $stmt = $con->prepare($sql);
            foreach ($modifiedColumns as $identifier => $columnName) {
                switch ($columnName) {
                    case '`ID`':                        
                        $stmt->bindValue($identifier, $this->id, PDO::PARAM_INT);
                        break;
                    case '`USERID`':                        
                        $stmt->bindValue($identifier, $this->userid, PDO::PARAM_INT);
                        break;
                    case '`SURNAME`':                        
                        $stmt->bindValue($identifier, $this->surname, PDO::PARAM_STR);
                        break;
                    case '`FIRSTNAME`':                        
                        $stmt->bindValue($identifier, $this->firstname, PDO::PARAM_STR);
                        break;
                    case '`PATRONYMIC`':                        
                        $stmt->bindValue($identifier, $this->patronymic, PDO::PARAM_STR);
                        break;
                    case '`EMAIL`':                        
                        $stmt->bindValue($identifier, $this->email, PDO::PARAM_STR);
                        break;
                    case '`PHONE`':                        
                        $stmt->bindValue($identifier, $this->phone, PDO::PARAM_STR);
                        break;
                    case '`PAYMENT_DETAILS_FROM`':                        
                        $stmt->bindValue($identifier, $this->payment_details_from, PDO::PARAM_STR);
                        break;
                    case '`PAYMENT_DETAILS_TO`':                        
                        $stmt->bindValue($identifier, $this->payment_details_to, PDO::PARAM_STR);
                        break;
                    case '`CHANGE_FROM_CURR`':                        
                        $stmt->bindValue($identifier, $this->change_from_curr, PDO::PARAM_STR);
                        break;
                    case '`CHANGE_TO_CURR`':                        
                        $stmt->bindValue($identifier, $this->change_to_curr, PDO::PARAM_STR);
                        break;
                    case '`CHANGE_FROM_AMOUNT`':                        
                        $stmt->bindValue($identifier, $this->change_from_amount, PDO::PARAM_STR);
                        break;
                    case '`CHANGE_TO_AMOUNT`':                        
                        $stmt->bindValue($identifier, $this->change_to_amount, PDO::PARAM_STR);
                        break;
                    case '`EXCHANGE_DATE`':                        
                        $stmt->bindValue($identifier, $this->exchange_date, PDO::PARAM_STR);
                        break;
                    case '`EXCHANGE_UNIQID`':                        
                        $stmt->bindValue($identifier, $this->exchange_uniqid, PDO::PARAM_STR);
                        break;
                    case '`EXCHANGE_STATUS`':                        
                        $stmt->bindValue($identifier, $this->exchange_status, PDO::PARAM_STR);
                        break;
                }
            }
            $stmt->execute();
        } catch (Exception $e) {
            Propel::log($e->getMessage(), Propel::LOG_ERR);
            throw new PropelException(sprintf('Unable to execute INSERT statement [%s]', $sql), 0, $e);
        }

        try {
            $pk = $con->lastInsertId();
        } catch (Exception $e) {
            throw new PropelException('Unable to get autoincrement id.', 0, $e);
        }
        $this->setId($pk);

        $this->setNew(false);
    }

    /**
     * Update the row in the database.
     *
     * @param      ConnectionInterface $con
     *
     * @return Integer Number of updated rows
     * @see doSave()
     */
    protected function doUpdate(ConnectionInterface $con)
    {
        $selectCriteria = $this->buildPkeyCriteria();
        $valuesCriteria = $this->buildCriteria();

        return $selectCriteria->doUpdate($valuesCriteria, $con);
    }

    /**
     * Retrieves a field from the object by name passed in as a string.
     *
     * @param      string $name name
     * @param      string $type The type of fieldname the $name is of:
     *                     one of the class type constants TableMap::TYPE_PHPNAME, TableMap::TYPE_STUDLYPHPNAME
     *                     TableMap::TYPE_COLNAME, TableMap::TYPE_FIELDNAME, TableMap::TYPE_NUM.
     *                     Defaults to TableMap::TYPE_PHPNAME.
     * @return mixed Value of field.
     */
    public function getByName($name, $type = TableMap::TYPE_PHPNAME)
    {
        $pos = ExchangesTableMap::translateFieldName($name, $type, TableMap::TYPE_NUM);
        $field = $this->getByPosition($pos);

        return $field;
    }

    /**
     * Retrieves a field from the object by Position as specified in the xml schema.
     * Zero-based.
     *
     * @param      int $pos position in xml schema
     * @return mixed Value of field at $pos
     */
    public function getByPosition($pos)
    {
        switch ($pos) {
            case 0:
                return $this->getId();
                break;
            case 1:
                return $this->getUserid();
                break;
            case 2:
                return $this->getSurname();
                break;
            case 3:
                return $this->getFirstname();
                break;
            case 4:
                return $this->getPatronymic();
                break;
            case 5:
                return $this->getEmail();
                break;
            case 6:
                return $this->getPhone();
                break;
            case 7:
                return $this->getPaymentDetailsFrom();
                break;
            case 8:
                return $this->getPaymentDetailsTo();
                break;
            case 9:
                return $this->getChangeFromCurr();
                break;
            case 10:
                return $this->getChangeToCurr();
                break;
            case 11:
                return $this->getChangeFromAmount();
                break;
            case 12:
                return $this->getChangeToAmount();
                break;
            case 13:
                return $this->getExchangeDate();
                break;
            case 14:
                return $this->getExchangeUniqid();
                break;
            case 15:
                return $this->getExchangeStatus();
                break;
            default:
                return null;
                break;
        } // switch()
    }

    /**
     * Exports the object as an array.
     *
     * You can specify the key type of the array by passing one of the class
     * type constants.
     *
     * @param     string  $keyType (optional) One of the class type constants TableMap::TYPE_PHPNAME, TableMap::TYPE_STUDLYPHPNAME,
     *                    TableMap::TYPE_COLNAME, TableMap::TYPE_FIELDNAME, TableMap::TYPE_NUM.
     *                    Defaults to TableMap::TYPE_PHPNAME.
     * @param     boolean $includeLazyLoadColumns (optional) Whether to include lazy loaded columns. Defaults to TRUE.
     * @param     array $alreadyDumpedObjects List of objects to skip to avoid recursion
     *
     * @return array an associative array containing the field names (as keys) and field values
     */
    public function toArray($keyType = TableMap::TYPE_PHPNAME, $includeLazyLoadColumns = true, $alreadyDumpedObjects = array())
    {
        if (isset($alreadyDumpedObjects['Exchanges'][$this->getPrimaryKey()])) {
            return '*RECURSION*';
        }
        $alreadyDumpedObjects['Exchanges'][$this->getPrimaryKey()] = true;
        $keys = ExchangesTableMap::getFieldNames($keyType);
        $result = array(
            $keys[0] => $this->getId(),
            $keys[1] => $this->getUserid(),
            $keys[2] => $this->getSurname(),
            $keys[3] => $this->getFirstname(),
            $keys[4] => $this->getPatronymic(),
            $keys[5] => $this->getEmail(),
            $keys[6] => $this->getPhone(),
            $keys[7] => $this->getPaymentDetailsFrom(),
            $keys[8] => $this->getPaymentDetailsTo(),
            $keys[9] => $this->getChangeFromCurr(),
            $keys[10] => $this->getChangeToCurr(),
            $keys[11] => $this->getChangeFromAmount(),
            $keys[12] => $this->getChangeToAmount(),
            $keys[13] => $this->getExchangeDate(),
            $keys[14] => $this->getExchangeUniqid(),
            $keys[15] => $this->getExchangeStatus(),
        );
        $virtualColumns = $this->virtualColumns;
        foreach ($virtualColumns as $key => $virtualColumn) {
            $result[$key] = $virtualColumn;
        }
        

        return $result;
    }

    /**
     * Sets a field from the object by name passed in as a string.
     *
     * @param  string $name
     * @param  mixed  $value field value
     * @param  string $type The type of fieldname the $name is of:
     *                one of the class type constants TableMap::TYPE_PHPNAME, TableMap::TYPE_STUDLYPHPNAME
     *                TableMap::TYPE_COLNAME, TableMap::TYPE_FIELDNAME, TableMap::TYPE_NUM.
     *                Defaults to TableMap::TYPE_PHPNAME.
     * @return $this|\Model\Exchanges
     */
    public function setByName($name, $value, $type = TableMap::TYPE_PHPNAME)
    {
        $pos = ExchangesTableMap::translateFieldName($name, $type, TableMap::TYPE_NUM);

        return $this->setByPosition($pos, $value);
    }

    /**
     * Sets a field from the object by Position as specified in the xml schema.
     * Zero-based.
     *
     * @param  int $pos position in xml schema
     * @param  mixed $value field value
     * @return $this|\Model\Exchanges
     */
    public function setByPosition($pos, $value)
    {
        switch ($pos) {
            case 0:
                $this->setId($value);
                break;
            case 1:
                $this->setUserid($value);
                break;
            case 2:
                $this->setSurname($value);
                break;
            case 3:
                $this->setFirstname($value);
                break;
            case 4:
                $this->setPatronymic($value);
                break;
            case 5:
                $this->setEmail($value);
                break;
            case 6:
                $this->setPhone($value);
                break;
            case 7:
                $this->setPaymentDetailsFrom($value);
                break;
            case 8:
                $this->setPaymentDetailsTo($value);
                break;
            case 9:
                $this->setChangeFromCurr($value);
                break;
            case 10:
                $this->setChangeToCurr($value);
                break;
            case 11:
                $this->setChangeFromAmount($value);
                break;
            case 12:
                $this->setChangeToAmount($value);
                break;
            case 13:
                $this->setExchangeDate($value);
                break;
            case 14:
                $this->setExchangeUniqid($value);
                break;
            case 15:
                $this->setExchangeStatus($value);
                break;
        } // switch()

        return $this;
    }

    /**
     * Populates the object using an array.
     *
     * This is particularly useful when populating an object from one of the
     * request arrays (e.g. $_POST).  This method goes through the column
     * names, checking to see whether a matching key exists in populated
     * array. If so the setByName() method is called for that column.
     *
     * You can specify the key type of the array by additionally passing one
     * of the class type constants TableMap::TYPE_PHPNAME, TableMap::TYPE_STUDLYPHPNAME,
     * TableMap::TYPE_COLNAME, TableMap::TYPE_FIELDNAME, TableMap::TYPE_NUM.
     * The default key type is the column's TableMap::TYPE_PHPNAME.
     *
     * @param      array  $arr     An array to populate the object from.
     * @param      string $keyType The type of keys the array uses.
     * @return void
     */
    public function fromArray($arr, $keyType = TableMap::TYPE_PHPNAME)
    {
        $keys = ExchangesTableMap::getFieldNames($keyType);

        if (array_key_exists($keys[0], $arr)) {
            $this->setId($arr[$keys[0]]);
        }
        if (array_key_exists($keys[1], $arr)) {
            $this->setUserid($arr[$keys[1]]);
        }
        if (array_key_exists($keys[2], $arr)) {
            $this->setSurname($arr[$keys[2]]);
        }
        if (array_key_exists($keys[3], $arr)) {
            $this->setFirstname($arr[$keys[3]]);
        }
        if (array_key_exists($keys[4], $arr)) {
            $this->setPatronymic($arr[$keys[4]]);
        }
        if (array_key_exists($keys[5], $arr)) {
            $this->setEmail($arr[$keys[5]]);
        }
        if (array_key_exists($keys[6], $arr)) {
            $this->setPhone($arr[$keys[6]]);
        }
        if (array_key_exists($keys[7], $arr)) {
            $this->setPaymentDetailsFrom($arr[$keys[7]]);
        }
        if (array_key_exists($keys[8], $arr)) {
            $this->setPaymentDetailsTo($arr[$keys[8]]);
        }
        if (array_key_exists($keys[9], $arr)) {
            $this->setChangeFromCurr($arr[$keys[9]]);
        }
        if (array_key_exists($keys[10], $arr)) {
            $this->setChangeToCurr($arr[$keys[10]]);
        }
        if (array_key_exists($keys[11], $arr)) {
            $this->setChangeFromAmount($arr[$keys[11]]);
        }
        if (array_key_exists($keys[12], $arr)) {
            $this->setChangeToAmount($arr[$keys[12]]);
        }
        if (array_key_exists($keys[13], $arr)) {
            $this->setExchangeDate($arr[$keys[13]]);
        }
        if (array_key_exists($keys[14], $arr)) {
            $this->setExchangeUniqid($arr[$keys[14]]);
        }
        if (array_key_exists($keys[15], $arr)) {
            $this->setExchangeStatus($arr[$keys[15]]);
        }
    }

     /**
     * Populate the current object from a string, using a given parser format
     * <code>
     * $book = new Book();
     * $book->importFrom('JSON', '{"Id":9012,"Title":"Don Juan","ISBN":"0140422161","Price":12.99,"PublisherId":1234,"AuthorId":5678}');
     * </code>
     *
     * @param mixed $parser A AbstractParser instance,
     *                       or a format name ('XML', 'YAML', 'JSON', 'CSV')
     * @param string $data The source data to import from
     *
     * @return $this|\Model\Exchanges The current object, for fluid interface
     */
    public function importFrom($parser, $data)
    {
        if (!$parser instanceof AbstractParser) {
            $parser = AbstractParser::getParser($parser);
        }

        $this->fromArray($parser->toArray($data), TableMap::TYPE_PHPNAME);

        return $this;
    }

    /**
     * Build a Criteria object containing the values of all modified columns in this object.
     *
     * @return Criteria The Criteria object containing all modified values.
     */
    public function buildCriteria()
    {
        $criteria = new Criteria(ExchangesTableMap::DATABASE_NAME);

        if ($this->isColumnModified(ExchangesTableMap::COL_ID)) {
            $criteria->add(ExchangesTableMap::COL_ID, $this->id);
        }
        if ($this->isColumnModified(ExchangesTableMap::COL_USERID)) {
            $criteria->add(ExchangesTableMap::COL_USERID, $this->userid);
        }
        if ($this->isColumnModified(ExchangesTableMap::COL_SURNAME)) {
            $criteria->add(ExchangesTableMap::COL_SURNAME, $this->surname);
        }
        if ($this->isColumnModified(ExchangesTableMap::COL_FIRSTNAME)) {
            $criteria->add(ExchangesTableMap::COL_FIRSTNAME, $this->firstname);
        }
        if ($this->isColumnModified(ExchangesTableMap::COL_PATRONYMIC)) {
            $criteria->add(ExchangesTableMap::COL_PATRONYMIC, $this->patronymic);
        }
        if ($this->isColumnModified(ExchangesTableMap::COL_EMAIL)) {
            $criteria->add(ExchangesTableMap::COL_EMAIL, $this->email);
        }
        if ($this->isColumnModified(ExchangesTableMap::COL_PHONE)) {
            $criteria->add(ExchangesTableMap::COL_PHONE, $this->phone);
        }
        if ($this->isColumnModified(ExchangesTableMap::COL_PAYMENT_DETAILS_FROM)) {
            $criteria->add(ExchangesTableMap::COL_PAYMENT_DETAILS_FROM, $this->payment_details_from);
        }
        if ($this->isColumnModified(ExchangesTableMap::COL_PAYMENT_DETAILS_TO)) {
            $criteria->add(ExchangesTableMap::COL_PAYMENT_DETAILS_TO, $this->payment_details_to);
        }
        if ($this->isColumnModified(ExchangesTableMap::COL_CHANGE_FROM_CURR)) {
            $criteria->add(ExchangesTableMap::COL_CHANGE_FROM_CURR, $this->change_from_curr);
        }
        if ($this->isColumnModified(ExchangesTableMap::COL_CHANGE_TO_CURR)) {
            $criteria->add(ExchangesTableMap::COL_CHANGE_TO_CURR, $this->change_to_curr);
        }
        if ($this->isColumnModified(ExchangesTableMap::COL_CHANGE_FROM_AMOUNT)) {
            $criteria->add(ExchangesTableMap::COL_CHANGE_FROM_AMOUNT, $this->change_from_amount);
        }
        if ($this->isColumnModified(ExchangesTableMap::COL_CHANGE_TO_AMOUNT)) {
            $criteria->add(ExchangesTableMap::COL_CHANGE_TO_AMOUNT, $this->change_to_amount);
        }
        if ($this->isColumnModified(ExchangesTableMap::COL_EXCHANGE_DATE)) {
            $criteria->add(ExchangesTableMap::COL_EXCHANGE_DATE, $this->exchange_date);
        }
        if ($this->isColumnModified(ExchangesTableMap::COL_EXCHANGE_UNIQID)) {
            $criteria->add(ExchangesTableMap::COL_EXCHANGE_UNIQID, $this->exchange_uniqid);
        }
        if ($this->isColumnModified(ExchangesTableMap::COL_EXCHANGE_STATUS)) {
            $criteria->add(ExchangesTableMap::COL_EXCHANGE_STATUS, $this->exchange_status);
        }

        return $criteria;
    }

    /**
     * Builds a Criteria object containing the primary key for this object.
     *
     * Unlike buildCriteria() this method includes the primary key values regardless
     * of whether or not they have been modified.
     *
     * @throws LogicException if no primary key is defined
     *
     * @return Criteria The Criteria object containing value(s) for primary key(s).
     */
    public function buildPkeyCriteria()
    {
        $criteria = new Criteria(ExchangesTableMap::DATABASE_NAME);
        $criteria->add(ExchangesTableMap::COL_ID, $this->id);

        return $criteria;
    }

    /**
     * If the primary key is not null, return the hashcode of the
     * primary key. Otherwise, return the hash code of the object.
     *
     * @return int Hashcode
     */
    public function hashCode()
    {
        $validPk = null !== $this->getId();

        $validPrimaryKeyFKs = 0;
        $primaryKeyFKs = [];

        if ($validPk) {
            return crc32(json_encode($this->getPrimaryKey(), JSON_UNESCAPED_UNICODE));
        } elseif ($validPrimaryKeyFKs) {
            return crc32(json_encode($primaryKeyFKs, JSON_UNESCAPED_UNICODE));
        }

        return spl_object_hash($this);
    }
        
    /**
     * Returns the primary key for this object (row).
     * @return int
     */
    public function getPrimaryKey()
    {
        return $this->getId();
    }

    /**
     * Generic method to set the primary key (id column).
     *
     * @param       int $key Primary key.
     * @return void
     */
    public function setPrimaryKey($key)
    {
        $this->setId($key);
    }

    /**
     * Returns true if the primary key for this object is null.
     * @return boolean
     */
    public function isPrimaryKeyNull()
    {
        return null === $this->getId();
    }

    /**
     * Sets contents of passed object to values from current object.
     *
     * If desired, this method can also make copies of all associated (fkey referrers)
     * objects.
     *
     * @param      object $copyObj An object of \Model\Exchanges (or compatible) type.
     * @param      boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
     * @param      boolean $makeNew Whether to reset autoincrement PKs and make the object new.
     * @throws PropelException
     */
    public function copyInto($copyObj, $deepCopy = false, $makeNew = true)
    {
        $copyObj->setUserid($this->getUserid());
        $copyObj->setSurname($this->getSurname());
        $copyObj->setFirstname($this->getFirstname());
        $copyObj->setPatronymic($this->getPatronymic());
        $copyObj->setEmail($this->getEmail());
        $copyObj->setPhone($this->getPhone());
        $copyObj->setPaymentDetailsFrom($this->getPaymentDetailsFrom());
        $copyObj->setPaymentDetailsTo($this->getPaymentDetailsTo());
        $copyObj->setChangeFromCurr($this->getChangeFromCurr());
        $copyObj->setChangeToCurr($this->getChangeToCurr());
        $copyObj->setChangeFromAmount($this->getChangeFromAmount());
        $copyObj->setChangeToAmount($this->getChangeToAmount());
        $copyObj->setExchangeDate($this->getExchangeDate());
        $copyObj->setExchangeUniqid($this->getExchangeUniqid());
        $copyObj->setExchangeStatus($this->getExchangeStatus());
        if ($makeNew) {
            $copyObj->setNew(true);
            $copyObj->setId(NULL); // this is a auto-increment column, so set to default value
        }
    }

    /**
     * Makes a copy of this object that will be inserted as a new row in table when saved.
     * It creates a new object filling in the simple attributes, but skipping any primary
     * keys that are defined for the table.
     *
     * If desired, this method can also make copies of all associated (fkey referrers)
     * objects.
     *
     * @param  boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
     * @return \Model\Exchanges Clone of current object.
     * @throws PropelException
     */
    public function copy($deepCopy = false)
    {
        // we use get_class(), because this might be a subclass
        $clazz = get_class($this);
        $copyObj = new $clazz();
        $this->copyInto($copyObj, $deepCopy);

        return $copyObj;
    }

    /**
     * Clears the current object, sets all attributes to their default values and removes
     * outgoing references as well as back-references (from other objects to this one. Results probably in a database
     * change of those foreign objects when you call `save` there).
     */
    public function clear()
    {
        $this->id = null;
        $this->userid = null;
        $this->surname = null;
        $this->firstname = null;
        $this->patronymic = null;
        $this->email = null;
        $this->phone = null;
        $this->payment_details_from = null;
        $this->payment_details_to = null;
        $this->change_from_curr = null;
        $this->change_to_curr = null;
        $this->change_from_amount = null;
        $this->change_to_amount = null;
        $this->exchange_date = null;
        $this->exchange_uniqid = null;
        $this->exchange_status = null;
        $this->alreadyInSave = false;
        $this->clearAllReferences();
        $this->applyDefaultValues();
        $this->resetModified();
        $this->setNew(true);
        $this->setDeleted(false);
    }

    /**
     * Resets all references and back-references to other model objects or collections of model objects.
     *
     * This method is used to reset all php object references (not the actual reference in the database).
     * Necessary for object serialisation.
     *
     * @param      boolean $deep Whether to also clear the references on all referrer objects.
     */
    public function clearAllReferences($deep = false)
    {
        if ($deep) {
        } // if ($deep)

    }

    /**
     * Return the string representation of this object
     *
     * @return string
     */
    public function __toString()
    {
        return (string) $this->exportTo(ExchangesTableMap::DEFAULT_STRING_FORMAT);
    }

    /**
     * Code to be run before persisting the object
     * @param  ConnectionInterface $con
     * @return boolean
     */
    public function preSave(ConnectionInterface $con = null)
    {
        return true;
    }

    /**
     * Code to be run after persisting the object
     * @param ConnectionInterface $con
     */
    public function postSave(ConnectionInterface $con = null)
    {

    }

    /**
     * Code to be run before inserting to database
     * @param  ConnectionInterface $con
     * @return boolean
     */
    public function preInsert(ConnectionInterface $con = null)
    {
        return true;
    }

    /**
     * Code to be run after inserting to database
     * @param ConnectionInterface $con
     */
    public function postInsert(ConnectionInterface $con = null)
    {

    }

    /**
     * Code to be run before updating the object in database
     * @param  ConnectionInterface $con
     * @return boolean
     */
    public function preUpdate(ConnectionInterface $con = null)
    {
        return true;
    }

    /**
     * Code to be run after updating the object in database
     * @param ConnectionInterface $con
     */
    public function postUpdate(ConnectionInterface $con = null)
    {

    }

    /**
     * Code to be run before deleting the object in database
     * @param  ConnectionInterface $con
     * @return boolean
     */
    public function preDelete(ConnectionInterface $con = null)
    {
        return true;
    }

    /**
     * Code to be run after deleting the object in database
     * @param ConnectionInterface $con
     */
    public function postDelete(ConnectionInterface $con = null)
    {

    }


    /**
     * Derived method to catches calls to undefined methods.
     *
     * Provides magic import/export method support (fromXML()/toXML(), fromYAML()/toYAML(), etc.).
     * Allows to define default __call() behavior if you overwrite __call()
     *
     * @param string $name
     * @param mixed  $params
     *
     * @return array|string
     */
    public function __call($name, $params)
    {
        if (0 === strpos($name, 'get')) {
            $virtualColumn = substr($name, 3);
            if ($this->hasVirtualColumn($virtualColumn)) {
                return $this->getVirtualColumn($virtualColumn);
            }

            $virtualColumn = lcfirst($virtualColumn);
            if ($this->hasVirtualColumn($virtualColumn)) {
                return $this->getVirtualColumn($virtualColumn);
            }
        }

        if (0 === strpos($name, 'from')) {
            $format = substr($name, 4);

            return $this->importFrom($format, reset($params));
        }

        if (0 === strpos($name, 'to')) {
            $format = substr($name, 2);
            $includeLazyLoadColumns = isset($params[0]) ? $params[0] : true;

            return $this->exportTo($format, $includeLazyLoadColumns);
        }

        throw new BadMethodCallException(sprintf('Call to undefined method: %s.', $name));
    }

}
