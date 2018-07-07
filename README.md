# MessageMedia Signature Key Management PHP SDK
[![Travis Build Status](https://api.travis-ci.org/messagemedia/signing-keys-php-sdk.svg?branch=master)](https://travis-ci.org/messagemedia/signing-keys-php-sdk)
[![Pull Requests Welcome](https://img.shields.io/badge/PRs-welcome-brightgreen.svg?style=flat)](http://makeapullrequest.com)
[![PHP version](https://badge.fury.io/ph/messagemedia%2Fsigningkeys-sdk.svg)](https://badge.fury.io/ph/messagemedia%2Fsigningkeys-sdk)

The MessageMedia Signature Key API provides a number of endpoints for managing key used to sign each unique request to ensure security and the requests can't (easily) be spoofed. This is similar to using HMAC in your outbound messaging (rather than HTTP Basic).

![Isometric](http://i64.tinypic.com/2lo3n8p.jpg)

## Table of Contents
* [Authentication](#closed_lock_with_key-authentication)
* [Errors](#interrobang-errors)
* [Information](#newspaper-information)
  * [Slack and Mailing List](#slack-and-mailing-list)
  * [Bug Reports](#bug-reports)
  * [Contributing](#contributing)
* [Installation](#star-installation)
* [Get Started](#clapper-get-started)
* [API Documentation](#closed_book-api-documentation)
* [Need help?](#confused-need-help)
* [License](#page_with_curl-license)

## :closed_lock_with_key: Authentication

Authentication is done via API keys. Sign up at https://developers.messagemedia.com/register/ to get your API keys.

Requests are authenticated using HTTP Basic Auth or HMAC. Provide your API key as the auth_user_name and API secret as the auth_password.

## :interrobang: Errors

Our API returns standard HTTP success or error status codes. For errors, we will also include extra information about what went wrong encoded in the response as JSON. The most common status codes are listed below.

#### HTTP Status Codes

| Code      | Title       | Description |
|-----------|-------------|-------------|
| 201 | OK | The request was successful |
| 400 | Invalid Request | The request was invalid |
| 401 | Unauthorized | Your API credentials are invalid |
| 403 | Disabled feature | Feature not enabled |
| 404 | Not Found |	The resource does not exist |
| 50X | Internal Server Error | An error occurred with our API |

## :newspaper: Information

#### Slack and Mailing List

If you have any questions, comments, or concerns, please join our Slack channel:
https://developers.messagemedia.com/collaborate/slack/

Alternatively you can email us at:
developers@messagemedia.com

#### Bug reports

If you discover a problem with the SDK, we would like to know about it. You can raise an [issue](https://github.com/messagemedia/signingkeys-nodejs-sdk/issues) or send an email to: developers@messagemedia.com

#### Contributing

We welcome your thoughts on how we could best provide you with SDKs that would simplify how you consume our services in your application. You can fork and create pull requests for any features you would like to see or raise an [issue](https://github.com/messagemedia/signingkeys-nodejs-sdk/issues)

## :star: Installation
Run the Composer command to install the latest stable version of the Messages SDK:
```
composer require messagemedia/signingkeys-sdk
```

## :clapper: Get Started
It's easy to get started. Simply enter the API Key and secret you obtained from the [MessageMedia Developers Portal](https://developers.messagemedia.com) into the code snippet below.

### Create a signature key
```php
require_once "../vendor/autoload.php";

$basicAuthUserName = 'basicAuthUserName'; // The username to use with basic authentication
$basicAuthPassword = 'basicAuthPassword'; // The password to use with basic authentication

$client = new MessageMediaSigningKeysLib\MessageMediaSigningKeysClient($basicAuthUserName, $basicAuthPassword);
$signatureKeyManagement = $client->getSignatureKeyManagement();

$bodyValue = "{   
  \"digest\": \"SHA224\",   
  \"cipher\": \"RSA\"
}";
$body = APIHelper::deserialize($bodyValue);

$result = $signatureKeyManagement->createSignatureKey($body);

```

### Get signature key details
You can get a key_id by looking at the id of the signature key created from the response of the above example.
```php
require_once "../vendor/autoload.php";

$basicAuthUserName = 'basicAuthUserName'; // The username to use with basic authentication
$basicAuthPassword = 'basicAuthPassword'; // The password to use with basic authentication

$client = new MessageMediaSigningKeysLib\MessageMediaSigningKeysClient($basicAuthUserName, $basicAuthPassword);
$signatureKeyManagement = $client->getSignatureKeyManagement();

$keyId = 'key_id';

$result = $signatureKeyManagement->getSignatureKeyDetail($keyId);

```

### Get signature keys list
```php
require_once "../vendor/autoload.php";

$basicAuthUserName = 'basicAuthUserName'; // The username to use with basic authentication
$basicAuthPassword = 'basicAuthPassword'; // The password to use with basic authentication

$client = new MessageMediaSigningKeysLib\MessageMediaSigningKeysClient($basicAuthUserName, $basicAuthPassword);
$signatureKeyManagement = $client->getSignatureKeyManagement();

$result = $signatureKeyManagement->getSignatureKeyList();

```

### Delete signature key
You can get the key_id by looking at the ids of the signature keys returned from the response of the `Get signature keys list` example.
```php
require_once "../vendor/autoload.php";

$basicAuthUserName = 'basicAuthUserName'; // The username to use with basic authentication
$basicAuthPassword = 'basicAuthPassword'; // The password to use with basic authentication

$client = new MessageMediaSigningKeysLib\MessageMediaSigningKeysClient($basicAuthUserName, $basicAuthPassword);
$signatureKeyManagement = $client->getSignatureKeyManagement();

$keyId = 'key_id';

$signatureKeyManagement->deleteSignatureKey($keyId);

```

### Enable a signature key
You can get the key_id by looking at the ids of the signature keys returned from the response of the `Get signature keys list` example.
```php
require_once "../vendor/autoload.php";

$basicAuthUserName = 'basicAuthUserName'; // The username to use with basic authentication
$basicAuthPassword = 'basicAuthPassword'; // The password to use with basic authentication

$client = new MessageMediaSigningKeysLib\MessageMediaSigningKeysClient($basicAuthUserName, $basicAuthPassword);
$signatureKeyManagement = $client->getSignatureKeyManagement();

$body = new EnableSignatureKeyRequest({
  "key_id": "7ca628a8-08b0-4e42-aeb8-960b37049c31"
});

$result = $signatureKeyManagement->updateEnableSignatureKey($body);

```

### Get enabled signature key
```php
require_once "../vendor/autoload.php";

$basicAuthUserName = 'basicAuthUserName'; // The username to use with basic authentication
$basicAuthPassword = 'basicAuthPassword'; // The password to use with basic authentication

$client = new MessageMediaSigningKeysLib\MessageMediaSigningKeysClient($basicAuthUserName, $basicAuthPassword);
$signatureKeyManagement = $client->getSignatureKeyManagement();

$result = $signatureKeyManagement->getEnabledSignatureKey();

```

### Disable an enabled signature key
```php
require_once "../vendor/autoload.php";

$basicAuthUserName = 'basicAuthUserName'; // The username to use with basic authentication
$basicAuthPassword = 'basicAuthPassword'; // The password to use with basic authentication

$client = new MessageMediaSigningKeysLib\MessageMediaSigningKeysClient($basicAuthUserName, $basicAuthPassword);
$signatureKeyManagement = $client->getSignatureKeyManagement();

$signatureKeyManagement->deleteDisableTheCurrentEnabledSignatureKey();

```

## :closed_book: API Reference Documentation
Check out the [full API documentation](https://developers.messagemedia.com/code/signingkeys-api-documentation/) for more detailed information.

## :confused: Need help?
Please contact developer support at developers@messagemedia.com or check out the developer portal at [developers.messagemedia.com](https://developers.messagemedia.com/)

## :page_with_curl: License
Apache License. See the [LICENSE](LICENSE) file.
