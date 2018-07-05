require_once "../vendor/autoload.php";

$basicAuthUserName = 'basicAuthUserName'; // The username to use with basic authentication
$basicAuthPassword = 'basicAuthPassword'; // The password to use with basic authentication

$client = new MessageMediaSigningKeysLib\MessageMediaSigningKeysClient($basicAuthUserName, $basicAuthPassword);
$signatureKeyManagement = $client->getSignatureKeyManagement();

$body = new EnableSignatureKeyRequest({
  "key_id": "7ca628a8-08b0-4e42-aeb8-960b37049c31"
});

$result = $signatureKeyManagement->updateEnableSignatureKey($body);
