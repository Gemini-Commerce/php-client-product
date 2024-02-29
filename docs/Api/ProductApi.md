# GeminiCommerce\Product\ProductApi

All URIs are relative to https://product.api.gogemini.io, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**productAddMediaGalleryEntry()**](ProductApi.md#productAddMediaGalleryEntry) | **POST** /product.Product/AddMediaGalleryEntry |  |
| [**productBulkAddAssetsEntries()**](ProductApi.md#productBulkAddAssetsEntries) | **POST** /product.Product/BulkAddAssetsEntries | Assets endpoints |
| [**productBulkCreateAttribute()**](ProductApi.md#productBulkCreateAttribute) | **POST** /product.Product/BulkCreateAttribute |  |
| [**productBulkDeleteProducts()**](ProductApi.md#productBulkDeleteProducts) | **POST** /product.Product/BulkDeleteProducts |  |
| [**productBulkRemoveAssetsEntries()**](ProductApi.md#productBulkRemoveAssetsEntries) | **POST** /product.Product/BulkRemoveAssetsEntries |  |
| [**productBulkUpdate()**](ProductApi.md#productBulkUpdate) | **POST** /product.Product/BulkUpdate |  |
| [**productBulkUpdateAssetsEntries()**](ProductApi.md#productBulkUpdateAssetsEntries) | **POST** /product.Product/BulkUpdateAssetsEntries |  |
| [**productBulkUpdateV2()**](ProductApi.md#productBulkUpdateV2) | **POST** /product.Product/BulkUpdateV2 |  |
| [**productCreateAttributeGroup()**](ProductApi.md#productCreateAttributeGroup) | **POST** /product.Product/CreateAttributeGroup |  |
| [**productCreateAttributeOptions()**](ProductApi.md#productCreateAttributeOptions) | **POST** /product.Product/CreateAttributeOptions |  |
| [**productCreateEntity()**](ProductApi.md#productCreateEntity) | **POST** /product.Product/CreateEntity |  |
| [**productCreateOptionsList()**](ProductApi.md#productCreateOptionsList) | **POST** /product.Product/CreateOptionsList |  |
| [**productCreateProduct()**](ProductApi.md#productCreateProduct) | **POST** /product.Product/CreateProduct |  |
| [**productCreateProductV2()**](ProductApi.md#productCreateProductV2) | **POST** /product.Product/CreateProductV2 |  |
| [**productDelete()**](ProductApi.md#productDelete) | **POST** /product.Product/Delete |  |
| [**productDeleteAttribute()**](ProductApi.md#productDeleteAttribute) | **POST** /product.Product/DeleteAttribute |  |
| [**productDeleteProduct()**](ProductApi.md#productDeleteProduct) | **POST** /product.Product/DeleteProduct |  |
| [**productGetAttributeGroup()**](ProductApi.md#productGetAttributeGroup) | **POST** /product.Product/GetAttributeGroup |  |
| [**productGetAttributeOption()**](ProductApi.md#productGetAttributeOption) | **POST** /product.Product/GetAttributeOption |  |
| [**productGetAttributeOptions()**](ProductApi.md#productGetAttributeOptions) | **POST** /product.Product/GetAttributeOptions |  |
| [**productGetEntity()**](ProductApi.md#productGetEntity) | **POST** /product.Product/GetEntity |  |
| [**productGetOptionsList()**](ProductApi.md#productGetOptionsList) | **POST** /product.Product/GetOptionsList |  |
| [**productGetProduct()**](ProductApi.md#productGetProduct) | **POST** /product.Product/GetProduct |  |
| [**productGetProductByCode()**](ProductApi.md#productGetProductByCode) | **POST** /product.Product/GetProductByCode |  |
| [**productGetProductByUrlKey()**](ProductApi.md#productGetProductByUrlKey) | **POST** /product.Product/GetProductByUrlKey |  |
| [**productListAttributeGroups()**](ProductApi.md#productListAttributeGroups) | **POST** /product.Product/ListAttributeGroups | Attribute Groups endpoints |
| [**productListAttributeOptions()**](ProductApi.md#productListAttributeOptions) | **POST** /product.Product/ListAttributeOptions |  |
| [**productListEntities()**](ProductApi.md#productListEntities) | **POST** /product.Product/ListEntities |  |
| [**productListOptionsLists()**](ProductApi.md#productListOptionsLists) | **POST** /product.Product/ListOptionsLists |  |
| [**productListProducts()**](ProductApi.md#productListProducts) | **POST** /product.Product/ListProducts |  |
| [**productListProductsByIds()**](ProductApi.md#productListProductsByIds) | **POST** /product.Product/ListProductsByIds |  |
| [**productListProductsBySku()**](ProductApi.md#productListProductsBySku) | **POST** /product.Product/ListProductsBySku |  |
| [**productListVariantsBySku()**](ProductApi.md#productListVariantsBySku) | **POST** /product.Product/ListVariantsBySku |  |
| [**productRemoveMediaGalleryEntry()**](ProductApi.md#productRemoveMediaGalleryEntry) | **POST** /product.Product/RemoveMediaGalleryEntry |  |
| [**productUpdateAttribute()**](ProductApi.md#productUpdateAttribute) | **POST** /product.Product/UpdateAttribute |  |
| [**productUpdateAttributeGroup()**](ProductApi.md#productUpdateAttributeGroup) | **POST** /product.Product/UpdateAttributeGroup |  |
| [**productUpdateAttributeOptions()**](ProductApi.md#productUpdateAttributeOptions) | **POST** /product.Product/UpdateAttributeOptions | rpc GetAttributeOptionByCode (product.entitymanager.GetAttributeOptionByCodeRequest) returns (product.entitymanager.GetAttributeOptionByCodeResponse) {} |
| [**productUpdateMediaGalleryEntry()**](ProductApi.md#productUpdateMediaGalleryEntry) | **POST** /product.Product/UpdateMediaGalleryEntry |  |
| [**productUpdateOptionsList()**](ProductApi.md#productUpdateOptionsList) | **POST** /product.Product/UpdateOptionsList |  |
| [**productUpdateProduct()**](ProductApi.md#productUpdateProduct) | **POST** /product.Product/UpdateProduct |  |
| [**productUpdateProductV2()**](ProductApi.md#productUpdateProductV2) | **POST** /product.Product/UpdateProductV2 |  |


## `productAddMediaGalleryEntry()`

```php
productAddMediaGalleryEntry($body): \GeminiCommerce\Product\Model\ProductAddMediaGalleryEntryResponse
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new GeminiCommerce\Product\Api\ProductApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \GeminiCommerce\Product\Model\ProductAddMediaGalleryEntryRequest(); // \GeminiCommerce\Product\Model\ProductAddMediaGalleryEntryRequest

try {
    $result = $apiInstance->productAddMediaGalleryEntry($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductApi->productAddMediaGalleryEntry: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **body** | [**\GeminiCommerce\Product\Model\ProductAddMediaGalleryEntryRequest**](../Model/ProductAddMediaGalleryEntryRequest.md)|  | |

### Return type

[**\GeminiCommerce\Product\Model\ProductAddMediaGalleryEntryResponse**](../Model/ProductAddMediaGalleryEntryResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `productBulkAddAssetsEntries()`

```php
productBulkAddAssetsEntries($body): \GeminiCommerce\Product\Model\ProductBulkAddAssetsEntriesResponse
```

Assets endpoints

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new GeminiCommerce\Product\Api\ProductApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \GeminiCommerce\Product\Model\ProductBulkAddAssetsEntriesRequest(); // \GeminiCommerce\Product\Model\ProductBulkAddAssetsEntriesRequest

try {
    $result = $apiInstance->productBulkAddAssetsEntries($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductApi->productBulkAddAssetsEntries: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **body** | [**\GeminiCommerce\Product\Model\ProductBulkAddAssetsEntriesRequest**](../Model/ProductBulkAddAssetsEntriesRequest.md)|  | |

### Return type

[**\GeminiCommerce\Product\Model\ProductBulkAddAssetsEntriesResponse**](../Model/ProductBulkAddAssetsEntriesResponse.md)

### Authorization

No authorization required

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



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new GeminiCommerce\Product\Api\ProductApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
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

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `productBulkDeleteProducts()`

```php
productBulkDeleteProducts($body): object
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new GeminiCommerce\Product\Api\ProductApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \GeminiCommerce\Product\Model\ProductBulkDeleteProductsRequest(); // \GeminiCommerce\Product\Model\ProductBulkDeleteProductsRequest

try {
    $result = $apiInstance->productBulkDeleteProducts($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductApi->productBulkDeleteProducts: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **body** | [**\GeminiCommerce\Product\Model\ProductBulkDeleteProductsRequest**](../Model/ProductBulkDeleteProductsRequest.md)|  | |

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `productBulkRemoveAssetsEntries()`

```php
productBulkRemoveAssetsEntries($body): object
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new GeminiCommerce\Product\Api\ProductApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \GeminiCommerce\Product\Model\ProductBulkRemoveAssetsEntriesRequest(); // \GeminiCommerce\Product\Model\ProductBulkRemoveAssetsEntriesRequest

try {
    $result = $apiInstance->productBulkRemoveAssetsEntries($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductApi->productBulkRemoveAssetsEntries: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **body** | [**\GeminiCommerce\Product\Model\ProductBulkRemoveAssetsEntriesRequest**](../Model/ProductBulkRemoveAssetsEntriesRequest.md)|  | |

### Return type

**object**

### Authorization

No authorization required

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



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new GeminiCommerce\Product\Api\ProductApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
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

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `productBulkUpdateAssetsEntries()`

```php
productBulkUpdateAssetsEntries($body): \GeminiCommerce\Product\Model\ProductBulkUpdateAssetsEntriesResponse
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new GeminiCommerce\Product\Api\ProductApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \GeminiCommerce\Product\Model\ProductBulkUpdateAssetsEntriesRequest(); // \GeminiCommerce\Product\Model\ProductBulkUpdateAssetsEntriesRequest

try {
    $result = $apiInstance->productBulkUpdateAssetsEntries($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductApi->productBulkUpdateAssetsEntries: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **body** | [**\GeminiCommerce\Product\Model\ProductBulkUpdateAssetsEntriesRequest**](../Model/ProductBulkUpdateAssetsEntriesRequest.md)|  | |

### Return type

[**\GeminiCommerce\Product\Model\ProductBulkUpdateAssetsEntriesResponse**](../Model/ProductBulkUpdateAssetsEntriesResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `productBulkUpdateV2()`

```php
productBulkUpdateV2($body): \GeminiCommerce\Product\Model\ProductBulkUpdateResponseV2
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new GeminiCommerce\Product\Api\ProductApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \GeminiCommerce\Product\Model\ProductBulkUpdateRequestV2(); // \GeminiCommerce\Product\Model\ProductBulkUpdateRequestV2

try {
    $result = $apiInstance->productBulkUpdateV2($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductApi->productBulkUpdateV2: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **body** | [**\GeminiCommerce\Product\Model\ProductBulkUpdateRequestV2**](../Model/ProductBulkUpdateRequestV2.md)|  | |

### Return type

[**\GeminiCommerce\Product\Model\ProductBulkUpdateResponseV2**](../Model/ProductBulkUpdateResponseV2.md)

### Authorization

No authorization required

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



$apiInstance = new GeminiCommerce\Product\Api\ProductApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
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

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `productCreateAttributeOptions()`

```php
productCreateAttributeOptions($body): \GeminiCommerce\Product\Model\EntitymanagerCreateAttributeOptionsResponse
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new GeminiCommerce\Product\Api\ProductApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \GeminiCommerce\Product\Model\EntitymanagerCreateAttributeOptionsRequest(); // \GeminiCommerce\Product\Model\EntitymanagerCreateAttributeOptionsRequest

try {
    $result = $apiInstance->productCreateAttributeOptions($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductApi->productCreateAttributeOptions: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **body** | [**\GeminiCommerce\Product\Model\EntitymanagerCreateAttributeOptionsRequest**](../Model/EntitymanagerCreateAttributeOptionsRequest.md)|  | |

### Return type

[**\GeminiCommerce\Product\Model\EntitymanagerCreateAttributeOptionsResponse**](../Model/EntitymanagerCreateAttributeOptionsResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `productCreateEntity()`

```php
productCreateEntity($body): \GeminiCommerce\Product\Model\EntitymanagerCreateEntityResponse
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new GeminiCommerce\Product\Api\ProductApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \GeminiCommerce\Product\Model\EntitymanagerEntity(); // \GeminiCommerce\Product\Model\EntitymanagerEntity

try {
    $result = $apiInstance->productCreateEntity($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductApi->productCreateEntity: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **body** | [**\GeminiCommerce\Product\Model\EntitymanagerEntity**](../Model/EntitymanagerEntity.md)|  | |

### Return type

[**\GeminiCommerce\Product\Model\EntitymanagerCreateEntityResponse**](../Model/EntitymanagerCreateEntityResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `productCreateOptionsList()`

```php
productCreateOptionsList($body): \GeminiCommerce\Product\Model\EntitymanagerCreateOptionsListResponse
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new GeminiCommerce\Product\Api\ProductApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \GeminiCommerce\Product\Model\EntitymanagerCreateOptionsListRequest(); // \GeminiCommerce\Product\Model\EntitymanagerCreateOptionsListRequest

try {
    $result = $apiInstance->productCreateOptionsList($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductApi->productCreateOptionsList: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **body** | [**\GeminiCommerce\Product\Model\EntitymanagerCreateOptionsListRequest**](../Model/EntitymanagerCreateOptionsListRequest.md)|  | |

### Return type

[**\GeminiCommerce\Product\Model\EntitymanagerCreateOptionsListResponse**](../Model/EntitymanagerCreateOptionsListResponse.md)

### Authorization

No authorization required

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



$apiInstance = new GeminiCommerce\Product\Api\ProductApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \GeminiCommerce\Product\Model\ProductCreateProductRequest(); // \GeminiCommerce\Product\Model\ProductCreateProductRequest

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
| **body** | [**\GeminiCommerce\Product\Model\ProductCreateProductRequest**](../Model/ProductCreateProductRequest.md)|  | |

### Return type

[**\GeminiCommerce\Product\Model\ProductCreateProductResponse**](../Model/ProductCreateProductResponse.md)

### Authorization

No authorization required

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



$apiInstance = new GeminiCommerce\Product\Api\ProductApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
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

No authorization required

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



$apiInstance = new GeminiCommerce\Product\Api\ProductApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
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

No authorization required

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



$apiInstance = new GeminiCommerce\Product\Api\ProductApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
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

No authorization required

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



$apiInstance = new GeminiCommerce\Product\Api\ProductApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
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

No authorization required

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



$apiInstance = new GeminiCommerce\Product\Api\ProductApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
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

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `productGetAttributeOption()`

```php
productGetAttributeOption($body): \GeminiCommerce\Product\Model\EntitymanagerGetAttributeOptionResponse
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new GeminiCommerce\Product\Api\ProductApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \GeminiCommerce\Product\Model\EntitymanagerGetAttributeOptionRequest(); // \GeminiCommerce\Product\Model\EntitymanagerGetAttributeOptionRequest

try {
    $result = $apiInstance->productGetAttributeOption($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductApi->productGetAttributeOption: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **body** | [**\GeminiCommerce\Product\Model\EntitymanagerGetAttributeOptionRequest**](../Model/EntitymanagerGetAttributeOptionRequest.md)|  | |

### Return type

[**\GeminiCommerce\Product\Model\EntitymanagerGetAttributeOptionResponse**](../Model/EntitymanagerGetAttributeOptionResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `productGetAttributeOptions()`

```php
productGetAttributeOptions($body): \GeminiCommerce\Product\Model\EntitymanagerGetAttributeOptionsResponse
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new GeminiCommerce\Product\Api\ProductApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \GeminiCommerce\Product\Model\EntitymanagerGetAttributeOptionsRequest(); // \GeminiCommerce\Product\Model\EntitymanagerGetAttributeOptionsRequest

try {
    $result = $apiInstance->productGetAttributeOptions($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductApi->productGetAttributeOptions: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **body** | [**\GeminiCommerce\Product\Model\EntitymanagerGetAttributeOptionsRequest**](../Model/EntitymanagerGetAttributeOptionsRequest.md)|  | |

### Return type

[**\GeminiCommerce\Product\Model\EntitymanagerGetAttributeOptionsResponse**](../Model/EntitymanagerGetAttributeOptionsResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `productGetEntity()`

```php
productGetEntity($body): \GeminiCommerce\Product\Model\EntitymanagerEntity
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new GeminiCommerce\Product\Api\ProductApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \GeminiCommerce\Product\Model\EntitymanagerEntityRequest(); // \GeminiCommerce\Product\Model\EntitymanagerEntityRequest

try {
    $result = $apiInstance->productGetEntity($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductApi->productGetEntity: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **body** | [**\GeminiCommerce\Product\Model\EntitymanagerEntityRequest**](../Model/EntitymanagerEntityRequest.md)|  | |

### Return type

[**\GeminiCommerce\Product\Model\EntitymanagerEntity**](../Model/EntitymanagerEntity.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `productGetOptionsList()`

```php
productGetOptionsList($body): \GeminiCommerce\Product\Model\EntitymanagerGetOptionsListResponse
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new GeminiCommerce\Product\Api\ProductApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \GeminiCommerce\Product\Model\EntitymanagerGetOptionsListRequest(); // \GeminiCommerce\Product\Model\EntitymanagerGetOptionsListRequest

try {
    $result = $apiInstance->productGetOptionsList($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductApi->productGetOptionsList: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **body** | [**\GeminiCommerce\Product\Model\EntitymanagerGetOptionsListRequest**](../Model/EntitymanagerGetOptionsListRequest.md)|  | |

### Return type

[**\GeminiCommerce\Product\Model\EntitymanagerGetOptionsListResponse**](../Model/EntitymanagerGetOptionsListResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `productGetProduct()`

```php
productGetProduct($body): \GeminiCommerce\Product\Model\ProductGetProductResponse
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new GeminiCommerce\Product\Api\ProductApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \GeminiCommerce\Product\Model\ProductGetProductRequest(); // \GeminiCommerce\Product\Model\ProductGetProductRequest

try {
    $result = $apiInstance->productGetProduct($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductApi->productGetProduct: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **body** | [**\GeminiCommerce\Product\Model\ProductGetProductRequest**](../Model/ProductGetProductRequest.md)|  | |

### Return type

[**\GeminiCommerce\Product\Model\ProductGetProductResponse**](../Model/ProductGetProductResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `productGetProductByCode()`

```php
productGetProductByCode($body): \GeminiCommerce\Product\Model\ProductGetProductByCodeResponse
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new GeminiCommerce\Product\Api\ProductApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \GeminiCommerce\Product\Model\ProductGetProductByCodeRequest(); // \GeminiCommerce\Product\Model\ProductGetProductByCodeRequest

try {
    $result = $apiInstance->productGetProductByCode($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductApi->productGetProductByCode: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **body** | [**\GeminiCommerce\Product\Model\ProductGetProductByCodeRequest**](../Model/ProductGetProductByCodeRequest.md)|  | |

### Return type

[**\GeminiCommerce\Product\Model\ProductGetProductByCodeResponse**](../Model/ProductGetProductByCodeResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `productGetProductByUrlKey()`

```php
productGetProductByUrlKey($body): \GeminiCommerce\Product\Model\ProductGetProductByUrlKeyResponse
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new GeminiCommerce\Product\Api\ProductApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \GeminiCommerce\Product\Model\ProductGetProductByUrlKeyRequest(); // \GeminiCommerce\Product\Model\ProductGetProductByUrlKeyRequest

try {
    $result = $apiInstance->productGetProductByUrlKey($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductApi->productGetProductByUrlKey: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **body** | [**\GeminiCommerce\Product\Model\ProductGetProductByUrlKeyRequest**](../Model/ProductGetProductByUrlKeyRequest.md)|  | |

### Return type

[**\GeminiCommerce\Product\Model\ProductGetProductByUrlKeyResponse**](../Model/ProductGetProductByUrlKeyResponse.md)

### Authorization

No authorization required

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

Attribute Groups endpoints

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new GeminiCommerce\Product\Api\ProductApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
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

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `productListAttributeOptions()`

```php
productListAttributeOptions($body): \GeminiCommerce\Product\Model\EntitymanagerListAttributeOptionsResponse
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new GeminiCommerce\Product\Api\ProductApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \GeminiCommerce\Product\Model\EntitymanagerListAttributeOptionsRequest(); // \GeminiCommerce\Product\Model\EntitymanagerListAttributeOptionsRequest

try {
    $result = $apiInstance->productListAttributeOptions($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductApi->productListAttributeOptions: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **body** | [**\GeminiCommerce\Product\Model\EntitymanagerListAttributeOptionsRequest**](../Model/EntitymanagerListAttributeOptionsRequest.md)|  | |

### Return type

[**\GeminiCommerce\Product\Model\EntitymanagerListAttributeOptionsResponse**](../Model/EntitymanagerListAttributeOptionsResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `productListEntities()`

```php
productListEntities($body): \GeminiCommerce\Product\Model\EntitymanagerListEntitiesResponse
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new GeminiCommerce\Product\Api\ProductApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \GeminiCommerce\Product\Model\EntitymanagerListEntitiesRequest(); // \GeminiCommerce\Product\Model\EntitymanagerListEntitiesRequest

try {
    $result = $apiInstance->productListEntities($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductApi->productListEntities: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **body** | [**\GeminiCommerce\Product\Model\EntitymanagerListEntitiesRequest**](../Model/EntitymanagerListEntitiesRequest.md)|  | |

### Return type

[**\GeminiCommerce\Product\Model\EntitymanagerListEntitiesResponse**](../Model/EntitymanagerListEntitiesResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `productListOptionsLists()`

```php
productListOptionsLists($body): \GeminiCommerce\Product\Model\EntitymanagerListOptionsListsResponse
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new GeminiCommerce\Product\Api\ProductApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \GeminiCommerce\Product\Model\EntitymanagerListOptionsListsRequest(); // \GeminiCommerce\Product\Model\EntitymanagerListOptionsListsRequest

try {
    $result = $apiInstance->productListOptionsLists($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductApi->productListOptionsLists: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **body** | [**\GeminiCommerce\Product\Model\EntitymanagerListOptionsListsRequest**](../Model/EntitymanagerListOptionsListsRequest.md)|  | |

### Return type

[**\GeminiCommerce\Product\Model\EntitymanagerListOptionsListsResponse**](../Model/EntitymanagerListOptionsListsResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `productListProducts()`

```php
productListProducts($body): \GeminiCommerce\Product\Model\ProductListProductsResponse
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new GeminiCommerce\Product\Api\ProductApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \GeminiCommerce\Product\Model\ProductListProductsRequest(); // \GeminiCommerce\Product\Model\ProductListProductsRequest

try {
    $result = $apiInstance->productListProducts($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductApi->productListProducts: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **body** | [**\GeminiCommerce\Product\Model\ProductListProductsRequest**](../Model/ProductListProductsRequest.md)|  | |

### Return type

[**\GeminiCommerce\Product\Model\ProductListProductsResponse**](../Model/ProductListProductsResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `productListProductsByIds()`

```php
productListProductsByIds($body): \GeminiCommerce\Product\Model\ProductListProductsByIdsResponse
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new GeminiCommerce\Product\Api\ProductApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \GeminiCommerce\Product\Model\ProductListProductsByIdsRequest(); // \GeminiCommerce\Product\Model\ProductListProductsByIdsRequest

try {
    $result = $apiInstance->productListProductsByIds($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductApi->productListProductsByIds: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **body** | [**\GeminiCommerce\Product\Model\ProductListProductsByIdsRequest**](../Model/ProductListProductsByIdsRequest.md)|  | |

### Return type

[**\GeminiCommerce\Product\Model\ProductListProductsByIdsResponse**](../Model/ProductListProductsByIdsResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `productListProductsBySku()`

```php
productListProductsBySku($body): \GeminiCommerce\Product\Model\ProductListProductsBySkuResponse
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new GeminiCommerce\Product\Api\ProductApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \GeminiCommerce\Product\Model\ProductListProductsBySkuRequest(); // \GeminiCommerce\Product\Model\ProductListProductsBySkuRequest

try {
    $result = $apiInstance->productListProductsBySku($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductApi->productListProductsBySku: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **body** | [**\GeminiCommerce\Product\Model\ProductListProductsBySkuRequest**](../Model/ProductListProductsBySkuRequest.md)|  | |

### Return type

[**\GeminiCommerce\Product\Model\ProductListProductsBySkuResponse**](../Model/ProductListProductsBySkuResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `productListVariantsBySku()`

```php
productListVariantsBySku($body): \GeminiCommerce\Product\Model\ProductListVariantsBySkuResponse
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new GeminiCommerce\Product\Api\ProductApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \GeminiCommerce\Product\Model\ProductListVariantsBySkuRequest(); // \GeminiCommerce\Product\Model\ProductListVariantsBySkuRequest

try {
    $result = $apiInstance->productListVariantsBySku($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductApi->productListVariantsBySku: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **body** | [**\GeminiCommerce\Product\Model\ProductListVariantsBySkuRequest**](../Model/ProductListVariantsBySkuRequest.md)|  | |

### Return type

[**\GeminiCommerce\Product\Model\ProductListVariantsBySkuResponse**](../Model/ProductListVariantsBySkuResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `productRemoveMediaGalleryEntry()`

```php
productRemoveMediaGalleryEntry($body): object
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new GeminiCommerce\Product\Api\ProductApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \GeminiCommerce\Product\Model\ProductRemoveMediaGalleryEntryRequest(); // \GeminiCommerce\Product\Model\ProductRemoveMediaGalleryEntryRequest

try {
    $result = $apiInstance->productRemoveMediaGalleryEntry($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductApi->productRemoveMediaGalleryEntry: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **body** | [**\GeminiCommerce\Product\Model\ProductRemoveMediaGalleryEntryRequest**](../Model/ProductRemoveMediaGalleryEntryRequest.md)|  | |

### Return type

**object**

### Authorization

No authorization required

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



$apiInstance = new GeminiCommerce\Product\Api\ProductApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
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

No authorization required

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



$apiInstance = new GeminiCommerce\Product\Api\ProductApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
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

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `productUpdateAttributeOptions()`

```php
productUpdateAttributeOptions($body): \GeminiCommerce\Product\Model\EntitymanagerUpdateAttributeOptionsResponse
```

rpc GetAttributeOptionByCode (product.entitymanager.GetAttributeOptionByCodeRequest) returns (product.entitymanager.GetAttributeOptionByCodeResponse) {}

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new GeminiCommerce\Product\Api\ProductApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \GeminiCommerce\Product\Model\EntitymanagerUpdateAttributeOptionsRequest(); // \GeminiCommerce\Product\Model\EntitymanagerUpdateAttributeOptionsRequest

try {
    $result = $apiInstance->productUpdateAttributeOptions($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductApi->productUpdateAttributeOptions: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **body** | [**\GeminiCommerce\Product\Model\EntitymanagerUpdateAttributeOptionsRequest**](../Model/EntitymanagerUpdateAttributeOptionsRequest.md)|  | |

### Return type

[**\GeminiCommerce\Product\Model\EntitymanagerUpdateAttributeOptionsResponse**](../Model/EntitymanagerUpdateAttributeOptionsResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `productUpdateMediaGalleryEntry()`

```php
productUpdateMediaGalleryEntry($body): object
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new GeminiCommerce\Product\Api\ProductApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \GeminiCommerce\Product\Model\ProductUpdateMediaGalleryEntryRequest(); // \GeminiCommerce\Product\Model\ProductUpdateMediaGalleryEntryRequest

try {
    $result = $apiInstance->productUpdateMediaGalleryEntry($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductApi->productUpdateMediaGalleryEntry: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **body** | [**\GeminiCommerce\Product\Model\ProductUpdateMediaGalleryEntryRequest**](../Model/ProductUpdateMediaGalleryEntryRequest.md)|  | |

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `productUpdateOptionsList()`

```php
productUpdateOptionsList($body): \GeminiCommerce\Product\Model\EntitymanagerUpdateOptionsListResponse
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new GeminiCommerce\Product\Api\ProductApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \GeminiCommerce\Product\Model\EntitymanagerUpdateOptionsListRequest(); // \GeminiCommerce\Product\Model\EntitymanagerUpdateOptionsListRequest

try {
    $result = $apiInstance->productUpdateOptionsList($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductApi->productUpdateOptionsList: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **body** | [**\GeminiCommerce\Product\Model\EntitymanagerUpdateOptionsListRequest**](../Model/EntitymanagerUpdateOptionsListRequest.md)|  | |

### Return type

[**\GeminiCommerce\Product\Model\EntitymanagerUpdateOptionsListResponse**](../Model/EntitymanagerUpdateOptionsListResponse.md)

### Authorization

No authorization required

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



$apiInstance = new GeminiCommerce\Product\Api\ProductApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
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

No authorization required

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



$apiInstance = new GeminiCommerce\Product\Api\ProductApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
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

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
