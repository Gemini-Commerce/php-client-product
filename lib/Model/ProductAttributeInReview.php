<?php
/**
 * ProductAttributeInReview
 *
 * PHP version 7.4
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Product Service
 *
 * Introducing our revolutionary Product Management Service! Designed to streamline your product inventory and elevate customer experiences, our cutting-edge protobuf service is a game-changer in the world of efficient product management.  With our service, you can effortlessly create new products, allowing you to quickly bring your ideas to life and expand your catalog. Retrieve product information in a snap, providing accurate and personalized details to your customers based on their specific needs and preferences.  Stay ahead of the competition by easily updating product information, ensuring your catalog is always up-to-date and optimized. Seamlessly remove products from your inventory when needed, maintaining a clean and relevant product selection.  Enhance the visual appeal of your products with our advanced media gallery functionalities. Effortlessly add and update captivating images and videos to showcase your products in the best possible light, engaging your customers and driving conversions.  Personalization is key in today's market, and our service enables you to offer unique options to your customers. Easily create and manage lists of customizable options for your products, providing flexibility and tailoring to individual preferences.  Attributes play a vital role in defining products, and our service empowers you to effectively manage them. From bulk attribute creation to listing and retrieving attribute options, our service ensures your product information is rich and comprehensive.  Our service extends its capabilities to entity management, allowing you to effortlessly handle different entities and create customized options lists associated with them. This provides further flexibility and customization options for your product offerings.  When it comes to bulk updates, our service has you covered. Effortlessly update multiple products simultaneously, saving you time and streamlining your operations.  Finding specific products and variants is a breeze with our service. Quickly locate products based on their unique stock keeping unit (SKU) values, ensuring efficient inventory management and smooth order fulfillment.  Experience a new level of efficiency and productivity with our Product Management Service. Unlock the full potential of streamlined product management and empower your business to thrive in today's competitive market. Try our service today and elevate your product management to new heights!
 *
 * The version of the OpenAPI document: v1
 * Contact: info@gemini-commerce.com
 * Generated by: https://openapi-generator.tech
 * Generator version: 7.9.0
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace OpenAPI\Client\Model;

use \ArrayAccess;
use \OpenAPI\Client\ObjectSerializer;

/**
 * ProductAttributeInReview Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class ProductAttributeInReview implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    protected static $withAdditionalProperties = false;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'productAttributeInReview';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'code' => 'string',
        'string' => '\OpenAPI\Client\Model\AttributeInReviewString',
        'int32' => 'int',
        'int64' => 'string',
        'float32' => 'float',
        'float64' => 'float',
        'boolean' => 'bool',
        'source' => '\OpenAPI\Client\Model\ProductAttributeInReviewSource',
        'created_at' => '\DateTime',
        'job_id' => 'string',
        'job_type' => '\OpenAPI\Client\Model\ProductAttributeInReviewJobType',
        'error' => '\OpenAPI\Client\Model\ProductAttributeInReviewError'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'code' => null,
        'string' => null,
        'int32' => 'int32',
        'int64' => 'int64',
        'float32' => 'float',
        'float64' => 'double',
        'boolean' => null,
        'source' => null,
        'created_at' => 'date-time',
        'job_id' => null,
        'job_type' => null,
        'error' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'code' => false,
        'string' => false,
        'int32' => false,
        'int64' => false,
        'float32' => false,
        'float64' => false,
        'boolean' => false,
        'source' => false,
        'created_at' => false,
        'job_id' => false,
        'job_type' => false,
        'error' => false
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
        'code' => 'code',
        'string' => 'string',
        'int32' => 'int32',
        'int64' => 'int64',
        'float32' => 'float32',
        'float64' => 'float64',
        'boolean' => 'boolean',
        'source' => 'source',
        'created_at' => 'createdAt',
        'job_id' => 'jobId',
        'job_type' => 'jobType',
        'error' => 'error'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'code' => 'setCode',
        'string' => 'setString',
        'int32' => 'setInt32',
        'int64' => 'setInt64',
        'float32' => 'setFloat32',
        'float64' => 'setFloat64',
        'boolean' => 'setBoolean',
        'source' => 'setSource',
        'created_at' => 'setCreatedAt',
        'job_id' => 'setJobId',
        'job_type' => 'setJobType',
        'error' => 'setError'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'code' => 'getCode',
        'string' => 'getString',
        'int32' => 'getInt32',
        'int64' => 'getInt64',
        'float32' => 'getFloat32',
        'float64' => 'getFloat64',
        'boolean' => 'getBoolean',
        'source' => 'getSource',
        'created_at' => 'getCreatedAt',
        'job_id' => 'getJobId',
        'job_type' => 'getJobType',
        'error' => 'getError'
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
     * Associative array for storing additional properties
     *
     * @var mixed[]
     */
    protected $additionalProperties = [];

    /**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->setIfExists('code', $data ?? [], null);
        $this->setIfExists('string', $data ?? [], null);
        $this->setIfExists('int32', $data ?? [], null);
        $this->setIfExists('int64', $data ?? [], null);
        $this->setIfExists('float32', $data ?? [], null);
        $this->setIfExists('float64', $data ?? [], null);
        $this->setIfExists('boolean', $data ?? [], null);
        $this->setIfExists('source', $data ?? [], null);
        $this->setIfExists('created_at', $data ?? [], null);
        $this->setIfExists('job_id', $data ?? [], null);
        $this->setIfExists('job_type', $data ?? [], null);
        $this->setIfExists('error', $data ?? [], null);
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
     * Gets string
     *
     * @return \OpenAPI\Client\Model\AttributeInReviewString|null
     */
    public function getString()
    {
        return $this->container['string'];
    }

    /**
     * Sets string
     *
     * @param \OpenAPI\Client\Model\AttributeInReviewString|null $string string
     *
     * @return self
     */
    public function setString($string)
    {
        if (is_null($string)) {
            throw new \InvalidArgumentException('non-nullable string cannot be null');
        }
        $this->container['string'] = $string;

        return $this;
    }

    /**
     * Gets int32
     *
     * @return int|null
     */
    public function getInt32()
    {
        return $this->container['int32'];
    }

    /**
     * Sets int32
     *
     * @param int|null $int32 int32
     *
     * @return self
     */
    public function setInt32($int32)
    {
        if (is_null($int32)) {
            throw new \InvalidArgumentException('non-nullable int32 cannot be null');
        }
        $this->container['int32'] = $int32;

        return $this;
    }

    /**
     * Gets int64
     *
     * @return string|null
     */
    public function getInt64()
    {
        return $this->container['int64'];
    }

    /**
     * Sets int64
     *
     * @param string|null $int64 int64
     *
     * @return self
     */
    public function setInt64($int64)
    {
        if (is_null($int64)) {
            throw new \InvalidArgumentException('non-nullable int64 cannot be null');
        }
        $this->container['int64'] = $int64;

        return $this;
    }

    /**
     * Gets float32
     *
     * @return float|null
     */
    public function getFloat32()
    {
        return $this->container['float32'];
    }

    /**
     * Sets float32
     *
     * @param float|null $float32 float32
     *
     * @return self
     */
    public function setFloat32($float32)
    {
        if (is_null($float32)) {
            throw new \InvalidArgumentException('non-nullable float32 cannot be null');
        }
        $this->container['float32'] = $float32;

        return $this;
    }

    /**
     * Gets float64
     *
     * @return float|null
     */
    public function getFloat64()
    {
        return $this->container['float64'];
    }

    /**
     * Sets float64
     *
     * @param float|null $float64 float64
     *
     * @return self
     */
    public function setFloat64($float64)
    {
        if (is_null($float64)) {
            throw new \InvalidArgumentException('non-nullable float64 cannot be null');
        }
        $this->container['float64'] = $float64;

        return $this;
    }

    /**
     * Gets boolean
     *
     * @return bool|null
     */
    public function getBoolean()
    {
        return $this->container['boolean'];
    }

    /**
     * Sets boolean
     *
     * @param bool|null $boolean boolean
     *
     * @return self
     */
    public function setBoolean($boolean)
    {
        if (is_null($boolean)) {
            throw new \InvalidArgumentException('non-nullable boolean cannot be null');
        }
        $this->container['boolean'] = $boolean;

        return $this;
    }

    /**
     * Gets source
     *
     * @return \OpenAPI\Client\Model\ProductAttributeInReviewSource|null
     */
    public function getSource()
    {
        return $this->container['source'];
    }

    /**
     * Sets source
     *
     * @param \OpenAPI\Client\Model\ProductAttributeInReviewSource|null $source source
     *
     * @return self
     */
    public function setSource($source)
    {
        if (is_null($source)) {
            throw new \InvalidArgumentException('non-nullable source cannot be null');
        }
        $this->container['source'] = $source;

        return $this;
    }

    /**
     * Gets created_at
     *
     * @return \DateTime|null
     */
    public function getCreatedAt()
    {
        return $this->container['created_at'];
    }

    /**
     * Sets created_at
     *
     * @param \DateTime|null $created_at created_at
     *
     * @return self
     */
    public function setCreatedAt($created_at)
    {
        if (is_null($created_at)) {
            throw new \InvalidArgumentException('non-nullable created_at cannot be null');
        }
        $this->container['created_at'] = $created_at;

        return $this;
    }

    /**
     * Gets job_id
     *
     * @return string|null
     */
    public function getJobId()
    {
        return $this->container['job_id'];
    }

    /**
     * Sets job_id
     *
     * @param string|null $job_id job_id
     *
     * @return self
     */
    public function setJobId($job_id)
    {
        if (is_null($job_id)) {
            throw new \InvalidArgumentException('non-nullable job_id cannot be null');
        }
        $this->container['job_id'] = $job_id;

        return $this;
    }

    /**
     * Gets job_type
     *
     * @return \OpenAPI\Client\Model\ProductAttributeInReviewJobType|null
     */
    public function getJobType()
    {
        return $this->container['job_type'];
    }

    /**
     * Sets job_type
     *
     * @param \OpenAPI\Client\Model\ProductAttributeInReviewJobType|null $job_type job_type
     *
     * @return self
     */
    public function setJobType($job_type)
    {
        if (is_null($job_type)) {
            throw new \InvalidArgumentException('non-nullable job_type cannot be null');
        }
        $this->container['job_type'] = $job_type;

        return $this;
    }

    /**
     * Gets error
     *
     * @return \OpenAPI\Client\Model\ProductAttributeInReviewError|null
     */
    public function getError()
    {
        return $this->container['error'];
    }

    /**
     * Sets error
     *
     * @param \OpenAPI\Client\Model\ProductAttributeInReviewError|null $error error
     *
     * @return self
     */
    public function setError($error)
    {
        if (is_null($error)) {
            throw new \InvalidArgumentException('non-nullable error cannot be null');
        }
        $this->container['error'] = $error;

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

    public static function withAdditionalProperties(): bool
    {
        return self::$withAdditionalProperties;
    }


    public function setAdditionalProperty($name, $value)
    {
        throw new \InvalidArgumentException(
            sprintf(
                "This model cannot have additional properties"
            )
        );
    }

    public function getAdditionalProperty($name)
    {
        return $this->additionalProperties[$name];
    }

    public function hasAdditionalProperty($name): bool
    {
        return array_key_exists($name, $this->additionalProperties);
    }

    public function getAdditionalProperties()
    {
        return $this->additionalProperties;
    }
}


