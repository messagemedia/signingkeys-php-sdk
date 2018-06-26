# Getting started

The MessageMedia Signature Key API provides a number of endpoints for managing key used to sign each unique request to ensure security and the requests can't (easily) be spoofed. This is similar to using HMAC in your outbound messaging (rather than HTTP Basic).

## How to Build

The generated code has dependencies over external libraries like UniRest. These dependencies are defined in the ```composer.json``` file that comes with the SDK.
To resolve these dependencies, we use the Composer package manager which requires PHP greater than 5.3.2 installed in your system.
Visit [https://getcomposer.org/download/](https://getcomposer.org/download/) to download the installer file for Composer and run it in your system.
Open command prompt and type ```composer --version```. This should display the current version of the Composer installed if the installation was successful.

* Using command line, navigate to the directory containing the generated files (including ```composer.json```) for the SDK.
* Run the command ```composer install```. This should install all the required dependencies and create the ```vendor``` directory in your project directory.

![Building SDK - Step 1](https://apidocs.io/illustration/php?step=installDependencies&workspaceFolder=MessageMediaSigningKeys-PHP)

### [For Windows Users Only] Configuring CURL Certificate Path in php.ini

CURL used to include a list of accepted CAs, but no longer bundles ANY CA certs. So by default it will reject all SSL certificates as unverifiable. You will have to get your CA's cert and point curl at it. The steps are as follows:

1. Download the certificate bundle (.pem file) from [https://curl.haxx.se/docs/caextract.html](https://curl.haxx.se/docs/caextract.html) on to your system.
2. Add curl.cainfo = "PATH_TO/cacert.pem" to your php.ini file located in your php installation. “PATH_TO” must be an absolute path containing the .pem file.

```ini
[curl]
; A default value for the CURLOPT_CAINFO option. This is required to be an
; absolute path.
;curl.cainfo =
```

## How to Use

The following section explains how to use the MessageMediaSigningKeys library in a new project.

### 1. Open Project in an IDE

Open an IDE for PHP like PhpStorm. The basic workflow presented here is also applicable if you prefer using a different editor or IDE.

![Open project in PHPStorm - Step 1](https://apidocs.io/illustration/php?step=openIDE&workspaceFolder=MessageMediaSigningKeys-PHP)

Click on ```Open``` in PhpStorm to browse to your generated SDK directory and then click ```OK```.

![Open project in PHPStorm - Step 2](https://apidocs.io/illustration/php?step=openProject0&workspaceFolder=MessageMediaSigningKeys-PHP)     

### 2. Add a new Test Project

Create a new directory by right clicking on the solution name as shown below:

![Add a new project in PHPStorm - Step 1](https://apidocs.io/illustration/php?step=createDirectory&workspaceFolder=MessageMediaSigningKeys-PHP)

Name the directory as "test"

![Add a new project in PHPStorm - Step 2](https://apidocs.io/illustration/php?step=nameDirectory&workspaceFolder=MessageMediaSigningKeys-PHP)

Add a PHP file to this project

![Add a new project in PHPStorm - Step 3](https://apidocs.io/illustration/php?step=createFile&workspaceFolder=MessageMediaSigningKeys-PHP)

Name it "testSDK"

![Add a new project in PHPStorm - Step 4](https://apidocs.io/illustration/php?step=nameFile&workspaceFolder=MessageMediaSigningKeys-PHP)

Depending on your project setup, you might need to include composer's autoloader in your PHP code to enable auto loading of classes.

```PHP
require_once "../vendor/autoload.php";
```

It is important that the path inside require_once correctly points to the file ```autoload.php``` inside the vendor directory created during dependency installations.

![Add a new project in PHPStorm - Step 4](https://apidocs.io/illustration/php?step=projectFiles&workspaceFolder=MessageMediaSigningKeys-PHP)

After this you can add code to initialize the client library and acquire the instance of a Controller class. Sample code to initialize the client library and using controller methods is given in the subsequent sections.

### 3. Run the Test Project

To run your project you must set the Interpreter for your project. Interpreter is the PHP engine installed on your computer.

Open ```Settings``` from ```File``` menu.

![Run Test Project - Step 1](https://apidocs.io/illustration/php?step=openSettings&workspaceFolder=MessageMediaSigningKeys-PHP)

Select ```PHP``` from within ```Languages & Frameworks```

![Run Test Project - Step 2](https://apidocs.io/illustration/php?step=setInterpreter0&workspaceFolder=MessageMediaSigningKeys-PHP)

Browse for Interpreters near the ```Interpreter``` option and choose your interpreter.

![Run Test Project - Step 3](https://apidocs.io/illustration/php?step=setInterpreter1&workspaceFolder=MessageMediaSigningKeys-PHP)

Once the interpreter is selected, click ```OK```

![Run Test Project - Step 4](https://apidocs.io/illustration/php?step=setInterpreter2&workspaceFolder=MessageMediaSigningKeys-PHP)

To run your project, right click on your PHP file inside your Test project and click on ```Run```

![Run Test Project - Step 5](https://apidocs.io/illustration/php?step=runProject&workspaceFolder=MessageMediaSigningKeys-PHP)

## How to Test

Unit tests in this SDK can be run using PHPUnit.

1. First install the dependencies using composer including the `require-dev` dependencies.
2. Run `vendor\bin\phpunit --verbose` from commandline to execute tests. If you have
   installed PHPUnit globally, run tests using `phpunit --verbose` instead.

You can change the PHPUnit test configuration in the `phpunit.xml` file.

## Initialization

### Authentication
In order to setup authentication and initialization of the API client, you need the following information.

| Parameter | Description |
|-----------|-------------|
| basicAuthUserName | The username to use with basic authentication |
| basicAuthPassword | The password to use with basic authentication |



API client can be initialized as following.

```php
$basicAuthUserName = 'basicAuthUserName'; // The username to use with basic authentication
$basicAuthPassword = 'basicAuthPassword'; // The password to use with basic authentication

$client = new MessageMediaSigningKeysLib\MessageMediaSigningKeysClient($basicAuthUserName, $basicAuthPassword);
```


# Class Reference

## <a name="list_of_controllers"></a>List of Controllers

* [SignatureKeyManagementController](#signature_key_management_controller)

## <a name="signature_key_management_controller"></a>![Class: ](https://apidocs.io/img/class.png ".SignatureKeyManagementController") SignatureKeyManagementController

### Get singleton instance

The singleton instance of the ``` SignatureKeyManagementController ``` class can be accessed from the API Client.

```php
$signatureKeyManagement = $client->getSignatureKeyManagement();
```

### <a name="delete_disable_the_current_enabled_signature_key"></a>![Method: ](https://apidocs.io/img/method.png ".SignatureKeyManagementController.deleteDisableTheCurrentEnabledSignatureKey") deleteDisableTheCurrentEnabledSignatureKey

> Disable the current enabled signature key.
> A successful request for the ```disable the current enabled signature key.``` endpoint will return no content when successful.
> If there is an enabled key, it will be disabled; and the 204 status code is returned.
> If there is no key or no enabled key, the 204 status code is also returned.


```php
function deleteDisableTheCurrentEnabledSignatureKey(
        $contentType,
        $accept)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| contentType |  ``` Required ```  | TODO: Add a parameter description |
| accept |  ``` Required ```  | TODO: Add a parameter description |



#### Example Usage

```php
$contentType = 'Content-Type';
$accept = 'Accept';

$signatureKeyManagement->deleteDisableTheCurrentEnabledSignatureKey($contentType, $accept);

```


### <a name="delete_signature_key"></a>![Method: ](https://apidocs.io/img/method.png ".SignatureKeyManagementController.deleteSignatureKey") deleteSignatureKey

> Delete a signature key using the key_id returned in the ```create signature key``` endpoint.
> A successful request for the ```delete signature key``` endpoint will return an empty response body.
> *Note: If an invalid or non-existent key_id parameter is specified in the request, then an HTTP 404 Not Found response will be returned*


```php
function deleteSignatureKey(
        $keyId,
        $contentType,
        $accept)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| keyId |  ``` Required ```  | TODO: Add a parameter description |
| contentType |  ``` Required ```  | TODO: Add a parameter description |
| accept |  ``` Required ```  | TODO: Add a parameter description |



#### Example Usage

```php
$keyId = 'key_id';
$contentType = 'Content-Type';
$accept = 'Accept';

$signatureKeyManagement->deleteSignatureKey($keyId, $contentType, $accept);

```

#### Errors

| Error Code | Error Description |
|------------|-------------------|
| 404 | Unexpected error in API call. See HTTP response body for details. |



### <a name="g_et_signature_key_detail"></a>![Method: ](https://apidocs.io/img/method.png ".SignatureKeyManagementController.gETSignatureKeyDetail") gETSignatureKeyDetail

> Retrieve the current detail of a signature key using the key_id returned in the ```create signature key``` endpoint.
> A successful request for the ```get signature key detail``` endpoint will return a response body as follows:
> ```json
> {
>     "key_id": "7ca628a8-08b0-4e42-aeb8-960b37049c31",
>     "cipher": "RSA",
>     "digest": "SHA224",
>     "created": "2018-01-18T10:16:12.364Z",
>     "enabled": false
> }
> ```
> *Note: If an invalid or non-existent key_id parameter is specified in the request, then an HTTP 404 Not Found response will be returned*


```php
function gETSignatureKeyDetail(
        $keyId,
        $contentType,
        $accept)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| keyId |  ``` Required ```  | TODO: Add a parameter description |
| contentType |  ``` Required ```  | TODO: Add a parameter description |
| accept |  ``` Required ```  | TODO: Add a parameter description |



#### Example Usage

```php
$keyId = 'key_id';
$contentType = 'Content-Type';
$accept = 'Accept';

$result = $signatureKeyManagement->gETSignatureKeyDetail($keyId, $contentType, $accept);

```

#### Errors

| Error Code | Error Description |
|------------|-------------------|
| 400 | Unexpected error in API call. See HTTP response body for details. |
| 404 | Unexpected error in API call. See HTTP response body for details. |



### <a name="create_signature_key"></a>![Method: ](https://apidocs.io/img/method.png ".SignatureKeyManagementController.createSignatureKey") createSignatureKey

> This will create a key pair:
> - The ```private key``` stored in MessageMedia is used to create the signature.
> - The ```public key``` is returned and stored at your side to verify the signature in callbacks.
> You need to enable your signature key after creating.
> The most basic body has the following structure:
> ```json
> {
>     "digest": "SHA224",
>     "cipher": "RSA"
> }
> ```
> - ```digest``` is used to hash the message. The valid values for digest type are: SHA224, SHA256, SHA512
> - ```cipher``` is used to encrypt the hashed message. The valid value for cipher type is: RSA
> A successful request for the ```create signature key``` endpoint will return a response body as follows:
> ```json
> {
>     "key_id": "7ca628a8-08b0-4e42-aeb8-960b37049c31",
>     "public_key": "MIGfMA0GCSqGSIb3DQEBAQUAA4GNADCBiQKBgQCTIxtRyT5CuOD74r7UCT+AKzWNxvaAP9myjAqR7+vBnJKEvoPnmbKTnm6uLlxutnMbjKrnCCWnQ9vtBVnnd+ElhwLDPADfMcJoOqwi7mTcxucckeEbBsfsgYRfdacxgSZL8hVD1hLViQr3xwjEIkJcx1w3x8npvwMuTY0uW8+PjwIDAQAB",
>     "cipher": "RSA",
>     "digest": "SHA224",
>     "created": "2018-01-18T10:16:12.364Z",
>     "enabled": false
> }
> ```
> The response body of a successful POST request to the ```create signature key``` endpoint will contain six properties:
> - ```key_id``` will be a 36 character UUID which can be used to enable, delete or get the details.
> - ```public_key``` is used to decrypt the signature.
> - ```cipher``` same as cipher in request body.
> - ```digest``` same as digest in request body.
> - ```created``` is the created date.
> - ```enabled``` is false for the new signature key. You can use the ```enable signature key``` endpoint to set this field to true.


```php
function createSignatureKey(
        $contentType,
        $accept,
        $body)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| contentType |  ``` Required ```  | TODO: Add a parameter description |
| accept |  ``` Required ```  | TODO: Add a parameter description |
| body |  ``` Required ```  | TODO: Add a parameter description |



#### Example Usage

```php
$contentType = 'Content-Type';
$accept = 'Accept';
$body = new CreateSignatureKeyRequest();

$result = $signatureKeyManagement->createSignatureKey($contentType, $accept, $body);

```

#### Errors

| Error Code | Error Description |
|------------|-------------------|
| 400 | Unexpected error in API call. See HTTP response body for details. |



### <a name="get_enabled_signature_key"></a>![Method: ](https://apidocs.io/img/method.png ".SignatureKeyManagementController.getEnabledSignatureKey") getEnabledSignatureKey

> Retrieve the currently enabled signature key.
> A successful request for the ```get enabled signature key``` endpoint will return a response body as follows:
> ```json
> {
>     "key_id": "7ca628a8-08b0-4e42-aeb8-960b37049c31",
>     "cipher": "RSA",
>     "digest": "SHA224",
>     "created": "2018-01-18T10:16:12.364Z",
>     "enabled": true
> }
> ```
> *Note: If there is no enabled signature key, then an HTTP 404 Not Found response will be returned*


```php
function getEnabledSignatureKey(
        $contentType,
        $accept)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| contentType |  ``` Required ```  | TODO: Add a parameter description |
| accept |  ``` Required ```  | TODO: Add a parameter description |



#### Example Usage

```php
$contentType = 'Content-Type';
$accept = 'Accept';

$result = $signatureKeyManagement->getEnabledSignatureKey($contentType, $accept);

```

#### Errors

| Error Code | Error Description |
|------------|-------------------|
| 404 | Unexpected error in API call. See HTTP response body for details. |



### <a name="update_enable_signature_key"></a>![Method: ](https://apidocs.io/img/method.png ".SignatureKeyManagementController.updateEnableSignatureKey") updateEnableSignatureKey

> Enable a signature key using the key_id returned in the ```create signature key``` endpoint.
> There is only one signature key is enabled at the one moment in time. So if you enable the new signature key, the old one will be disabled.
> The most basic body has the following structure:
> ```json
> {
>     "key_id": "7ca628a8-08b0-4e42-aeb8-960b37049c31"
> }
> ```
> The response body of a successful PATCH request to ```enable signature key``` endpoint will contain the ```enabled``` properties with the value is true as follows:
> ```json
> {
>     "key_id": "7ca628a8-08b0-4e42-aeb8-960b37049c31",
>     "cipher": "RSA",
>     "digest": "SHA224",
>     "created": "2018-01-18T10:16:12.364Z",
>     "enabled": true
> }
> ```
> *Note: If an invalid or non-existent key_id parameter is specified in the request, then an HTTP 404 Not Found response will be returned*


```php
function updateEnableSignatureKey(
        $contentType,
        $accept,
        $body)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| contentType |  ``` Required ```  | TODO: Add a parameter description |
| accept |  ``` Required ```  | TODO: Add a parameter description |
| body |  ``` Required ```  | TODO: Add a parameter description |



#### Example Usage

```php
$contentType = 'Content-Type';
$accept = 'Accept';
$body = new EnableSignatureKeyRequest();

$result = $signatureKeyManagement->updateEnableSignatureKey($contentType, $accept, $body);

```

#### Errors

| Error Code | Error Description |
|------------|-------------------|
| 400 | Unexpected error in API call. See HTTP response body for details. |
| 404 | Unexpected error in API call. See HTTP response body for details. |



### <a name="g_et_signature_key_list"></a>![Method: ](https://apidocs.io/img/method.png ".SignatureKeyManagementController.gETSignatureKeyList") gETSignatureKeyList

> Retrieve the paginated list of signature keys.
> A successful request for the ```get signature key list``` endpoint will return a response body as follows:
> ```json
> [
>   {
>     "key_id": "7ca628a8-08b0-4e42-aeb8-960b37049c31",
>     "cipher": "RSA",
>     "digest": "SHA224",
>     "created": "2018-01-18T10:16:12.364Z",
>     "enabled": false
>   }
> ]
> ```


```php
function gETSignatureKeyList(
        $contentType,
        $accept,
        $page = null,
        $pageSize = null)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| contentType |  ``` Required ```  | TODO: Add a parameter description |
| accept |  ``` Required ```  | TODO: Add a parameter description |
| page |  ``` Optional ```  | TODO: Add a parameter description |
| pageSize |  ``` Optional ```  | TODO: Add a parameter description |



#### Example Usage

```php
$contentType = 'Content-Type';
$accept = 'Accept';
$page = 'page';
$pageSize = 'page_size';

$result = $signatureKeyManagement->gETSignatureKeyList($contentType, $accept, $page, $pageSize);

```

#### Errors

| Error Code | Error Description |
|------------|-------------------|
| 400 | Unexpected error in API call. See HTTP response body for details. |



[Back to List of Controllers](#list_of_controllers)
