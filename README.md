# SwaggerClient-php
This is a Swagger generated doc for Kizeo REST API 3. You can find additionnal documentation here : [Online documentation](/doc).

This PHP package is automatically generated by the [Swagger Codegen](https://github.com/swagger-api/swagger-codegen) project:

- API version: 3.0.0
- Build package: io.swagger.codegen.v3.generators.php.PhpClientCodegen

## Requirements

PHP 5.5 and later

## Installation & Usage
### Composer

To install the bindings via [Composer](http://getcomposer.org/), execute the following command :

```bash
composer require siapepfrance/kizeo-forms-php-client
```

Then run `composer install`

### Manual Installation

Download the files and include `autoload.php`:

```php
    require_once('/path/to/kizeo-forms-php-client/vendor/autoload.php');
```

## Tests

To run the unit tests:

```
composer install
./vendor/bin/phpunit
```

## Getting Started

Please follow the [installation procedure](#installation--usage) and then run the following:

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: authentication
$config = SiapepFrance\KizeoForms\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = SiapepFrance\KizeoForms\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new SiapepFrance\KizeoForms\Api\DataApi(
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

// Configure API key authorization: authentication
$config = SiapepFrance\KizeoForms\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = SiapepFrance\KizeoForms\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new SiapepFrance\KizeoForms\Api\DataApi(
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

// Configure API key authorization: authentication
$config = SiapepFrance\KizeoForms\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = SiapepFrance\KizeoForms\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new SiapepFrance\KizeoForms\Api\DataApi(
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

// Configure API key authorization: authentication
$config = SiapepFrance\KizeoForms\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = SiapepFrance\KizeoForms\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new SiapepFrance\KizeoForms\Api\DataApi(
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

// Configure API key authorization: authentication
$config = SiapepFrance\KizeoForms\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = SiapepFrance\KizeoForms\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new SiapepFrance\KizeoForms\Api\DataApi(
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

// Configure API key authorization: authentication
$config = SiapepFrance\KizeoForms\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = SiapepFrance\KizeoForms\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new SiapepFrance\KizeoForms\Api\DataApi(
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

// Configure API key authorization: authentication
$config = SiapepFrance\KizeoForms\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = SiapepFrance\KizeoForms\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new SiapepFrance\KizeoForms\Api\DataApi(
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

// Configure API key authorization: authentication
$config = SiapepFrance\KizeoForms\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = SiapepFrance\KizeoForms\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new SiapepFrance\KizeoForms\Api\DataApi(
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

// Configure API key authorization: authentication
$config = SiapepFrance\KizeoForms\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = SiapepFrance\KizeoForms\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new SiapepFrance\KizeoForms\Api\DataApi(
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

// Configure API key authorization: authentication
$config = SiapepFrance\KizeoForms\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = SiapepFrance\KizeoForms\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new SiapepFrance\KizeoForms\Api\DataApi(
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

// Configure API key authorization: authentication
$config = SiapepFrance\KizeoForms\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = SiapepFrance\KizeoForms\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new SiapepFrance\KizeoForms\Api\DataApi(
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

## Documentation for API Endpoints

All URIs are relative to *https://www.kizeoforms.com/rest/v3*

Class | Method | HTTP request | Description
------------ | ------------- | ------------- | -------------
*DataApi* | [**formsFormIdDataAdvancedPost**](docs/Api/DataApi.md#formsformiddataadvancedpost) | **POST** /forms/{formId}/data/advanced | Get List of filtered data of a form (with advanced filtering options)
*DataApi* | [**formsFormIdDataAllGet**](docs/Api/DataApi.md#formsformiddataallget) | **GET** /forms/{formId}/data/all | Get the list of all data of a form
*DataApi* | [**formsFormIdDataDataIdGet**](docs/Api/DataApi.md#formsformiddatadataidget) | **GET** /forms/{formId}/data/{dataId} | Get data of a form
*DataApi* | [**formsFormIdDataGet**](docs/Api/DataApi.md#formsformiddataget) | **GET** /forms/{formId}/data | Get the list of all data of a form (not read)
*DataApi* | [**formsFormIdDataReadnewGet**](docs/Api/DataApi.md#formsformiddatareadnewget) | **GET** /forms/{formId}/data/readnew | Get content of unread data
*DataApi* | [**formsFormIdDataSearchPost**](docs/Api/DataApi.md#formsformiddatasearchpost) | **POST** /forms/{formId}/data/search | Get List of filtered data of a form
*DataApi* | [**formsFormIdMarkasreadPost**](docs/Api/DataApi.md#formsformidmarkasreadpost) | **POST** /forms/{formId}/markasread | Set list of data of a form to read
*DataApi* | [**formsFormIdMarkasunreadPost**](docs/Api/DataApi.md#formsformidmarkasunreadpost) | **POST** /forms/{formId}/markasunread | Set list of data of form to unread
*DataApi* | [**formsFormIdPushDataIdPost**](docs/Api/DataApi.md#formsformidpushdataidpost) | **POST** /forms/{formId}/push/{dataId} | Send push with data
*DataApi* | [**formsFormIdPushPost**](docs/Api/DataApi.md#formsformidpushpost) | **POST** /forms/{formId}/push | Send push with data
*DataApi* | [**formsPushInboxGet**](docs/Api/DataApi.md#formspushinboxget) | **GET** /forms/push/inbox | Receive new pushed data
*ExportsApi* | [**formsFormIdDataDataIdExportsExportIdGet**](docs/Api/ExportsApi.md#formsformiddatadataidexportsexportidget) | **GET** /forms/{formId}/data/{dataId}/exports/{exportId} | Export data
*ExportsApi* | [**formsFormIdDataDataIdExportsExportIdPdfGet**](docs/Api/ExportsApi.md#formsformiddatadataidexportsexportidpdfget) | **GET** /forms/{formId}/data/{dataId}/exports/{exportId}/pdf | Export data (PDF)
*ExportsApi* | [**formsFormIdDataDataIdFormPicturesMediaNameGet**](docs/Api/ExportsApi.md#formsformiddatadataidformpicturesmedianameget) | **GET** /forms/{formId}/data/{dataId}/form_pictures/{mediaName} | Get one fixed image of a form
*ExportsApi* | [**formsFormIdDataDataIdMediasMediaNameGet**](docs/Api/ExportsApi.md#formsformiddatadataidmediasmedianameget) | **GET** /forms/{formId}/data/{dataId}/medias/{mediaName} | Get one image of a form
*ExportsApi* | [**formsFormIdDataDataIdPdfGet**](docs/Api/ExportsApi.md#formsformiddatadataidpdfget) | **GET** /forms/{formId}/data/{dataId}/pdf | Get PDF data of a form
*ExportsApi* | [**formsFormIdDataMultipleCsvCustomPost**](docs/Api/ExportsApi.md#formsformiddatamultiplecsvcustompost) | **POST** /forms/{formId}/data/multiple/csv_custom | Get custom CSV data (multiple) of a form
*ExportsApi* | [**formsFormIdDataMultipleCsvPost**](docs/Api/ExportsApi.md#formsformiddatamultiplecsvpost) | **POST** /forms/{formId}/data/multiple/csv | Get CSV data (multiple) of a form
*ExportsApi* | [**formsFormIdDataMultipleExcelCustomPost**](docs/Api/ExportsApi.md#formsformiddatamultipleexcelcustompost) | **POST** /forms/{formId}/data/multiple/excel_custom | Get custom Excel list data (multiple) of a form
*ExportsApi* | [**formsFormIdDataMultipleExcelPost**](docs/Api/ExportsApi.md#formsformiddatamultipleexcelpost) | **POST** /forms/{formId}/data/multiple/excel | Get Excel list data (multiple) of a form
*ExportsApi* | [**formsFormIdExportsGet**](docs/Api/ExportsApi.md#formsformidexportsget) | **GET** /forms/{formId}/exports | Get list of Word and Excel exports
*ExportsApi* | [**formsFormIdMultipleDataExportsExportIdPdfPost**](docs/Api/ExportsApi.md#formsformidmultipledataexportsexportidpdfpost) | **POST** /forms/{formId}/multiple_data/exports/{exportId}/pdf | Export data (multiple / PDF)
*FormsApi* | [**formsFormIdGet**](docs/Api/FormsApi.md#formsformidget) | **GET** /forms/{formId} | Get form definition
*FormsApi* | [**formsGet**](docs/Api/FormsApi.md#formsget) | **GET** /forms | List all forms
*GroupsApi* | [**groupGroupIdDelete**](docs/Api/GroupsApi.md#groupgroupiddelete) | **DELETE** /group/{groupId} | Delete a group
*GroupsApi* | [**groupGroupIdGet**](docs/Api/GroupsApi.md#groupgroupidget) | **GET** /group/{groupId} | Get a group
*GroupsApi* | [**groupGroupIdLeaderLeaderIdDelete**](docs/Api/GroupsApi.md#groupgroupidleaderleaderiddelete) | **DELETE** /group/{groupId}/leader/{leaderId} | Remove a leader from a specific group
*GroupsApi* | [**groupGroupIdLeaderLeaderIdPost**](docs/Api/GroupsApi.md#groupgroupidleaderleaderidpost) | **POST** /group/{groupId}/leader/{leaderId} | Add a leader into a specific group
*GroupsApi* | [**groupGroupIdLeadersGet**](docs/Api/GroupsApi.md#groupgroupidleadersget) | **GET** /group/{groupId}/leaders | Get all groups&#x27; leaders of a specific group
*GroupsApi* | [**groupGroupIdLeadersPost**](docs/Api/GroupsApi.md#groupgroupidleaderspost) | **POST** /group/{groupId}/leaders | Add several leaders into a group
*GroupsApi* | [**groupGroupIdPut**](docs/Api/GroupsApi.md#groupgroupidput) | **PUT** /group/{groupId} | Update a group
*GroupsApi* | [**groupGroupIdUserUserIdDelete**](docs/Api/GroupsApi.md#groupgroupiduseruseriddelete) | **DELETE** /group/{groupId}/user/{userId} | Remove an user from a specific group
*GroupsApi* | [**groupGroupIdUserUserIdPost**](docs/Api/GroupsApi.md#groupgroupiduseruseridpost) | **POST** /group/{groupId}/user/{userId} | Add an user into a specific group
*GroupsApi* | [**groupGroupIdUsersGet**](docs/Api/GroupsApi.md#groupgroupidusersget) | **GET** /group/{groupId}/users | Get all users of a specific group
*GroupsApi* | [**groupGroupIdUsersPost**](docs/Api/GroupsApi.md#groupgroupiduserspost) | **POST** /group/{groupId}/users | Add several users into a group
*GroupsApi* | [**groupPost**](docs/Api/GroupsApi.md#grouppost) | **POST** /group | Create a new group
*GroupsApi* | [**groupsGet**](docs/Api/GroupsApi.md#groupsget) | **GET** /groups | Get all groups
*GroupsApi* | [**groupsOrderedGet**](docs/Api/GroupsApi.md#groupsorderedget) | **GET** /groups/ordered | Get all groups ordered
*ListsApi* | [**listsGet**](docs/Api/ListsApi.md#listsget) | **GET** /lists | Get External Lists
*ListsApi* | [**listsListIdCompleteGet**](docs/Api/ListsApi.md#listslistidcompleteget) | **GET** /lists/{listId}/complete | Get External List Definition (Without taking in account filters)
*ListsApi* | [**listsListIdGet**](docs/Api/ListsApi.md#listslistidget) | **GET** /lists/{listId} | Get External List Definition
*ListsApi* | [**listsListIdPut**](docs/Api/ListsApi.md#listslistidput) | **PUT** /lists/{listId} | Update External List Definition
*TokenApi* | [**tokenAllDelete**](docs/Api/TokenApi.md#tokenalldelete) | **DELETE** /token/all | Revoke all token
*TokenApi* | [**tokenTokenDelete**](docs/Api/TokenApi.md#tokentokendelete) | **DELETE** /token/{token} | Revoke a token
*UsersApi* | [**usersGet**](docs/Api/UsersApi.md#usersget) | **GET** /users | Get all users
*UsersApi* | [**usersPost**](docs/Api/UsersApi.md#userspost) | **POST** /users | Create a new user
*UsersApi* | [**usersUserIdDelete**](docs/Api/UsersApi.md#usersuseriddelete) | **DELETE** /users/{userId} | Delete a user
*UsersApi* | [**usersUserIdPut**](docs/Api/UsersApi.md#usersuseridput) | **PUT** /users/{userId} | Update a user

## Documentation For Models

 - [AdvancedFilter](docs/Model/AdvancedFilter.md)
 - [AdvancedFilterFilters](docs/Model/AdvancedFilterFilters.md)
 - [AdvancedFilterOrders](docs/Model/AdvancedFilterOrders.md)
 - [ApiResponse](docs/Model/ApiResponse.md)
 - [Data](docs/Model/Data.md)
 - [DataIds](docs/Model/DataIds.md)
 - [DataMin](docs/Model/DataMin.md)
 - [DataPush](docs/Model/DataPush.md)
 - [DefaultResponse](docs/Model/DefaultResponse.md)
 - [ExtList](docs/Model/ExtList.md)
 - [ExtListDetail](docs/Model/ExtListDetail.md)
 - [FieldPush](docs/Model/FieldPush.md)
 - [FieldPushValue](docs/Model/FieldPushValue.md)
 - [FieldValue](docs/Model/FieldValue.md)
 - [Form](docs/Model/Form.md)
 - [FormMin](docs/Model/FormMin.md)
 - [Group](docs/Model/Group.md)
 - [GroupComplete](docs/Model/GroupComplete.md)
 - [GroupModify](docs/Model/GroupModify.md)
 - [GroupResponse](docs/Model/GroupResponse.md)
 - [GroupUser](docs/Model/GroupUser.md)
 - [ListPut](docs/Model/ListPut.md)
 - [SearchFilter](docs/Model/SearchFilter.md)
 - [User](docs/Model/User.md)
 - [UserResponse](docs/Model/UserResponse.md)

## Documentation For Authorization


## authentication

- **Type**: API key
- **API key parameter name**: Authorization
- **Location**: HTTP header


## Author

support@kizeo.com
