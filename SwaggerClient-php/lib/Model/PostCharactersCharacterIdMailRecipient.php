<?php
/**
 * PostCharactersCharacterIdMailRecipient
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
 * PostCharactersCharacterIdMailRecipient Class Doc Comment
 *
 * @category    Class */
 // @description recipient object
/**
 * @package     Swagger\Client
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class PostCharactersCharacterIdMailRecipient implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'post_characters_character_id_mail_recipient';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'recipient_id' => 'int',
        'recipient_type' => 'string'
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
        'recipient_id' => 'recipient_id',
        'recipient_type' => 'recipient_type'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'recipient_id' => 'setRecipientId',
        'recipient_type' => 'setRecipientType'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'recipient_id' => 'getRecipientId',
        'recipient_type' => 'getRecipientType'
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

    const RECIPIENT_TYPE_ALLIANCE = 'alliance';
    const RECIPIENT_TYPE_CHARACTER = 'character';
    const RECIPIENT_TYPE_CORPORATION = 'corporation';
    const RECIPIENT_TYPE_MAILING_LIST = 'mailing_list';
    

    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public function getRecipientTypeAllowableValues()
    {
        return [
            self::RECIPIENT_TYPE_ALLIANCE,
            self::RECIPIENT_TYPE_CHARACTER,
            self::RECIPIENT_TYPE_CORPORATION,
            self::RECIPIENT_TYPE_MAILING_LIST,
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
        $this->container['recipient_id'] = isset($data['recipient_id']) ? $data['recipient_id'] : null;
        $this->container['recipient_type'] = isset($data['recipient_type']) ? $data['recipient_type'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = [];
        if ($this->container['recipient_id'] === null) {
            $invalid_properties[] = "'recipient_id' can't be null";
        }
        if ($this->container['recipient_type'] === null) {
            $invalid_properties[] = "'recipient_type' can't be null";
        }
        $allowed_values = ["alliance", "character", "corporation", "mailing_list"];
        if (!in_array($this->container['recipient_type'], $allowed_values)) {
            $invalid_properties[] = "invalid value for 'recipient_type', must be one of #{allowed_values}.";
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
        if ($this->container['recipient_id'] === null) {
            return false;
        }
        if ($this->container['recipient_type'] === null) {
            return false;
        }
        $allowed_values = ["alliance", "character", "corporation", "mailing_list"];
        if (!in_array($this->container['recipient_type'], $allowed_values)) {
            return false;
        }
        return true;
    }


    /**
     * Gets recipient_id
     * @return int
     */
    public function getRecipientId()
    {
        return $this->container['recipient_id'];
    }

    /**
     * Sets recipient_id
     * @param int $recipient_id recipient_id integer
     * @return $this
     */
    public function setRecipientId($recipient_id)
    {
        $this->container['recipient_id'] = $recipient_id;

        return $this;
    }

    /**
     * Gets recipient_type
     * @return string
     */
    public function getRecipientType()
    {
        return $this->container['recipient_type'];
    }

    /**
     * Sets recipient_type
     * @param string $recipient_type recipient_type string
     * @return $this
     */
    public function setRecipientType($recipient_type)
    {
        $allowed_values = array('alliance', 'character', 'corporation', 'mailing_list');
        if ((!in_array($recipient_type, $allowed_values))) {
            throw new \InvalidArgumentException("Invalid value for 'recipient_type', must be one of 'alliance', 'character', 'corporation', 'mailing_list'");
        }
        $this->container['recipient_type'] = $recipient_type;

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


