# SiapepFrance\KizeoForms\GroupsApi

All URIs are relative to *https://www.kizeoforms.com/rest/v3*

Method | HTTP request | Description
------------- | ------------- | -------------
[**groupGroupIdDelete**](GroupsApi.md#groupGroupIdDelete) | **DELETE** /group/{groupId} | Delete a group
[**groupGroupIdGet**](GroupsApi.md#groupGroupIdGet) | **GET** /group/{groupId} | Get a group
[**groupGroupIdLeaderLeaderIdDelete**](GroupsApi.md#groupGroupIdLeaderLeaderIdDelete) | **DELETE** /group/{groupId}/leader/{leaderId} | Remove a leader from a specific group
[**groupGroupIdLeaderLeaderIdPost**](GroupsApi.md#groupGroupIdLeaderLeaderIdPost) | **POST** /group/{groupId}/leader/{leaderId} | Add a leader into a specific group
[**groupGroupIdLeadersGet**](GroupsApi.md#groupGroupIdLeadersGet) | **GET** /group/{groupId}/leaders | Get all groups&#x27; leaders of a specific group
[**groupGroupIdLeadersPost**](GroupsApi.md#groupGroupIdLeadersPost) | **POST** /group/{groupId}/leaders | Add several leaders into a group
[**groupGroupIdPut**](GroupsApi.md#groupGroupIdPut) | **PUT** /group/{groupId} | Update a group
[**groupGroupIdUserUserIdDelete**](GroupsApi.md#groupGroupIdUserUserIdDelete) | **DELETE** /group/{groupId}/user/{userId} | Remove an user from a specific group
[**groupGroupIdUserUserIdPost**](GroupsApi.md#groupGroupIdUserUserIdPost) | **POST** /group/{groupId}/user/{userId} | Add an user into a specific group
[**groupGroupIdUsersGet**](GroupsApi.md#groupGroupIdUsersGet) | **GET** /group/{groupId}/users | Get all users of a specific group
[**groupGroupIdUsersPost**](GroupsApi.md#groupGroupIdUsersPost) | **POST** /group/{groupId}/users | Add several users into a group
[**groupPost**](GroupsApi.md#groupPost) | **POST** /group | Create a new group
[**groupsGet**](GroupsApi.md#groupsGet) | **GET** /groups | Get all groups
[**groupsOrderedGet**](GroupsApi.md#groupsOrderedGet) | **GET** /groups/ordered | Get all groups ordered

# **groupGroupIdDelete**
> groupGroupIdDelete($groupId)

Delete a group

Delete existing group

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: authentication
$config = \SiapepFrance\KizeoForms\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = \SiapepFrance\KizeoForms\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new SiapepFrance\KizeoForms\Api\GroupsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$groupId = 56; // int | Id of the group

try {
    $apiInstance->groupGroupIdDelete($groupId);
} catch (Exception $e) {
    echo 'Exception when calling GroupsApi->groupGroupIdDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **groupId** | **int**| Id of the group |

### Return type

void (empty response body)

### Authorization

[authentication](../../README.md#authentication)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **groupGroupIdGet**
> \SiapepFrance\KizeoForms\Model\GroupComplete groupGroupIdGet($groupId)

Get a group

Get all informations about the group

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: authentication
$config = \SiapepFrance\KizeoForms\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = \SiapepFrance\KizeoForms\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new SiapepFrance\KizeoForms\Api\GroupsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$groupId = 56; // int | Id of the group

try {
    $result = $apiInstance->groupGroupIdGet($groupId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GroupsApi->groupGroupIdGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **groupId** | **int**| Id of the group |

### Return type

[**\SiapepFrance\KizeoForms\Model\GroupComplete**](../Model/GroupComplete.md)

### Authorization

[authentication](../../README.md#authentication)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: */*

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **groupGroupIdLeaderLeaderIdDelete**
> \SiapepFrance\KizeoForms\Model\GroupComplete groupGroupIdLeaderLeaderIdDelete($groupId, $leaderId)

Remove a leader from a specific group

Remove a leader from a specific group

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: authentication
$config = \SiapepFrance\KizeoForms\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = \SiapepFrance\KizeoForms\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new SiapepFrance\KizeoForms\Api\GroupsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$groupId = 56; // int | Id of the group
$leaderId = 56; // int | Id of the leader

try {
    $result = $apiInstance->groupGroupIdLeaderLeaderIdDelete($groupId, $leaderId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GroupsApi->groupGroupIdLeaderLeaderIdDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **groupId** | **int**| Id of the group |
 **leaderId** | **int**| Id of the leader |

### Return type

[**\SiapepFrance\KizeoForms\Model\GroupComplete**](../Model/GroupComplete.md)

### Authorization

[authentication](../../README.md#authentication)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **groupGroupIdLeaderLeaderIdPost**
> \SiapepFrance\KizeoForms\Model\GroupComplete groupGroupIdLeaderLeaderIdPost($groupId, $leaderId)

Add a leader into a specific group

Add a leader into a specific group

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: authentication
$config = \SiapepFrance\KizeoForms\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = \SiapepFrance\KizeoForms\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new SiapepFrance\KizeoForms\Api\GroupsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$groupId = 56; // int | Id of the group
$leaderId = 56; // int | Id of the leader

try {
    $result = $apiInstance->groupGroupIdLeaderLeaderIdPost($groupId, $leaderId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GroupsApi->groupGroupIdLeaderLeaderIdPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **groupId** | **int**| Id of the group |
 **leaderId** | **int**| Id of the leader |

### Return type

[**\SiapepFrance\KizeoForms\Model\GroupComplete**](../Model/GroupComplete.md)

### Authorization

[authentication](../../README.md#authentication)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **groupGroupIdLeadersGet**
> \SiapepFrance\KizeoForms\Model\GroupUser groupGroupIdLeadersGet($groupId)

Get all groups' leaders of a specific group

Use to get all groups' leaders of a specific group

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: authentication
$config = \SiapepFrance\KizeoForms\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = \SiapepFrance\KizeoForms\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new SiapepFrance\KizeoForms\Api\GroupsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$groupId = 56; // int | Id of the group

try {
    $result = $apiInstance->groupGroupIdLeadersGet($groupId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GroupsApi->groupGroupIdLeadersGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **groupId** | **int**| Id of the group |

### Return type

[**\SiapepFrance\KizeoForms\Model\GroupUser**](../Model/GroupUser.md)

### Authorization

[authentication](../../README.md#authentication)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **groupGroupIdLeadersPost**
> \SiapepFrance\KizeoForms\Model\User groupGroupIdLeadersPost($body, $groupId)

Add several leaders into a group

Use to add several leaders into a group

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: authentication
$config = \SiapepFrance\KizeoForms\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = \SiapepFrance\KizeoForms\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new SiapepFrance\KizeoForms\Api\GroupsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \SiapepFrance\KizeoForms\Model\UserResponse(); // \SiapepFrance\KizeoForms\Model\UserResponse | Leaders ids
$groupId = 56; // int | Id of the group

try {
    $result = $apiInstance->groupGroupIdLeadersPost($body, $groupId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GroupsApi->groupGroupIdLeadersPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\SiapepFrance\KizeoForms\Model\UserResponse**](../Model/UserResponse.md)| Leaders ids |
 **groupId** | **int**| Id of the group |

### Return type

[**\SiapepFrance\KizeoForms\Model\User**](../Model/User.md)

### Authorization

[authentication](../../README.md#authentication)

### HTTP request headers

 - **Content-Type**: */*
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **groupGroupIdPut**
> groupGroupIdPut($body, $groupId)

Update a group

Update existing group

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: authentication
$config = \SiapepFrance\KizeoForms\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = \SiapepFrance\KizeoForms\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new SiapepFrance\KizeoForms\Api\GroupsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \SiapepFrance\KizeoForms\Model\GroupModify(); // \SiapepFrance\KizeoForms\Model\GroupModify | Group Parameters
$groupId = 56; // int | Id of the group

try {
    $apiInstance->groupGroupIdPut($body, $groupId);
} catch (Exception $e) {
    echo 'Exception when calling GroupsApi->groupGroupIdPut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\SiapepFrance\KizeoForms\Model\GroupModify**](../Model/GroupModify.md)| Group Parameters |
 **groupId** | **int**| Id of the group |

### Return type

void (empty response body)

### Authorization

[authentication](../../README.md#authentication)

### HTTP request headers

 - **Content-Type**: */*
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **groupGroupIdUserUserIdDelete**
> \SiapepFrance\KizeoForms\Model\GroupComplete groupGroupIdUserUserIdDelete($groupId, $userId)

Remove an user from a specific group

Remove an user from a specific group

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: authentication
$config = \SiapepFrance\KizeoForms\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = \SiapepFrance\KizeoForms\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new SiapepFrance\KizeoForms\Api\GroupsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$groupId = 56; // int | Id of the group
$userId = 56; // int | Id of the user

try {
    $result = $apiInstance->groupGroupIdUserUserIdDelete($groupId, $userId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GroupsApi->groupGroupIdUserUserIdDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **groupId** | **int**| Id of the group |
 **userId** | **int**| Id of the user |

### Return type

[**\SiapepFrance\KizeoForms\Model\GroupComplete**](../Model/GroupComplete.md)

### Authorization

[authentication](../../README.md#authentication)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **groupGroupIdUserUserIdPost**
> \SiapepFrance\KizeoForms\Model\GroupComplete groupGroupIdUserUserIdPost($groupId, $userId)

Add an user into a specific group

Add an user into a group

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: authentication
$config = \SiapepFrance\KizeoForms\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = \SiapepFrance\KizeoForms\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new SiapepFrance\KizeoForms\Api\GroupsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$groupId = 56; // int | Id of the group
$userId = 56; // int | Id of the user

try {
    $result = $apiInstance->groupGroupIdUserUserIdPost($groupId, $userId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GroupsApi->groupGroupIdUserUserIdPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **groupId** | **int**| Id of the group |
 **userId** | **int**| Id of the user |

### Return type

[**\SiapepFrance\KizeoForms\Model\GroupComplete**](../Model/GroupComplete.md)

### Authorization

[authentication](../../README.md#authentication)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **groupGroupIdUsersGet**
> \SiapepFrance\KizeoForms\Model\GroupUser groupGroupIdUsersGet($groupId)

Get all users of a specific group

Use to get all users of the requested group

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: authentication
$config = \SiapepFrance\KizeoForms\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = \SiapepFrance\KizeoForms\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new SiapepFrance\KizeoForms\Api\GroupsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$groupId = 56; // int | Id of the group

try {
    $result = $apiInstance->groupGroupIdUsersGet($groupId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GroupsApi->groupGroupIdUsersGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **groupId** | **int**| Id of the group |

### Return type

[**\SiapepFrance\KizeoForms\Model\GroupUser**](../Model/GroupUser.md)

### Authorization

[authentication](../../README.md#authentication)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **groupGroupIdUsersPost**
> \SiapepFrance\KizeoForms\Model\GroupResponse groupGroupIdUsersPost($body, $groupId)

Add several users into a group

Use to add several users into a group

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: authentication
$config = \SiapepFrance\KizeoForms\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = \SiapepFrance\KizeoForms\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new SiapepFrance\KizeoForms\Api\GroupsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \SiapepFrance\KizeoForms\Model\UserResponse(); // \SiapepFrance\KizeoForms\Model\UserResponse | Users ids
$groupId = 56; // int | Id of the group

try {
    $result = $apiInstance->groupGroupIdUsersPost($body, $groupId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GroupsApi->groupGroupIdUsersPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\SiapepFrance\KizeoForms\Model\UserResponse**](../Model/UserResponse.md)| Users ids |
 **groupId** | **int**| Id of the group |

### Return type

[**\SiapepFrance\KizeoForms\Model\GroupResponse**](../Model/GroupResponse.md)

### Authorization

[authentication](../../README.md#authentication)

### HTTP request headers

 - **Content-Type**: */*
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **groupPost**
> \SiapepFrance\KizeoForms\Model\GroupResponse groupPost($body)

Create a new group

Use to a create group

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: authentication
$config = \SiapepFrance\KizeoForms\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = \SiapepFrance\KizeoForms\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new SiapepFrance\KizeoForms\Api\GroupsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \SiapepFrance\KizeoForms\Model\Group(); // \SiapepFrance\KizeoForms\Model\Group | Group Parameters

try {
    $result = $apiInstance->groupPost($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GroupsApi->groupPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\SiapepFrance\KizeoForms\Model\Group**](../Model/Group.md)| Group Parameters |

### Return type

[**\SiapepFrance\KizeoForms\Model\GroupResponse**](../Model/GroupResponse.md)

### Authorization

[authentication](../../README.md#authentication)

### HTTP request headers

 - **Content-Type**: */*
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **groupsGet**
> groupsGet()

Get all groups

Get Groups Information

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: authentication
$config = \SiapepFrance\KizeoForms\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = \SiapepFrance\KizeoForms\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new SiapepFrance\KizeoForms\Api\GroupsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $apiInstance->groupsGet();
} catch (Exception $e) {
    echo 'Exception when calling GroupsApi->groupsGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

void (empty response body)

### Authorization

[authentication](../../README.md#authentication)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **groupsOrderedGet**
> \SiapepFrance\KizeoForms\Model\Group groupsOrderedGet()

Get all groups ordered

Use to get all groups ordered

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: authentication
$config = \SiapepFrance\KizeoForms\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = \SiapepFrance\KizeoForms\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new SiapepFrance\KizeoForms\Api\GroupsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->groupsOrderedGet();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GroupsApi->groupsOrderedGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\SiapepFrance\KizeoForms\Model\Group**](../Model/Group.md)

### Authorization

[authentication](../../README.md#authentication)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

