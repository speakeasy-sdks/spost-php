# SubaccountEmail


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

use \sendpost\sendpost;
use \sendpost\sendpost\Models\Operations;

$sdk = sendpost\Sendpost::builder()
    ->build();

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
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                  | Type                                                                                                                       | Required                                                                                                                   | Description                                                                                                                |
| -------------------------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                 | [\sendpost\sendpost\Models\Operations\EmailRouterSendEmailRequest](../../Models/Operations/EmailRouterSendEmailRequest.md) | :heavy_check_mark:                                                                                                         | The request object to use for the request.                                                                                 |


### Response

**[?\sendpost\sendpost\Models\Operations\EmailRouterSendEmailResponse](../../Models/Operations/EmailRouterSendEmailResponse.md)**


## emailRouterSendEmailWithTemplate

Send Email To Contacts With Template

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \sendpost\sendpost;
use \sendpost\sendpost\Models\Operations;

$sdk = sendpost\Sendpost::builder()
    ->build();

try {
    $request = new Operations\EmailRouterSendEmailWithTemplateRequest();
    $request->requestBody = '0x5Ade99aeea';
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
| `$request`                                                                                                                                         | [\sendpost\sendpost\Models\Operations\EmailRouterSendEmailWithTemplateRequest](../../Models/Operations/EmailRouterSendEmailWithTemplateRequest.md) | :heavy_check_mark:                                                                                                                                 | The request object to use for the request.                                                                                                         |


### Response

**[?\sendpost\sendpost\Models\Operations\EmailRouterSendEmailWithTemplateResponse](../../Models/Operations/EmailRouterSendEmailWithTemplateResponse.md)**

