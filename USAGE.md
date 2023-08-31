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