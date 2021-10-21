# SiapepFrance\KizeoForms\ExportsApi

All URIs are relative to *https://www.kizeoforms.com/rest/v3*

Method | HTTP request | Description
------------- | ------------- | -------------
[**formsFormIdDataDataIdExportsExportIdGet**](ExportsApi.md#formsFormIdDataDataIdExportsExportIdGet) | **GET** /forms/{formId}/data/{dataId}/exports/{exportId} | Export data
[**formsFormIdDataDataIdExportsExportIdPdfGet**](ExportsApi.md#formsFormIdDataDataIdExportsExportIdPdfGet) | **GET** /forms/{formId}/data/{dataId}/exports/{exportId}/pdf | Export data (PDF)
[**formsFormIdDataDataIdFormPicturesMediaNameGet**](ExportsApi.md#formsFormIdDataDataIdFormPicturesMediaNameGet) | **GET** /forms/{formId}/data/{dataId}/form_pictures/{mediaName} | Get one fixed image of a form
[**formsFormIdDataDataIdMediasMediaNameGet**](ExportsApi.md#formsFormIdDataDataIdMediasMediaNameGet) | **GET** /forms/{formId}/data/{dataId}/medias/{mediaName} | Get one image of a form
[**formsFormIdDataDataIdPdfGet**](ExportsApi.md#formsFormIdDataDataIdPdfGet) | **GET** /forms/{formId}/data/{dataId}/pdf | Get PDF data of a form
[**formsFormIdDataMultipleCsvCustomPost**](ExportsApi.md#formsFormIdDataMultipleCsvCustomPost) | **POST** /forms/{formId}/data/multiple/csv_custom | Get custom CSV data (multiple) of a form
[**formsFormIdDataMultipleCsvPost**](ExportsApi.md#formsFormIdDataMultipleCsvPost) | **POST** /forms/{formId}/data/multiple/csv | Get CSV data (multiple) of a form
[**formsFormIdDataMultipleExcelCustomPost**](ExportsApi.md#formsFormIdDataMultipleExcelCustomPost) | **POST** /forms/{formId}/data/multiple/excel_custom | Get custom Excel list data (multiple) of a form
[**formsFormIdDataMultipleExcelPost**](ExportsApi.md#formsFormIdDataMultipleExcelPost) | **POST** /forms/{formId}/data/multiple/excel | Get Excel list data (multiple) of a form
[**formsFormIdExportsGet**](ExportsApi.md#formsFormIdExportsGet) | **GET** /forms/{formId}/exports | Get list of Word and Excel exports
[**formsFormIdMultipleDataExportsExportIdPdfPost**](ExportsApi.md#formsFormIdMultipleDataExportsExportIdPdfPost) | **POST** /forms/{formId}/multiple_data/exports/{exportId}/pdf | Export data (multiple / PDF)

# **formsFormIdDataDataIdExportsExportIdGet**
> formsFormIdDataDataIdExportsExportIdGet($formId, $dataId, $exportId)

Export data

Export one entry to the selected export.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: authentication
$config = SiapepFrance\KizeoForms\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = SiapepFrance\KizeoForms\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new SiapepFrance\KizeoForms\Api\ExportsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$formId = 56; // int | ID of the form
$dataId = 56; // int | ID of the data
$exportId = 56; // int | ID of requested export model

try {
    $apiInstance->formsFormIdDataDataIdExportsExportIdGet($formId, $dataId, $exportId);
} catch (Exception $e) {
    echo 'Exception when calling ExportsApi->formsFormIdDataDataIdExportsExportIdGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **formId** | **int**| ID of the form |
 **dataId** | **int**| ID of the data |
 **exportId** | **int**| ID of requested export model |

### Return type

void (empty response body)

### Authorization

[authentication](../../README.md#authentication)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **formsFormIdDataDataIdExportsExportIdPdfGet**
> formsFormIdDataDataIdExportsExportIdPdfGet($formId, $dataId, $exportId)

Export data (PDF)

Export one entry to the selected export to PDF.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: authentication
$config = SiapepFrance\KizeoForms\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = SiapepFrance\KizeoForms\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new SiapepFrance\KizeoForms\Api\ExportsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$formId = 56; // int | ID of the form
$dataId = 56; // int | ID of the data
$exportId = 56; // int | ID of requested export model

try {
    $apiInstance->formsFormIdDataDataIdExportsExportIdPdfGet($formId, $dataId, $exportId);
} catch (Exception $e) {
    echo 'Exception when calling ExportsApi->formsFormIdDataDataIdExportsExportIdPdfGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **formId** | **int**| ID of the form |
 **dataId** | **int**| ID of the data |
 **exportId** | **int**| ID of requested export model |

### Return type

void (empty response body)

### Authorization

[authentication](../../README.md#authentication)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **formsFormIdDataDataIdFormPicturesMediaNameGet**
> formsFormIdDataDataIdFormPicturesMediaNameGet($formId, $dataId, $mediaName)

Get one fixed image of a form

Get one fixed image of a form

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: authentication
$config = SiapepFrance\KizeoForms\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = SiapepFrance\KizeoForms\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new SiapepFrance\KizeoForms\Api\ExportsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$formId = 56; // int | ID of the form
$dataId = 56; // int | ID of the data
$mediaName = "mediaName_example"; // string | Name of the image

try {
    $apiInstance->formsFormIdDataDataIdFormPicturesMediaNameGet($formId, $dataId, $mediaName);
} catch (Exception $e) {
    echo 'Exception when calling ExportsApi->formsFormIdDataDataIdFormPicturesMediaNameGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **formId** | **int**| ID of the form |
 **dataId** | **int**| ID of the data |
 **mediaName** | **string**| Name of the image |

### Return type

void (empty response body)

### Authorization

[authentication](../../README.md#authentication)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **formsFormIdDataDataIdMediasMediaNameGet**
> formsFormIdDataDataIdMediasMediaNameGet($formId, $dataId, $mediaName)

Get one image of a form

Get one image of a form

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: authentication
$config = SiapepFrance\KizeoForms\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = SiapepFrance\KizeoForms\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new SiapepFrance\KizeoForms\Api\ExportsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$formId = 56; // int | ID of the form
$dataId = 56; // int | ID of the data
$mediaName = "mediaName_example"; // string | Name of the image

try {
    $apiInstance->formsFormIdDataDataIdMediasMediaNameGet($formId, $dataId, $mediaName);
} catch (Exception $e) {
    echo 'Exception when calling ExportsApi->formsFormIdDataDataIdMediasMediaNameGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **formId** | **int**| ID of the form |
 **dataId** | **int**| ID of the data |
 **mediaName** | **string**| Name of the image |

### Return type

void (empty response body)

### Authorization

[authentication](../../README.md#authentication)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **formsFormIdDataDataIdPdfGet**
> formsFormIdDataDataIdPdfGet($formId, $dataId)

Get PDF data of a form

Get PDF data of a form

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: authentication
$config = SiapepFrance\KizeoForms\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = SiapepFrance\KizeoForms\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new SiapepFrance\KizeoForms\Api\ExportsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$formId = 56; // int | ID of the form
$dataId = 56; // int | ID of the data

try {
    $apiInstance->formsFormIdDataDataIdPdfGet($formId, $dataId);
} catch (Exception $e) {
    echo 'Exception when calling ExportsApi->formsFormIdDataDataIdPdfGet: ', $e->getMessage(), PHP_EOL;
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

# **formsFormIdDataMultipleCsvCustomPost**
> formsFormIdDataMultipleCsvCustomPost($body, $formId)

Get custom CSV data (multiple) of a form

Get custom CSV data (multiple) of a form

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: authentication
$config = SiapepFrance\KizeoForms\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = SiapepFrance\KizeoForms\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new SiapepFrance\KizeoForms\Api\ExportsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \SiapepFrance\KizeoForms\Model\DataIds(); // \SiapepFrance\KizeoForms\Model\DataIds | Data ids Parameters
$formId = 56; // int | ID of the form

try {
    $apiInstance->formsFormIdDataMultipleCsvCustomPost($body, $formId);
} catch (Exception $e) {
    echo 'Exception when calling ExportsApi->formsFormIdDataMultipleCsvCustomPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\SiapepFrance\KizeoForms\Model\DataIds**](../Model/DataIds.md)| Data ids Parameters |
 **formId** | **int**| ID of the form |

### Return type

void (empty response body)

### Authorization

[authentication](../../README.md#authentication)

### HTTP request headers

 - **Content-Type**: */*
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **formsFormIdDataMultipleCsvPost**
> formsFormIdDataMultipleCsvPost($formId, $body)

Get CSV data (multiple) of a form

Get CSV data (multiple) of a form

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: authentication
$config = SiapepFrance\KizeoForms\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = SiapepFrance\KizeoForms\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new SiapepFrance\KizeoForms\Api\ExportsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$formId = 56; // int | ID of the form
$body = new \SiapepFrance\KizeoForms\Model\DataIds(); // \SiapepFrance\KizeoForms\Model\DataIds | Data ids Parameters

try {
    $apiInstance->formsFormIdDataMultipleCsvPost($formId, $body);
} catch (Exception $e) {
    echo 'Exception when calling ExportsApi->formsFormIdDataMultipleCsvPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **formId** | **int**| ID of the form |
 **body** | [**\SiapepFrance\KizeoForms\Model\DataIds**](../Model/DataIds.md)| Data ids Parameters | [optional]

### Return type

void (empty response body)

### Authorization

[authentication](../../README.md#authentication)

### HTTP request headers

 - **Content-Type**: */*
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **formsFormIdDataMultipleExcelCustomPost**
> formsFormIdDataMultipleExcelCustomPost($body, $formId)

Get custom Excel list data (multiple) of a form

Get custom Excel list data (multiple) of a form

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: authentication
$config = SiapepFrance\KizeoForms\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = SiapepFrance\KizeoForms\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new SiapepFrance\KizeoForms\Api\ExportsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \SiapepFrance\KizeoForms\Model\DataIds(); // \SiapepFrance\KizeoForms\Model\DataIds | Data ids Parameters
$formId = 56; // int | ID of the form

try {
    $apiInstance->formsFormIdDataMultipleExcelCustomPost($body, $formId);
} catch (Exception $e) {
    echo 'Exception when calling ExportsApi->formsFormIdDataMultipleExcelCustomPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\SiapepFrance\KizeoForms\Model\DataIds**](../Model/DataIds.md)| Data ids Parameters |
 **formId** | **int**| ID of the form |

### Return type

void (empty response body)

### Authorization

[authentication](../../README.md#authentication)

### HTTP request headers

 - **Content-Type**: */*
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **formsFormIdDataMultipleExcelPost**
> formsFormIdDataMultipleExcelPost($body, $formId)

Get Excel list data (multiple) of a form

Get Excel list data (multiple) of a form

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: authentication
$config = SiapepFrance\KizeoForms\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = SiapepFrance\KizeoForms\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new SiapepFrance\KizeoForms\Api\ExportsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \SiapepFrance\KizeoForms\Model\DataIds(); // \SiapepFrance\KizeoForms\Model\DataIds | Data ids Parameters
$formId = 56; // int | ID of the form

try {
    $apiInstance->formsFormIdDataMultipleExcelPost($body, $formId);
} catch (Exception $e) {
    echo 'Exception when calling ExportsApi->formsFormIdDataMultipleExcelPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\SiapepFrance\KizeoForms\Model\DataIds**](../Model/DataIds.md)| Data ids Parameters |
 **formId** | **int**| ID of the form |

### Return type

void (empty response body)

### Authorization

[authentication](../../README.md#authentication)

### HTTP request headers

 - **Content-Type**: */*
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **formsFormIdExportsGet**
> formsFormIdExportsGet($formId)

Get list of Word and Excel exports

Get the complete list of Word et Excel exports

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: authentication
$config = SiapepFrance\KizeoForms\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = SiapepFrance\KizeoForms\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new SiapepFrance\KizeoForms\Api\ExportsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$formId = 56; // int | ID of the form

try {
    $apiInstance->formsFormIdExportsGet($formId);
} catch (Exception $e) {
    echo 'Exception when calling ExportsApi->formsFormIdExportsGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **formId** | **int**| ID of the form |

### Return type

void (empty response body)

### Authorization

[authentication](../../README.md#authentication)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **formsFormIdMultipleDataExportsExportIdPdfPost**
> formsFormIdMultipleDataExportsExportIdPdfPost($formId, $exportId, $body)

Export data (multiple / PDF)

Export multiple entries to the selected export to PDF.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: authentication
$config = SiapepFrance\KizeoForms\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = SiapepFrance\KizeoForms\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new SiapepFrance\KizeoForms\Api\ExportsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$formId = 56; // int | ID of the form
$exportId = 56; // int | ID of requested export model
$body = new \SiapepFrance\KizeoForms\Model\DataIds(); // \SiapepFrance\KizeoForms\Model\DataIds | Data ids Parameters

try {
    $apiInstance->formsFormIdMultipleDataExportsExportIdPdfPost($formId, $exportId, $body);
} catch (Exception $e) {
    echo 'Exception when calling ExportsApi->formsFormIdMultipleDataExportsExportIdPdfPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **formId** | **int**| ID of the form |
 **exportId** | **int**| ID of requested export model |
 **body** | [**\SiapepFrance\KizeoForms\Model\DataIds**](../Model/DataIds.md)| Data ids Parameters | [optional]

### Return type

void (empty response body)

### Authorization

[authentication](../../README.md#authentication)

### HTTP request headers

 - **Content-Type**: */*
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

