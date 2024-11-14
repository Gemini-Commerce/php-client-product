# product

Introducing our revolutionary Product Management Service! Designed to streamline your product inventory and elevate customer experiences, our cutting-edge protobuf service is a game-changer in the world of efficient product management.

With our service, you can effortlessly create new products, allowing you to quickly bring your ideas to life and expand your catalog. Retrieve product information in a snap, providing accurate and personalized details to your customers based on their specific needs and preferences.

Stay ahead of the competition by easily updating product information, ensuring your catalog is always up-to-date and optimized. Seamlessly remove products from your inventory when needed, maintaining a clean and relevant product selection.

Enhance the visual appeal of your products with our advanced media gallery functionalities. Effortlessly add and update captivating images and videos to showcase your products in the best possible light, engaging your customers and driving conversions.

Personalization is key in today's market, and our service enables you to offer unique options to your customers. Easily create and manage lists of customizable options for your products, providing flexibility and tailoring to individual preferences.

Attributes play a vital role in defining products, and our service empowers you to effectively manage them. From bulk attribute creation to listing and retrieving attribute options, our service ensures your product information is rich and comprehensive.

Our service extends its capabilities to entity management, allowing you to effortlessly handle different entities and create customized options lists associated with them. This provides further flexibility and customization options for your product offerings.

When it comes to bulk updates, our service has you covered. Effortlessly update multiple products simultaneously, saving you time and streamlining your operations.

Finding specific products and variants is a breeze with our service. Quickly locate products based on their unique stock keeping unit (SKU) values, ensuring efficient inventory management and smooth order fulfillment.

Experience a new level of efficiency and productivity with our Product Management Service. Unlock the full potential of streamlined product management and empower your business to thrive in today's competitive market. Try our service today and elevate your product management to new heights!


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

## API Endpoints

All URIs are relative to *https://product.api.gogemini.io*

Class | Method | HTTP request | Description
------------ | ------------- | ------------- | -------------
*ProductApi* | [**addMediaGalleryEntry**](docs/Api/ProductApi.md#addmediagalleryentry) | **POST** /product.Product/AddMediaGalleryEntry | Add Media Gallery Entry
*ProductApi* | [**bulkAddAssetsEntries**](docs/Api/ProductApi.md#bulkaddassetsentries) | **POST** /product.Product/BulkAddAssetsEntries | Bulk Add Assets Entries
*ProductApi* | [**bulkDeleteProducts**](docs/Api/ProductApi.md#bulkdeleteproducts) | **POST** /product.Product/BulkDeleteProducts | Bulk Delete Products
*ProductApi* | [**bulkEnhanceProductDataWithAI**](docs/Api/ProductApi.md#bulkenhanceproductdatawithai) | **POST** /product.Product/BulkEnhanceProductDataWithAI | Bulk Enhance Product Data With AI
*ProductApi* | [**bulkRemoveAssetsEntries**](docs/Api/ProductApi.md#bulkremoveassetsentries) | **POST** /product.Product/BulkRemoveAssetsEntries | Bulk Remove Assets Entries
*ProductApi* | [**bulkUpdateAssetsEntries**](docs/Api/ProductApi.md#bulkupdateassetsentries) | **POST** /product.Product/BulkUpdateAssetsEntries | Bulk Update Assets Entries
*ProductApi* | [**bulkUpdateV2**](docs/Api/ProductApi.md#bulkupdatev2) | **POST** /product.Product/BulkUpdateV2 | Bulk Update Products
*ProductApi* | [**createAttributeOptions**](docs/Api/ProductApi.md#createattributeoptions) | **POST** /product.Product/CreateAttributeOptions | Create Attribute Options
*ProductApi* | [**createEntity**](docs/Api/ProductApi.md#createentity) | **POST** /product.Product/CreateEntity | Create Entity
*ProductApi* | [**createOptionsList**](docs/Api/ProductApi.md#createoptionslist) | **POST** /product.Product/CreateOptionsList | Create Options List
*ProductApi* | [**createProductWithAI**](docs/Api/ProductApi.md#createproductwithai) | **POST** /product.Product/CreateProductWithAI | Create Product With AI
*ProductApi* | [**getAttributeOption**](docs/Api/ProductApi.md#getattributeoption) | **POST** /product.Product/GetAttributeOption | Get Attribute Option
*ProductApi* | [**getAttributeOptions**](docs/Api/ProductApi.md#getattributeoptions) | **POST** /product.Product/GetAttributeOptions | Get Attribute Options
*ProductApi* | [**getEntity**](docs/Api/ProductApi.md#getentity) | **POST** /product.Product/GetEntity | Get Entity Details
*ProductApi* | [**getOptionsList**](docs/Api/ProductApi.md#getoptionslist) | **POST** /product.Product/GetOptionsList | Get Options List
*ProductApi* | [**getProduct**](docs/Api/ProductApi.md#getproduct) | **POST** /product.Product/GetProduct | Get Product
*ProductApi* | [**getProductByCode**](docs/Api/ProductApi.md#getproductbycode) | **POST** /product.Product/GetProductByCode | Get Product By Code
*ProductApi* | [**getProductByUrlKey**](docs/Api/ProductApi.md#getproductbyurlkey) | **POST** /product.Product/GetProductByUrlKey | Get Product By Url Key
*ProductApi* | [**getProductDataInReview**](docs/Api/ProductApi.md#getproductdatainreview) | **POST** /product.Product/GetProductDataInReview | Get Product Data In Review
*ProductApi* | [**listAttributeOptions**](docs/Api/ProductApi.md#listattributeoptions) | **POST** /product.Product/ListAttributeOptions | List Attribute Options
*ProductApi* | [**listEntities**](docs/Api/ProductApi.md#listentities) | **POST** /product.Product/ListEntities | List Entities
*ProductApi* | [**listOptionsLists**](docs/Api/ProductApi.md#listoptionslists) | **POST** /product.Product/ListOptionsLists | List Options Lists
*ProductApi* | [**listProducts**](docs/Api/ProductApi.md#listproducts) | **POST** /product.Product/ListProducts | List Products
*ProductApi* | [**listProductsByIds**](docs/Api/ProductApi.md#listproductsbyids) | **POST** /product.Product/ListProductsByIds | List Products By Ids
*ProductApi* | [**listProductsBySku**](docs/Api/ProductApi.md#listproductsbysku) | **POST** /product.Product/ListProductsBySku | List Products By Sku
*ProductApi* | [**listVariantsBySku**](docs/Api/ProductApi.md#listvariantsbysku) | **POST** /product.Product/ListVariantsBySku | List Product Variants By Sku
*ProductApi* | [**productBulkCreateAttribute**](docs/Api/ProductApi.md#productbulkcreateattribute) | **POST** /product.Product/BulkCreateAttribute | 
*ProductApi* | [**productBulkUpdate**](docs/Api/ProductApi.md#productbulkupdate) | **POST** /product.Product/BulkUpdate | 
*ProductApi* | [**productCreateAttributeGroup**](docs/Api/ProductApi.md#productcreateattributegroup) | **POST** /product.Product/CreateAttributeGroup | 
*ProductApi* | [**productCreateProduct**](docs/Api/ProductApi.md#productcreateproduct) | **POST** /product.Product/CreateProduct | 
*ProductApi* | [**productCreateProductV2**](docs/Api/ProductApi.md#productcreateproductv2) | **POST** /product.Product/CreateProductV2 | 
*ProductApi* | [**productDelete**](docs/Api/ProductApi.md#productdelete) | **POST** /product.Product/Delete | 
*ProductApi* | [**productDeleteAttribute**](docs/Api/ProductApi.md#productdeleteattribute) | **POST** /product.Product/DeleteAttribute | 
*ProductApi* | [**productDeleteProduct**](docs/Api/ProductApi.md#productdeleteproduct) | **POST** /product.Product/DeleteProduct | 
*ProductApi* | [**productGetAttributeGroup**](docs/Api/ProductApi.md#productgetattributegroup) | **POST** /product.Product/GetAttributeGroup | 
*ProductApi* | [**productListAttributeGroups**](docs/Api/ProductApi.md#productlistattributegroups) | **POST** /product.Product/ListAttributeGroups | 
*ProductApi* | [**productUpdateAttribute**](docs/Api/ProductApi.md#productupdateattribute) | **POST** /product.Product/UpdateAttribute | 
*ProductApi* | [**productUpdateAttributeGroup**](docs/Api/ProductApi.md#productupdateattributegroup) | **POST** /product.Product/UpdateAttributeGroup | 
*ProductApi* | [**productUpdateProduct**](docs/Api/ProductApi.md#productupdateproduct) | **POST** /product.Product/UpdateProduct | 
*ProductApi* | [**productUpdateProductV2**](docs/Api/ProductApi.md#productupdateproductv2) | **POST** /product.Product/UpdateProductV2 | 
*ProductApi* | [**removeMediaGalleryEntry**](docs/Api/ProductApi.md#removemediagalleryentry) | **POST** /product.Product/RemoveMediaGalleryEntry | Remove Media Gallery Entry
*ProductApi* | [**updateAttributeOptions**](docs/Api/ProductApi.md#updateattributeoptions) | **POST** /product.Product/UpdateAttributeOptions | Update Attribute Options
*ProductApi* | [**updateDataToBeReviewed**](docs/Api/ProductApi.md#updatedatatobereviewed) | **POST** /product.Product/GetEnhanceProductDataWithAIStatus | Get Enhance Product Data With AI Status
*ProductApi* | [**updateDataToBeReviewed_0**](docs/Api/ProductApi.md#updatedatatobereviewed_0) | **POST** /product.Product/UpdateDataToBeReviewed | Update Data To Be Reviewed
*ProductApi* | [**updateMediaGalleryEntry**](docs/Api/ProductApi.md#updatemediagalleryentry) | **POST** /product.Product/UpdateMediaGalleryEntry | Update Media Gallery Entry
*ProductApi* | [**updateOptionsList**](docs/Api/ProductApi.md#updateoptionslist) | **POST** /product.Product/UpdateOptionsList | Update Options List
*ProductApi* | [**updateProductWithAI**](docs/Api/ProductApi.md#updateproductwithai) | **POST** /product.Product/UpdateProductWithAI | Update Product With AI

## Models

- [AttributeInReviewString](docs/Model/AttributeInReviewString.md)
- [BulkUpdateAssetsEntriesRequestUpdateEntity](docs/Model/BulkUpdateAssetsEntriesRequestUpdateEntity.md)
- [EntitymanagerAiContext](docs/Model/EntitymanagerAiContext.md)
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
- [GetEnhanceProductDataWithAIStatusResponseJob](docs/Model/GetEnhanceProductDataWithAIStatusResponseJob.md)
- [ListProductsRequestFilter](docs/Model/ListProductsRequestFilter.md)
- [ProductAddMediaGalleryEntryRequest](docs/Model/ProductAddMediaGalleryEntryRequest.md)
- [ProductAddMediaGalleryEntryResponse](docs/Model/ProductAddMediaGalleryEntryResponse.md)
- [ProductAssetData](docs/Model/ProductAssetData.md)
- [ProductAssets](docs/Model/ProductAssets.md)
- [ProductAssetsEntry](docs/Model/ProductAssetsEntry.md)
- [ProductAssetsEntryMetadata](docs/Model/ProductAssetsEntryMetadata.md)
- [ProductAttributeInReview](docs/Model/ProductAttributeInReview.md)
- [ProductAttributeInReviewError](docs/Model/ProductAttributeInReviewError.md)
- [ProductAttributeInReviewJobStatus](docs/Model/ProductAttributeInReviewJobStatus.md)
- [ProductAttributeInReviewJobType](docs/Model/ProductAttributeInReviewJobType.md)
- [ProductAttributeInReviewSource](docs/Model/ProductAttributeInReviewSource.md)
- [ProductAttributeResponseError](docs/Model/ProductAttributeResponseError.md)
- [ProductAttributeToEnrich](docs/Model/ProductAttributeToEnrich.md)
- [ProductAttributeToEnrichType](docs/Model/ProductAttributeToEnrichType.md)
- [ProductBulkAddAssetsEntriesRequest](docs/Model/ProductBulkAddAssetsEntriesRequest.md)
- [ProductBulkAddAssetsEntriesResponse](docs/Model/ProductBulkAddAssetsEntriesResponse.md)
- [ProductBulkDeleteProductsRequest](docs/Model/ProductBulkDeleteProductsRequest.md)
- [ProductBulkEnhanceProductDataWithAIRequest](docs/Model/ProductBulkEnhanceProductDataWithAIRequest.md)
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
- [ProductCreateProductWithAIRequest](docs/Model/ProductCreateProductWithAIRequest.md)
- [ProductCreateProductWithAIResponse](docs/Model/ProductCreateProductWithAIResponse.md)
- [ProductDataInReview](docs/Model/ProductDataInReview.md)
- [ProductDeleteProductRequest](docs/Model/ProductDeleteProductRequest.md)
- [ProductDeleteRequest](docs/Model/ProductDeleteRequest.md)
- [ProductDeleteResponse](docs/Model/ProductDeleteResponse.md)
- [ProductEnrichAction](docs/Model/ProductEnrichAction.md)
- [ProductFieldMask](docs/Model/ProductFieldMask.md)
- [ProductGetEnhanceProductDataWithAIStatusRequest](docs/Model/ProductGetEnhanceProductDataWithAIStatusRequest.md)
- [ProductGetEnhanceProductDataWithAIStatusResponse](docs/Model/ProductGetEnhanceProductDataWithAIStatusResponse.md)
- [ProductGetProductByCodeRequest](docs/Model/ProductGetProductByCodeRequest.md)
- [ProductGetProductByCodeResponse](docs/Model/ProductGetProductByCodeResponse.md)
- [ProductGetProductByUrlKeyRequest](docs/Model/ProductGetProductByUrlKeyRequest.md)
- [ProductGetProductByUrlKeyResponse](docs/Model/ProductGetProductByUrlKeyResponse.md)
- [ProductGetProductDataInReviewRequest](docs/Model/ProductGetProductDataInReviewRequest.md)
- [ProductGetProductDataInReviewResponse](docs/Model/ProductGetProductDataInReviewResponse.md)
- [ProductGetProductRequest](docs/Model/ProductGetProductRequest.md)
- [ProductGetProductResponse](docs/Model/ProductGetProductResponse.md)
- [ProductLanguageCode](docs/Model/ProductLanguageCode.md)
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
- [ProductTranslateAction](docs/Model/ProductTranslateAction.md)
- [ProductUpdateAssetEntryPayload](docs/Model/ProductUpdateAssetEntryPayload.md)
- [ProductUpdateDataToBeReviewedRequest](docs/Model/ProductUpdateDataToBeReviewedRequest.md)
- [ProductUpdateMediaGalleryEntryRequest](docs/Model/ProductUpdateMediaGalleryEntryRequest.md)
- [ProductUpdateProductRequest](docs/Model/ProductUpdateProductRequest.md)
- [ProductUpdateProductRequestV2](docs/Model/ProductUpdateProductRequestV2.md)
- [ProductUpdateProductResponse](docs/Model/ProductUpdateProductResponse.md)
- [ProductUpdateProductWithAIRequest](docs/Model/ProductUpdateProductWithAIRequest.md)
- [ProductUpdateProductWithAIResponse](docs/Model/ProductUpdateProductWithAIResponse.md)
- [ProductentitymanagerLocalizedText](docs/Model/ProductentitymanagerLocalizedText.md)
- [ProtobufAny](docs/Model/ProtobufAny.md)
- [RpcStatus](docs/Model/RpcStatus.md)
- [TranslateActionAttributeCodesToTranslate](docs/Model/TranslateActionAttributeCodesToTranslate.md)

## Authorization

Authentication schemes defined for the API:
### Authorization

- **Type**: API key
- **API key parameter name**: Authorization
- **Location**: HTTP header


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
    - Generator version: `7.9.0`
- Build package: `org.openapitools.codegen.languages.PhpClientCodegen`
