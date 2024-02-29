<?php
/**
 * EntitymanagerTypes
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
use \GeminiCommerce\Product\ObjectSerializer;

/**
 * EntitymanagerTypes Class Doc Comment
 *
 * @category Class
 * @package  GeminiCommerce\Product
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class EntitymanagerTypes
{
    /**
     * Possible values of this enum
     */
    public const TEXT = 'TEXT';

    public const NUMBER = 'NUMBER';

    public const BOOLEAN = 'BOOLEAN';

    public const DATETIME = 'DATETIME';

    public const EXTERNAL = 'EXTERNAL';

    public const EMBED = 'EMBED';

    public const FLOAT32 = 'FLOAT32';

    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::TEXT,
            self::NUMBER,
            self::BOOLEAN,
            self::DATETIME,
            self::EXTERNAL,
            self::EMBED,
            self::FLOAT32
        ];
    }
}


