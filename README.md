# sendpost/sendpost

<!-- Start SDK Installation -->
## SDK Installation

### Composer

To install the SDK first add the below to your `composer.json` file:

```json
{
    "repositories": [
        {
            "type": "github",
            "url": "https://github.com/speakeasy-sdks/spost-php.git"
        }
    ],
    "require": {
        "sendpost/sendpost": "*"
    }
}
```

Then run the following command:

```bash
composer update
```
<!-- End SDK Installation -->

## SDK Example Usage
<!-- Start SDK Example Usage -->


```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \sendpost\sendpost\Sendpost;
use \sendpost\sendpost\Models\Operations\EmailRouterSendEmailRequest;

$sdk = Sendpost::builder()
    ->build();

try {
    $request = new EmailRouterSendEmailRequest();
    $request->requestBody = 'corrupti';
    $request->xSendPostMockEmail = false;
    $request->xSendPostMockTimeShift = 'provident';
    $request->xSubAccountApiKey = 'distinctio';

    $response = $sdk->subaccountEmail->emailRouterSendEmail($request);

    if ($response->body !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```
<!-- End SDK Example Usage -->

<!-- Start SDK Available Operations -->
## Available Resources and Operations


### [subaccountEmail](docs/sdks/subaccountemail/README.md)

* [emailRouterSendEmail](docs/sdks/subaccountemail/README.md#emailroutersendemail) - Send Email To Contacts
* [emailRouterSendEmailWithTemplate](docs/sdks/subaccountemail/README.md#emailroutersendemailwithtemplate) - Send Email To Contacts With Template
<!-- End SDK Available Operations -->

### Maturity

This SDK is in beta, and there may be breaking changes between versions without a major version update. Therefore, we recommend pinning usage
to a specific package version. This way, you can install the same version each time without breaking changes unless you are intentionally
looking for the latest version.

### Contributions

While we value open-source contributions to this SDK, this library is generated programmatically.
Feel free to open a PR or a Github issue as a proof of concept and we'll do our best to include it in a future release!

### SDK Created by [Speakeasy](https://docs.speakeasyapi.dev/docs/using-speakeasy/client-sdks)
