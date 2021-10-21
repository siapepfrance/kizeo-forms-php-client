<?php
/**
 * GroupComplete
 *
 * PHP version 5
 *
 * @category Class
 * @package  SiapepFrance\KizeoForms
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Kizeo REST
 *
 * This is a Swagger generated doc for Kizeo REST API 3. You can find additionnal documentation here : [Online documentation](/doc).
 *
 * OpenAPI spec version: 3.0.0
 * Contact: support@kizeo.com
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 3.0.8
 */
/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace SiapepFrance\KizeoForms\Model;

use \ArrayAccess;
use \SiapepFrance\KizeoForms\ObjectSerializer;

/**
 * GroupComplete Class Doc Comment
 *
 * @category Class
 * @package  SiapepFrance\KizeoForms
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class GroupComplete implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'GroupComplete';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'id' => 'int',
'name' => 'string',
'parentGroupId' => 'int',
'users' => 'object[]',
'leaders' => 'object[]',
'children' => 'object[]'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'id' => null,
'name' => null,
'parentGroupId' => null,
'users' => null,
'leaders' => null,
'children' => null    ];

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
'name' => 'name',
'parentGroupId' => 'parent_group_id',
'users' => 'users',
'leaders' => 'leaders',
'children' => 'children'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
'name' => 'setName',
'parentGroupId' => 'setParentGroupId',
'users' => 'setUsers',
'leaders' => 'setLeaders',
'children' => 'setChildren'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
'name' => 'getName',
'parentGroupId' => 'getParentGroupId',
'users' => 'getUsers',
'leaders' => 'getLeaders',
'children' => 'getChildren'    ];

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
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['parentGroupId'] = isset($data['parentGroupId']) ? $data['parentGroupId'] : null;
        $this->container['users'] = isset($data['users']) ? $data['users'] : null;
        $this->container['leaders'] = isset($data['leaders']) ? $data['leaders'] : null;
        $this->container['children'] = isset($data['children']) ? $data['children'] : null;
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
     * Gets id
     *
     * @return int
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     *
     * @param int $id id
     *
     * @return $this
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets name
     *
     * @return string
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     *
     * @param string $name name
     *
     * @return $this
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets parentGroupId
     *
     * @return int
     */
    public function getParentGroupId()
    {
        return $this->container['parentGroupId'];
    }

    /**
     * Sets parentGroupId
     *
     * @param int $parentGroupId parentGroupId
     *
     * @return $this
     */
    public function setParentGroupId($parentGroupId)
    {
        $this->container['parentGroupId'] = $parentGroupId;

        return $this;
    }

    /**
     * Gets users
     *
     * @return object[]
     */
    public function getUsers()
    {
        return $this->container['users'];
    }

    /**
     * Sets users
     *
     * @param object[] $users users
     *
     * @return $this
     */
    public function setUsers($users)
    {
        $this->container['users'] = $users;

        return $this;
    }

    /**
     * Gets leaders
     *
     * @return object[]
     */
    public function getLeaders()
    {
        return $this->container['leaders'];
    }

    /**
     * Sets leaders
     *
     * @param object[] $leaders leaders
     *
     * @return $this
     */
    public function setLeaders($leaders)
    {
        $this->container['leaders'] = $leaders;

        return $this;
    }

    /**
     * Gets children
     *
     * @return object[]
     */
    public function getChildren()
    {
        return $this->container['children'];
    }

    /**
     * Sets children
     *
     * @param object[] $children children
     *
     * @return $this
     */
    public function setChildren($children)
    {
        $this->container['children'] = $children;

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
