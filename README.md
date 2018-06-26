# MessageMedia Signature Key Management PHP SDK
[![Travis Build Status](https://api.travis-ci.org/messagemedia/signing-keys-php-sdk.svg?branch=master)](https://travis-ci.org/messagemedia/signing-keys-php-sdk)
[![PHP version](https://badge.fury.io/ph/messagemedia%2Fwebhooks-sdk.svg)](https://badge.fury.io/ph/messagemedia%2Fwebhooks-sdk)

The MessageMedia Signature Key API provides a number of endpoints for managing key used to sign each unique request to ensure security and the requests can't (easily) be spoofed. This is similar to using HMAC in your outbound messaging (rather than HTTP Basic).

## ⭐️ Installing via Composer
Run the Composer command to install the latest stable version of the Messages SDK:
```
composer require messagemedia/signingkeys-sdk
```

## 🎬 Get Started
It's easy to get started. Simply enter the API Key and secret you obtained from the [MessageMedia Developers Portal](https://developers.messagemedia.com) into the code snippet below.

### 🚀 Create a signature key
```php
require_once "../vendor/autoload.php";

$basicAuthUserName = 'basicAuthUserName'; // The username to use with basic authentication
$basicAuthPassword = 'basicAuthPassword'; // The password to use with basic authentication

$client = new MessageMediaSigningKeysLib\MessageMediaSigningKeysClient($basicAuthUserName, $basicAuthPassword);
$signatureKeyManagement = $client->getSignatureKeyManagement();

$contentType = 'Content-Type';
$accept = 'Accept';
$body = new CreateSignatureKeyRequest();

$result = $signatureKeyManagement->createSignatureKey($contentType, $accept, $body);

```

### 📥 Get signature key details
You can get a key_id by looking at the id of the signature key created from the response of the above example.
```php
require_once "../vendor/autoload.php";

$basicAuthUserName = 'basicAuthUserName'; // The username to use with basic authentication
$basicAuthPassword = 'basicAuthPassword'; // The password to use with basic authentication

$client = new MessageMediaSigningKeysLib\MessageMediaSigningKeysClient($basicAuthUserName, $basicAuthPassword);
$signatureKeyManagement = $client->getSignatureKeyManagement();

$keyId = 'key_id';
$contentType = 'Content-Type';
$accept = 'Accept';

$result = $signatureKeyManagement->gETSignatureKeyDetail($keyId, $contentType, $accept);

```

### 📥 Get signature keys list
```php
require_once "../vendor/autoload.php";

$basicAuthUserName = 'basicAuthUserName'; // The username to use with basic authentication
$basicAuthPassword = 'basicAuthPassword'; // The password to use with basic authentication

$client = new MessageMediaSigningKeysLib\MessageMediaSigningKeysClient($basicAuthUserName, $basicAuthPassword);
$signatureKeyManagement = $client->getSignatureKeyManagement();

$contentType = 'Content-Type';
$accept = 'Accept';
$page = 'page';
$pageSize = 'page_size';

$result = $signatureKeyManagement->gETSignatureKeyList($contentType, $accept, $page, $pageSize);

```

### ❌ Delete signature key
You can get the key_id by looking at the ids of the signature keys returned from the response of the `Get signature keys list` example.
```php
require_once "../vendor/autoload.php";

$basicAuthUserName = 'basicAuthUserName'; // The username to use with basic authentication
$basicAuthPassword = 'basicAuthPassword'; // The password to use with basic authentication

$client = new MessageMediaSigningKeysLib\MessageMediaSigningKeysClient($basicAuthUserName, $basicAuthPassword);
$signatureKeyManagement = $client->getSignatureKeyManagement();

$keyId = 'key_id';
$contentType = 'Content-Type';
$accept = 'Accept';

$signatureKeyManagement->deleteSignatureKey($keyId, $contentType, $accept);

```

### ☑️ Enable a signature key
You can get the key_id by looking at the ids of the signature keys returned from the response of the `Get signature keys list` example.
```php
require_once "../vendor/autoload.php";

$basicAuthUserName = 'basicAuthUserName'; // The username to use with basic authentication
$basicAuthPassword = 'basicAuthPassword'; // The password to use with basic authentication

$client = new MessageMediaSigningKeysLib\MessageMediaSigningKeysClient($basicAuthUserName, $basicAuthPassword);
$signatureKeyManagement = $client->getSignatureKeyManagement();

$contentType = 'Content-Type';
$accept = 'Accept';
$body = new EnableSignatureKeyRequest();

$result = $signatureKeyManagement->updateEnableSignatureKey($contentType, $accept, $body);

```

### 📥 Get enabled signature key
```php
require_once "../vendor/autoload.php";

$basicAuthUserName = 'basicAuthUserName'; // The username to use with basic authentication
$basicAuthPassword = 'basicAuthPassword'; // The password to use with basic authentication

$client = new MessageMediaSigningKeysLib\MessageMediaSigningKeysClient($basicAuthUserName, $basicAuthPassword);
$signatureKeyManagement = $client->getSignatureKeyManagement();

$contentType = 'Content-Type';
$accept = 'Accept';

$result = $signatureKeyManagement->getEnabledSignatureKey($contentType, $accept);

```

### 🚫 Disable an enabled signature key
```php
require_once "../vendor/autoload.php";

$basicAuthUserName = 'basicAuthUserName'; // The username to use with basic authentication
$basicAuthPassword = 'basicAuthPassword'; // The password to use with basic authentication

$client = new MessageMediaSigningKeysLib\MessageMediaSigningKeysClient($basicAuthUserName, $basicAuthPassword);
$signatureKeyManagement = $client->getSignatureKeyManagement();

$contentType = 'Content-Type';
$accept = 'Accept';

$signatureKeyManagement->deleteDisableTheCurrentEnabledSignatureKey($contentType, $accept);

```

## 📕 Documentation
Check out the [full API documentation](DOCUMENTATION.md) for more detailed information.

## 😕 Need help?
Please contact developer support at developers@messagemedia.com or check out the developer portal at [developers.messagemedia.com](https://developers.messagemedia.com/)

## 📃 License
Apache License. See the [LICENSE](LICENSE) file.
