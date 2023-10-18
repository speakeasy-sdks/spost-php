<!-- Start SDK Example Usage -->


```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use sendpost\sendpost\Sendpost;
use sendpost\sendpost\Models\Operations\EmailRouterSendEmailRequest;

$sdk = Sendpost::builder()->build();

try {
    $request = new EmailRouterSendEmailRequest();
    $request->requestBody = ':k13|`asY9';
    $request->xSendPostMockEmail = false;
    $request->xSendPostMockTimeShift = 'Northeast';
    $request->xSubAccountApiKey = 'primary';

    $response = $sdk->subaccountEmail->emailRouterSendEmail($request);

    if ($response->body !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}

```
<!-- End SDK Example Usage -->