<?php
/**
 * GetUniverseTypesTypeIdOk
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
 * GetUniverseTypesTypeIdOk Class Doc Comment
 *
 * @category    Class */
 // @description 200 ok object
/**
 * @package     Swagger\Client
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class GetUniverseTypesTypeIdOk implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'get_universe_types_type_id_ok';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'capacity' => 'float',
        'description' => 'string',
        'dogma_attributes' => '\Swagger\Client\Model\GetUniverseTypesTypeIdDogmaAttribute[]',
        'dogma_effects' => '\Swagger\Client\Model\GetUniverseTypesTypeIdDogmaEffect[]',
        'graphic_id' => 'int',
        'group_id' => 'int',
        'icon_id' => 'int',
        'mass' => 'float',
        'name' => 'string',
        'portion_size' => 'int',
        'published' => 'bool',
        'radius' => 'float',
        'type_id' => 'int',
        'volume' => 'float'
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
        'capacity' => 'capacity',
        'description' => 'description',
        'dogma_attributes' => 'dogma_attributes',
        'dogma_effects' => 'dogma_effects',
        'graphic_id' => 'graphic_id',
        'group_id' => 'group_id',
        'icon_id' => 'icon_id',
        'mass' => 'mass',
        'name' => 'name',
        'portion_size' => 'portion_size',
        'published' => 'published',
        'radius' => 'radius',
        'type_id' => 'type_id',
        'volume' => 'volume'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'capacity' => 'setCapacity',
        'description' => 'setDescription',
        'dogma_attributes' => 'setDogmaAttributes',
        'dogma_effects' => 'setDogmaEffects',
        'graphic_id' => 'setGraphicId',
        'group_id' => 'setGroupId',
        'icon_id' => 'setIconId',
        'mass' => 'setMass',
        'name' => 'setName',
        'portion_size' => 'setPortionSize',
        'published' => 'setPublished',
        'radius' => 'setRadius',
        'type_id' => 'setTypeId',
        'volume' => 'setVolume'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'capacity' => 'getCapacity',
        'description' => 'getDescription',
        'dogma_attributes' => 'getDogmaAttributes',
        'dogma_effects' => 'getDogmaEffects',
        'graphic_id' => 'getGraphicId',
        'group_id' => 'getGroupId',
        'icon_id' => 'getIconId',
        'mass' => 'getMass',
        'name' => 'getName',
        'portion_size' => 'getPortionSize',
        'published' => 'getPublished',
        'radius' => 'getRadius',
        'type_id' => 'getTypeId',
        'volume' => 'getVolume'
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
        $this->container['capacity'] = isset($data['capacity']) ? $data['capacity'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['dogma_attributes'] = isset($data['dogma_attributes']) ? $data['dogma_attributes'] : null;
        $this->container['dogma_effects'] = isset($data['dogma_effects']) ? $data['dogma_effects'] : null;
        $this->container['graphic_id'] = isset($data['graphic_id']) ? $data['graphic_id'] : null;
        $this->container['group_id'] = isset($data['group_id']) ? $data['group_id'] : null;
        $this->container['icon_id'] = isset($data['icon_id']) ? $data['icon_id'] : null;
        $this->container['mass'] = isset($data['mass']) ? $data['mass'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['portion_size'] = isset($data['portion_size']) ? $data['portion_size'] : null;
        $this->container['published'] = isset($data['published']) ? $data['published'] : null;
        $this->container['radius'] = isset($data['radius']) ? $data['radius'] : null;
        $this->container['type_id'] = isset($data['type_id']) ? $data['type_id'] : null;
        $this->container['volume'] = isset($data['volume']) ? $data['volume'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = [];
        if ($this->container['description'] === null) {
            $invalid_properties[] = "'description' can't be null";
        }
        if ($this->container['group_id'] === null) {
            $invalid_properties[] = "'group_id' can't be null";
        }
        if ($this->container['name'] === null) {
            $invalid_properties[] = "'name' can't be null";
        }
        if ($this->container['published'] === null) {
            $invalid_properties[] = "'published' can't be null";
        }
        if ($this->container['type_id'] === null) {
            $invalid_properties[] = "'type_id' can't be null";
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
        if ($this->container['description'] === null) {
            return false;
        }
        if ($this->container['group_id'] === null) {
            return false;
        }
        if ($this->container['name'] === null) {
            return false;
        }
        if ($this->container['published'] === null) {
            return false;
        }
        if ($this->container['type_id'] === null) {
            return false;
        }
        return true;
    }


    /**
     * Gets capacity
     * @return float
     */
    public function getCapacity()
    {
        return $this->container['capacity'];
    }

    /**
     * Sets capacity
     * @param float $capacity capacity number
     * @return $this
     */
    public function setCapacity($capacity)
    {
        $this->container['capacity'] = $capacity;

        return $this;
    }

    /**
     * Gets description
     * @return string
     */
    public function getDescription()
    {
        return $this->container['description'];
    }

    /**
     * Sets description
     * @param string $description description string
     * @return $this
     */
    public function setDescription($description)
    {
        $this->container['description'] = $description;

        return $this;
    }

    /**
     * Gets dogma_attributes
     * @return \Swagger\Client\Model\GetUniverseTypesTypeIdDogmaAttribute[]
     */
    public function getDogmaAttributes()
    {
        return $this->container['dogma_attributes'];
    }

    /**
     * Sets dogma_attributes
     * @param \Swagger\Client\Model\GetUniverseTypesTypeIdDogmaAttribute[] $dogma_attributes dogma_attributes array
     * @return $this
     */
    public function setDogmaAttributes($dogma_attributes)
    {
        $this->container['dogma_attributes'] = $dogma_attributes;

        return $this;
    }

    /**
     * Gets dogma_effects
     * @return \Swagger\Client\Model\GetUniverseTypesTypeIdDogmaEffect[]
     */
    public function getDogmaEffects()
    {
        return $this->container['dogma_effects'];
    }

    /**
     * Sets dogma_effects
     * @param \Swagger\Client\Model\GetUniverseTypesTypeIdDogmaEffect[] $dogma_effects dogma_effects array
     * @return $this
     */
    public function setDogmaEffects($dogma_effects)
    {
        $this->container['dogma_effects'] = $dogma_effects;

        return $this;
    }

    /**
     * Gets graphic_id
     * @return int
     */
    public function getGraphicId()
    {
        return $this->container['graphic_id'];
    }

    /**
     * Sets graphic_id
     * @param int $graphic_id graphic_id integer
     * @return $this
     */
    public function setGraphicId($graphic_id)
    {
        $this->container['graphic_id'] = $graphic_id;

        return $this;
    }

    /**
     * Gets group_id
     * @return int
     */
    public function getGroupId()
    {
        return $this->container['group_id'];
    }

    /**
     * Sets group_id
     * @param int $group_id group_id integer
     * @return $this
     */
    public function setGroupId($group_id)
    {
        $this->container['group_id'] = $group_id;

        return $this;
    }

    /**
     * Gets icon_id
     * @return int
     */
    public function getIconId()
    {
        return $this->container['icon_id'];
    }

    /**
     * Sets icon_id
     * @param int $icon_id icon_id integer
     * @return $this
     */
    public function setIconId($icon_id)
    {
        $this->container['icon_id'] = $icon_id;

        return $this;
    }

    /**
     * Gets mass
     * @return float
     */
    public function getMass()
    {
        return $this->container['mass'];
    }

    /**
     * Sets mass
     * @param float $mass mass number
     * @return $this
     */
    public function setMass($mass)
    {
        $this->container['mass'] = $mass;

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
     * Gets portion_size
     * @return int
     */
    public function getPortionSize()
    {
        return $this->container['portion_size'];
    }

    /**
     * Sets portion_size
     * @param int $portion_size portion_size integer
     * @return $this
     */
    public function setPortionSize($portion_size)
    {
        $this->container['portion_size'] = $portion_size;

        return $this;
    }

    /**
     * Gets published
     * @return bool
     */
    public function getPublished()
    {
        return $this->container['published'];
    }

    /**
     * Sets published
     * @param bool $published published boolean
     * @return $this
     */
    public function setPublished($published)
    {
        $this->container['published'] = $published;

        return $this;
    }

    /**
     * Gets radius
     * @return float
     */
    public function getRadius()
    {
        return $this->container['radius'];
    }

    /**
     * Sets radius
     * @param float $radius radius number
     * @return $this
     */
    public function setRadius($radius)
    {
        $this->container['radius'] = $radius;

        return $this;
    }

    /**
     * Gets type_id
     * @return int
     */
    public function getTypeId()
    {
        return $this->container['type_id'];
    }

    /**
     * Sets type_id
     * @param int $type_id type_id integer
     * @return $this
     */
    public function setTypeId($type_id)
    {
        $this->container['type_id'] = $type_id;

        return $this;
    }

    /**
     * Gets volume
     * @return float
     */
    public function getVolume()
    {
        return $this->container['volume'];
    }

    /**
     * Sets volume
     * @param float $volume volume number
     * @return $this
     */
    public function setVolume($volume)
    {
        $this->container['volume'] = $volume;

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


