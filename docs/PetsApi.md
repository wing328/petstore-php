# Swagger\Client\PetsApi

All URIs are relative to *https://localhost/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getPets**](PetsApi.md#getPets) | **GET** /pets | Get your pets


# **getPets**
> \Swagger\Client\Model\Animal getPets()

Get your pets

Returns pets of different types

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\PetsApi();

try { 
    $result = $api_instance->getPets();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PetsApi->getPets: ', $e->getMessage(), "\n";
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Swagger\Client\Model\Animal**](Animal.md)

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

