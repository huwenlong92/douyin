<?php
/**
 * FansListResponseData
 *
 * PHP version 5
 *
 * @category Class
 * @package  Douyin\Open
 * @author   抖音小开
 */

/**
 * No description provided (generated by Swagger Codegen https://github.com/swagger-api/swagger-codegen)
 *
 * OpenAPI spec version: 1.0.0
 * 
 */

namespace Douyin\Open\Model;

use \ArrayAccess;
use \Douyin\Open\ObjectSerializer;

/**
 * FansListResponseData Class Doc Comment
 *
 * @category Class
 * @package  Douyin\Open
 * @author   抖音小开
 */
class FansListResponseData implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'FansListResponseData';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'error_code' => '\Douyin\Open\Model\ErrorCode',
'description' => '\Douyin\Open\Model\Description',
'cursor' => '\Douyin\Open\Model\Cursor',
'has_more' => '\Douyin\Open\Model\HasMore',
'list' => '\Douyin\Open\Model\User[]',
'total' => 'int'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'error_code' => null,
'description' => null,
'cursor' => null,
'has_more' => null,
'list' => null,
'total' => null    ];

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
        'error_code' => 'error_code',
'description' => 'description',
'cursor' => 'cursor',
'has_more' => 'has_more',
'list' => 'list',
'total' => 'total'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'error_code' => 'setErrorCode',
'description' => 'setDescription',
'cursor' => 'setCursor',
'has_more' => 'setHasMore',
'list' => 'setList',
'total' => 'setTotal'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'error_code' => 'getErrorCode',
'description' => 'getDescription',
'cursor' => 'getCursor',
'has_more' => 'getHasMore',
'list' => 'getList',
'total' => 'getTotal'    ];

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
        $this->container['error_code'] = isset($data['error_code']) ? $data['error_code'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['cursor'] = isset($data['cursor']) ? $data['cursor'] : null;
        $this->container['has_more'] = isset($data['has_more']) ? $data['has_more'] : null;
        $this->container['list'] = isset($data['list']) ? $data['list'] : null;
        $this->container['total'] = isset($data['total']) ? $data['total'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

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
        return count($this->listInvalidProperties()) === 0;
    }


    /**
     * Gets error_code
     *
     * @return \Douyin\Open\Model\ErrorCode
     */
    public function getErrorCode()
    {
        return $this->container['error_code'];
    }

    /**
     * Sets error_code
     *
     * @param \Douyin\Open\Model\ErrorCode $error_code error_code
     *
     * @return $this
     */
    public function setErrorCode($error_code)
    {
        $this->container['error_code'] = $error_code;

        return $this;
    }

    /**
     * Gets description
     *
     * @return \Douyin\Open\Model\Description
     */
    public function getDescription()
    {
        return $this->container['description'];
    }

    /**
     * Sets description
     *
     * @param \Douyin\Open\Model\Description $description description
     *
     * @return $this
     */
    public function setDescription($description)
    {
        $this->container['description'] = $description;

        return $this;
    }

    /**
     * Gets cursor
     *
     * @return \Douyin\Open\Model\Cursor
     */
    public function getCursor()
    {
        return $this->container['cursor'];
    }

    /**
     * Sets cursor
     *
     * @param \Douyin\Open\Model\Cursor $cursor cursor
     *
     * @return $this
     */
    public function setCursor($cursor)
    {
        $this->container['cursor'] = $cursor;

        return $this;
    }

    /**
     * Gets has_more
     *
     * @return \Douyin\Open\Model\HasMore
     */
    public function getHasMore()
    {
        return $this->container['has_more'];
    }

    /**
     * Sets has_more
     *
     * @param \Douyin\Open\Model\HasMore $has_more has_more
     *
     * @return $this
     */
    public function setHasMore($has_more)
    {
        $this->container['has_more'] = $has_more;

        return $this;
    }

    /**
     * Gets list
     *
     * @return \Douyin\Open\Model\User[]
     */
    public function getList()
    {
        return $this->container['list'];
    }

    /**
     * Sets list
     *
     * @param \Douyin\Open\Model\User[] $list list
     *
     * @return $this
     */
    public function setList($list)
    {
        $this->container['list'] = $list;

        return $this;
    }

    /**
     * Gets total
     *
     * @return int
     */
    public function getTotal()
    {
        return $this->container['total'];
    }

    /**
     * Sets total
     *
     * @param int $total 粉丝总数
     *
     * @return $this
     */
    public function setTotal($total)
    {
        $this->container['total'] = $total;

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