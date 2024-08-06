# GeminiCommerce\Product\ProductApi

All URIs are relative to https://product.api.gogemini.io, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**addMediaGalleryEntry()**](ProductApi.md#addMediaGalleryEntry) | **POST** /product.Product/AddMediaGalleryEntry | Add Media Gallery Entry |
| [**bulkAddAssetsEntries()**](ProductApi.md#bulkAddAssetsEntries) | **POST** /product.Product/BulkAddAssetsEntries | Bulk Add Assets Entries |
| [**bulkDeleteProducts()**](ProductApi.md#bulkDeleteProducts) | **POST** /product.Product/BulkDeleteProducts | Bulk Delete Products |
| [**bulkEnhanceProductDataWithAI()**](ProductApi.md#bulkEnhanceProductDataWithAI) | **POST** /product.Product/BulkEnhanceProductDataWithAI | Bulk Enhance Product Data With AI |
| [**bulkRemoveAssetsEntries()**](ProductApi.md#bulkRemoveAssetsEntries) | **POST** /product.Product/BulkRemoveAssetsEntries | Bulk Remove Assets Entries |
| [**bulkUpdateAssetsEntries()**](ProductApi.md#bulkUpdateAssetsEntries) | **POST** /product.Product/BulkUpdateAssetsEntries | Bulk Update Assets Entries |
| [**bulkUpdateV2()**](ProductApi.md#bulkUpdateV2) | **POST** /product.Product/BulkUpdateV2 | Bulk Update Products |
| [**createAttributeOptions()**](ProductApi.md#createAttributeOptions) | **POST** /product.Product/CreateAttributeOptions | Create Attribute Options |
| [**createEntity()**](ProductApi.md#createEntity) | **POST** /product.Product/CreateEntity | Create Entity |
| [**createOptionsList()**](ProductApi.md#createOptionsList) | **POST** /product.Product/CreateOptionsList | Create Options List |
| [**createProductWithAI()**](ProductApi.md#createProductWithAI) | **POST** /product.Product/CreateProductWithAI | Create Product With AI |
| [**getAttributeOption()**](ProductApi.md#getAttributeOption) | **POST** /product.Product/GetAttributeOption | Get Attribute Option |
| [**getAttributeOptions()**](ProductApi.md#getAttributeOptions) | **POST** /product.Product/GetAttributeOptions | Get Attribute Options |
| [**getEntity()**](ProductApi.md#getEntity) | **POST** /product.Product/GetEntity | Get Entity Details |
| [**getOptionsList()**](ProductApi.md#getOptionsList) | **POST** /product.Product/GetOptionsList | Get Options List |
| [**getProduct()**](ProductApi.md#getProduct) | **POST** /product.Product/GetProduct | Get Product |
| [**getProductByCode()**](ProductApi.md#getProductByCode) | **POST** /product.Product/GetProductByCode | Get Product By Code |
| [**getProductByUrlKey()**](ProductApi.md#getProductByUrlKey) | **POST** /product.Product/GetProductByUrlKey | Get Product By Url Key |
| [**getProductDataInReview()**](ProductApi.md#getProductDataInReview) | **POST** /product.Product/GetProductDataInReview | Get Product Data In Review |
| [**listAttributeOptions()**](ProductApi.md#listAttributeOptions) | **POST** /product.Product/ListAttributeOptions | List Attribute Options |
| [**listEntities()**](ProductApi.md#listEntities) | **POST** /product.Product/ListEntities | List Entities |
| [**listOptionsLists()**](ProductApi.md#listOptionsLists) | **POST** /product.Product/ListOptionsLists | List Options Lists |
| [**listProducts()**](ProductApi.md#listProducts) | **POST** /product.Product/ListProducts | List Products |
| [**listProductsByIds()**](ProductApi.md#listProductsByIds) | **POST** /product.Product/ListProductsByIds | List Products By Ids |
| [**listProductsBySku()**](ProductApi.md#listProductsBySku) | **POST** /product.Product/ListProductsBySku | List Products By Sku |
| [**listVariantsBySku()**](ProductApi.md#listVariantsBySku) | **POST** /product.Product/ListVariantsBySku | List Product Variants By Sku |
| [**productBulkCreateAttribute()**](ProductApi.md#productBulkCreateAttribute) | **POST** /product.Product/BulkCreateAttribute |  |
| [**productBulkUpdate()**](ProductApi.md#productBulkUpdate) | **POST** /product.Product/BulkUpdate |  |
| [**productCreateAttributeGroup()**](ProductApi.md#productCreateAttributeGroup) | **POST** /product.Product/CreateAttributeGroup |  |
| [**productCreateProduct()**](ProductApi.md#productCreateProduct) | **POST** /product.Product/CreateProduct |  |
| [**productCreateProductV2()**](ProductApi.md#productCreateProductV2) | **POST** /product.Product/CreateProductV2 |  |
| [**productDelete()**](ProductApi.md#productDelete) | **POST** /product.Product/Delete |  |
| [**productDeleteAttribute()**](ProductApi.md#productDeleteAttribute) | **POST** /product.Product/DeleteAttribute |  |
| [**productDeleteProduct()**](ProductApi.md#productDeleteProduct) | **POST** /product.Product/DeleteProduct |  |
| [**productGetAttributeGroup()**](ProductApi.md#productGetAttributeGroup) | **POST** /product.Product/GetAttributeGroup |  |
| [**productListAttributeGroups()**](ProductApi.md#productListAttributeGroups) | **POST** /product.Product/ListAttributeGroups |  |
| [**productUpdateAttribute()**](ProductApi.md#productUpdateAttribute) | **POST** /product.Product/UpdateAttribute |  |
| [**productUpdateAttributeGroup()**](ProductApi.md#productUpdateAttributeGroup) | **POST** /product.Product/UpdateAttributeGroup |  |
| [**productUpdateProduct()**](ProductApi.md#productUpdateProduct) | **POST** /product.Product/UpdateProduct |  |
| [**productUpdateProductV2()**](ProductApi.md#productUpdateProductV2) | **POST** /product.Product/UpdateProductV2 |  |
| [**removeMediaGalleryEntry()**](ProductApi.md#removeMediaGalleryEntry) | **POST** /product.Product/RemoveMediaGalleryEntry | Remove Media Gallery Entry |
| [**updateAttributeOptions()**](ProductApi.md#updateAttributeOptions) | **POST** /product.Product/UpdateAttributeOptions | Update Attribute Options |
| [**updateDataToBeReviewed()**](ProductApi.md#updateDataToBeReviewed) | **POST** /product.Product/GetEnhanceProductDataWithAIStatus | Get Enhance Product Data With AI Status |
| [**updateDataToBeReviewed_0()**](ProductApi.md#updateDataToBeReviewed_0) | **POST** /product.Product/UpdateDataToBeReviewed | Update Data To Be Reviewed |
| [**updateMediaGalleryEntry()**](ProductApi.md#updateMediaGalleryEntry) | **POST** /product.Product/UpdateMediaGalleryEntry | Update Media Gallery Entry |
| [**updateOptionsList()**](ProductApi.md#updateOptionsList) | **POST** /product.Product/UpdateOptionsList | Update Options List |
| [**updateProductWithAI()**](ProductApi.md#updateProductWithAI) | **POST** /product.Product/UpdateProductWithAI | Update Product With AI |


## `addMediaGalleryEntry()`

```php
addMediaGalleryEntry($body): \GeminiCommerce\Product\Model\ProductAddMediaGalleryEntryResponse
```

Add Media Gallery Entry

The AddMediaGalleryEntry endpoint allows users to add a new media entry to the gallery of a specific product. To make a request to this endpoint, users need to provide the necessary information in the specified format. The request includes the tenant_id to specify the relevant tenant, the product_id to identify the target product, and the asset_grn which represents the globally unique identifier for the media asset being added. Additionally, the position field indicates the desired position of the media entry within the gallery, allowing users to control the order in which the media items are displayed. The metadata field, which is a repeated field, provides the option to include additional metadata associated with the media entry. This operation is asynchronous and may complete after the response.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Authorization
$config = GeminiCommerce\Product\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = GeminiCommerce\Product\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new GeminiCommerce\Product\Api\ProductApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \GeminiCommerce\Product\Model\ProductAddMediaGalleryEntryRequest(); // \GeminiCommerce\Product\Model\ProductAddMediaGalleryEntryRequest

try {
    $result = $apiInstance->addMediaGalleryEntry($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductApi->addMediaGalleryEntry: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **body** | [**\GeminiCommerce\Product\Model\ProductAddMediaGalleryEntryRequest**](../Model/ProductAddMediaGalleryEntryRequest.md)|  | |

### Return type

[**\GeminiCommerce\Product\Model\ProductAddMediaGalleryEntryResponse**](../Model/ProductAddMediaGalleryEntryResponse.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `bulkAddAssetsEntries()`

```php
bulkAddAssetsEntries($body): \GeminiCommerce\Product\Model\ProductBulkAddAssetsEntriesResponse
```

Bulk Add Assets Entries

The BulkAddAssetsEntries endpoint allows users to add assets. This operation is asynchronous and may complete after the response.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Authorization
$config = GeminiCommerce\Product\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = GeminiCommerce\Product\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new GeminiCommerce\Product\Api\ProductApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \GeminiCommerce\Product\Model\ProductBulkAddAssetsEntriesRequest(); // \GeminiCommerce\Product\Model\ProductBulkAddAssetsEntriesRequest

try {
    $result = $apiInstance->bulkAddAssetsEntries($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductApi->bulkAddAssetsEntries: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **body** | [**\GeminiCommerce\Product\Model\ProductBulkAddAssetsEntriesRequest**](../Model/ProductBulkAddAssetsEntriesRequest.md)|  | |

### Return type

[**\GeminiCommerce\Product\Model\ProductBulkAddAssetsEntriesResponse**](../Model/ProductBulkAddAssetsEntriesResponse.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `bulkDeleteProducts()`

```php
bulkDeleteProducts($body): object
```

Bulk Delete Products

This operation is asynchronous and may complete after the response.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Authorization
$config = GeminiCommerce\Product\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = GeminiCommerce\Product\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new GeminiCommerce\Product\Api\ProductApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \GeminiCommerce\Product\Model\ProductBulkDeleteProductsRequest(); // \GeminiCommerce\Product\Model\ProductBulkDeleteProductsRequest

try {
    $result = $apiInstance->bulkDeleteProducts($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductApi->bulkDeleteProducts: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **body** | [**\GeminiCommerce\Product\Model\ProductBulkDeleteProductsRequest**](../Model/ProductBulkDeleteProductsRequest.md)|  | |

### Return type

**object**

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `bulkEnhanceProductDataWithAI()`

```php
bulkEnhanceProductDataWithAI($body): object
```

Bulk Enhance Product Data With AI

The BulkEnhanceProductDataWithAI endpoint allows users to enhance product data using artificial intelligence (AI) capabilities. By making a request to this endpoint and providing the necessary input data, users can leverage AI algorithms to enrich and optimize product information. This operation is asynchronous and may complete after the response.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Authorization
$config = GeminiCommerce\Product\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = GeminiCommerce\Product\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new GeminiCommerce\Product\Api\ProductApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \GeminiCommerce\Product\Model\ProductBulkEnhanceProductDataWithAIRequest(); // \GeminiCommerce\Product\Model\ProductBulkEnhanceProductDataWithAIRequest

try {
    $result = $apiInstance->bulkEnhanceProductDataWithAI($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductApi->bulkEnhanceProductDataWithAI: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **body** | [**\GeminiCommerce\Product\Model\ProductBulkEnhanceProductDataWithAIRequest**](../Model/ProductBulkEnhanceProductDataWithAIRequest.md)|  | |

### Return type

**object**

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `bulkRemoveAssetsEntries()`

```php
bulkRemoveAssetsEntries($body): object
```

Bulk Remove Assets Entries

The BulkRemoveAssetsEntries endpoint allows users to remove assets. This operation is asynchronous and may complete after the response.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Authorization
$config = GeminiCommerce\Product\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = GeminiCommerce\Product\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new GeminiCommerce\Product\Api\ProductApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \GeminiCommerce\Product\Model\ProductBulkRemoveAssetsEntriesRequest(); // \GeminiCommerce\Product\Model\ProductBulkRemoveAssetsEntriesRequest

try {
    $result = $apiInstance->bulkRemoveAssetsEntries($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductApi->bulkRemoveAssetsEntries: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **body** | [**\GeminiCommerce\Product\Model\ProductBulkRemoveAssetsEntriesRequest**](../Model/ProductBulkRemoveAssetsEntriesRequest.md)|  | |

### Return type

**object**

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `bulkUpdateAssetsEntries()`

```php
bulkUpdateAssetsEntries($body): \GeminiCommerce\Product\Model\ProductBulkUpdateAssetsEntriesResponse
```

Bulk Update Assets Entries

The BulkUpdateAssetsEntries endpoint allows users to update assets. This operation is asynchronous and may complete after the response.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Authorization
$config = GeminiCommerce\Product\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = GeminiCommerce\Product\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new GeminiCommerce\Product\Api\ProductApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \GeminiCommerce\Product\Model\ProductBulkUpdateAssetsEntriesRequest(); // \GeminiCommerce\Product\Model\ProductBulkUpdateAssetsEntriesRequest

try {
    $result = $apiInstance->bulkUpdateAssetsEntries($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductApi->bulkUpdateAssetsEntries: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **body** | [**\GeminiCommerce\Product\Model\ProductBulkUpdateAssetsEntriesRequest**](../Model/ProductBulkUpdateAssetsEntriesRequest.md)|  | |

### Return type

[**\GeminiCommerce\Product\Model\ProductBulkUpdateAssetsEntriesResponse**](../Model/ProductBulkUpdateAssetsEntriesResponse.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `bulkUpdateV2()`

```php
bulkUpdateV2($body): \GeminiCommerce\Product\Model\ProductBulkUpdateResponse
```

Bulk Update Products

Version 2 of bulk updates for product attributes with enhanced payload structure and response format. This operation is asynchronous and may complete after the response.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Authorization
$config = GeminiCommerce\Product\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = GeminiCommerce\Product\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new GeminiCommerce\Product\Api\ProductApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \GeminiCommerce\Product\Model\ProductBulkUpdateRequestV2(); // \GeminiCommerce\Product\Model\ProductBulkUpdateRequestV2

try {
    $result = $apiInstance->bulkUpdateV2($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductApi->bulkUpdateV2: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **body** | [**\GeminiCommerce\Product\Model\ProductBulkUpdateRequestV2**](../Model/ProductBulkUpdateRequestV2.md)|  | |

### Return type

[**\GeminiCommerce\Product\Model\ProductBulkUpdateResponse**](../Model/ProductBulkUpdateResponse.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createAttributeOptions()`

```php
createAttributeOptions($body): \GeminiCommerce\Product\Model\EntitymanagerCreateAttributeOptionsResponse
```

Create Attribute Options

Create attribute options with specified codes, values, and swatches. Returns created options and any associated errors.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Authorization
$config = GeminiCommerce\Product\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = GeminiCommerce\Product\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new GeminiCommerce\Product\Api\ProductApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \GeminiCommerce\Product\Model\EntitymanagerCreateAttributeOptionsRequest(); // \GeminiCommerce\Product\Model\EntitymanagerCreateAttributeOptionsRequest

try {
    $result = $apiInstance->createAttributeOptions($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductApi->createAttributeOptions: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **body** | [**\GeminiCommerce\Product\Model\EntitymanagerCreateAttributeOptionsRequest**](../Model/EntitymanagerCreateAttributeOptionsRequest.md)|  | |

### Return type

[**\GeminiCommerce\Product\Model\EntitymanagerCreateAttributeOptionsResponse**](../Model/EntitymanagerCreateAttributeOptionsResponse.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createEntity()`

```php
createEntity($body): \GeminiCommerce\Product\Model\EntitymanagerCreateEntityResponse
```

Create Entity

The CreateEntity endpoint allows users to define and create a new entity with custom attributes, providing a flexible way to represent and manage different data structures within the system. By making a request to this endpoint, users can create a new entity that serves as an abstraction of a product or any other domain-specific object. This endpoint empowers users to define the specific attributes that compose the entity, such as color, composition, technical details, or any other relevant properties. Utilize the CreateEntity endpoint to dynamically extend and adapt your system's data model to accommodate diverse business requirements and efficiently manage various types of entities.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Authorization
$config = GeminiCommerce\Product\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = GeminiCommerce\Product\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new GeminiCommerce\Product\Api\ProductApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \GeminiCommerce\Product\Model\EntitymanagerEntity(); // \GeminiCommerce\Product\Model\EntitymanagerEntity

try {
    $result = $apiInstance->createEntity($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductApi->createEntity: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **body** | [**\GeminiCommerce\Product\Model\EntitymanagerEntity**](../Model/EntitymanagerEntity.md)|  | |

### Return type

[**\GeminiCommerce\Product\Model\EntitymanagerCreateEntityResponse**](../Model/EntitymanagerCreateEntityResponse.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createOptionsList()`

```php
createOptionsList($body): \GeminiCommerce\Product\Model\EntitymanagerCreateOptionsListResponse
```

Create Options List

The CreateOptionsList endpoint allows users to create an OptionList, which represents a list of predefined options for assigning to an attribute. By making a request to this endpoint with the provided request format, users can create a new OptionList by specifying the relevant tenant ID and providing the OptionList object containing the predefined options. This functionality facilitates efficient management and assignment of predefined attribute values, ensuring consistency and flexibility within the system.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Authorization
$config = GeminiCommerce\Product\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = GeminiCommerce\Product\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new GeminiCommerce\Product\Api\ProductApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \GeminiCommerce\Product\Model\EntitymanagerCreateOptionsListRequest(); // \GeminiCommerce\Product\Model\EntitymanagerCreateOptionsListRequest

try {
    $result = $apiInstance->createOptionsList($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductApi->createOptionsList: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **body** | [**\GeminiCommerce\Product\Model\EntitymanagerCreateOptionsListRequest**](../Model/EntitymanagerCreateOptionsListRequest.md)|  | |

### Return type

[**\GeminiCommerce\Product\Model\EntitymanagerCreateOptionsListResponse**](../Model/EntitymanagerCreateOptionsListResponse.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createProductWithAI()`

```php
createProductWithAI($body): \GeminiCommerce\Product\Model\ProductCreateProductWithAIResponse
```

Create Product With AI

The CreateProductWithAI endpoint allows users to create a new product within the system using artificial intelligence (AI) capabilities. By sending a request to this endpoint and providing the necessary input data, users can leverage AI algorithms to enhance and optimize the product creation process.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Authorization
$config = GeminiCommerce\Product\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = GeminiCommerce\Product\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new GeminiCommerce\Product\Api\ProductApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \GeminiCommerce\Product\Model\ProductCreateProductWithAIRequest(); // \GeminiCommerce\Product\Model\ProductCreateProductWithAIRequest

try {
    $result = $apiInstance->createProductWithAI($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductApi->createProductWithAI: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **body** | [**\GeminiCommerce\Product\Model\ProductCreateProductWithAIRequest**](../Model/ProductCreateProductWithAIRequest.md)|  | |

### Return type

[**\GeminiCommerce\Product\Model\ProductCreateProductWithAIResponse**](../Model/ProductCreateProductWithAIResponse.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getAttributeOption()`

```php
getAttributeOption($body): \GeminiCommerce\Product\Model\EntitymanagerGetAttributeOptionResponse
```

Get Attribute Option

Retrieve attribute option details by providing the tenant ID, list code, and option ID. Returns the specified attribute option.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Authorization
$config = GeminiCommerce\Product\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = GeminiCommerce\Product\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new GeminiCommerce\Product\Api\ProductApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \GeminiCommerce\Product\Model\EntitymanagerGetAttributeOptionRequest(); // \GeminiCommerce\Product\Model\EntitymanagerGetAttributeOptionRequest

try {
    $result = $apiInstance->getAttributeOption($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductApi->getAttributeOption: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **body** | [**\GeminiCommerce\Product\Model\EntitymanagerGetAttributeOptionRequest**](../Model/EntitymanagerGetAttributeOptionRequest.md)|  | |

### Return type

[**\GeminiCommerce\Product\Model\EntitymanagerGetAttributeOptionResponse**](../Model/EntitymanagerGetAttributeOptionResponse.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getAttributeOptions()`

```php
getAttributeOptions($body): \GeminiCommerce\Product\Model\EntitymanagerGetAttributeOptionsResponse
```

Get Attribute Options

Retrieve a list of attribute options based on the provided tenant ID and list code.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Authorization
$config = GeminiCommerce\Product\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = GeminiCommerce\Product\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new GeminiCommerce\Product\Api\ProductApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \GeminiCommerce\Product\Model\EntitymanagerGetAttributeOptionsRequest(); // \GeminiCommerce\Product\Model\EntitymanagerGetAttributeOptionsRequest

try {
    $result = $apiInstance->getAttributeOptions($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductApi->getAttributeOptions: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **body** | [**\GeminiCommerce\Product\Model\EntitymanagerGetAttributeOptionsRequest**](../Model/EntitymanagerGetAttributeOptionsRequest.md)|  | |

### Return type

[**\GeminiCommerce\Product\Model\EntitymanagerGetAttributeOptionsResponse**](../Model/EntitymanagerGetAttributeOptionsResponse.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getEntity()`

```php
getEntity($body): \GeminiCommerce\Product\Model\EntitymanagerEntity
```

Get Entity Details

Retrieve details of an entity by providing the tenant ID and either entity data or entity ID. Returns information including ID, type, code, label, relationships, and attributes.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Authorization
$config = GeminiCommerce\Product\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = GeminiCommerce\Product\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new GeminiCommerce\Product\Api\ProductApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \GeminiCommerce\Product\Model\EntitymanagerEntityRequest(); // \GeminiCommerce\Product\Model\EntitymanagerEntityRequest

try {
    $result = $apiInstance->getEntity($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductApi->getEntity: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **body** | [**\GeminiCommerce\Product\Model\EntitymanagerEntityRequest**](../Model/EntitymanagerEntityRequest.md)|  | |

### Return type

[**\GeminiCommerce\Product\Model\EntitymanagerEntity**](../Model/EntitymanagerEntity.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getOptionsList()`

```php
getOptionsList($body): \GeminiCommerce\Product\Model\EntitymanagerGetOptionsListResponse
```

Get Options List

Retrieve option lists.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Authorization
$config = GeminiCommerce\Product\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = GeminiCommerce\Product\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new GeminiCommerce\Product\Api\ProductApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \GeminiCommerce\Product\Model\EntitymanagerGetOptionsListRequest(); // \GeminiCommerce\Product\Model\EntitymanagerGetOptionsListRequest

try {
    $result = $apiInstance->getOptionsList($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductApi->getOptionsList: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **body** | [**\GeminiCommerce\Product\Model\EntitymanagerGetOptionsListRequest**](../Model/EntitymanagerGetOptionsListRequest.md)|  | |

### Return type

[**\GeminiCommerce\Product\Model\EntitymanagerGetOptionsListResponse**](../Model/EntitymanagerGetOptionsListResponse.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getProduct()`

```php
getProduct($body): \GeminiCommerce\Product\Model\ProductGetProductResponse
```

Get Product

The GetProduct endpoint enables users to retrieve a product from the system. By sending a request to this endpoint, users can retrieve a product by providing its unique identifier.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Authorization
$config = GeminiCommerce\Product\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = GeminiCommerce\Product\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new GeminiCommerce\Product\Api\ProductApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \GeminiCommerce\Product\Model\ProductGetProductRequest(); // \GeminiCommerce\Product\Model\ProductGetProductRequest

try {
    $result = $apiInstance->getProduct($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductApi->getProduct: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **body** | [**\GeminiCommerce\Product\Model\ProductGetProductRequest**](../Model/ProductGetProductRequest.md)|  | |

### Return type

[**\GeminiCommerce\Product\Model\ProductGetProductResponse**](../Model/ProductGetProductResponse.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getProductByCode()`

```php
getProductByCode($body): \GeminiCommerce\Product\Model\ProductGetProductByCodeResponse
```

Get Product By Code

The GetProductByCode endpoint enables users to retrieve a product from the system. By sending a request to this endpoint, users can retrieve a product by providing its unique code.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Authorization
$config = GeminiCommerce\Product\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = GeminiCommerce\Product\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new GeminiCommerce\Product\Api\ProductApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \GeminiCommerce\Product\Model\ProductGetProductByCodeRequest(); // \GeminiCommerce\Product\Model\ProductGetProductByCodeRequest

try {
    $result = $apiInstance->getProductByCode($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductApi->getProductByCode: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **body** | [**\GeminiCommerce\Product\Model\ProductGetProductByCodeRequest**](../Model/ProductGetProductByCodeRequest.md)|  | |

### Return type

[**\GeminiCommerce\Product\Model\ProductGetProductByCodeResponse**](../Model/ProductGetProductByCodeResponse.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getProductByUrlKey()`

```php
getProductByUrlKey($body): \GeminiCommerce\Product\Model\ProductGetProductByUrlKeyResponse
```

Get Product By Url Key

The GetProductByUrlKey endpoint enables users to retrieve a product from the system. By sending a request to this endpoint, users can retrieve a product by providing its unique url key.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Authorization
$config = GeminiCommerce\Product\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = GeminiCommerce\Product\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new GeminiCommerce\Product\Api\ProductApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \GeminiCommerce\Product\Model\ProductGetProductByUrlKeyRequest(); // \GeminiCommerce\Product\Model\ProductGetProductByUrlKeyRequest

try {
    $result = $apiInstance->getProductByUrlKey($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductApi->getProductByUrlKey: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **body** | [**\GeminiCommerce\Product\Model\ProductGetProductByUrlKeyRequest**](../Model/ProductGetProductByUrlKeyRequest.md)|  | |

### Return type

[**\GeminiCommerce\Product\Model\ProductGetProductByUrlKeyResponse**](../Model/ProductGetProductByUrlKeyResponse.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getProductDataInReview()`

```php
getProductDataInReview($body): \GeminiCommerce\Product\Model\ProductGetProductDataInReviewResponse
```

Get Product Data In Review

The GetProductDataInReview endpoint allows users to retrieve product data that is currently under review. By making a request to this endpoint, users can access detailed information about the product data that is pending approval or review by authorized personnel. This functionality provides transparency and visibility into the product data review process, enabling users to track the status and progress of product data submissions.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Authorization
$config = GeminiCommerce\Product\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = GeminiCommerce\Product\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new GeminiCommerce\Product\Api\ProductApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \GeminiCommerce\Product\Model\ProductGetProductDataInReviewRequest(); // \GeminiCommerce\Product\Model\ProductGetProductDataInReviewRequest

try {
    $result = $apiInstance->getProductDataInReview($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductApi->getProductDataInReview: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **body** | [**\GeminiCommerce\Product\Model\ProductGetProductDataInReviewRequest**](../Model/ProductGetProductDataInReviewRequest.md)|  | |

### Return type

[**\GeminiCommerce\Product\Model\ProductGetProductDataInReviewResponse**](../Model/ProductGetProductDataInReviewResponse.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listAttributeOptions()`

```php
listAttributeOptions($body): \GeminiCommerce\Product\Model\EntitymanagerListAttributeOptionsResponse
```

List Attribute Options

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Authorization
$config = GeminiCommerce\Product\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = GeminiCommerce\Product\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new GeminiCommerce\Product\Api\ProductApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \GeminiCommerce\Product\Model\EntitymanagerListAttributeOptionsRequest(); // \GeminiCommerce\Product\Model\EntitymanagerListAttributeOptionsRequest

try {
    $result = $apiInstance->listAttributeOptions($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductApi->listAttributeOptions: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **body** | [**\GeminiCommerce\Product\Model\EntitymanagerListAttributeOptionsRequest**](../Model/EntitymanagerListAttributeOptionsRequest.md)|  | |

### Return type

[**\GeminiCommerce\Product\Model\EntitymanagerListAttributeOptionsResponse**](../Model/EntitymanagerListAttributeOptionsResponse.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listEntities()`

```php
listEntities($body): \GeminiCommerce\Product\Model\EntitymanagerListEntitiesResponse
```

List Entities

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Authorization
$config = GeminiCommerce\Product\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = GeminiCommerce\Product\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new GeminiCommerce\Product\Api\ProductApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \GeminiCommerce\Product\Model\EntitymanagerListEntitiesRequest(); // \GeminiCommerce\Product\Model\EntitymanagerListEntitiesRequest

try {
    $result = $apiInstance->listEntities($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductApi->listEntities: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **body** | [**\GeminiCommerce\Product\Model\EntitymanagerListEntitiesRequest**](../Model/EntitymanagerListEntitiesRequest.md)|  | |

### Return type

[**\GeminiCommerce\Product\Model\EntitymanagerListEntitiesResponse**](../Model/EntitymanagerListEntitiesResponse.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listOptionsLists()`

```php
listOptionsLists($body): \GeminiCommerce\Product\Model\EntitymanagerListOptionsListsResponse
```

List Options Lists

The ListOptionsLists endpoint allows users to retrieve a list of OptionLists available in the system. By making a request to this endpoint with the provided request format, users can obtain all the OptionLists associated with the specified tenant. This functionality enables users to access and manage the predefined options available for various attributes within the system. Utilizing the ListOptionsLists endpoint provides a convenient way to retrieve and work with OptionLists, facilitating efficient management of attribute options and ensuring consistency in attribute values throughout the system.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Authorization
$config = GeminiCommerce\Product\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = GeminiCommerce\Product\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new GeminiCommerce\Product\Api\ProductApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \GeminiCommerce\Product\Model\EntitymanagerListOptionsListsRequest(); // \GeminiCommerce\Product\Model\EntitymanagerListOptionsListsRequest

try {
    $result = $apiInstance->listOptionsLists($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductApi->listOptionsLists: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **body** | [**\GeminiCommerce\Product\Model\EntitymanagerListOptionsListsRequest**](../Model/EntitymanagerListOptionsListsRequest.md)|  | |

### Return type

[**\GeminiCommerce\Product\Model\EntitymanagerListOptionsListsResponse**](../Model/EntitymanagerListOptionsListsResponse.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listProducts()`

```php
listProducts($body): \GeminiCommerce\Product\Model\ProductListProductsResponse
```

List Products

The ListProducts endpoint provides users with the ability to retrieve a filtered list of products based on specific criteria. By including filter parameters in the request, users can customize the response to only include products that meet certain conditions, such as price range, category, availability, or any other relevant attributes. This endpoint empowers users to efficiently narrow down the product selection and retrieve tailored results.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Authorization
$config = GeminiCommerce\Product\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = GeminiCommerce\Product\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new GeminiCommerce\Product\Api\ProductApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \GeminiCommerce\Product\Model\ProductListProductsRequest(); // \GeminiCommerce\Product\Model\ProductListProductsRequest

try {
    $result = $apiInstance->listProducts($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductApi->listProducts: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **body** | [**\GeminiCommerce\Product\Model\ProductListProductsRequest**](../Model/ProductListProductsRequest.md)|  | |

### Return type

[**\GeminiCommerce\Product\Model\ProductListProductsResponse**](../Model/ProductListProductsResponse.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listProductsByIds()`

```php
listProductsByIds($body): \GeminiCommerce\Product\Model\ProductListProductsByIdsResponse
```

List Products By Ids

The ListProductsByIds endpoint allows users to retrieve a list of products based on provided IDs. By making a request to this endpoint and specifying a set of product IDs, users can retrieve detailed information about the corresponding products. This endpoint facilitates efficient retrieval of specific products, enabling applications to display accurate and targeted product information to users.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Authorization
$config = GeminiCommerce\Product\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = GeminiCommerce\Product\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new GeminiCommerce\Product\Api\ProductApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \GeminiCommerce\Product\Model\ProductListProductsByIdsRequest(); // \GeminiCommerce\Product\Model\ProductListProductsByIdsRequest

try {
    $result = $apiInstance->listProductsByIds($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductApi->listProductsByIds: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **body** | [**\GeminiCommerce\Product\Model\ProductListProductsByIdsRequest**](../Model/ProductListProductsByIdsRequest.md)|  | |

### Return type

[**\GeminiCommerce\Product\Model\ProductListProductsByIdsResponse**](../Model/ProductListProductsByIdsResponse.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listProductsBySku()`

```php
listProductsBySku($body): \GeminiCommerce\Product\Model\ProductListProductsBySkuResponse
```

List Products By Sku

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Authorization
$config = GeminiCommerce\Product\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = GeminiCommerce\Product\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new GeminiCommerce\Product\Api\ProductApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \GeminiCommerce\Product\Model\ProductListProductsBySkuRequest(); // \GeminiCommerce\Product\Model\ProductListProductsBySkuRequest

try {
    $result = $apiInstance->listProductsBySku($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductApi->listProductsBySku: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **body** | [**\GeminiCommerce\Product\Model\ProductListProductsBySkuRequest**](../Model/ProductListProductsBySkuRequest.md)|  | |

### Return type

[**\GeminiCommerce\Product\Model\ProductListProductsBySkuResponse**](../Model/ProductListProductsBySkuResponse.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listVariantsBySku()`

```php
listVariantsBySku($body): \GeminiCommerce\Product\Model\ProductListVariantsBySkuResponse
```

List Product Variants By Sku

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Authorization
$config = GeminiCommerce\Product\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = GeminiCommerce\Product\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new GeminiCommerce\Product\Api\ProductApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \GeminiCommerce\Product\Model\ProductListVariantsBySkuRequest(); // \GeminiCommerce\Product\Model\ProductListVariantsBySkuRequest

try {
    $result = $apiInstance->listVariantsBySku($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductApi->listVariantsBySku: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **body** | [**\GeminiCommerce\Product\Model\ProductListVariantsBySkuRequest**](../Model/ProductListVariantsBySkuRequest.md)|  | |

### Return type

[**\GeminiCommerce\Product\Model\ProductListVariantsBySkuResponse**](../Model/ProductListVariantsBySkuResponse.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `productBulkCreateAttribute()`

```php
productBulkCreateAttribute($body): \GeminiCommerce\Product\Model\EntitymanagerBulkCreateAttributeResponse
```



Allow creation of multiple attributes. If any attribute is invalid, an error will be returned with more details, and in the response body, the attributes created will be returned.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Authorization
$config = GeminiCommerce\Product\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = GeminiCommerce\Product\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new GeminiCommerce\Product\Api\ProductApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \GeminiCommerce\Product\Model\EntitymanagerBulkCreateAttributeRequest(); // \GeminiCommerce\Product\Model\EntitymanagerBulkCreateAttributeRequest

try {
    $result = $apiInstance->productBulkCreateAttribute($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductApi->productBulkCreateAttribute: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **body** | [**\GeminiCommerce\Product\Model\EntitymanagerBulkCreateAttributeRequest**](../Model/EntitymanagerBulkCreateAttributeRequest.md)|  | |

### Return type

[**\GeminiCommerce\Product\Model\EntitymanagerBulkCreateAttributeResponse**](../Model/EntitymanagerBulkCreateAttributeResponse.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `productBulkUpdate()`

```php
productBulkUpdate($body): \GeminiCommerce\Product\Model\ProductBulkUpdateResponse
```



This operation is asynchronous and may complete after the response.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Authorization
$config = GeminiCommerce\Product\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = GeminiCommerce\Product\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new GeminiCommerce\Product\Api\ProductApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \GeminiCommerce\Product\Model\ProductBulkUpdateRequest(); // \GeminiCommerce\Product\Model\ProductBulkUpdateRequest

try {
    $result = $apiInstance->productBulkUpdate($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductApi->productBulkUpdate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **body** | [**\GeminiCommerce\Product\Model\ProductBulkUpdateRequest**](../Model/ProductBulkUpdateRequest.md)|  | |

### Return type

[**\GeminiCommerce\Product\Model\ProductBulkUpdateResponse**](../Model/ProductBulkUpdateResponse.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `productCreateAttributeGroup()`

```php
productCreateAttributeGroup($body): \GeminiCommerce\Product\Model\EntitymanagerAttributeGroup
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Authorization
$config = GeminiCommerce\Product\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = GeminiCommerce\Product\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new GeminiCommerce\Product\Api\ProductApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \GeminiCommerce\Product\Model\EntitymanagerCreateAttributeGroupRequest(); // \GeminiCommerce\Product\Model\EntitymanagerCreateAttributeGroupRequest

try {
    $result = $apiInstance->productCreateAttributeGroup($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductApi->productCreateAttributeGroup: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **body** | [**\GeminiCommerce\Product\Model\EntitymanagerCreateAttributeGroupRequest**](../Model/EntitymanagerCreateAttributeGroupRequest.md)|  | |

### Return type

[**\GeminiCommerce\Product\Model\EntitymanagerAttributeGroup**](../Model/EntitymanagerAttributeGroup.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `productCreateProduct()`

```php
productCreateProduct($body): \GeminiCommerce\Product\Model\ProductCreateProductResponse
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Authorization
$config = GeminiCommerce\Product\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = GeminiCommerce\Product\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new GeminiCommerce\Product\Api\ProductApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \GeminiCommerce\Product\Model\ProductCreateProductRequest(); // \GeminiCommerce\Product\Model\ProductCreateProductRequest | The CreateProductRequest message is used to create a new product within the system. It contains various fields that allow specifying the details and attributes of the product.

try {
    $result = $apiInstance->productCreateProduct($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductApi->productCreateProduct: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **body** | [**\GeminiCommerce\Product\Model\ProductCreateProductRequest**](../Model/ProductCreateProductRequest.md)| The CreateProductRequest message is used to create a new product within the system. It contains various fields that allow specifying the details and attributes of the product. | |

### Return type

[**\GeminiCommerce\Product\Model\ProductCreateProductResponse**](../Model/ProductCreateProductResponse.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `productCreateProductV2()`

```php
productCreateProductV2($body): \GeminiCommerce\Product\Model\ProductCreateProductResponseV2
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Authorization
$config = GeminiCommerce\Product\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = GeminiCommerce\Product\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new GeminiCommerce\Product\Api\ProductApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \GeminiCommerce\Product\Model\ProductCreateProductRequestV2(); // \GeminiCommerce\Product\Model\ProductCreateProductRequestV2

try {
    $result = $apiInstance->productCreateProductV2($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductApi->productCreateProductV2: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **body** | [**\GeminiCommerce\Product\Model\ProductCreateProductRequestV2**](../Model/ProductCreateProductRequestV2.md)|  | |

### Return type

[**\GeminiCommerce\Product\Model\ProductCreateProductResponseV2**](../Model/ProductCreateProductResponseV2.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `productDelete()`

```php
productDelete($body): \GeminiCommerce\Product\Model\ProductDeleteResponse
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Authorization
$config = GeminiCommerce\Product\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = GeminiCommerce\Product\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new GeminiCommerce\Product\Api\ProductApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \GeminiCommerce\Product\Model\ProductDeleteRequest(); // \GeminiCommerce\Product\Model\ProductDeleteRequest

try {
    $result = $apiInstance->productDelete($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductApi->productDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **body** | [**\GeminiCommerce\Product\Model\ProductDeleteRequest**](../Model/ProductDeleteRequest.md)|  | |

### Return type

[**\GeminiCommerce\Product\Model\ProductDeleteResponse**](../Model/ProductDeleteResponse.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `productDeleteAttribute()`

```php
productDeleteAttribute($body): object
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Authorization
$config = GeminiCommerce\Product\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = GeminiCommerce\Product\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new GeminiCommerce\Product\Api\ProductApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \GeminiCommerce\Product\Model\EntitymanagerDeleteAttributeRequest(); // \GeminiCommerce\Product\Model\EntitymanagerDeleteAttributeRequest

try {
    $result = $apiInstance->productDeleteAttribute($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductApi->productDeleteAttribute: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **body** | [**\GeminiCommerce\Product\Model\EntitymanagerDeleteAttributeRequest**](../Model/EntitymanagerDeleteAttributeRequest.md)|  | |

### Return type

**object**

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `productDeleteProduct()`

```php
productDeleteProduct($body): object
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Authorization
$config = GeminiCommerce\Product\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = GeminiCommerce\Product\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new GeminiCommerce\Product\Api\ProductApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \GeminiCommerce\Product\Model\ProductDeleteProductRequest(); // \GeminiCommerce\Product\Model\ProductDeleteProductRequest

try {
    $result = $apiInstance->productDeleteProduct($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductApi->productDeleteProduct: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **body** | [**\GeminiCommerce\Product\Model\ProductDeleteProductRequest**](../Model/ProductDeleteProductRequest.md)|  | |

### Return type

**object**

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `productGetAttributeGroup()`

```php
productGetAttributeGroup($body): \GeminiCommerce\Product\Model\EntitymanagerAttributeGroup
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Authorization
$config = GeminiCommerce\Product\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = GeminiCommerce\Product\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new GeminiCommerce\Product\Api\ProductApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \GeminiCommerce\Product\Model\EntitymanagerGetAttributeGroupRequest(); // \GeminiCommerce\Product\Model\EntitymanagerGetAttributeGroupRequest

try {
    $result = $apiInstance->productGetAttributeGroup($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductApi->productGetAttributeGroup: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **body** | [**\GeminiCommerce\Product\Model\EntitymanagerGetAttributeGroupRequest**](../Model/EntitymanagerGetAttributeGroupRequest.md)|  | |

### Return type

[**\GeminiCommerce\Product\Model\EntitymanagerAttributeGroup**](../Model/EntitymanagerAttributeGroup.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `productListAttributeGroups()`

```php
productListAttributeGroups($body): \GeminiCommerce\Product\Model\EntitymanagerListAttributeGroupsResponse
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Authorization
$config = GeminiCommerce\Product\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = GeminiCommerce\Product\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new GeminiCommerce\Product\Api\ProductApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \GeminiCommerce\Product\Model\EntitymanagerListAttributeGroupsRequest(); // \GeminiCommerce\Product\Model\EntitymanagerListAttributeGroupsRequest

try {
    $result = $apiInstance->productListAttributeGroups($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductApi->productListAttributeGroups: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **body** | [**\GeminiCommerce\Product\Model\EntitymanagerListAttributeGroupsRequest**](../Model/EntitymanagerListAttributeGroupsRequest.md)|  | |

### Return type

[**\GeminiCommerce\Product\Model\EntitymanagerListAttributeGroupsResponse**](../Model/EntitymanagerListAttributeGroupsResponse.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `productUpdateAttribute()`

```php
productUpdateAttribute($body): \GeminiCommerce\Product\Model\EntitymanagerAttribute
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Authorization
$config = GeminiCommerce\Product\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = GeminiCommerce\Product\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new GeminiCommerce\Product\Api\ProductApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \GeminiCommerce\Product\Model\EntitymanagerUpdateAttributeRequest(); // \GeminiCommerce\Product\Model\EntitymanagerUpdateAttributeRequest

try {
    $result = $apiInstance->productUpdateAttribute($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductApi->productUpdateAttribute: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **body** | [**\GeminiCommerce\Product\Model\EntitymanagerUpdateAttributeRequest**](../Model/EntitymanagerUpdateAttributeRequest.md)|  | |

### Return type

[**\GeminiCommerce\Product\Model\EntitymanagerAttribute**](../Model/EntitymanagerAttribute.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `productUpdateAttributeGroup()`

```php
productUpdateAttributeGroup($body): \GeminiCommerce\Product\Model\EntitymanagerAttributeGroup
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Authorization
$config = GeminiCommerce\Product\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = GeminiCommerce\Product\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new GeminiCommerce\Product\Api\ProductApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \GeminiCommerce\Product\Model\EntitymanagerUpdateAttributeGroupRequest(); // \GeminiCommerce\Product\Model\EntitymanagerUpdateAttributeGroupRequest

try {
    $result = $apiInstance->productUpdateAttributeGroup($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductApi->productUpdateAttributeGroup: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **body** | [**\GeminiCommerce\Product\Model\EntitymanagerUpdateAttributeGroupRequest**](../Model/EntitymanagerUpdateAttributeGroupRequest.md)|  | |

### Return type

[**\GeminiCommerce\Product\Model\EntitymanagerAttributeGroup**](../Model/EntitymanagerAttributeGroup.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `productUpdateProduct()`

```php
productUpdateProduct($body): \GeminiCommerce\Product\Model\ProductUpdateProductResponse
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Authorization
$config = GeminiCommerce\Product\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = GeminiCommerce\Product\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new GeminiCommerce\Product\Api\ProductApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \GeminiCommerce\Product\Model\ProductUpdateProductRequest(); // \GeminiCommerce\Product\Model\ProductUpdateProductRequest

try {
    $result = $apiInstance->productUpdateProduct($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductApi->productUpdateProduct: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **body** | [**\GeminiCommerce\Product\Model\ProductUpdateProductRequest**](../Model/ProductUpdateProductRequest.md)|  | |

### Return type

[**\GeminiCommerce\Product\Model\ProductUpdateProductResponse**](../Model/ProductUpdateProductResponse.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `productUpdateProductV2()`

```php
productUpdateProductV2($body): object
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Authorization
$config = GeminiCommerce\Product\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = GeminiCommerce\Product\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new GeminiCommerce\Product\Api\ProductApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \GeminiCommerce\Product\Model\ProductUpdateProductRequestV2(); // \GeminiCommerce\Product\Model\ProductUpdateProductRequestV2

try {
    $result = $apiInstance->productUpdateProductV2($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductApi->productUpdateProductV2: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **body** | [**\GeminiCommerce\Product\Model\ProductUpdateProductRequestV2**](../Model/ProductUpdateProductRequestV2.md)|  | |

### Return type

**object**

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `removeMediaGalleryEntry()`

```php
removeMediaGalleryEntry($body): object
```

Remove Media Gallery Entry

The RemoveMediaGalleryEntry endpoint allows users to remove a specific media entry from a product's gallery. By making a request to this endpoint and providing the tenant ID, product ID, and the unique identifier of the media entry, users can easily manage and update the visual content of a product's gallery. This operation is asynchronous and may complete after the response.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Authorization
$config = GeminiCommerce\Product\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = GeminiCommerce\Product\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new GeminiCommerce\Product\Api\ProductApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \GeminiCommerce\Product\Model\ProductRemoveMediaGalleryEntryRequest(); // \GeminiCommerce\Product\Model\ProductRemoveMediaGalleryEntryRequest

try {
    $result = $apiInstance->removeMediaGalleryEntry($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductApi->removeMediaGalleryEntry: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **body** | [**\GeminiCommerce\Product\Model\ProductRemoveMediaGalleryEntryRequest**](../Model/ProductRemoveMediaGalleryEntryRequest.md)|  | |

### Return type

**object**

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateAttributeOptions()`

```php
updateAttributeOptions($body): \GeminiCommerce\Product\Model\EntitymanagerUpdateAttributeOptionsResponse
```

Update Attribute Options

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Authorization
$config = GeminiCommerce\Product\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = GeminiCommerce\Product\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new GeminiCommerce\Product\Api\ProductApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \GeminiCommerce\Product\Model\EntitymanagerUpdateAttributeOptionsRequest(); // \GeminiCommerce\Product\Model\EntitymanagerUpdateAttributeOptionsRequest

try {
    $result = $apiInstance->updateAttributeOptions($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductApi->updateAttributeOptions: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **body** | [**\GeminiCommerce\Product\Model\EntitymanagerUpdateAttributeOptionsRequest**](../Model/EntitymanagerUpdateAttributeOptionsRequest.md)|  | |

### Return type

[**\GeminiCommerce\Product\Model\EntitymanagerUpdateAttributeOptionsResponse**](../Model/EntitymanagerUpdateAttributeOptionsResponse.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateDataToBeReviewed()`

```php
updateDataToBeReviewed($body): \GeminiCommerce\Product\Model\ProductGetEnhanceProductDataWithAIStatusResponse
```

Get Enhance Product Data With AI Status

The GetEnhanceProductDataWithAIStatus endpoint allows users to retrieve the status of a product data enhancement process using artificial intelligence (AI) capabilities. By making a request to this endpoint and providing the necessary input data, users can check the progress and completion status of the AI-driven product data enhancement operation. This functionality provides visibility and transparency into the AI processing of product data, enabling users to monitor and track the status of the enhancement process.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Authorization
$config = GeminiCommerce\Product\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = GeminiCommerce\Product\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new GeminiCommerce\Product\Api\ProductApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \GeminiCommerce\Product\Model\ProductGetEnhanceProductDataWithAIStatusRequest(); // \GeminiCommerce\Product\Model\ProductGetEnhanceProductDataWithAIStatusRequest

try {
    $result = $apiInstance->updateDataToBeReviewed($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductApi->updateDataToBeReviewed: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **body** | [**\GeminiCommerce\Product\Model\ProductGetEnhanceProductDataWithAIStatusRequest**](../Model/ProductGetEnhanceProductDataWithAIStatusRequest.md)|  | |

### Return type

[**\GeminiCommerce\Product\Model\ProductGetEnhanceProductDataWithAIStatusResponse**](../Model/ProductGetEnhanceProductDataWithAIStatusResponse.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateDataToBeReviewed_0()`

```php
updateDataToBeReviewed_0($body): object
```

Update Data To Be Reviewed

The UpdateDataToBeReviewed endpoint allows users to update product data that is pending review. By sending a request to this endpoint and providing the necessary input data, users can modify and enhance the product information that is currently under review. This functionality enables users to make changes to product data submissions and ensure that the information is accurate and up-to-date before final approval.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Authorization
$config = GeminiCommerce\Product\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = GeminiCommerce\Product\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new GeminiCommerce\Product\Api\ProductApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \GeminiCommerce\Product\Model\ProductUpdateDataToBeReviewedRequest(); // \GeminiCommerce\Product\Model\ProductUpdateDataToBeReviewedRequest

try {
    $result = $apiInstance->updateDataToBeReviewed_0($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductApi->updateDataToBeReviewed_0: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **body** | [**\GeminiCommerce\Product\Model\ProductUpdateDataToBeReviewedRequest**](../Model/ProductUpdateDataToBeReviewedRequest.md)|  | |

### Return type

**object**

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateMediaGalleryEntry()`

```php
updateMediaGalleryEntry($body): object
```

Update Media Gallery Entry

The UpdateMediaGalleryEntry endpoint allows users to modify and update a specific media entry within a product's gallery. By sending a request to this endpoint and providing the necessary information, users can efficiently update the media asset, position, and metadata associated with the entry. This operation is asynchronous and may complete after the response.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Authorization
$config = GeminiCommerce\Product\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = GeminiCommerce\Product\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new GeminiCommerce\Product\Api\ProductApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \GeminiCommerce\Product\Model\ProductUpdateMediaGalleryEntryRequest(); // \GeminiCommerce\Product\Model\ProductUpdateMediaGalleryEntryRequest

try {
    $result = $apiInstance->updateMediaGalleryEntry($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductApi->updateMediaGalleryEntry: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **body** | [**\GeminiCommerce\Product\Model\ProductUpdateMediaGalleryEntryRequest**](../Model/ProductUpdateMediaGalleryEntryRequest.md)|  | |

### Return type

**object**

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateOptionsList()`

```php
updateOptionsList($body): \GeminiCommerce\Product\Model\EntitymanagerUpdateOptionsListResponse
```

Update Options List

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Authorization
$config = GeminiCommerce\Product\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = GeminiCommerce\Product\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new GeminiCommerce\Product\Api\ProductApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \GeminiCommerce\Product\Model\EntitymanagerUpdateOptionsListRequest(); // \GeminiCommerce\Product\Model\EntitymanagerUpdateOptionsListRequest

try {
    $result = $apiInstance->updateOptionsList($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductApi->updateOptionsList: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **body** | [**\GeminiCommerce\Product\Model\EntitymanagerUpdateOptionsListRequest**](../Model/EntitymanagerUpdateOptionsListRequest.md)|  | |

### Return type

[**\GeminiCommerce\Product\Model\EntitymanagerUpdateOptionsListResponse**](../Model/EntitymanagerUpdateOptionsListResponse.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateProductWithAI()`

```php
updateProductWithAI($body): \GeminiCommerce\Product\Model\ProductUpdateProductWithAIResponse
```

Update Product With AI

The UpdateProductWithAI endpoint allows users to update an existing product within the system using artificial intelligence (AI) capabilities. By sending a request to this endpoint and providing the necessary input data, users can leverage AI algorithms to enhance and optimize the product update process.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Authorization
$config = GeminiCommerce\Product\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = GeminiCommerce\Product\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new GeminiCommerce\Product\Api\ProductApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \GeminiCommerce\Product\Model\ProductUpdateProductWithAIRequest(); // \GeminiCommerce\Product\Model\ProductUpdateProductWithAIRequest

try {
    $result = $apiInstance->updateProductWithAI($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductApi->updateProductWithAI: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **body** | [**\GeminiCommerce\Product\Model\ProductUpdateProductWithAIRequest**](../Model/ProductUpdateProductWithAIRequest.md)|  | |

### Return type

[**\GeminiCommerce\Product\Model\ProductUpdateProductWithAIResponse**](../Model/ProductUpdateProductWithAIResponse.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
