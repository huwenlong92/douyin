<?php
/**
 * Poi
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
 * Poi Class Doc Comment
 *
 * @category Class
 * @package  Douyin\Open
 * @author   抖音小开
 */
class Poi implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'poi';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'poi_id' => 'string',
'poi_name' => 'string',
'location' => 'string',
'country' => 'string',
'country_code' => 'string',
'province' => 'string',
'city' => 'string',
'city_code' => 'string',
'district' => 'string',
'address' => 'string'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'poi_id' => null,
'poi_name' => null,
'location' => null,
'country' => null,
'country_code' => null,
'province' => null,
'city' => null,
'city_code' => null,
'district' => null,
'address' => null    ];

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
        'poi_id' => 'poi_id',
'poi_name' => 'poi_name',
'location' => 'location',
'country' => 'country',
'country_code' => 'country_code',
'province' => 'province',
'city' => 'city',
'city_code' => 'city_code',
'district' => 'district',
'address' => 'address'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'poi_id' => 'setPoiId',
'poi_name' => 'setPoiName',
'location' => 'setLocation',
'country' => 'setCountry',
'country_code' => 'setCountryCode',
'province' => 'setProvince',
'city' => 'setCity',
'city_code' => 'setCityCode',
'district' => 'setDistrict',
'address' => 'setAddress'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'poi_id' => 'getPoiId',
'poi_name' => 'getPoiName',
'location' => 'getLocation',
'country' => 'getCountry',
'country_code' => 'getCountryCode',
'province' => 'getProvince',
'city' => 'getCity',
'city_code' => 'getCityCode',
'district' => 'getDistrict',
'address' => 'getAddress'    ];

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
        $this->container['poi_id'] = isset($data['poi_id']) ? $data['poi_id'] : null;
        $this->container['poi_name'] = isset($data['poi_name']) ? $data['poi_name'] : null;
        $this->container['location'] = isset($data['location']) ? $data['location'] : null;
        $this->container['country'] = isset($data['country']) ? $data['country'] : null;
        $this->container['country_code'] = isset($data['country_code']) ? $data['country_code'] : null;
        $this->container['province'] = isset($data['province']) ? $data['province'] : null;
        $this->container['city'] = isset($data['city']) ? $data['city'] : null;
        $this->container['city_code'] = isset($data['city_code']) ? $data['city_code'] : null;
        $this->container['district'] = isset($data['district']) ? $data['district'] : null;
        $this->container['address'] = isset($data['address']) ? $data['address'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['poi_id'] === null) {
            $invalidProperties[] = "'poi_id' can't be null";
        }
        if ($this->container['poi_name'] === null) {
            $invalidProperties[] = "'poi_name' can't be null";
        }
        if ($this->container['location'] === null) {
            $invalidProperties[] = "'location' can't be null";
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
        return count($this->listInvalidProperties()) === 0;
    }


    /**
     * Gets poi_id
     *
     * @return string
     */
    public function getPoiId()
    {
        return $this->container['poi_id'];
    }

    /**
     * Sets poi_id
     *
     * @param string $poi_id 唯一ID
     *
     * @return $this
     */
    public function setPoiId($poi_id)
    {
        $this->container['poi_id'] = $poi_id;

        return $this;
    }

    /**
     * Gets poi_name
     *
     * @return string
     */
    public function getPoiName()
    {
        return $this->container['poi_name'];
    }

    /**
     * Sets poi_name
     *
     * @param string $poi_name 名称
     *
     * @return $this
     */
    public function setPoiName($poi_name)
    {
        $this->container['poi_name'] = $poi_name;

        return $this;
    }

    /**
     * Gets location
     *
     * @return string
     */
    public function getLocation()
    {
        return $this->container['location'];
    }

    /**
     * Sets location
     *
     * @param string $location 经纬度，格式：X,Y
     *
     * @return $this
     */
    public function setLocation($location)
    {
        $this->container['location'] = $location;

        return $this;
    }

    /**
     * Gets country
     *
     * @return string
     */
    public function getCountry()
    {
        return $this->container['country'];
    }

    /**
     * Sets country
     *
     * @param string $country 国家
     *
     * @return $this
     */
    public function setCountry($country)
    {
        $this->container['country'] = $country;

        return $this;
    }

    /**
     * Gets country_code
     *
     * @return string
     */
    public function getCountryCode()
    {
        return $this->container['country_code'];
    }

    /**
     * Sets country_code
     *
     * @param string $country_code 国家编码
     *
     * @return $this
     */
    public function setCountryCode($country_code)
    {
        $this->container['country_code'] = $country_code;

        return $this;
    }

    /**
     * Gets province
     *
     * @return string
     */
    public function getProvince()
    {
        return $this->container['province'];
    }

    /**
     * Sets province
     *
     * @param string $province 省份
     *
     * @return $this
     */
    public function setProvince($province)
    {
        $this->container['province'] = $province;

        return $this;
    }

    /**
     * Gets city
     *
     * @return string
     */
    public function getCity()
    {
        return $this->container['city'];
    }

    /**
     * Sets city
     *
     * @param string $city 城市
     *
     * @return $this
     */
    public function setCity($city)
    {
        $this->container['city'] = $city;

        return $this;
    }

    /**
     * Gets city_code
     *
     * @return string
     */
    public function getCityCode()
    {
        return $this->container['city_code'];
    }

    /**
     * Sets city_code
     *
     * @param string $city_code 城市编码
     *
     * @return $this
     */
    public function setCityCode($city_code)
    {
        $this->container['city_code'] = $city_code;

        return $this;
    }

    /**
     * Gets district
     *
     * @return string
     */
    public function getDistrict()
    {
        return $this->container['district'];
    }

    /**
     * Sets district
     *
     * @param string $district 区域名称
     *
     * @return $this
     */
    public function setDistrict($district)
    {
        $this->container['district'] = $district;

        return $this;
    }

    /**
     * Gets address
     *
     * @return string
     */
    public function getAddress()
    {
        return $this->container['address'];
    }

    /**
     * Sets address
     *
     * @param string $address 地址
     *
     * @return $this
     */
    public function setAddress($address)
    {
        $this->container['address'] = $address;

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