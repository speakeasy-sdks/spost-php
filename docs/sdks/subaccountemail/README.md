# SubaccountEmail
(*subaccountEmail*)

### Available Operations

* [emailRouterSendEmail](#emailroutersendemail) - Send Email To Contacts
* [emailRouterSendEmailWithTemplate](#emailroutersendemailwithtemplate) - Send Email To Contacts With Template

## emailRouterSendEmail

Send Email To Contacts

### Example Usage

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
    $request->requestBody = ':k13|`asY9';
    $request->xSendPostMockEmail = false;
    $request->xSendPostMockTimeShift = 'string';
    $request->xSubAccountApiKey = 'string';

    $response = $sdk->subaccountEmail->emailRouterSendEmail($request);

    if ($response->body !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                  | Type                                                                                                                       | Required                                                                                                                   | Description                                                                                                                |
| -------------------------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                 | [\sendpost\sendpost\Models\Operations\EmailRouterSendEmailRequest](../../models/operations/EmailRouterSendEmailRequest.md) | :heavy_check_mark:                                                                                                         | The request object to use for the request.                                                                                 |


### Response

**[?\sendpost\sendpost\Models\Operations\EmailRouterSendEmailResponse](../../models/operations/EmailRouterSendEmailResponse.md)**


## emailRouterSendEmailWithTemplate

Send Email To Contacts With Template

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \sendpost\sendpost\Sendpost;
use \sendpost\sendpost\Models\Operations\EmailRouterSendEmailWithTemplateRequest;

$sdk = Sendpost::builder()
    ->build();

try {
    $request = new EmailRouterSendEmailWithTemplateRequest();
    $request->requestBody = '9hY_GIO^\M';
    $request->xSubAccountApiKey = 'string';

    $response = $sdk->subaccountEmail->emailRouterSendEmailWithTemplate($request);

    if ($response->body !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                                          | Type                                                                                                                                               | Required                                                                                                                                           | Description                                                                                                                                        |
| -------------------------------------------------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                                         | [\sendpost\sendpost\Models\Operations\EmailRouterSendEmailWithTemplateRequest](../../models/operations/EmailRouterSendEmailWithTemplateRequest.md) | :heavy_check_mark:                                                                                                                                 | The request object to use for the request.                                                                                                         |


### Response

**[?\sendpost\sendpost\Models\Operations\EmailRouterSendEmailWithTemplateResponse](../../models/operations/EmailRouterSendEmailWithTemplateResponse.md)**

