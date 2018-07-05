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
