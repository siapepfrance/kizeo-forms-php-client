# SiapepFrance\KizeoForms\FormsApi

All URIs are relative to *https://www.kizeoforms.com/rest/v3*

Method | HTTP request | Description
------------- | ------------- | -------------
[**formsFormIdGet**](FormsApi.md#formsFormIdGet) | **GET** /forms/{formId} | Get form definition
[**formsGet**](FormsApi.md#formsGet) | **GET** /forms | List all forms

# **formsFormIdGet**
> \SiapepFrance\KizeoForms\Model\Form formsFormIdGet($formId)

Get form definition

This function provides you a complete form definition

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: authentication
$config = SiapepFrance\KizeoForms\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = SiapepFrance\KizeoForms\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new SiapepFrance\KizeoForms\Api\FormsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$formId = 56; // int | ID of the form

try {
    $result = $apiInstance->formsFormIdGet($formId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FormsApi->formsFormIdGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **formId** | **int**| ID of the form |

### Return type

[**\SiapepFrance\KizeoForms\Model\Form**](../Model/Form.md)

### Authorization

[authentication](../../README.md#authentication)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **formsGet**
> \SiapepFrance\KizeoForms\Model\FormMin formsGet()

List all forms

This function provides you a list of all forms in the account.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: authentication
$config = SiapepFrance\KizeoForms\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = SiapepFrance\KizeoForms\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new SiapepFrance\KizeoForms\Api\FormsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->formsGet();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FormsApi->formsGet: ', $e->getMessage(), PHP_EOL;
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

