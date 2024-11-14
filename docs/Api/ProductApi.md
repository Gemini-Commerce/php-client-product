# OpenAPI\Client\ProductApi

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
addMediaGalleryEntry($body): \OpenAPI\Client\Model\ProductAddMediaGalleryEntryResponse
```

Add Media Gallery Entry

The AddMediaGalleryEntry endpoint allows users to add a new media entry to the gallery of a specific product. To make a request to this endpoint, users need to provide the necessary information in the specified format. The request includes the tenant_id to specify the relevant tenant, the product_id to identify the target product, and the asset_grn which represents the globally unique identifier for the media asset being added. Additionally, the position field indicates the desired position of the media entry within the gallery, allowing users to control the order in which the media items are displayed. The metadata field, which is a repeated field, provides the option to include additional metadata associated with the media entry. This operation is asynchronous and may complete after the response.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Authorization
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\ProductApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \OpenAPI\Client\Model\ProductAddMediaGalleryEntryRequest(); // \OpenAPI\Client\Model\ProductAddMediaGalleryEntryRequest

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
| **body** | [**\OpenAPI\Client\Model\ProductAddMediaGalleryEntryRequest**](../Model/ProductAddMediaGalleryEntryRequest.md)|  | |

### Return type

[**\OpenAPI\Client\Model\ProductAddMediaGalleryEntryResponse**](../Model/ProductAddMediaGalleryEntryResponse.md)

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
bulkAddAssetsEntries($body): \OpenAPI\Client\Model\ProductBulkAddAssetsEntriesResponse
```

Bulk Add Assets Entries

The BulkAddAssetsEntries endpoint allows users to add assets. This operation is asynchronous and may complete after the response.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Authorization
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\ProductApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \OpenAPI\Client\Model\ProductBulkAddAssetsEntriesRequest(); // \OpenAPI\Client\Model\ProductBulkAddAssetsEntriesRequest

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
| **body** | [**\OpenAPI\Client\Model\ProductBulkAddAssetsEntriesRequest**](../Model/ProductBulkAddAssetsEntriesRequest.md)|  | |

### Return type

[**\OpenAPI\Client\Model\ProductBulkAddAssetsEntriesResponse**](../Model/ProductBulkAddAssetsEntriesResponse.md)

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
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\ProductApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \OpenAPI\Client\Model\ProductBulkDeleteProductsRequest(); // \OpenAPI\Client\Model\ProductBulkDeleteProductsRequest

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
| **body** | [**\OpenAPI\Client\Model\ProductBulkDeleteProductsRequest**](../Model/ProductBulkDeleteProductsRequest.md)|  | |

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
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\ProductApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \OpenAPI\Client\Model\ProductBulkEnhanceProductDataWithAIRequest(); // \OpenAPI\Client\Model\ProductBulkEnhanceProductDataWithAIRequest

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
| **body** | [**\OpenAPI\Client\Model\ProductBulkEnhanceProductDataWithAIRequest**](../Model/ProductBulkEnhanceProductDataWithAIRequest.md)|  | |

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
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\ProductApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \OpenAPI\Client\Model\ProductBulkRemoveAssetsEntriesRequest(); // \OpenAPI\Client\Model\ProductBulkRemoveAssetsEntriesRequest

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
| **body** | [**\OpenAPI\Client\Model\ProductBulkRemoveAssetsEntriesRequest**](../Model/ProductBulkRemoveAssetsEntriesRequest.md)|  | |

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
bulkUpdateAssetsEntries($body): \OpenAPI\Client\Model\ProductBulkUpdateAssetsEntriesResponse
```

Bulk Update Assets Entries

The BulkUpdateAssetsEntries endpoint allows users to update assets. This operation is asynchronous and may complete after the response.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Authorization
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\ProductApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \OpenAPI\Client\Model\ProductBulkUpdateAssetsEntriesRequest(); // \OpenAPI\Client\Model\ProductBulkUpdateAssetsEntriesRequest

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
| **body** | [**\OpenAPI\Client\Model\ProductBulkUpdateAssetsEntriesRequest**](../Model/ProductBulkUpdateAssetsEntriesRequest.md)|  | |

### Return type

[**\OpenAPI\Client\Model\ProductBulkUpdateAssetsEntriesResponse**](../Model/ProductBulkUpdateAssetsEntriesResponse.md)

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
bulkUpdateV2($body): \OpenAPI\Client\Model\ProductBulkUpdateResponse
```

Bulk Update Products

Version 2 of bulk updates for product attributes with enhanced payload structure and response format. This operation is asynchronous and may complete after the response.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Authorization
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\ProductApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \OpenAPI\Client\Model\ProductBulkUpdateRequestV2(); // \OpenAPI\Client\Model\ProductBulkUpdateRequestV2

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
| **body** | [**\OpenAPI\Client\Model\ProductBulkUpdateRequestV2**](../Model/ProductBulkUpdateRequestV2.md)|  | |

### Return type

[**\OpenAPI\Client\Model\ProductBulkUpdateResponse**](../Model/ProductBulkUpdateResponse.md)

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
createAttributeOptions($body): \OpenAPI\Client\Model\EntitymanagerCreateAttributeOptionsResponse
```

Create Attribute Options

Create attribute options with specified codes, values, and swatches. Returns created options and any associated errors.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Authorization
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\ProductApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \OpenAPI\Client\Model\EntitymanagerCreateAttributeOptionsRequest(); // \OpenAPI\Client\Model\EntitymanagerCreateAttributeOptionsRequest

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
| **body** | [**\OpenAPI\Client\Model\EntitymanagerCreateAttributeOptionsRequest**](../Model/EntitymanagerCreateAttributeOptionsRequest.md)|  | |

### Return type

[**\OpenAPI\Client\Model\EntitymanagerCreateAttributeOptionsResponse**](../Model/EntitymanagerCreateAttributeOptionsResponse.md)

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
createEntity($body): \OpenAPI\Client\Model\EntitymanagerCreateEntityResponse
```

Create Entity

The CreateEntity endpoint allows users to define and create a new entity with custom attributes, providing a flexible way to represent and manage different data structures within the system. By making a request to this endpoint, users can create a new entity that serves as an abstraction of a product or any other domain-specific object. This endpoint empowers users to define the specific attributes that compose the entity, such as color, composition, technical details, or any other relevant properties. Utilize the CreateEntity endpoint to dynamically extend and adapt your system's data model to accommodate diverse business requirements and efficiently manage various types of entities.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Authorization
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\ProductApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \OpenAPI\Client\Model\EntitymanagerEntity(); // \OpenAPI\Client\Model\EntitymanagerEntity

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
| **body** | [**\OpenAPI\Client\Model\EntitymanagerEntity**](../Model/EntitymanagerEntity.md)|  | |

### Return type

[**\OpenAPI\Client\Model\EntitymanagerCreateEntityResponse**](../Model/EntitymanagerCreateEntityResponse.md)

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
createOptionsList($body): \OpenAPI\Client\Model\EntitymanagerCreateOptionsListResponse
```

Create Options List

The CreateOptionsList endpoint allows users to create an OptionList, which represents a list of predefined options for assigning to an attribute. By making a request to this endpoint with the provided request format, users can create a new OptionList by specifying the relevant tenant ID and providing the OptionList object containing the predefined options. This functionality facilitates efficient management and assignment of predefined attribute values, ensuring consistency and flexibility within the system.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Authorization
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\ProductApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \OpenAPI\Client\Model\EntitymanagerCreateOptionsListRequest(); // \OpenAPI\Client\Model\EntitymanagerCreateOptionsListRequest

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
| **body** | [**\OpenAPI\Client\Model\EntitymanagerCreateOptionsListRequest**](../Model/EntitymanagerCreateOptionsListRequest.md)|  | |

### Return type

[**\OpenAPI\Client\Model\EntitymanagerCreateOptionsListResponse**](../Model/EntitymanagerCreateOptionsListResponse.md)

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
createProductWithAI($body): \OpenAPI\Client\Model\ProductCreateProductWithAIResponse
```

Create Product With AI

The CreateProductWithAI endpoint allows users to create a new product within the system using artificial intelligence (AI) capabilities. By sending a request to this endpoint and providing the necessary input data, users can leverage AI algorithms to enhance and optimize the product creation process.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Authorization
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\ProductApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \OpenAPI\Client\Model\ProductCreateProductWithAIRequest(); // \OpenAPI\Client\Model\ProductCreateProductWithAIRequest

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
| **body** | [**\OpenAPI\Client\Model\ProductCreateProductWithAIRequest**](../Model/ProductCreateProductWithAIRequest.md)|  | |

### Return type

[**\OpenAPI\Client\Model\ProductCreateProductWithAIResponse**](../Model/ProductCreateProductWithAIResponse.md)

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
getAttributeOption($body): \OpenAPI\Client\Model\EntitymanagerGetAttributeOptionResponse
```

Get Attribute Option

Retrieve attribute option details by providing the tenant ID, list code, and option ID. Returns the specified attribute option.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Authorization
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\ProductApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \OpenAPI\Client\Model\EntitymanagerGetAttributeOptionRequest(); // \OpenAPI\Client\Model\EntitymanagerGetAttributeOptionRequest

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
| **body** | [**\OpenAPI\Client\Model\EntitymanagerGetAttributeOptionRequest**](../Model/EntitymanagerGetAttributeOptionRequest.md)|  | |

### Return type

[**\OpenAPI\Client\Model\EntitymanagerGetAttributeOptionResponse**](../Model/EntitymanagerGetAttributeOptionResponse.md)

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
getAttributeOptions($body): \OpenAPI\Client\Model\EntitymanagerGetAttributeOptionsResponse
```

Get Attribute Options

Retrieve a list of attribute options based on the provided tenant ID and list code.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Authorization
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\ProductApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \OpenAPI\Client\Model\EntitymanagerGetAttributeOptionsRequest(); // \OpenAPI\Client\Model\EntitymanagerGetAttributeOptionsRequest

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
| **body** | [**\OpenAPI\Client\Model\EntitymanagerGetAttributeOptionsRequest**](../Model/EntitymanagerGetAttributeOptionsRequest.md)|  | |

### Return type

[**\OpenAPI\Client\Model\EntitymanagerGetAttributeOptionsResponse**](../Model/EntitymanagerGetAttributeOptionsResponse.md)

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
getEntity($body): \OpenAPI\Client\Model\EntitymanagerEntity
```

Get Entity Details

Retrieve details of an entity by providing the tenant ID and either entity data or entity ID. Returns information including ID, type, code, label, relationships, and attributes.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Authorization
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\ProductApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \OpenAPI\Client\Model\EntitymanagerEntityRequest(); // \OpenAPI\Client\Model\EntitymanagerEntityRequest

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
| **body** | [**\OpenAPI\Client\Model\EntitymanagerEntityRequest**](../Model/EntitymanagerEntityRequest.md)|  | |

### Return type

[**\OpenAPI\Client\Model\EntitymanagerEntity**](../Model/EntitymanagerEntity.md)

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
getOptionsList($body): \OpenAPI\Client\Model\EntitymanagerGetOptionsListResponse
```

Get Options List

Retrieve option lists.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Authorization
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\ProductApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \OpenAPI\Client\Model\EntitymanagerGetOptionsListRequest(); // \OpenAPI\Client\Model\EntitymanagerGetOptionsListRequest

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
| **body** | [**\OpenAPI\Client\Model\EntitymanagerGetOptionsListRequest**](../Model/EntitymanagerGetOptionsListRequest.md)|  | |

### Return type

[**\OpenAPI\Client\Model\EntitymanagerGetOptionsListResponse**](../Model/EntitymanagerGetOptionsListResponse.md)

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
getProduct($body): \OpenAPI\Client\Model\ProductGetProductResponse
```

Get Product

The GetProduct endpoint enables users to retrieve a product from the system. By sending a request to this endpoint, users can retrieve a product by providing its unique identifier.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Authorization
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\ProductApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \OpenAPI\Client\Model\ProductGetProductRequest(); // \OpenAPI\Client\Model\ProductGetProductRequest

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
| **body** | [**\OpenAPI\Client\Model\ProductGetProductRequest**](../Model/ProductGetProductRequest.md)|  | |

### Return type

[**\OpenAPI\Client\Model\ProductGetProductResponse**](../Model/ProductGetProductResponse.md)

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
getProductByCode($body): \OpenAPI\Client\Model\ProductGetProductByCodeResponse
```

Get Product By Code

The GetProductByCode endpoint enables users to retrieve a product from the system. By sending a request to this endpoint, users can retrieve a product by providing its unique code.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Authorization
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\ProductApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \OpenAPI\Client\Model\ProductGetProductByCodeRequest(); // \OpenAPI\Client\Model\ProductGetProductByCodeRequest

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
| **body** | [**\OpenAPI\Client\Model\ProductGetProductByCodeRequest**](../Model/ProductGetProductByCodeRequest.md)|  | |

### Return type

[**\OpenAPI\Client\Model\ProductGetProductByCodeResponse**](../Model/ProductGetProductByCodeResponse.md)

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
getProductByUrlKey($body): \OpenAPI\Client\Model\ProductGetProductByUrlKeyResponse
```

Get Product By Url Key

The GetProductByUrlKey endpoint enables users to retrieve a product from the system. By sending a request to this endpoint, users can retrieve a product by providing its unique url key.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Authorization
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\ProductApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \OpenAPI\Client\Model\ProductGetProductByUrlKeyRequest(); // \OpenAPI\Client\Model\ProductGetProductByUrlKeyRequest

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
| **body** | [**\OpenAPI\Client\Model\ProductGetProductByUrlKeyRequest**](../Model/ProductGetProductByUrlKeyRequest.md)|  | |

### Return type

[**\OpenAPI\Client\Model\ProductGetProductByUrlKeyResponse**](../Model/ProductGetProductByUrlKeyResponse.md)

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
getProductDataInReview($body): \OpenAPI\Client\Model\ProductGetProductDataInReviewResponse
```

Get Product Data In Review

The GetProductDataInReview endpoint allows users to retrieve product data that is currently under review. By making a request to this endpoint, users can access detailed information about the product data that is pending approval or review by authorized personnel. This functionality provides transparency and visibility into the product data review process, enabling users to track the status and progress of product data submissions.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Authorization
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\ProductApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \OpenAPI\Client\Model\ProductGetProductDataInReviewRequest(); // \OpenAPI\Client\Model\ProductGetProductDataInReviewRequest

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
| **body** | [**\OpenAPI\Client\Model\ProductGetProductDataInReviewRequest**](../Model/ProductGetProductDataInReviewRequest.md)|  | |

### Return type

[**\OpenAPI\Client\Model\ProductGetProductDataInReviewResponse**](../Model/ProductGetProductDataInReviewResponse.md)

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
listAttributeOptions($body): \OpenAPI\Client\Model\EntitymanagerListAttributeOptionsResponse
```

List Attribute Options

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Authorization
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\ProductApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \OpenAPI\Client\Model\EntitymanagerListAttributeOptionsRequest(); // \OpenAPI\Client\Model\EntitymanagerListAttributeOptionsRequest

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
| **body** | [**\OpenAPI\Client\Model\EntitymanagerListAttributeOptionsRequest**](../Model/EntitymanagerListAttributeOptionsRequest.md)|  | |

### Return type

[**\OpenAPI\Client\Model\EntitymanagerListAttributeOptionsResponse**](../Model/EntitymanagerListAttributeOptionsResponse.md)

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
listEntities($body): \OpenAPI\Client\Model\EntitymanagerListEntitiesResponse
```

List Entities

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Authorization
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\ProductApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \OpenAPI\Client\Model\EntitymanagerListEntitiesRequest(); // \OpenAPI\Client\Model\EntitymanagerListEntitiesRequest

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
| **body** | [**\OpenAPI\Client\Model\EntitymanagerListEntitiesRequest**](../Model/EntitymanagerListEntitiesRequest.md)|  | |

### Return type

[**\OpenAPI\Client\Model\EntitymanagerListEntitiesResponse**](../Model/EntitymanagerListEntitiesResponse.md)

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
listOptionsLists($body): \OpenAPI\Client\Model\EntitymanagerListOptionsListsResponse
```

List Options Lists

The ListOptionsLists endpoint allows users to retrieve a list of OptionLists available in the system. By making a request to this endpoint with the provided request format, users can obtain all the OptionLists associated with the specified tenant. This functionality enables users to access and manage the predefined options available for various attributes within the system. Utilizing the ListOptionsLists endpoint provides a convenient way to retrieve and work with OptionLists, facilitating efficient management of attribute options and ensuring consistency in attribute values throughout the system.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Authorization
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\ProductApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \OpenAPI\Client\Model\EntitymanagerListOptionsListsRequest(); // \OpenAPI\Client\Model\EntitymanagerListOptionsListsRequest

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
| **body** | [**\OpenAPI\Client\Model\EntitymanagerListOptionsListsRequest**](../Model/EntitymanagerListOptionsListsRequest.md)|  | |

### Return type

[**\OpenAPI\Client\Model\EntitymanagerListOptionsListsResponse**](../Model/EntitymanagerListOptionsListsResponse.md)

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
listProducts($body): \OpenAPI\Client\Model\ProductListProductsResponse
```

List Products

The ListProducts endpoint provides users with the ability to retrieve a filtered list of products based on specific criteria. By including filter parameters in the request, users can customize the response to only include products that meet certain conditions, such as price range, category, availability, or any other relevant attributes. This endpoint empowers users to efficiently narrow down the product selection and retrieve tailored results.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Authorization
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\ProductApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \OpenAPI\Client\Model\ProductListProductsRequest(); // \OpenAPI\Client\Model\ProductListProductsRequest

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
| **body** | [**\OpenAPI\Client\Model\ProductListProductsRequest**](../Model/ProductListProductsRequest.md)|  | |

### Return type

[**\OpenAPI\Client\Model\ProductListProductsResponse**](../Model/ProductListProductsResponse.md)

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
listProductsByIds($body): \OpenAPI\Client\Model\ProductListProductsByIdsResponse
```

List Products By Ids

The ListProductsByIds endpoint allows users to retrieve a list of products based on provided IDs. By making a request to this endpoint and specifying a set of product IDs, users can retrieve detailed information about the corresponding products. This endpoint facilitates efficient retrieval of specific products, enabling applications to display accurate and targeted product information to users.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Authorization
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\ProductApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \OpenAPI\Client\Model\ProductListProductsByIdsRequest(); // \OpenAPI\Client\Model\ProductListProductsByIdsRequest

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
| **body** | [**\OpenAPI\Client\Model\ProductListProductsByIdsRequest**](../Model/ProductListProductsByIdsRequest.md)|  | |

### Return type

[**\OpenAPI\Client\Model\ProductListProductsByIdsResponse**](../Model/ProductListProductsByIdsResponse.md)

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
listProductsBySku($body): \OpenAPI\Client\Model\ProductListProductsBySkuResponse
```

List Products By Sku

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Authorization
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\ProductApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \OpenAPI\Client\Model\ProductListProductsBySkuRequest(); // \OpenAPI\Client\Model\ProductListProductsBySkuRequest

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
| **body** | [**\OpenAPI\Client\Model\ProductListProductsBySkuRequest**](../Model/ProductListProductsBySkuRequest.md)|  | |

### Return type

[**\OpenAPI\Client\Model\ProductListProductsBySkuResponse**](../Model/ProductListProductsBySkuResponse.md)

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
listVariantsBySku($body): \OpenAPI\Client\Model\ProductListVariantsBySkuResponse
```

List Product Variants By Sku

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Authorization
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\ProductApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \OpenAPI\Client\Model\ProductListVariantsBySkuRequest(); // \OpenAPI\Client\Model\ProductListVariantsBySkuRequest

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
| **body** | [**\OpenAPI\Client\Model\ProductListVariantsBySkuRequest**](../Model/ProductListVariantsBySkuRequest.md)|  | |

### Return type

[**\OpenAPI\Client\Model\ProductListVariantsBySkuResponse**](../Model/ProductListVariantsBySkuResponse.md)

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
productBulkCreateAttribute($body): \OpenAPI\Client\Model\EntitymanagerBulkCreateAttributeResponse
```



Allow creation of multiple attributes. If any attribute is invalid, an error will be returned with more details, and in the response body, the attributes created will be returned.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Authorization
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\ProductApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \OpenAPI\Client\Model\EntitymanagerBulkCreateAttributeRequest(); // \OpenAPI\Client\Model\EntitymanagerBulkCreateAttributeRequest

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
| **body** | [**\OpenAPI\Client\Model\EntitymanagerBulkCreateAttributeRequest**](../Model/EntitymanagerBulkCreateAttributeRequest.md)|  | |

### Return type

[**\OpenAPI\Client\Model\EntitymanagerBulkCreateAttributeResponse**](../Model/EntitymanagerBulkCreateAttributeResponse.md)

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
productBulkUpdate($body): \OpenAPI\Client\Model\ProductBulkUpdateResponse
```



This operation is asynchronous and may complete after the response.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Authorization
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\ProductApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \OpenAPI\Client\Model\ProductBulkUpdateRequest(); // \OpenAPI\Client\Model\ProductBulkUpdateRequest

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
| **body** | [**\OpenAPI\Client\Model\ProductBulkUpdateRequest**](../Model/ProductBulkUpdateRequest.md)|  | |

### Return type

[**\OpenAPI\Client\Model\ProductBulkUpdateResponse**](../Model/ProductBulkUpdateResponse.md)

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
productCreateAttributeGroup($body): \OpenAPI\Client\Model\EntitymanagerAttributeGroup
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Authorization
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\ProductApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \OpenAPI\Client\Model\EntitymanagerCreateAttributeGroupRequest(); // \OpenAPI\Client\Model\EntitymanagerCreateAttributeGroupRequest

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
| **body** | [**\OpenAPI\Client\Model\EntitymanagerCreateAttributeGroupRequest**](../Model/EntitymanagerCreateAttributeGroupRequest.md)|  | |

### Return type

[**\OpenAPI\Client\Model\EntitymanagerAttributeGroup**](../Model/EntitymanagerAttributeGroup.md)

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
productCreateProduct($body): \OpenAPI\Client\Model\ProductCreateProductResponse
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Authorization
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\ProductApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \OpenAPI\Client\Model\ProductCreateProductRequest(); // \OpenAPI\Client\Model\ProductCreateProductRequest | The CreateProductRequest message is used to create a new product within the system. It contains various fields that allow specifying the details and attributes of the product.

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
| **body** | [**\OpenAPI\Client\Model\ProductCreateProductRequest**](../Model/ProductCreateProductRequest.md)| The CreateProductRequest message is used to create a new product within the system. It contains various fields that allow specifying the details and attributes of the product. | |

### Return type

[**\OpenAPI\Client\Model\ProductCreateProductResponse**](../Model/ProductCreateProductResponse.md)

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
productCreateProductV2($body): \OpenAPI\Client\Model\ProductCreateProductResponseV2
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Authorization
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\ProductApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \OpenAPI\Client\Model\ProductCreateProductRequestV2(); // \OpenAPI\Client\Model\ProductCreateProductRequestV2

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
| **body** | [**\OpenAPI\Client\Model\ProductCreateProductRequestV2**](../Model/ProductCreateProductRequestV2.md)|  | |

### Return type

[**\OpenAPI\Client\Model\ProductCreateProductResponseV2**](../Model/ProductCreateProductResponseV2.md)

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
productDelete($body): \OpenAPI\Client\Model\ProductDeleteResponse
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Authorization
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\ProductApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \OpenAPI\Client\Model\ProductDeleteRequest(); // \OpenAPI\Client\Model\ProductDeleteRequest

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
| **body** | [**\OpenAPI\Client\Model\ProductDeleteRequest**](../Model/ProductDeleteRequest.md)|  | |

### Return type

[**\OpenAPI\Client\Model\ProductDeleteResponse**](../Model/ProductDeleteResponse.md)

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
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\ProductApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \OpenAPI\Client\Model\EntitymanagerDeleteAttributeRequest(); // \OpenAPI\Client\Model\EntitymanagerDeleteAttributeRequest

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
| **body** | [**\OpenAPI\Client\Model\EntitymanagerDeleteAttributeRequest**](../Model/EntitymanagerDeleteAttributeRequest.md)|  | |

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
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\ProductApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \OpenAPI\Client\Model\ProductDeleteProductRequest(); // \OpenAPI\Client\Model\ProductDeleteProductRequest

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
| **body** | [**\OpenAPI\Client\Model\ProductDeleteProductRequest**](../Model/ProductDeleteProductRequest.md)|  | |

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
productGetAttributeGroup($body): \OpenAPI\Client\Model\EntitymanagerAttributeGroup
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Authorization
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\ProductApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \OpenAPI\Client\Model\EntitymanagerGetAttributeGroupRequest(); // \OpenAPI\Client\Model\EntitymanagerGetAttributeGroupRequest

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
| **body** | [**\OpenAPI\Client\Model\EntitymanagerGetAttributeGroupRequest**](../Model/EntitymanagerGetAttributeGroupRequest.md)|  | |

### Return type

[**\OpenAPI\Client\Model\EntitymanagerAttributeGroup**](../Model/EntitymanagerAttributeGroup.md)

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
productListAttributeGroups($body): \OpenAPI\Client\Model\EntitymanagerListAttributeGroupsResponse
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Authorization
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\ProductApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \OpenAPI\Client\Model\EntitymanagerListAttributeGroupsRequest(); // \OpenAPI\Client\Model\EntitymanagerListAttributeGroupsRequest

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
| **body** | [**\OpenAPI\Client\Model\EntitymanagerListAttributeGroupsRequest**](../Model/EntitymanagerListAttributeGroupsRequest.md)|  | |

### Return type

[**\OpenAPI\Client\Model\EntitymanagerListAttributeGroupsResponse**](../Model/EntitymanagerListAttributeGroupsResponse.md)

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
productUpdateAttribute($body): \OpenAPI\Client\Model\EntitymanagerAttribute
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Authorization
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\ProductApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \OpenAPI\Client\Model\EntitymanagerUpdateAttributeRequest(); // \OpenAPI\Client\Model\EntitymanagerUpdateAttributeRequest

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
| **body** | [**\OpenAPI\Client\Model\EntitymanagerUpdateAttributeRequest**](../Model/EntitymanagerUpdateAttributeRequest.md)|  | |

### Return type

[**\OpenAPI\Client\Model\EntitymanagerAttribute**](../Model/EntitymanagerAttribute.md)

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
productUpdateAttributeGroup($body): \OpenAPI\Client\Model\EntitymanagerAttributeGroup
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Authorization
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\ProductApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \OpenAPI\Client\Model\EntitymanagerUpdateAttributeGroupRequest(); // \OpenAPI\Client\Model\EntitymanagerUpdateAttributeGroupRequest

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
| **body** | [**\OpenAPI\Client\Model\EntitymanagerUpdateAttributeGroupRequest**](../Model/EntitymanagerUpdateAttributeGroupRequest.md)|  | |

### Return type

[**\OpenAPI\Client\Model\EntitymanagerAttributeGroup**](../Model/EntitymanagerAttributeGroup.md)

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
productUpdateProduct($body): \OpenAPI\Client\Model\ProductUpdateProductResponse
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Authorization
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\ProductApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \OpenAPI\Client\Model\ProductUpdateProductRequest(); // \OpenAPI\Client\Model\ProductUpdateProductRequest

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
| **body** | [**\OpenAPI\Client\Model\ProductUpdateProductRequest**](../Model/ProductUpdateProductRequest.md)|  | |

### Return type

[**\OpenAPI\Client\Model\ProductUpdateProductResponse**](../Model/ProductUpdateProductResponse.md)

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
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\ProductApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \OpenAPI\Client\Model\ProductUpdateProductRequestV2(); // \OpenAPI\Client\Model\ProductUpdateProductRequestV2

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
| **body** | [**\OpenAPI\Client\Model\ProductUpdateProductRequestV2**](../Model/ProductUpdateProductRequestV2.md)|  | |

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
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\ProductApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \OpenAPI\Client\Model\ProductRemoveMediaGalleryEntryRequest(); // \OpenAPI\Client\Model\ProductRemoveMediaGalleryEntryRequest

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
| **body** | [**\OpenAPI\Client\Model\ProductRemoveMediaGalleryEntryRequest**](../Model/ProductRemoveMediaGalleryEntryRequest.md)|  | |

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
updateAttributeOptions($body): \OpenAPI\Client\Model\EntitymanagerUpdateAttributeOptionsResponse
```

Update Attribute Options

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Authorization
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\ProductApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \OpenAPI\Client\Model\EntitymanagerUpdateAttributeOptionsRequest(); // \OpenAPI\Client\Model\EntitymanagerUpdateAttributeOptionsRequest

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
| **body** | [**\OpenAPI\Client\Model\EntitymanagerUpdateAttributeOptionsRequest**](../Model/EntitymanagerUpdateAttributeOptionsRequest.md)|  | |

### Return type

[**\OpenAPI\Client\Model\EntitymanagerUpdateAttributeOptionsResponse**](../Model/EntitymanagerUpdateAttributeOptionsResponse.md)

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
updateDataToBeReviewed($body): \OpenAPI\Client\Model\ProductGetEnhanceProductDataWithAIStatusResponse
```

Get Enhance Product Data With AI Status

The GetEnhanceProductDataWithAIStatus endpoint allows users to retrieve the status of a product data enhancement process using artificial intelligence (AI) capabilities. By making a request to this endpoint and providing the necessary input data, users can check the progress and completion status of the AI-driven product data enhancement operation. This functionality provides visibility and transparency into the AI processing of product data, enabling users to monitor and track the status of the enhancement process.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Authorization
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\ProductApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \OpenAPI\Client\Model\ProductGetEnhanceProductDataWithAIStatusRequest(); // \OpenAPI\Client\Model\ProductGetEnhanceProductDataWithAIStatusRequest

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
| **body** | [**\OpenAPI\Client\Model\ProductGetEnhanceProductDataWithAIStatusRequest**](../Model/ProductGetEnhanceProductDataWithAIStatusRequest.md)|  | |

### Return type

[**\OpenAPI\Client\Model\ProductGetEnhanceProductDataWithAIStatusResponse**](../Model/ProductGetEnhanceProductDataWithAIStatusResponse.md)

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
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\ProductApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \OpenAPI\Client\Model\ProductUpdateDataToBeReviewedRequest(); // \OpenAPI\Client\Model\ProductUpdateDataToBeReviewedRequest

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
| **body** | [**\OpenAPI\Client\Model\ProductUpdateDataToBeReviewedRequest**](../Model/ProductUpdateDataToBeReviewedRequest.md)|  | |

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
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\ProductApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \OpenAPI\Client\Model\ProductUpdateMediaGalleryEntryRequest(); // \OpenAPI\Client\Model\ProductUpdateMediaGalleryEntryRequest

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
| **body** | [**\OpenAPI\Client\Model\ProductUpdateMediaGalleryEntryRequest**](../Model/ProductUpdateMediaGalleryEntryRequest.md)|  | |

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
updateOptionsList($body): \OpenAPI\Client\Model\EntitymanagerUpdateOptionsListResponse
```

Update Options List

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Authorization
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\ProductApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \OpenAPI\Client\Model\EntitymanagerUpdateOptionsListRequest(); // \OpenAPI\Client\Model\EntitymanagerUpdateOptionsListRequest

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
| **body** | [**\OpenAPI\Client\Model\EntitymanagerUpdateOptionsListRequest**](../Model/EntitymanagerUpdateOptionsListRequest.md)|  | |

### Return type

[**\OpenAPI\Client\Model\EntitymanagerUpdateOptionsListResponse**](../Model/EntitymanagerUpdateOptionsListResponse.md)

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
updateProductWithAI($body): \OpenAPI\Client\Model\ProductUpdateProductWithAIResponse
```

Update Product With AI

The UpdateProductWithAI endpoint allows users to update an existing product within the system using artificial intelligence (AI) capabilities. By sending a request to this endpoint and providing the necessary input data, users can leverage AI algorithms to enhance and optimize the product update process.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Authorization
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\ProductApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \OpenAPI\Client\Model\ProductUpdateProductWithAIRequest(); // \OpenAPI\Client\Model\ProductUpdateProductWithAIRequest

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
| **body** | [**\OpenAPI\Client\Model\ProductUpdateProductWithAIRequest**](../Model/ProductUpdateProductWithAIRequest.md)|  | |

### Return type

[**\OpenAPI\Client\Model\ProductUpdateProductWithAIResponse**](../Model/ProductUpdateProductWithAIResponse.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
