# SiapepFrance\KizeoForms\ListsApi

All URIs are relative to *https://www.kizeoforms.com/rest/v3*

Method | HTTP request | Description
------------- | ------------- | -------------
[**listsGet**](ListsApi.md#listsGet) | **GET** /lists | Get External Lists
[**listsListIdCompleteGet**](ListsApi.md#listsListIdCompleteGet) | **GET** /lists/{listId}/complete | Get External List Definition (Without taking in account filters)
[**listsListIdGet**](ListsApi.md#listsListIdGet) | **GET** /lists/{listId} | Get External List Definition
[**listsListIdPut**](ListsApi.md#listsListIdPut) | **PUT** /lists/{listId} | Update External List Definition

# **listsGet**
> \SiapepFrance\KizeoForms\Model\ExtList listsGet()

Get External Lists

Get External Lists

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: authentication
$config = \SiapepFrance\KizeoForms\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = \SiapepFrance\KizeoForms\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new \SiapepFrance\KizeoForms\Api\ListsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->listsGet();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ListsApi->listsGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\SiapepFrance\KizeoForms\Model\ExtList**](../Model/ExtList.md)

### Authorization

[authentication](../../README.md#authentication)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **listsListIdCompleteGet**
> \SiapepFrance\KizeoForms\Model\ExtListDetail listsListIdCompleteGet($listId)

Get External List Definition (Without taking in account filters)

Get External List Definition

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: authentication
$config = \SiapepFrance\KizeoForms\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = \SiapepFrance\KizeoForms\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new \SiapepFrance\KizeoForms\Api\ListsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$listId = 56; // int | Id of the list

try {
    $result = $apiInstance->listsListIdCompleteGet($listId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ListsApi->listsListIdCompleteGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **listId** | **int**| Id of the list |

### Return type

[**\SiapepFrance\KizeoForms\Model\ExtListDetail**](../Model/ExtListDetail.md)

### Authorization

[authentication](../../README.md#authentication)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **listsListIdGet**
> \SiapepFrance\KizeoForms\Model\ExtListDetail listsListIdGet($listId)

Get External List Definition

Get External List Definition

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: authentication
$config = \SiapepFrance\KizeoForms\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = \SiapepFrance\KizeoForms\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new \SiapepFrance\KizeoForms\Api\ListsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$listId = 56; // int | Id of the list

try {
    $result = $apiInstance->listsListIdGet($listId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ListsApi->listsListIdGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **listId** | **int**| Id of the list |

### Return type

[**\SiapepFrance\KizeoForms\Model\ExtListDetail**](../Model/ExtListDetail.md)

### Authorization

[authentication](../../README.md#authentication)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **listsListIdPut**
> listsListIdPut($body, $listId)

Update External List Definition

Update External List Definition

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: authentication
$config = \SiapepFrance\KizeoForms\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = \SiapepFrance\KizeoForms\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new \SiapepFrance\KizeoForms\Api\ListsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \SiapepFrance\KizeoForms\Model\ListPut(); // \SiapepFrance\KizeoForms\Model\ListPut | User Parameters
$listId = 56; // int | Id of the list

try {
    $apiInstance->listsListIdPut($body, $listId);
} catch (Exception $e) {
    echo 'Exception when calling ListsApi->listsListIdPut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\SiapepFrance\KizeoForms\Model\ListPut**](../Model/ListPut.md)| User Parameters |
 **listId** | **int**| Id of the list |

### Return type

void (empty response body)

### Authorization

[authentication](../../README.md#authentication)

### HTTP request headers

 - **Content-Type**: */*
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

