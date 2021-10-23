# SiapepFrance\KizeoForms\DataApi

All URIs are relative to *https://www.kizeoforms.com/rest/v3*

Method | HTTP request | Description
------------- | ------------- | -------------
[**formsFormIdDataAdvancedPost**](DataApi.md#formsFormIdDataAdvancedPost) | **POST** /forms/{formId}/data/advanced | Get List of filtered data of a form (with advanced filtering options)
[**formsFormIdDataAllGet**](DataApi.md#formsFormIdDataAllGet) | **GET** /forms/{formId}/data/all | Get the list of all data of a form
[**formsFormIdDataDataIdDeleteDelete**](DataApi.md#formsFormIdDataDataIdDeleteDelete) | **DELETE** /forms/{formId}/data/{dataId}/delete | Delete a data
[**formsFormIdDataDataIdGet**](DataApi.md#formsFormIdDataDataIdGet) | **GET** /forms/{formId}/data/{dataId} | Get data of a form
[**formsFormIdDataGet**](DataApi.md#formsFormIdDataGet) | **GET** /forms/{formId}/data | Get the list of all data of a form (not read)
[**formsFormIdDataReadnewGet**](DataApi.md#formsFormIdDataReadnewGet) | **GET** /forms/{formId}/data/readnew | Get content of unread data
[**formsFormIdDataSearchPost**](DataApi.md#formsFormIdDataSearchPost) | **POST** /forms/{formId}/data/search | Get List of filtered data of a form
[**formsFormIdMarkasreadPost**](DataApi.md#formsFormIdMarkasreadPost) | **POST** /forms/{formId}/markasread | Set list of data of a form to read
[**formsFormIdMarkasunreadPost**](DataApi.md#formsFormIdMarkasunreadPost) | **POST** /forms/{formId}/markasunread | Set list of data of form to unread
[**formsFormIdPushDataIdPost**](DataApi.md#formsFormIdPushDataIdPost) | **POST** /forms/{formId}/push/{dataId} | Send push with data
[**formsFormIdPushPost**](DataApi.md#formsFormIdPushPost) | **POST** /forms/{formId}/push | Send push with data
[**formsPushInboxGet**](DataApi.md#formsPushInboxGet) | **GET** /forms/push/inbox | Receive new pushed data

# **formsFormIdDataAdvancedPost**
> object formsFormIdDataAdvancedPost($body, $formId)

Get List of filtered data of a form (with advanced filtering options)

Get the list of filtered data of a form (with advanced filtering options), or of all forms if formId is set to 'all'

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: authentication
$config = \SiapepFrance\KizeoForms\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = \SiapepFrance\KizeoForms\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new \SiapepFrance\KizeoForms\Api\DataApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \SiapepFrance\KizeoForms\Model\AdvancedFilter(); // \SiapepFrance\KizeoForms\Model\AdvancedFilter | Data params
$formId = 56; // int | ID of the form

try {
    $result = $apiInstance->formsFormIdDataAdvancedPost($body, $formId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DataApi->formsFormIdDataAdvancedPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\SiapepFrance\KizeoForms\Model\AdvancedFilter**](../Model/AdvancedFilter.md)| Data params |
 **formId** | **int**| ID of the form |

### Return type

**object**

### Authorization

[authentication](../../README.md#authentication)

### HTTP request headers

 - **Content-Type**: */*
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **formsFormIdDataAllGet**
> object formsFormIdDataAllGet($formId)

Get the list of all data of a form

This function provides you all data of a form

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: authentication
$config = \SiapepFrance\KizeoForms\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = \SiapepFrance\KizeoForms\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new \SiapepFrance\KizeoForms\Api\DataApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$formId = 56; // int | ID of the form

try {
    $result = $apiInstance->formsFormIdDataAllGet($formId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DataApi->formsFormIdDataAllGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **formId** | **int**| ID of the form |

### Return type

**object**

### Authorization

[authentication](../../README.md#authentication)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **formsFormIdDataDataIdDeleteDelete**
> formsFormIdDataDataIdDeleteDelete($formId, $dataId)

Delete a data

Delete existing data

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: authentication
$config = \SiapepFrance\KizeoForms\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = \SiapepFrance\KizeoForms\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new \SiapepFrance\KizeoForms\Api\DataApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$formId = 56; // int | ID of the form
$dataId = 56; // int | ID of the data

try {
    $apiInstance->formsFormIdDataDataIdDeleteDelete($formId, $dataId);
} catch (Exception $e) {
    echo 'Exception when calling DataApi->formsFormIdDataDataIdDeleteDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **formId** | **int**| ID of the form |
 **dataId** | **int**| ID of the data |

### Return type

void (empty response body)

### Authorization

[authentication](../../README.md#authentication)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **formsFormIdDataDataIdGet**
> \SiapepFrance\KizeoForms\Model\Data formsFormIdDataDataIdGet($formId, $dataId)

Get data of a form

Get data of a form

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: authentication
$config = \SiapepFrance\KizeoForms\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = \SiapepFrance\KizeoForms\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new \SiapepFrance\KizeoForms\Api\DataApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$formId = 56; // int | ID of the form
$dataId = 56; // int | ID of the data

try {
    $result = $apiInstance->formsFormIdDataDataIdGet($formId, $dataId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DataApi->formsFormIdDataDataIdGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **formId** | **int**| ID of the form |
 **dataId** | **int**| ID of the data |

### Return type

[**\SiapepFrance\KizeoForms\Model\Data**](../Model/Data.md)

### Authorization

[authentication](../../README.md#authentication)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **formsFormIdDataGet**
> object formsFormIdDataGet($formId)

Get the list of all data of a form (not read)

This function provides you all data of a form (not read)

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: authentication
$config = \SiapepFrance\KizeoForms\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = \SiapepFrance\KizeoForms\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new \SiapepFrance\KizeoForms\Api\DataApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$formId = 56; // int | ID of the form

try {
    $result = $apiInstance->formsFormIdDataGet($formId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DataApi->formsFormIdDataGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **formId** | **int**| ID of the form |

### Return type

**object**

### Authorization

[authentication](../../README.md#authentication)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **formsFormIdDataReadnewGet**
> object formsFormIdDataReadnewGet($formId)

Get content of unread data

Get the content of all unread data

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: authentication
$config = \SiapepFrance\KizeoForms\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = \SiapepFrance\KizeoForms\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new \SiapepFrance\KizeoForms\Api\DataApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$formId = 56; // int | ID of the form

try {
    $result = $apiInstance->formsFormIdDataReadnewGet($formId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DataApi->formsFormIdDataReadnewGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **formId** | **int**| ID of the form |

### Return type

**object**

### Authorization

[authentication](../../README.md#authentication)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **formsFormIdDataSearchPost**
> object formsFormIdDataSearchPost($body, $formId)

Get List of filtered data of a form

Get the list of filtered data of a form, or of all forms if formId is set to 'all'

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: authentication
$config = \SiapepFrance\KizeoForms\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = \SiapepFrance\KizeoForms\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new \SiapepFrance\KizeoForms\Api\DataApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \SiapepFrance\KizeoForms\Model\SearchFilter(); // \SiapepFrance\KizeoForms\Model\SearchFilter | Data params
$formId = 56; // int | ID of the form

try {
    $result = $apiInstance->formsFormIdDataSearchPost($body, $formId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DataApi->formsFormIdDataSearchPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\SiapepFrance\KizeoForms\Model\SearchFilter**](../Model/SearchFilter.md)| Data params |
 **formId** | **int**| ID of the form |

### Return type

**object**

### Authorization

[authentication](../../README.md#authentication)

### HTTP request headers

 - **Content-Type**: */*
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **formsFormIdMarkasreadPost**
> object formsFormIdMarkasreadPost($body, $formId)

Set list of data of a form to read

Set list of data of a form to read

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: authentication
$config = \SiapepFrance\KizeoForms\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = \SiapepFrance\KizeoForms\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new \SiapepFrance\KizeoForms\Api\DataApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \SiapepFrance\KizeoForms\Model\DataIds(); // \SiapepFrance\KizeoForms\Model\DataIds | Data ids parameters
$formId = 56; // int | ID of the form

try {
    $result = $apiInstance->formsFormIdMarkasreadPost($body, $formId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DataApi->formsFormIdMarkasreadPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\SiapepFrance\KizeoForms\Model\DataIds**](../Model/DataIds.md)| Data ids parameters |
 **formId** | **int**| ID of the form |

### Return type

**object**

### Authorization

[authentication](../../README.md#authentication)

### HTTP request headers

 - **Content-Type**: */*
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **formsFormIdMarkasunreadPost**
> object formsFormIdMarkasunreadPost($body, $formId)

Set list of data of form to unread

Set list of data of form to unread

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: authentication
$config = \SiapepFrance\KizeoForms\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = \SiapepFrance\KizeoForms\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new \SiapepFrance\KizeoForms\Api\DataApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \SiapepFrance\KizeoForms\Model\DataIds(); // \SiapepFrance\KizeoForms\Model\DataIds | Data ids parameters
$formId = 56; // int | ID of the form

try {
    $result = $apiInstance->formsFormIdMarkasunreadPost($body, $formId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DataApi->formsFormIdMarkasunreadPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\SiapepFrance\KizeoForms\Model\DataIds**](../Model/DataIds.md)| Data ids parameters |
 **formId** | **int**| ID of the form |

### Return type

**object**

### Authorization

[authentication](../../README.md#authentication)

### HTTP request headers

 - **Content-Type**: */*
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **formsFormIdPushDataIdPost**
> \SiapepFrance\KizeoForms\Model\DataMin formsFormIdPushDataIdPost($body, $formId, $dataId)

Send push with data

Send push with data

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: authentication
$config = \SiapepFrance\KizeoForms\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = \SiapepFrance\KizeoForms\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new \SiapepFrance\KizeoForms\Api\DataApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \SiapepFrance\KizeoForms\Model\DataPush(); // \SiapepFrance\KizeoForms\Model\DataPush | Data parameters
$formId = 56; // int | ID of the form
$dataId = 56; // int | ID of the data to edit

try {
    $result = $apiInstance->formsFormIdPushDataIdPost($body, $formId, $dataId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DataApi->formsFormIdPushDataIdPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\SiapepFrance\KizeoForms\Model\DataPush**](../Model/DataPush.md)| Data parameters |
 **formId** | **int**| ID of the form |
 **dataId** | **int**| ID of the data to edit |

### Return type

[**\SiapepFrance\KizeoForms\Model\DataMin**](../Model/DataMin.md)

### Authorization

[authentication](../../README.md#authentication)

### HTTP request headers

 - **Content-Type**: */*
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **formsFormIdPushPost**
> \SiapepFrance\KizeoForms\Model\DataMin formsFormIdPushPost($body, $formId)

Send push with data

Send push with data

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: authentication
$config = \SiapepFrance\KizeoForms\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = \SiapepFrance\KizeoForms\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new \SiapepFrance\KizeoForms\Api\DataApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \SiapepFrance\KizeoForms\Model\DataPush(); // \SiapepFrance\KizeoForms\Model\DataPush | Data parameters
$formId = 56; // int | ID of the form

try {
    $result = $apiInstance->formsFormIdPushPost($body, $formId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DataApi->formsFormIdPushPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\SiapepFrance\KizeoForms\Model\DataPush**](../Model/DataPush.md)| Data parameters |
 **formId** | **int**| ID of the form |

### Return type

[**\SiapepFrance\KizeoForms\Model\DataMin**](../Model/DataMin.md)

### Authorization

[authentication](../../README.md#authentication)

### HTTP request headers

 - **Content-Type**: */*
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **formsPushInboxGet**
> \SiapepFrance\KizeoForms\Model\FormMin formsPushInboxGet()

Receive new pushed data

Receive all new pushed data

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: authentication
$config = \SiapepFrance\KizeoForms\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = \SiapepFrance\KizeoForms\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new \SiapepFrance\KizeoForms\Api\DataApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->formsPushInboxGet();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DataApi->formsPushInboxGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\SiapepFrance\KizeoForms\Model\FormMin**](../Model/FormMin.md)

### Authorization

[authentication](../../README.md#authentication)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

