# product

API for managing products


## Installation & Usage

### Requirements

PHP 7.4 and later.
Should also work with PHP 8.0.

### Composer

To install the bindings via [Composer](https://getcomposer.org/), add the following to `composer.json`:

```json
{
  "repositories": [
    {
      "type": "vcs",
      "url": "https://github.com/Gemini-Commerce/php-client-product.git"
    }
  ],
  "require": {
    "Gemini-Commerce/php-client-product": "*@dev"
  }
}
```

Then run `composer install`

### Manual Installation

Download the files and include `autoload.php`:

```php
<?php
require_once('/path/to/product/vendor/autoload.php');
```

## Getting Started

Please follow the [installation procedure](#installation--usage) and then run the following:

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

## API Endpoints

All URIs are relative to *https://product.api.gogemini.io*

Class | Method | HTTP request | Description
------------ | ------------- | ------------- | -------------
*ProductApi* | [**productAddMediaGalleryEntry**](docs/Api/ProductApi.md#productaddmediagalleryentry) | **POST** /product.Product/AddMediaGalleryEntry | 
*ProductApi* | [**productBulkAddAssetsEntries**](docs/Api/ProductApi.md#productbulkaddassetsentries) | **POST** /product.Product/BulkAddAssetsEntries | Assets endpoints
*ProductApi* | [**productBulkCreateAttribute**](docs/Api/ProductApi.md#productbulkcreateattribute) | **POST** /product.Product/BulkCreateAttribute | 
*ProductApi* | [**productBulkDeleteProducts**](docs/Api/ProductApi.md#productbulkdeleteproducts) | **POST** /product.Product/BulkDeleteProducts | 
*ProductApi* | [**productBulkRemoveAssetsEntries**](docs/Api/ProductApi.md#productbulkremoveassetsentries) | **POST** /product.Product/BulkRemoveAssetsEntries | 
*ProductApi* | [**productBulkUpdate**](docs/Api/ProductApi.md#productbulkupdate) | **POST** /product.Product/BulkUpdate | 
*ProductApi* | [**productBulkUpdateAssetsEntries**](docs/Api/ProductApi.md#productbulkupdateassetsentries) | **POST** /product.Product/BulkUpdateAssetsEntries | 
*ProductApi* | [**productBulkUpdateV2**](docs/Api/ProductApi.md#productbulkupdatev2) | **POST** /product.Product/BulkUpdateV2 | 
*ProductApi* | [**productCreateAttributeGroup**](docs/Api/ProductApi.md#productcreateattributegroup) | **POST** /product.Product/CreateAttributeGroup | 
*ProductApi* | [**productCreateAttributeOptions**](docs/Api/ProductApi.md#productcreateattributeoptions) | **POST** /product.Product/CreateAttributeOptions | 
*ProductApi* | [**productCreateEntity**](docs/Api/ProductApi.md#productcreateentity) | **POST** /product.Product/CreateEntity | 
*ProductApi* | [**productCreateOptionsList**](docs/Api/ProductApi.md#productcreateoptionslist) | **POST** /product.Product/CreateOptionsList | 
*ProductApi* | [**productCreateProduct**](docs/Api/ProductApi.md#productcreateproduct) | **POST** /product.Product/CreateProduct | 
*ProductApi* | [**productCreateProductV2**](docs/Api/ProductApi.md#productcreateproductv2) | **POST** /product.Product/CreateProductV2 | 
*ProductApi* | [**productDelete**](docs/Api/ProductApi.md#productdelete) | **POST** /product.Product/Delete | 
*ProductApi* | [**productDeleteAttribute**](docs/Api/ProductApi.md#productdeleteattribute) | **POST** /product.Product/DeleteAttribute | 
*ProductApi* | [**productDeleteProduct**](docs/Api/ProductApi.md#productdeleteproduct) | **POST** /product.Product/DeleteProduct | 
*ProductApi* | [**productGetAttributeGroup**](docs/Api/ProductApi.md#productgetattributegroup) | **POST** /product.Product/GetAttributeGroup | 
*ProductApi* | [**productGetAttributeOption**](docs/Api/ProductApi.md#productgetattributeoption) | **POST** /product.Product/GetAttributeOption | 
*ProductApi* | [**productGetAttributeOptions**](docs/Api/ProductApi.md#productgetattributeoptions) | **POST** /product.Product/GetAttributeOptions | 
*ProductApi* | [**productGetEntity**](docs/Api/ProductApi.md#productgetentity) | **POST** /product.Product/GetEntity | 
*ProductApi* | [**productGetOptionsList**](docs/Api/ProductApi.md#productgetoptionslist) | **POST** /product.Product/GetOptionsList | 
*ProductApi* | [**productGetProduct**](docs/Api/ProductApi.md#productgetproduct) | **POST** /product.Product/GetProduct | 
*ProductApi* | [**productGetProductByCode**](docs/Api/ProductApi.md#productgetproductbycode) | **POST** /product.Product/GetProductByCode | 
*ProductApi* | [**productGetProductByUrlKey**](docs/Api/ProductApi.md#productgetproductbyurlkey) | **POST** /product.Product/GetProductByUrlKey | 
*ProductApi* | [**productListAttributeGroups**](docs/Api/ProductApi.md#productlistattributegroups) | **POST** /product.Product/ListAttributeGroups | Attribute Groups endpoints
*ProductApi* | [**productListAttributeOptions**](docs/Api/ProductApi.md#productlistattributeoptions) | **POST** /product.Product/ListAttributeOptions | 
*ProductApi* | [**productListEntities**](docs/Api/ProductApi.md#productlistentities) | **POST** /product.Product/ListEntities | 
*ProductApi* | [**productListOptionsLists**](docs/Api/ProductApi.md#productlistoptionslists) | **POST** /product.Product/ListOptionsLists | 
*ProductApi* | [**productListProducts**](docs/Api/ProductApi.md#productlistproducts) | **POST** /product.Product/ListProducts | 
*ProductApi* | [**productListProductsByIds**](docs/Api/ProductApi.md#productlistproductsbyids) | **POST** /product.Product/ListProductsByIds | 
*ProductApi* | [**productListProductsBySku**](docs/Api/ProductApi.md#productlistproductsbysku) | **POST** /product.Product/ListProductsBySku | 
*ProductApi* | [**productListVariantsBySku**](docs/Api/ProductApi.md#productlistvariantsbysku) | **POST** /product.Product/ListVariantsBySku | 
*ProductApi* | [**productRemoveMediaGalleryEntry**](docs/Api/ProductApi.md#productremovemediagalleryentry) | **POST** /product.Product/RemoveMediaGalleryEntry | 
*ProductApi* | [**productUpdateAttribute**](docs/Api/ProductApi.md#productupdateattribute) | **POST** /product.Product/UpdateAttribute | 
*ProductApi* | [**productUpdateAttributeGroup**](docs/Api/ProductApi.md#productupdateattributegroup) | **POST** /product.Product/UpdateAttributeGroup | 
*ProductApi* | [**productUpdateAttributeOptions**](docs/Api/ProductApi.md#productupdateattributeoptions) | **POST** /product.Product/UpdateAttributeOptions | rpc GetAttributeOptionByCode (product.entitymanager.GetAttributeOptionByCodeRequest) returns (product.entitymanager.GetAttributeOptionByCodeResponse) {}
*ProductApi* | [**productUpdateMediaGalleryEntry**](docs/Api/ProductApi.md#productupdatemediagalleryentry) | **POST** /product.Product/UpdateMediaGalleryEntry | 
*ProductApi* | [**productUpdateOptionsList**](docs/Api/ProductApi.md#productupdateoptionslist) | **POST** /product.Product/UpdateOptionsList | 
*ProductApi* | [**productUpdateProduct**](docs/Api/ProductApi.md#productupdateproduct) | **POST** /product.Product/UpdateProduct | 
*ProductApi* | [**productUpdateProductV2**](docs/Api/ProductApi.md#productupdateproductv2) | **POST** /product.Product/UpdateProductV2 | 

## Models

- [BulkUpdateAssetsEntriesRequestUpdateEntity](docs/Model/BulkUpdateAssetsEntriesRequestUpdateEntity.md)
- [EntitymanagerAttribute](docs/Model/EntitymanagerAttribute.md)
- [EntitymanagerAttributeGroup](docs/Model/EntitymanagerAttributeGroup.md)
- [EntitymanagerAttributeOption](docs/Model/EntitymanagerAttributeOption.md)
- [EntitymanagerAttributeOptionErrors](docs/Model/EntitymanagerAttributeOptionErrors.md)
- [EntitymanagerAttributeOptionSwatch](docs/Model/EntitymanagerAttributeOptionSwatch.md)
- [EntitymanagerAttributeWriteError](docs/Model/EntitymanagerAttributeWriteError.md)
- [EntitymanagerAttributeWriteErrors](docs/Model/EntitymanagerAttributeWriteErrors.md)
- [EntitymanagerBulkCreateAttributeRequest](docs/Model/EntitymanagerBulkCreateAttributeRequest.md)
- [EntitymanagerBulkCreateAttributeResponse](docs/Model/EntitymanagerBulkCreateAttributeResponse.md)
- [EntitymanagerCreateAttributeGroupRequest](docs/Model/EntitymanagerCreateAttributeGroupRequest.md)
- [EntitymanagerCreateAttributeOptionsRequest](docs/Model/EntitymanagerCreateAttributeOptionsRequest.md)
- [EntitymanagerCreateAttributeOptionsResponse](docs/Model/EntitymanagerCreateAttributeOptionsResponse.md)
- [EntitymanagerCreateEntityResponse](docs/Model/EntitymanagerCreateEntityResponse.md)
- [EntitymanagerCreateOptionsListRequest](docs/Model/EntitymanagerCreateOptionsListRequest.md)
- [EntitymanagerCreateOptionsListResponse](docs/Model/EntitymanagerCreateOptionsListResponse.md)
- [EntitymanagerDeleteAttributeRequest](docs/Model/EntitymanagerDeleteAttributeRequest.md)
- [EntitymanagerEntity](docs/Model/EntitymanagerEntity.md)
- [EntitymanagerEntityIdentifier](docs/Model/EntitymanagerEntityIdentifier.md)
- [EntitymanagerEntityRequest](docs/Model/EntitymanagerEntityRequest.md)
- [EntitymanagerGetAttributeGroupRequest](docs/Model/EntitymanagerGetAttributeGroupRequest.md)
- [EntitymanagerGetAttributeOptionRequest](docs/Model/EntitymanagerGetAttributeOptionRequest.md)
- [EntitymanagerGetAttributeOptionResponse](docs/Model/EntitymanagerGetAttributeOptionResponse.md)
- [EntitymanagerGetAttributeOptionsRequest](docs/Model/EntitymanagerGetAttributeOptionsRequest.md)
- [EntitymanagerGetAttributeOptionsRequestOption](docs/Model/EntitymanagerGetAttributeOptionsRequestOption.md)
- [EntitymanagerGetAttributeOptionsResponse](docs/Model/EntitymanagerGetAttributeOptionsResponse.md)
- [EntitymanagerGetAttributeOptionsResponseOption](docs/Model/EntitymanagerGetAttributeOptionsResponseOption.md)
- [EntitymanagerGetOptionsListRequest](docs/Model/EntitymanagerGetOptionsListRequest.md)
- [EntitymanagerGetOptionsListResponse](docs/Model/EntitymanagerGetOptionsListResponse.md)
- [EntitymanagerListAttributeGroupsRequest](docs/Model/EntitymanagerListAttributeGroupsRequest.md)
- [EntitymanagerListAttributeGroupsResponse](docs/Model/EntitymanagerListAttributeGroupsResponse.md)
- [EntitymanagerListAttributeOptionsRequest](docs/Model/EntitymanagerListAttributeOptionsRequest.md)
- [EntitymanagerListAttributeOptionsResponse](docs/Model/EntitymanagerListAttributeOptionsResponse.md)
- [EntitymanagerListEntitiesRequest](docs/Model/EntitymanagerListEntitiesRequest.md)
- [EntitymanagerListEntitiesResponse](docs/Model/EntitymanagerListEntitiesResponse.md)
- [EntitymanagerListOptionsListsRequest](docs/Model/EntitymanagerListOptionsListsRequest.md)
- [EntitymanagerListOptionsListsResponse](docs/Model/EntitymanagerListOptionsListsResponse.md)
- [EntitymanagerOptionsList](docs/Model/EntitymanagerOptionsList.md)
- [EntitymanagerRenderAs](docs/Model/EntitymanagerRenderAs.md)
- [EntitymanagerTypes](docs/Model/EntitymanagerTypes.md)
- [EntitymanagerUpdateAttributeGroupRequest](docs/Model/EntitymanagerUpdateAttributeGroupRequest.md)
- [EntitymanagerUpdateAttributeGroupRequestPayload](docs/Model/EntitymanagerUpdateAttributeGroupRequestPayload.md)
- [EntitymanagerUpdateAttributeOptionsRequest](docs/Model/EntitymanagerUpdateAttributeOptionsRequest.md)
- [EntitymanagerUpdateAttributeOptionsResponse](docs/Model/EntitymanagerUpdateAttributeOptionsResponse.md)
- [EntitymanagerUpdateAttributeRequest](docs/Model/EntitymanagerUpdateAttributeRequest.md)
- [EntitymanagerUpdateAttributeRequestPayload](docs/Model/EntitymanagerUpdateAttributeRequestPayload.md)
- [EntitymanagerUpdateOptionsListRequest](docs/Model/EntitymanagerUpdateOptionsListRequest.md)
- [EntitymanagerUpdateOptionsListResponse](docs/Model/EntitymanagerUpdateOptionsListResponse.md)
- [ListProductsRequestFilter](docs/Model/ListProductsRequestFilter.md)
- [ProductAddMediaGalleryEntryRequest](docs/Model/ProductAddMediaGalleryEntryRequest.md)
- [ProductAddMediaGalleryEntryResponse](docs/Model/ProductAddMediaGalleryEntryResponse.md)
- [ProductAssetData](docs/Model/ProductAssetData.md)
- [ProductAssets](docs/Model/ProductAssets.md)
- [ProductAssetsEntry](docs/Model/ProductAssetsEntry.md)
- [ProductAssetsEntryMetadata](docs/Model/ProductAssetsEntryMetadata.md)
- [ProductAttributeResponseError](docs/Model/ProductAttributeResponseError.md)
- [ProductBulkAddAssetsEntriesRequest](docs/Model/ProductBulkAddAssetsEntriesRequest.md)
- [ProductBulkAddAssetsEntriesResponse](docs/Model/ProductBulkAddAssetsEntriesResponse.md)
- [ProductBulkDeleteProductsRequest](docs/Model/ProductBulkDeleteProductsRequest.md)
- [ProductBulkRemoveAssetsEntriesRequest](docs/Model/ProductBulkRemoveAssetsEntriesRequest.md)
- [ProductBulkUpdateAssetsEntriesRequest](docs/Model/ProductBulkUpdateAssetsEntriesRequest.md)
- [ProductBulkUpdateAssetsEntriesResponse](docs/Model/ProductBulkUpdateAssetsEntriesResponse.md)
- [ProductBulkUpdateRequest](docs/Model/ProductBulkUpdateRequest.md)
- [ProductBulkUpdateRequestPayload](docs/Model/ProductBulkUpdateRequestPayload.md)
- [ProductBulkUpdateRequestV2](docs/Model/ProductBulkUpdateRequestV2.md)
- [ProductBulkUpdateRequestV2Payload](docs/Model/ProductBulkUpdateRequestV2Payload.md)
- [ProductBulkUpdateResponse](docs/Model/ProductBulkUpdateResponse.md)
- [ProductBulkUpdateResponseResponse](docs/Model/ProductBulkUpdateResponseResponse.md)
- [ProductBulkUpdateResponseV2](docs/Model/ProductBulkUpdateResponseV2.md)
- [ProductBulkUpdateResponseV2Response](docs/Model/ProductBulkUpdateResponseV2Response.md)
- [ProductCreateProductRequest](docs/Model/ProductCreateProductRequest.md)
- [ProductCreateProductRequestV2](docs/Model/ProductCreateProductRequestV2.md)
- [ProductCreateProductResponse](docs/Model/ProductCreateProductResponse.md)
- [ProductCreateProductResponseV2](docs/Model/ProductCreateProductResponseV2.md)
- [ProductDeleteProductRequest](docs/Model/ProductDeleteProductRequest.md)
- [ProductDeleteRequest](docs/Model/ProductDeleteRequest.md)
- [ProductDeleteResponse](docs/Model/ProductDeleteResponse.md)
- [ProductFieldMask](docs/Model/ProductFieldMask.md)
- [ProductGetProductByCodeRequest](docs/Model/ProductGetProductByCodeRequest.md)
- [ProductGetProductByCodeResponse](docs/Model/ProductGetProductByCodeResponse.md)
- [ProductGetProductByUrlKeyRequest](docs/Model/ProductGetProductByUrlKeyRequest.md)
- [ProductGetProductByUrlKeyResponse](docs/Model/ProductGetProductByUrlKeyResponse.md)
- [ProductGetProductRequest](docs/Model/ProductGetProductRequest.md)
- [ProductGetProductResponse](docs/Model/ProductGetProductResponse.md)
- [ProductListProductsByIdsRequest](docs/Model/ProductListProductsByIdsRequest.md)
- [ProductListProductsByIdsResponse](docs/Model/ProductListProductsByIdsResponse.md)
- [ProductListProductsBySkuRequest](docs/Model/ProductListProductsBySkuRequest.md)
- [ProductListProductsBySkuResponse](docs/Model/ProductListProductsBySkuResponse.md)
- [ProductListProductsRequest](docs/Model/ProductListProductsRequest.md)
- [ProductListProductsResponse](docs/Model/ProductListProductsResponse.md)
- [ProductListVariantsBySkuRequest](docs/Model/ProductListVariantsBySkuRequest.md)
- [ProductListVariantsBySkuResponse](docs/Model/ProductListVariantsBySkuResponse.md)
- [ProductLocalizedAsset](docs/Model/ProductLocalizedAsset.md)
- [ProductLocalizedText](docs/Model/ProductLocalizedText.md)
- [ProductMediaGallery](docs/Model/ProductMediaGallery.md)
- [ProductMediaGalleryEntry](docs/Model/ProductMediaGalleryEntry.md)
- [ProductMediaGalleryEntryMetadata](docs/Model/ProductMediaGalleryEntryMetadata.md)
- [ProductProductEntity](docs/Model/ProductProductEntity.md)
- [ProductProductResponseError](docs/Model/ProductProductResponseError.md)
- [ProductProductVariant](docs/Model/ProductProductVariant.md)
- [ProductRemoveMediaGalleryEntryRequest](docs/Model/ProductRemoveMediaGalleryEntryRequest.md)
- [ProductUpdateAssetEntryPayload](docs/Model/ProductUpdateAssetEntryPayload.md)
- [ProductUpdateMediaGalleryEntryRequest](docs/Model/ProductUpdateMediaGalleryEntryRequest.md)
- [ProductUpdateProductRequest](docs/Model/ProductUpdateProductRequest.md)
- [ProductUpdateProductRequestV2](docs/Model/ProductUpdateProductRequestV2.md)
- [ProductUpdateProductResponse](docs/Model/ProductUpdateProductResponse.md)
- [ProductentitymanagerLocalizedText](docs/Model/ProductentitymanagerLocalizedText.md)
- [ProtobufAny](docs/Model/ProtobufAny.md)
- [RpcStatus](docs/Model/RpcStatus.md)

## Authorization

Authentication schemes defined for the API:
### standardAuthorization

- **Type**: `OAuth`
- **Flow**: `implicit`
- **Authorization URL**: ``
- **Scopes**: N/A

## Tests

To run the tests, use:

```bash
composer install
vendor/bin/phpunit
```

## Author

info@gemini-commerce.com

## About this package

This PHP package is automatically generated by the [OpenAPI Generator](https://openapi-generator.tech) project:

- API version: `v1`
    - Package version: `1.1.0`
- Build package: `org.openapitools.codegen.languages.PhpClientCodegen`
