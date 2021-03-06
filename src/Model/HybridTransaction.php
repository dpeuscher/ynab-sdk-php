<?php
/**
 * HybridTransaction
 *
 * PHP version 5
 *
 * @category Class
 * @package  YNAB
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * YNAB API Endpoints
 *
 * Our API uses a REST based design, leverages the JSON data format, and relies upon HTTPS for transport. We respond with meaningful HTTP response codes and if an error occurs, we include error details in the response body.  API Documentation is at https://api.youneedabudget.com
 *
 * OpenAPI spec version: 1.0.0
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 2.3.1
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace YNAB\Model;

use \ArrayAccess;
use \YNAB\ObjectSerializer;

/**
 * HybridTransaction Class Doc Comment
 *
 * @category Class
 * @package  YNAB
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class HybridTransaction implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'HybridTransaction';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'id' => 'string',
        'date' => '\DateTime',
        'amount' => 'float',
        'memo' => 'string',
        'cleared' => 'string',
        'approved' => 'bool',
        'flagColor' => 'string',
        'accountId' => 'string',
        'payeeId' => 'string',
        'categoryId' => 'string',
        'transferAccountId' => 'string',
        'importId' => 'string',
        'type' => 'string',
        'parentTransactionId' => 'string',
        'accountName' => 'string',
        'payeeName' => 'string',
        'categoryName' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'id' => 'uuid',
        'date' => 'date',
        'amount' => '1234000',
        'memo' => null,
        'cleared' => null,
        'approved' => null,
        'flagColor' => null,
        'accountId' => 'uuid',
        'payeeId' => 'uuid',
        'categoryId' => 'uuid',
        'transferAccountId' => 'uuid',
        'importId' => null,
        'type' => null,
        'parentTransactionId' => 'uuid',
        'accountName' => null,
        'payeeName' => null,
        'categoryName' => null
    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerFormats()
    {
        return self::$swaggerFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'id' => 'id',
        'date' => 'date',
        'amount' => 'amount',
        'memo' => 'memo',
        'cleared' => 'cleared',
        'approved' => 'approved',
        'flagColor' => 'flag_color',
        'accountId' => 'account_id',
        'payeeId' => 'payee_id',
        'categoryId' => 'category_id',
        'transferAccountId' => 'transfer_account_id',
        'importId' => 'import_id',
        'type' => 'type',
        'parentTransactionId' => 'parent_transaction_id',
        'accountName' => 'account_name',
        'payeeName' => 'payee_name',
        'categoryName' => 'category_name'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'date' => 'setDate',
        'amount' => 'setAmount',
        'memo' => 'setMemo',
        'cleared' => 'setCleared',
        'approved' => 'setApproved',
        'flagColor' => 'setFlagColor',
        'accountId' => 'setAccountId',
        'payeeId' => 'setPayeeId',
        'categoryId' => 'setCategoryId',
        'transferAccountId' => 'setTransferAccountId',
        'importId' => 'setImportId',
        'type' => 'setType',
        'parentTransactionId' => 'setParentTransactionId',
        'accountName' => 'setAccountName',
        'payeeName' => 'setPayeeName',
        'categoryName' => 'setCategoryName'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'date' => 'getDate',
        'amount' => 'getAmount',
        'memo' => 'getMemo',
        'cleared' => 'getCleared',
        'approved' => 'getApproved',
        'flagColor' => 'getFlagColor',
        'accountId' => 'getAccountId',
        'payeeId' => 'getPayeeId',
        'categoryId' => 'getCategoryId',
        'transferAccountId' => 'getTransferAccountId',
        'importId' => 'getImportId',
        'type' => 'getType',
        'parentTransactionId' => 'getParentTransactionId',
        'accountName' => 'getAccountName',
        'payeeName' => 'getPayeeName',
        'categoryName' => 'getCategoryName'
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @return array
     */
    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @return array
     */
    public static function setters()
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @return array
     */
    public static function getters()
    {
        return self::$getters;
    }

    /**
     * The original name of the model.
     *
     * @return string
     */
    public function getModelName()
    {
        return self::$swaggerModelName;
    }

    const CLEARED_CLEARED = 'cleared';
    const CLEARED_UNCLEARED = 'uncleared';
    const CLEARED_RECONCILED = 'reconciled';
    const FLAG_COLOR_RED = 'red';
    const FLAG_COLOR_ORANGE = 'orange';
    const FLAG_COLOR_YELLOW = 'yellow';
    const FLAG_COLOR_GREEN = 'green';
    const FLAG_COLOR_BLUE = 'blue';
    const FLAG_COLOR_PURPLE = 'purple';
    const TYPE_TRANSACTION = 'transaction';
    const TYPE_SUBTRANSACTION = 'subtransaction';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getClearedAllowableValues()
    {
        return [
            self::CLEARED_CLEARED,
            self::CLEARED_UNCLEARED,
            self::CLEARED_RECONCILED,
        ];
    }
    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getFlagColorAllowableValues()
    {
        return [
            self::FLAG_COLOR_RED,
            self::FLAG_COLOR_ORANGE,
            self::FLAG_COLOR_YELLOW,
            self::FLAG_COLOR_GREEN,
            self::FLAG_COLOR_BLUE,
            self::FLAG_COLOR_PURPLE,
        ];
    }
    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getTypeAllowableValues()
    {
        return [
            self::TYPE_TRANSACTION,
            self::TYPE_SUBTRANSACTION,
        ];
    }
    

    /**
     * Associative array for storing property values
     *
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['date'] = isset($data['date']) ? $data['date'] : null;
        $this->container['amount'] = isset($data['amount']) ? $data['amount'] : null;
        $this->container['memo'] = isset($data['memo']) ? $data['memo'] : null;
        $this->container['cleared'] = isset($data['cleared']) ? $data['cleared'] : null;
        $this->container['approved'] = isset($data['approved']) ? $data['approved'] : null;
        $this->container['flagColor'] = isset($data['flagColor']) ? $data['flagColor'] : null;
        $this->container['accountId'] = isset($data['accountId']) ? $data['accountId'] : null;
        $this->container['payeeId'] = isset($data['payeeId']) ? $data['payeeId'] : null;
        $this->container['categoryId'] = isset($data['categoryId']) ? $data['categoryId'] : null;
        $this->container['transferAccountId'] = isset($data['transferAccountId']) ? $data['transferAccountId'] : null;
        $this->container['importId'] = isset($data['importId']) ? $data['importId'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['parentTransactionId'] = isset($data['parentTransactionId']) ? $data['parentTransactionId'] : null;
        $this->container['accountName'] = isset($data['accountName']) ? $data['accountName'] : null;
        $this->container['payeeName'] = isset($data['payeeName']) ? $data['payeeName'] : null;
        $this->container['categoryName'] = isset($data['categoryName']) ? $data['categoryName'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['id'] === null) {
            $invalidProperties[] = "'id' can't be null";
        }
        if ($this->container['date'] === null) {
            $invalidProperties[] = "'date' can't be null";
        }
        if ($this->container['amount'] === null) {
            $invalidProperties[] = "'amount' can't be null";
        }
        if ($this->container['memo'] === null) {
            $invalidProperties[] = "'memo' can't be null";
        }
        if ($this->container['cleared'] === null) {
            $invalidProperties[] = "'cleared' can't be null";
        }
        $allowedValues = $this->getClearedAllowableValues();
        if (!in_array($this->container['cleared'], $allowedValues)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'cleared', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        if ($this->container['approved'] === null) {
            $invalidProperties[] = "'approved' can't be null";
        }
        if ($this->container['flagColor'] === null) {
            $invalidProperties[] = "'flagColor' can't be null";
        }
        $allowedValues = $this->getFlagColorAllowableValues();
        if (!in_array($this->container['flagColor'], $allowedValues)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'flagColor', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        if ($this->container['accountId'] === null) {
            $invalidProperties[] = "'accountId' can't be null";
        }
        if ($this->container['payeeId'] === null) {
            $invalidProperties[] = "'payeeId' can't be null";
        }
        if ($this->container['categoryId'] === null) {
            $invalidProperties[] = "'categoryId' can't be null";
        }
        if ($this->container['transferAccountId'] === null) {
            $invalidProperties[] = "'transferAccountId' can't be null";
        }
        if ($this->container['importId'] === null) {
            $invalidProperties[] = "'importId' can't be null";
        }
        if ($this->container['type'] === null) {
            $invalidProperties[] = "'type' can't be null";
        }
        $allowedValues = $this->getTypeAllowableValues();
        if (!in_array($this->container['type'], $allowedValues)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'type', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        if ($this->container['parentTransactionId'] === null) {
            $invalidProperties[] = "'parentTransactionId' can't be null";
        }
        if ($this->container['accountName'] === null) {
            $invalidProperties[] = "'accountName' can't be null";
        }
        if ($this->container['payeeName'] === null) {
            $invalidProperties[] = "'payeeName' can't be null";
        }
        if ($this->container['categoryName'] === null) {
            $invalidProperties[] = "'categoryName' can't be null";
        }
        return $invalidProperties;
    }

    /**
     * Validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {

        if ($this->container['id'] === null) {
            return false;
        }
        if ($this->container['date'] === null) {
            return false;
        }
        if ($this->container['amount'] === null) {
            return false;
        }
        if ($this->container['memo'] === null) {
            return false;
        }
        if ($this->container['cleared'] === null) {
            return false;
        }
        $allowedValues = $this->getClearedAllowableValues();
        if (!in_array($this->container['cleared'], $allowedValues)) {
            return false;
        }
        if ($this->container['approved'] === null) {
            return false;
        }
        if ($this->container['flagColor'] === null) {
            return false;
        }
        $allowedValues = $this->getFlagColorAllowableValues();
        if (!in_array($this->container['flagColor'], $allowedValues)) {
            return false;
        }
        if ($this->container['accountId'] === null) {
            return false;
        }
        if ($this->container['payeeId'] === null) {
            return false;
        }
        if ($this->container['categoryId'] === null) {
            return false;
        }
        if ($this->container['transferAccountId'] === null) {
            return false;
        }
        if ($this->container['importId'] === null) {
            return false;
        }
        if ($this->container['type'] === null) {
            return false;
        }
        $allowedValues = $this->getTypeAllowableValues();
        if (!in_array($this->container['type'], $allowedValues)) {
            return false;
        }
        if ($this->container['parentTransactionId'] === null) {
            return false;
        }
        if ($this->container['accountName'] === null) {
            return false;
        }
        if ($this->container['payeeName'] === null) {
            return false;
        }
        if ($this->container['categoryName'] === null) {
            return false;
        }
        return true;
    }


    /**
     * Gets id
     *
     * @return string
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     *
     * @param string $id id
     *
     * @return $this
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets date
     *
     * @return \DateTime
     */
    public function getDate()
    {
        return $this->container['date'];
    }

    /**
     * Sets date
     *
     * @param \DateTime $date date
     *
     * @return $this
     */
    public function setDate($date)
    {
        $this->container['date'] = $date;

        return $this;
    }

    /**
     * Gets amount
     *
     * @return float
     */
    public function getAmount()
    {
        return $this->container['amount'];
    }

    /**
     * Sets amount
     *
     * @param float $amount The transaction amount in milliunits format
     *
     * @return $this
     */
    public function setAmount($amount)
    {
        $this->container['amount'] = $amount;

        return $this;
    }

    /**
     * Gets memo
     *
     * @return string
     */
    public function getMemo()
    {
        return $this->container['memo'];
    }

    /**
     * Sets memo
     *
     * @param string $memo memo
     *
     * @return $this
     */
    public function setMemo($memo)
    {
        $this->container['memo'] = $memo;

        return $this;
    }

    /**
     * Gets cleared
     *
     * @return string
     */
    public function getCleared()
    {
        return $this->container['cleared'];
    }

    /**
     * Sets cleared
     *
     * @param string $cleared The cleared status of the transaction
     *
     * @return $this
     */
    public function setCleared($cleared)
    {
        $allowedValues = $this->getClearedAllowableValues();
        if (!in_array($cleared, $allowedValues)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'cleared', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['cleared'] = $cleared;

        return $this;
    }

    /**
     * Gets approved
     *
     * @return bool
     */
    public function getApproved()
    {
        return $this->container['approved'];
    }

    /**
     * Sets approved
     *
     * @param bool $approved Whether or not the transaction is approved
     *
     * @return $this
     */
    public function setApproved($approved)
    {
        $this->container['approved'] = $approved;

        return $this;
    }

    /**
     * Gets flagColor
     *
     * @return string
     */
    public function getFlagColor()
    {
        return $this->container['flagColor'];
    }

    /**
     * Sets flagColor
     *
     * @param string $flagColor The transaction flag
     *
     * @return $this
     */
    public function setFlagColor($flagColor)
    {
        $allowedValues = $this->getFlagColorAllowableValues();
        if (!in_array($flagColor, $allowedValues)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'flagColor', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['flagColor'] = $flagColor;

        return $this;
    }

    /**
     * Gets accountId
     *
     * @return string
     */
    public function getAccountId()
    {
        return $this->container['accountId'];
    }

    /**
     * Sets accountId
     *
     * @param string $accountId accountId
     *
     * @return $this
     */
    public function setAccountId($accountId)
    {
        $this->container['accountId'] = $accountId;

        return $this;
    }

    /**
     * Gets payeeId
     *
     * @return string
     */
    public function getPayeeId()
    {
        return $this->container['payeeId'];
    }

    /**
     * Sets payeeId
     *
     * @param string $payeeId payeeId
     *
     * @return $this
     */
    public function setPayeeId($payeeId)
    {
        $this->container['payeeId'] = $payeeId;

        return $this;
    }

    /**
     * Gets categoryId
     *
     * @return string
     */
    public function getCategoryId()
    {
        return $this->container['categoryId'];
    }

    /**
     * Sets categoryId
     *
     * @param string $categoryId categoryId
     *
     * @return $this
     */
    public function setCategoryId($categoryId)
    {
        $this->container['categoryId'] = $categoryId;

        return $this;
    }

    /**
     * Gets transferAccountId
     *
     * @return string
     */
    public function getTransferAccountId()
    {
        return $this->container['transferAccountId'];
    }

    /**
     * Sets transferAccountId
     *
     * @param string $transferAccountId transferAccountId
     *
     * @return $this
     */
    public function setTransferAccountId($transferAccountId)
    {
        $this->container['transferAccountId'] = $transferAccountId;

        return $this;
    }

    /**
     * Gets importId
     *
     * @return string
     */
    public function getImportId()
    {
        return $this->container['importId'];
    }

    /**
     * Sets importId
     *
     * @param string $importId If the Transaction was imported, this field is a unique (by account) import identifier.  If this transaction was imported through File Based Import or Direct Import and not through the API, the import_id will have the format: 'YNAB:[milliunit_amount]:[iso_date]:[occurrence]'.  For example, a transaction dated 2015-12-30 in the amount of -$294.23 USD would have an import_id of 'YNAB:-294230:2015-12-30:1'.  If a second transaction on the same account was imported and had the same date and same amount, its import_id would be 'YNAB:-294230:2015-12-30:2'.
     *
     * @return $this
     */
    public function setImportId($importId)
    {
        $this->container['importId'] = $importId;

        return $this;
    }

    /**
     * Gets type
     *
     * @return string
     */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
     * Sets type
     *
     * @param string $type Whether the hybrid transaction represents a regular transaction or a subtransaction
     *
     * @return $this
     */
    public function setType($type)
    {
        $allowedValues = $this->getTypeAllowableValues();
        if (!in_array($type, $allowedValues)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'type', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['type'] = $type;

        return $this;
    }

    /**
     * Gets parentTransactionId
     *
     * @return string
     */
    public function getParentTransactionId()
    {
        return $this->container['parentTransactionId'];
    }

    /**
     * Sets parentTransactionId
     *
     * @param string $parentTransactionId For subtransaction types, this is the id of the pararent transaction.  For transaction types, this id will be always be null.
     *
     * @return $this
     */
    public function setParentTransactionId($parentTransactionId)
    {
        $this->container['parentTransactionId'] = $parentTransactionId;

        return $this;
    }

    /**
     * Gets accountName
     *
     * @return string
     */
    public function getAccountName()
    {
        return $this->container['accountName'];
    }

    /**
     * Sets accountName
     *
     * @param string $accountName accountName
     *
     * @return $this
     */
    public function setAccountName($accountName)
    {
        $this->container['accountName'] = $accountName;

        return $this;
    }

    /**
     * Gets payeeName
     *
     * @return string
     */
    public function getPayeeName()
    {
        return $this->container['payeeName'];
    }

    /**
     * Sets payeeName
     *
     * @param string $payeeName payeeName
     *
     * @return $this
     */
    public function setPayeeName($payeeName)
    {
        $this->container['payeeName'] = $payeeName;

        return $this;
    }

    /**
     * Gets categoryName
     *
     * @return string
     */
    public function getCategoryName()
    {
        return $this->container['categoryName'];
    }

    /**
     * Sets categoryName
     *
     * @param string $categoryName categoryName
     *
     * @return $this
     */
    public function setCategoryName($categoryName)
    {
        $this->container['categoryName'] = $categoryName;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param integer $offset Offset
     *
     * @return mixed
     */
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     *
     * @param integer $offset Offset
     * @param mixed   $value  Value to be set
     *
     * @return void
     */
    public function offsetSet($offset, $value)
    {
        if (is_null($offset)) {
            $this->container[] = $value;
        } else {
            $this->container[$offset] = $value;
        }
    }

    /**
     * Unsets offset.
     *
     * @param integer $offset Offset
     *
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        if (defined('JSON_PRETTY_PRINT')) { // use JSON pretty print
            return json_encode(
                ObjectSerializer::sanitizeForSerialization($this),
                JSON_PRETTY_PRINT
            );
        }

        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}


