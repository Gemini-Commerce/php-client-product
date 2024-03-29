<?php
/**
 * EntitymanagerRenderAs
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
 * EntitymanagerRenderAs Class Doc Comment
 *
 * @category Class
 * @package  GeminiCommerce\Product
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class EntitymanagerRenderAs
{
    /**
     * Possible values of this enum
     */
    public const _DEFAULT = 'DEFAULT';

    public const WYSIWYG = 'WYSIWYG';

    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::_DEFAULT,
            self::WYSIWYG
        ];
    }
}


