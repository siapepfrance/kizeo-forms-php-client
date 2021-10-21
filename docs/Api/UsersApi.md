# SiapepFrance\KizeoForms\UsersApi

All URIs are relative to *https://www.kizeoforms.com/rest/v3*

Method | HTTP request | Description
------------- | ------------- | -------------
[**usersGet**](UsersApi.md#usersGet) | **GET** /users | Get all users
[**usersPost**](UsersApi.md#usersPost) | **POST** /users | Create a new user
[**usersUserIdDelete**](UsersApi.md#usersUserIdDelete) | **DELETE** /users/{userId} | Delete a user
[**usersUserIdPut**](UsersApi.md#usersUserIdPut) | **PUT** /users/{userId} | Update a user

# **usersGet**
> \SiapepFrance\KizeoForms\Model\User usersGet()

Get all users

This function provides you a list of all users in the account.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: authentication
$config = SiapepFrance\KizeoForms\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = SiapepFrance\KizeoForms\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new SiapepFrance\KizeoForms\Api\UsersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->usersGet();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UsersApi->usersGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\SiapepFrance\KizeoForms\Model\User**](../Model/User.md)

### Authorization

[authentication](../../README.md#authentication)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **usersPost**
> \SiapepFrance\KizeoForms\Model\DefaultResponse usersPost($body)

Create a new user

Login, password, first_name, last_name, admin and form_user are required.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: authentication
$config = SiapepFrance\KizeoForms\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = SiapepFrance\KizeoForms\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new SiapepFrance\KizeoForms\Api\UsersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \SiapepFrance\KizeoForms\Model\User(); // \SiapepFrance\KizeoForms\Model\User | User params

try {
    $result = $apiInstance->usersPost($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UsersApi->usersPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\SiapepFrance\KizeoForms\Model\User**](../Model/User.md)| User params |

### Return type

[**\SiapepFrance\KizeoForms\Model\DefaultResponse**](../Model/DefaultResponse.md)

### Authorization

[authentication](../../README.md#authentication)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **usersUserIdDelete**
> \SiapepFrance\KizeoForms\Model\DefaultResponse usersUserIdDelete($userId)

Delete a user

Delete an existing user

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: authentication
$config = SiapepFrance\KizeoForms\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = SiapepFrance\KizeoForms\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new SiapepFrance\KizeoForms\Api\UsersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$userId = 56; // int | ID of user to edit

try {
    $result = $apiInstance->usersUserIdDelete($userId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UsersApi->usersUserIdDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **userId** | **int**| ID of user to edit |

### Return type

[**\SiapepFrance\KizeoForms\Model\DefaultResponse**](../Model/DefaultResponse.md)

### Authorization

[authentication](../../README.md#authentication)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **usersUserIdPut**
> \SiapepFrance\KizeoForms\Model\DefaultResponse usersUserIdPut($body, $userId)

Update a user

Update an existing user

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: authentication
$config = SiapepFrance\KizeoForms\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = SiapepFrance\KizeoForms\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new SiapepFrance\KizeoForms\Api\UsersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \SiapepFrance\KizeoForms\Model\User(); // \SiapepFrance\KizeoForms\Model\User | User params
$userId = 56; // int | ID of user to edit

try {
    $result = $apiInstance->usersUserIdPut($body, $userId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UsersApi->usersUserIdPut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\SiapepFrance\KizeoForms\Model\User**](../Model/User.md)| User params |
 **userId** | **int**| ID of user to edit |

### Return type

[**\SiapepFrance\KizeoForms\Model\DefaultResponse**](../Model/DefaultResponse.md)

### Authorization

[authentication](../../README.md#authentication)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

