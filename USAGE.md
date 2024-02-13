<!-- Start SDK Example Usage [usage] -->
```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use sendpost\sendpost;
use sendpost\sendpost\Models\Operations;

$sdk = sendpost\Sendpost::builder()->build();

try {
    $request = new Operations\EmailRouterSendEmailRequest();
    $request->requestBody = '0x6B34FffDd5';
    $request->xSendPostMockEmail = false;
    $request->xSendPostMockTimeShift = 'string';
    $request->xSubAccountApiKey = 'string';

    $response = $sdk->subaccountEmail->emailRouterSendEmail($request);

    if ($response->body !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}

```
<!-- End SDK Example Usage [usage] -->