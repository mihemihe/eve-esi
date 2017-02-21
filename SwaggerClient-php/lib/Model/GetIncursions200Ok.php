<?php
/**
 * GetIncursions200Ok
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
 * GetIncursions200Ok Class Doc Comment
 *
 * @category    Class */
 // @description 200 ok object
/**
 * @package     Swagger\Client
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class GetIncursions200Ok implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'get_incursions_200_ok';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'constellation_id' => 'int',
        'faction_id' => 'int',
        'has_boss' => 'bool',
        'infested_solar_systems' => 'int[]',
        'influence' => 'float',
        'staging_solar_system_id' => 'int',
        'state' => 'string',
        'type' => 'string'
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
        'constellation_id' => 'constellation_id',
        'faction_id' => 'faction_id',
        'has_boss' => 'has_boss',
        'infested_solar_systems' => 'infested_solar_systems',
        'influence' => 'influence',
        'staging_solar_system_id' => 'staging_solar_system_id',
        'state' => 'state',
        'type' => 'type'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'constellation_id' => 'setConstellationId',
        'faction_id' => 'setFactionId',
        'has_boss' => 'setHasBoss',
        'infested_solar_systems' => 'setInfestedSolarSystems',
        'influence' => 'setInfluence',
        'staging_solar_system_id' => 'setStagingSolarSystemId',
        'state' => 'setState',
        'type' => 'setType'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'constellation_id' => 'getConstellationId',
        'faction_id' => 'getFactionId',
        'has_boss' => 'getHasBoss',
        'infested_solar_systems' => 'getInfestedSolarSystems',
        'influence' => 'getInfluence',
        'staging_solar_system_id' => 'getStagingSolarSystemId',
        'state' => 'getState',
        'type' => 'getType'
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

    const STATE_WITHDRAWING = 'withdrawing';
    const STATE_MOBILIZING = 'mobilizing';
    const STATE_ESTABLISHED = 'established';
    

    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public function getStateAllowableValues()
    {
        return [
            self::STATE_WITHDRAWING,
            self::STATE_MOBILIZING,
            self::STATE_ESTABLISHED,
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
        $this->container['constellation_id'] = isset($data['constellation_id']) ? $data['constellation_id'] : null;
        $this->container['faction_id'] = isset($data['faction_id']) ? $data['faction_id'] : null;
        $this->container['has_boss'] = isset($data['has_boss']) ? $data['has_boss'] : null;
        $this->container['infested_solar_systems'] = isset($data['infested_solar_systems']) ? $data['infested_solar_systems'] : null;
        $this->container['influence'] = isset($data['influence']) ? $data['influence'] : null;
        $this->container['staging_solar_system_id'] = isset($data['staging_solar_system_id']) ? $data['staging_solar_system_id'] : null;
        $this->container['state'] = isset($data['state']) ? $data['state'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = [];
        if ($this->container['constellation_id'] === null) {
            $invalid_properties[] = "'constellation_id' can't be null";
        }
        if ($this->container['faction_id'] === null) {
            $invalid_properties[] = "'faction_id' can't be null";
        }
        if ($this->container['has_boss'] === null) {
            $invalid_properties[] = "'has_boss' can't be null";
        }
        if ($this->container['infested_solar_systems'] === null) {
            $invalid_properties[] = "'infested_solar_systems' can't be null";
        }
        if ($this->container['influence'] === null) {
            $invalid_properties[] = "'influence' can't be null";
        }
        if ($this->container['staging_solar_system_id'] === null) {
            $invalid_properties[] = "'staging_solar_system_id' can't be null";
        }
        if ($this->container['state'] === null) {
            $invalid_properties[] = "'state' can't be null";
        }
        $allowed_values = ["withdrawing", "mobilizing", "established"];
        if (!in_array($this->container['state'], $allowed_values)) {
            $invalid_properties[] = "invalid value for 'state', must be one of #{allowed_values}.";
        }

        if ($this->container['type'] === null) {
            $invalid_properties[] = "'type' can't be null";
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
        if ($this->container['constellation_id'] === null) {
            return false;
        }
        if ($this->container['faction_id'] === null) {
            return false;
        }
        if ($this->container['has_boss'] === null) {
            return false;
        }
        if ($this->container['infested_solar_systems'] === null) {
            return false;
        }
        if ($this->container['influence'] === null) {
            return false;
        }
        if ($this->container['staging_solar_system_id'] === null) {
            return false;
        }
        if ($this->container['state'] === null) {
            return false;
        }
        $allowed_values = ["withdrawing", "mobilizing", "established"];
        if (!in_array($this->container['state'], $allowed_values)) {
            return false;
        }
        if ($this->container['type'] === null) {
            return false;
        }
        return true;
    }


    /**
     * Gets constellation_id
     * @return int
     */
    public function getConstellationId()
    {
        return $this->container['constellation_id'];
    }

    /**
     * Sets constellation_id
     * @param int $constellation_id The constellation id in which this incursion takes place
     * @return $this
     */
    public function setConstellationId($constellation_id)
    {
        $this->container['constellation_id'] = $constellation_id;

        return $this;
    }

    /**
     * Gets faction_id
     * @return int
     */
    public function getFactionId()
    {
        return $this->container['faction_id'];
    }

    /**
     * Sets faction_id
     * @param int $faction_id The attacking faction's id
     * @return $this
     */
    public function setFactionId($faction_id)
    {
        $this->container['faction_id'] = $faction_id;

        return $this;
    }

    /**
     * Gets has_boss
     * @return bool
     */
    public function getHasBoss()
    {
        return $this->container['has_boss'];
    }

    /**
     * Sets has_boss
     * @param bool $has_boss Whether the final encounter has boss or not
     * @return $this
     */
    public function setHasBoss($has_boss)
    {
        $this->container['has_boss'] = $has_boss;

        return $this;
    }

    /**
     * Gets infested_solar_systems
     * @return int[]
     */
    public function getInfestedSolarSystems()
    {
        return $this->container['infested_solar_systems'];
    }

    /**
     * Sets infested_solar_systems
     * @param int[] $infested_solar_systems A list of infested solar system ids that are a part of this incursion
     * @return $this
     */
    public function setInfestedSolarSystems($infested_solar_systems)
    {
        $this->container['infested_solar_systems'] = $infested_solar_systems;

        return $this;
    }

    /**
     * Gets influence
     * @return float
     */
    public function getInfluence()
    {
        return $this->container['influence'];
    }

    /**
     * Sets influence
     * @param float $influence Influence of this incursion as a float from 0 to 1
     * @return $this
     */
    public function setInfluence($influence)
    {
        $this->container['influence'] = $influence;

        return $this;
    }

    /**
     * Gets staging_solar_system_id
     * @return int
     */
    public function getStagingSolarSystemId()
    {
        return $this->container['staging_solar_system_id'];
    }

    /**
     * Sets staging_solar_system_id
     * @param int $staging_solar_system_id Staging solar system for this incursion
     * @return $this
     */
    public function setStagingSolarSystemId($staging_solar_system_id)
    {
        $this->container['staging_solar_system_id'] = $staging_solar_system_id;

        return $this;
    }

    /**
     * Gets state
     * @return string
     */
    public function getState()
    {
        return $this->container['state'];
    }

    /**
     * Sets state
     * @param string $state The state of this incursion
     * @return $this
     */
    public function setState($state)
    {
        $allowed_values = array('withdrawing', 'mobilizing', 'established');
        if ((!in_array($state, $allowed_values))) {
            throw new \InvalidArgumentException("Invalid value for 'state', must be one of 'withdrawing', 'mobilizing', 'established'");
        }
        $this->container['state'] = $state;

        return $this;
    }

    /**
     * Gets type
     * @return string
     */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
     * Sets type
     * @param string $type The type of this incursion
     * @return $this
     */
    public function setType($type)
    {
        $this->container['type'] = $type;

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


