<?php
/**
 * PostUniverseNames200Ok
 *
 * PHP version 5
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swaagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * EVE Swagger Interface
 *
 * An OpenAPI for EVE Online
 *
 * OpenAPI spec version: 0.4.1.dev1
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 *
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Swagger\Client\Model;

use \ArrayAccess;

/**
 * PostUniverseNames200Ok Class Doc Comment
 *
 * @category    Class */
 // @description 200 ok object
/**
 * @package     Swagger\Client
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class PostUniverseNames200Ok implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'post_universe_names_200_ok';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'category' => 'string',
        'id' => 'int',
        'name' => 'string'
    ];

    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    /**
     * Array of attributes where the key is the local name, and the value is the original name
     * @var string[]
     */
    protected static $attributeMap = [
        'category' => 'category',
        'id' => 'id',
        'name' => 'name'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'category' => 'setCategory',
        'id' => 'setId',
        'name' => 'setName'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'category' => 'getCategory',
        'id' => 'getId',
        'name' => 'getName'
    ];

    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    public static function setters()
    {
        return self::$setters;
    }

    public static function getters()
    {
        return self::$getters;
    }

    const CATEGORY_ALLIANCE = 'alliance';
    const CATEGORY_CHARACTER = 'character';
    const CATEGORY_CONSTELLATION = 'constellation';
    const CATEGORY_CORPORATION = 'corporation';
    const CATEGORY_INVENTORY_TYPE = 'inventory_type';
    const CATEGORY_REGION = 'region';
    const CATEGORY_SOLAR_SYSTEM = 'solar_system';
    const CATEGORY_STATION = 'station';
    

    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public function getCategoryAllowableValues()
    {
        return [
            self::CATEGORY_ALLIANCE,
            self::CATEGORY_CHARACTER,
            self::CATEGORY_CONSTELLATION,
            self::CATEGORY_CORPORATION,
            self::CATEGORY_INVENTORY_TYPE,
            self::CATEGORY_REGION,
            self::CATEGORY_SOLAR_SYSTEM,
            self::CATEGORY_STATION,
        ];
    }
    

    /**
     * Associative array for storing property values
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     * @param mixed[] $data Associated array of property values initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['category'] = isset($data['category']) ? $data['category'] : null;
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = [];
        if ($this->container['category'] === null) {
            $invalid_properties[] = "'category' can't be null";
        }
        $allowed_values = ["alliance", "character", "constellation", "corporation", "inventory_type", "region", "solar_system", "station"];
        if (!in_array($this->container['category'], $allowed_values)) {
            $invalid_properties[] = "invalid value for 'category', must be one of #{allowed_values}.";
        }

        if ($this->container['id'] === null) {
            $invalid_properties[] = "'id' can't be null";
        }
        if ($this->container['name'] === null) {
            $invalid_properties[] = "'name' can't be null";
        }
        return $invalid_properties;
    }

    /**
     * validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properteis are valid
     */
    public function valid()
    {
        if ($this->container['category'] === null) {
            return false;
        }
        $allowed_values = ["alliance", "character", "constellation", "corporation", "inventory_type", "region", "solar_system", "station"];
        if (!in_array($this->container['category'], $allowed_values)) {
            return false;
        }
        if ($this->container['id'] === null) {
            return false;
        }
        if ($this->container['name'] === null) {
            return false;
        }
        return true;
    }


    /**
     * Gets category
     * @return string
     */
    public function getCategory()
    {
        return $this->container['category'];
    }

    /**
     * Sets category
     * @param string $category category string
     * @return $this
     */
    public function setCategory($category)
    {
        $allowed_values = array('alliance', 'character', 'constellation', 'corporation', 'inventory_type', 'region', 'solar_system', 'station');
        if ((!in_array($category, $allowed_values))) {
            throw new \InvalidArgumentException("Invalid value for 'category', must be one of 'alliance', 'character', 'constellation', 'corporation', 'inventory_type', 'region', 'solar_system', 'station'");
        }
        $this->container['category'] = $category;

        return $this;
    }

    /**
     * Gets id
     * @return int
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     * @param int $id id integer
     * @return $this
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets name
     * @return string
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     * @param string $name name string
     * @return $this
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     * @param  integer $offset Offset
     * @return boolean
     */
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     * @param  integer $offset Offset
     * @return mixed
     */
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     * @param  integer $offset Offset
     * @param  mixed   $value  Value to be set
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
     * @param  integer $offset Offset
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Gets the string presentation of the object
     * @return string
     */
    public function __toString()
    {
        if (defined('JSON_PRETTY_PRINT')) { // use JSON pretty print
            return json_encode(\Swagger\Client\ObjectSerializer::sanitizeForSerialization($this), JSON_PRETTY_PRINT);
        }

        return json_encode(\Swagger\Client\ObjectSerializer::sanitizeForSerialization($this));
    }
}


