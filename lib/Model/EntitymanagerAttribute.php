<?php
/**
 * EntitymanagerAttribute
 *
 * PHP version 7.4
 *
 * @category Class
 * @package  GeminiCommerce\Product
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Product Service
 *
 * API for managing products
 *
 * The version of the OpenAPI document: v1
 * Contact: info@gemini-commerce.com
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 7.2.0
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace GeminiCommerce\Product\Model;

use \ArrayAccess;
use \GeminiCommerce\Product\ObjectSerializer;

/**
 * EntitymanagerAttribute Class Doc Comment
 *
 * @category Class
 * @package  GeminiCommerce\Product
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class EntitymanagerAttribute implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'entitymanagerAttribute';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'entity_id' => 'string',
        'code' => 'string',
        'label' => 'string',
        'type' => '\GeminiCommerce\Product\Model\EntitymanagerTypes',
        'option_list' => 'string',
        'entity' => 'string',
        'default' => 'string',
        'is_required' => 'bool',
        'is_system' => 'bool',
        'is_repeated' => 'bool',
        'sort' => 'int',
        'group_code' => 'string',
        'title' => 'array<string,string>',
        'render_as' => '\GeminiCommerce\Product\Model\EntitymanagerRenderAs'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'entity_id' => null,
        'code' => null,
        'label' => null,
        'type' => null,
        'option_list' => null,
        'entity' => null,
        'default' => null,
        'is_required' => null,
        'is_system' => null,
        'is_repeated' => null,
        'sort' => 'int32',
        'group_code' => null,
        'title' => null,
        'render_as' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'entity_id' => false,
        'code' => false,
        'label' => false,
        'type' => false,
        'option_list' => false,
        'entity' => false,
        'default' => false,
        'is_required' => false,
        'is_system' => false,
        'is_repeated' => false,
        'sort' => false,
        'group_code' => false,
        'title' => false,
        'render_as' => false
    ];

    /**
      * If a nullable field gets set to null, insert it here
      *
      * @var boolean[]
      */
    protected array $openAPINullablesSetToNull = [];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPITypes()
    {
        return self::$openAPITypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPIFormats()
    {
        return self::$openAPIFormats;
    }

    /**
     * Array of nullable properties
     *
     * @return array
     */
    protected static function openAPINullables(): array
    {
        return self::$openAPINullables;
    }

    /**
     * Array of nullable field names deliberately set to null
     *
     * @return boolean[]
     */
    private function getOpenAPINullablesSetToNull(): array
    {
        return $this->openAPINullablesSetToNull;
    }

    /**
     * Setter - Array of nullable field names deliberately set to null
     *
     * @param boolean[] $openAPINullablesSetToNull
     */
    private function setOpenAPINullablesSetToNull(array $openAPINullablesSetToNull): void
    {
        $this->openAPINullablesSetToNull = $openAPINullablesSetToNull;
    }

    /**
     * Checks if a property is nullable
     *
     * @param string $property
     * @return bool
     */
    public static function isNullable(string $property): bool
    {
        return self::openAPINullables()[$property] ?? false;
    }

    /**
     * Checks if a nullable property is set to null.
     *
     * @param string $property
     * @return bool
     */
    public function isNullableSetToNull(string $property): bool
    {
        return in_array($property, $this->getOpenAPINullablesSetToNull(), true);
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'entity_id' => 'entityId',
        'code' => 'code',
        'label' => 'label',
        'type' => 'type',
        'option_list' => 'optionList',
        'entity' => 'entity',
        'default' => 'default',
        'is_required' => 'isRequired',
        'is_system' => 'isSystem',
        'is_repeated' => 'isRepeated',
        'sort' => 'sort',
        'group_code' => 'groupCode',
        'title' => 'title',
        'render_as' => 'renderAs'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'entity_id' => 'setEntityId',
        'code' => 'setCode',
        'label' => 'setLabel',
        'type' => 'setType',
        'option_list' => 'setOptionList',
        'entity' => 'setEntity',
        'default' => 'setDefault',
        'is_required' => 'setIsRequired',
        'is_system' => 'setIsSystem',
        'is_repeated' => 'setIsRepeated',
        'sort' => 'setSort',
        'group_code' => 'setGroupCode',
        'title' => 'setTitle',
        'render_as' => 'setRenderAs'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'entity_id' => 'getEntityId',
        'code' => 'getCode',
        'label' => 'getLabel',
        'type' => 'getType',
        'option_list' => 'getOptionList',
        'entity' => 'getEntity',
        'default' => 'getDefault',
        'is_required' => 'getIsRequired',
        'is_system' => 'getIsSystem',
        'is_repeated' => 'getIsRepeated',
        'sort' => 'getSort',
        'group_code' => 'getGroupCode',
        'title' => 'getTitle',
        'render_as' => 'getRenderAs'
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
        return self::$openAPIModelName;
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
        $this->setIfExists('entity_id', $data ?? [], null);
        $this->setIfExists('code', $data ?? [], null);
        $this->setIfExists('label', $data ?? [], null);
        $this->setIfExists('type', $data ?? [], null);
        $this->setIfExists('option_list', $data ?? [], null);
        $this->setIfExists('entity', $data ?? [], null);
        $this->setIfExists('default', $data ?? [], null);
        $this->setIfExists('is_required', $data ?? [], null);
        $this->setIfExists('is_system', $data ?? [], null);
        $this->setIfExists('is_repeated', $data ?? [], null);
        $this->setIfExists('sort', $data ?? [], null);
        $this->setIfExists('group_code', $data ?? [], null);
        $this->setIfExists('title', $data ?? [], null);
        $this->setIfExists('render_as', $data ?? [], null);
    }

    /**
    * Sets $this->container[$variableName] to the given data or to the given default Value; if $variableName
    * is nullable and its value is set to null in the $fields array, then mark it as "set to null" in the
    * $this->openAPINullablesSetToNull array
    *
    * @param string $variableName
    * @param array  $fields
    * @param mixed  $defaultValue
    */
    private function setIfExists(string $variableName, array $fields, $defaultValue): void
    {
        if (self::isNullable($variableName) && array_key_exists($variableName, $fields) && is_null($fields[$variableName])) {
            $this->openAPINullablesSetToNull[] = $variableName;
        }

        $this->container[$variableName] = $fields[$variableName] ?? $defaultValue;
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
     * Gets entity_id
     *
     * @return string|null
     */
    public function getEntityId()
    {
        return $this->container['entity_id'];
    }

    /**
     * Sets entity_id
     *
     * @param string|null $entity_id entity_id
     *
     * @return self
     */
    public function setEntityId($entity_id)
    {
        if (is_null($entity_id)) {
            throw new \InvalidArgumentException('non-nullable entity_id cannot be null');
        }
        $this->container['entity_id'] = $entity_id;

        return $this;
    }

    /**
     * Gets code
     *
     * @return string|null
     */
    public function getCode()
    {
        return $this->container['code'];
    }

    /**
     * Sets code
     *
     * @param string|null $code code
     *
     * @return self
     */
    public function setCode($code)
    {
        if (is_null($code)) {
            throw new \InvalidArgumentException('non-nullable code cannot be null');
        }
        $this->container['code'] = $code;

        return $this;
    }

    /**
     * Gets label
     *
     * @return string|null
     */
    public function getLabel()
    {
        return $this->container['label'];
    }

    /**
     * Sets label
     *
     * @param string|null $label label
     *
     * @return self
     */
    public function setLabel($label)
    {
        if (is_null($label)) {
            throw new \InvalidArgumentException('non-nullable label cannot be null');
        }
        $this->container['label'] = $label;

        return $this;
    }

    /**
     * Gets type
     *
     * @return \GeminiCommerce\Product\Model\EntitymanagerTypes|null
     */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
     * Sets type
     *
     * @param \GeminiCommerce\Product\Model\EntitymanagerTypes|null $type type
     *
     * @return self
     */
    public function setType($type)
    {
        if (is_null($type)) {
            throw new \InvalidArgumentException('non-nullable type cannot be null');
        }
        $this->container['type'] = $type;

        return $this;
    }

    /**
     * Gets option_list
     *
     * @return string|null
     */
    public function getOptionList()
    {
        return $this->container['option_list'];
    }

    /**
     * Sets option_list
     *
     * @param string|null $option_list option_list
     *
     * @return self
     */
    public function setOptionList($option_list)
    {
        if (is_null($option_list)) {
            throw new \InvalidArgumentException('non-nullable option_list cannot be null');
        }
        $this->container['option_list'] = $option_list;

        return $this;
    }

    /**
     * Gets entity
     *
     * @return string|null
     */
    public function getEntity()
    {
        return $this->container['entity'];
    }

    /**
     * Sets entity
     *
     * @param string|null $entity entity
     *
     * @return self
     */
    public function setEntity($entity)
    {
        if (is_null($entity)) {
            throw new \InvalidArgumentException('non-nullable entity cannot be null');
        }
        $this->container['entity'] = $entity;

        return $this;
    }

    /**
     * Gets default
     *
     * @return string|null
     */
    public function getDefault()
    {
        return $this->container['default'];
    }

    /**
     * Sets default
     *
     * @param string|null $default default
     *
     * @return self
     */
    public function setDefault($default)
    {
        if (is_null($default)) {
            throw new \InvalidArgumentException('non-nullable default cannot be null');
        }
        $this->container['default'] = $default;

        return $this;
    }

    /**
     * Gets is_required
     *
     * @return bool|null
     */
    public function getIsRequired()
    {
        return $this->container['is_required'];
    }

    /**
     * Sets is_required
     *
     * @param bool|null $is_required is_required
     *
     * @return self
     */
    public function setIsRequired($is_required)
    {
        if (is_null($is_required)) {
            throw new \InvalidArgumentException('non-nullable is_required cannot be null');
        }
        $this->container['is_required'] = $is_required;

        return $this;
    }

    /**
     * Gets is_system
     *
     * @return bool|null
     */
    public function getIsSystem()
    {
        return $this->container['is_system'];
    }

    /**
     * Sets is_system
     *
     * @param bool|null $is_system is_system
     *
     * @return self
     */
    public function setIsSystem($is_system)
    {
        if (is_null($is_system)) {
            throw new \InvalidArgumentException('non-nullable is_system cannot be null');
        }
        $this->container['is_system'] = $is_system;

        return $this;
    }

    /**
     * Gets is_repeated
     *
     * @return bool|null
     */
    public function getIsRepeated()
    {
        return $this->container['is_repeated'];
    }

    /**
     * Sets is_repeated
     *
     * @param bool|null $is_repeated is_repeated
     *
     * @return self
     */
    public function setIsRepeated($is_repeated)
    {
        if (is_null($is_repeated)) {
            throw new \InvalidArgumentException('non-nullable is_repeated cannot be null');
        }
        $this->container['is_repeated'] = $is_repeated;

        return $this;
    }

    /**
     * Gets sort
     *
     * @return int|null
     */
    public function getSort()
    {
        return $this->container['sort'];
    }

    /**
     * Sets sort
     *
     * @param int|null $sort sort
     *
     * @return self
     */
    public function setSort($sort)
    {
        if (is_null($sort)) {
            throw new \InvalidArgumentException('non-nullable sort cannot be null');
        }
        $this->container['sort'] = $sort;

        return $this;
    }

    /**
     * Gets group_code
     *
     * @return string|null
     */
    public function getGroupCode()
    {
        return $this->container['group_code'];
    }

    /**
     * Sets group_code
     *
     * @param string|null $group_code group_code
     *
     * @return self
     */
    public function setGroupCode($group_code)
    {
        if (is_null($group_code)) {
            throw new \InvalidArgumentException('non-nullable group_code cannot be null');
        }
        $this->container['group_code'] = $group_code;

        return $this;
    }

    /**
     * Gets title
     *
     * @return array<string,string>|null
     */
    public function getTitle()
    {
        return $this->container['title'];
    }

    /**
     * Sets title
     *
     * @param array<string,string>|null $title title
     *
     * @return self
     */
    public function setTitle($title)
    {
        if (is_null($title)) {
            throw new \InvalidArgumentException('non-nullable title cannot be null');
        }
        $this->container['title'] = $title;

        return $this;
    }

    /**
     * Gets render_as
     *
     * @return \GeminiCommerce\Product\Model\EntitymanagerRenderAs|null
     */
    public function getRenderAs()
    {
        return $this->container['render_as'];
    }

    /**
     * Sets render_as
     *
     * @param \GeminiCommerce\Product\Model\EntitymanagerRenderAs|null $render_as render_as
     *
     * @return self
     */
    public function setRenderAs($render_as)
    {
        if (is_null($render_as)) {
            throw new \InvalidArgumentException('non-nullable render_as cannot be null');
        }
        $this->container['render_as'] = $render_as;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset): bool
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param integer $offset Offset
     *
     * @return mixed|null
     */
    #[\ReturnTypeWillChange]
    public function offsetGet($offset)
    {
        return $this->container[$offset] ?? null;
    }

    /**
     * Sets value based on offset.
     *
     * @param int|null $offset Offset
     * @param mixed    $value  Value to be set
     *
     * @return void
     */
    public function offsetSet($offset, $value): void
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
    public function offsetUnset($offset): void
    {
        unset($this->container[$offset]);
    }

    /**
     * Serializes the object to a value that can be serialized natively by json_encode().
     * @link https://www.php.net/manual/en/jsonserializable.jsonserialize.php
     *
     * @return mixed Returns data which can be serialized by json_encode(), which is a value
     * of any type other than a resource.
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize()
    {
       return ObjectSerializer::sanitizeForSerialization($this);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        return json_encode(
            ObjectSerializer::sanitizeForSerialization($this),
            JSON_PRETTY_PRINT
        );
    }

    /**
     * Gets a header-safe presentation of the object
     *
     * @return string
     */
    public function toHeaderValue()
    {
        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}

