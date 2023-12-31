<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace sendpost\sendpost;

class SubaccountEmail 
{

	private SDKConfiguration $sdkConfiguration;

	/**
	 * @param SDKConfiguration $sdkConfig
	 */
	public function __construct(SDKConfiguration $sdkConfig)
	{
		$this->sdkConfiguration = $sdkConfig;
	}
	
    /**
     * Send Email To Contacts
     * 
     * @param \sendpost\sendpost\Models\Operations\EmailRouterSendEmailRequest $request
     * @return \sendpost\sendpost\Models\Operations\EmailRouterSendEmailResponse
     */
	public function emailRouterSendEmail(
        \sendpost\sendpost\Models\Operations\EmailRouterSendEmailRequest $request,
    ): \sendpost\sendpost\Models\Operations\EmailRouterSendEmailResponse
    {
        $baseUrl = $this->sdkConfiguration->getServerUrl();
        $url = Utils\Utils::generateUrl($baseUrl, '/subaccount/email/');
        
        $options = ['http_errors' => false];
        $body = Utils\Utils::serializeRequestBody($request, "requestBody", "raw");
        if ($body === null) {
            throw new \Exception('Request body is required');
        }
        $options = array_merge_recursive($options, $body);
        $options = array_merge_recursive($options, Utils\Utils::getHeaders($request));
        if (!array_key_exists('headers', $options)) {
            $options['headers'] = [];
        }
        $options['headers']['Accept'] = '*/*';
        $options['headers']['user-agent'] = $this->sdkConfiguration->userAgent;
        
        $httpResponse = $this->sdkConfiguration->defaultClient->request('POST', $url, $options);
        
        $contentType = $httpResponse->getHeader('Content-Type')[0] ?? '';

        $statusCode = $httpResponse->getStatusCode();

        $response = new \sendpost\sendpost\Models\Operations\EmailRouterSendEmailResponse();
        $response->statusCode = $statusCode;
        $response->contentType = $contentType;
        $response->rawResponse = $httpResponse;
        
        if ($httpResponse->getStatusCode() === 200) {
            if (Utils\Utils::matchContentType($contentType, '*/*')) {
                $response->body = $httpResponse->getBody()->getContents();
            }
        }
        else if ($httpResponse->getStatusCode() === 401 or $httpResponse->getStatusCode() === 422 or $httpResponse->getStatusCode() === 500) {
        }

        return $response;
    }
	
    /**
     * Send Email To Contacts With Template
     * 
     * @param \sendpost\sendpost\Models\Operations\EmailRouterSendEmailWithTemplateRequest $request
     * @return \sendpost\sendpost\Models\Operations\EmailRouterSendEmailWithTemplateResponse
     */
	public function emailRouterSendEmailWithTemplate(
        \sendpost\sendpost\Models\Operations\EmailRouterSendEmailWithTemplateRequest $request,
    ): \sendpost\sendpost\Models\Operations\EmailRouterSendEmailWithTemplateResponse
    {
        $baseUrl = $this->sdkConfiguration->getServerUrl();
        $url = Utils\Utils::generateUrl($baseUrl, '/subaccount/email/template');
        
        $options = ['http_errors' => false];
        $body = Utils\Utils::serializeRequestBody($request, "requestBody", "raw");
        if ($body === null) {
            throw new \Exception('Request body is required');
        }
        $options = array_merge_recursive($options, $body);
        $options = array_merge_recursive($options, Utils\Utils::getHeaders($request));
        if (!array_key_exists('headers', $options)) {
            $options['headers'] = [];
        }
        $options['headers']['Accept'] = '*/*';
        $options['headers']['user-agent'] = $this->sdkConfiguration->userAgent;
        
        $httpResponse = $this->sdkConfiguration->defaultClient->request('POST', $url, $options);
        
        $contentType = $httpResponse->getHeader('Content-Type')[0] ?? '';

        $statusCode = $httpResponse->getStatusCode();

        $response = new \sendpost\sendpost\Models\Operations\EmailRouterSendEmailWithTemplateResponse();
        $response->statusCode = $statusCode;
        $response->contentType = $contentType;
        $response->rawResponse = $httpResponse;
        
        if ($httpResponse->getStatusCode() === 200) {
            if (Utils\Utils::matchContentType($contentType, '*/*')) {
                $response->body = $httpResponse->getBody()->getContents();
            }
        }
        else if ($httpResponse->getStatusCode() === 401 or $httpResponse->getStatusCode() === 422 or $httpResponse->getStatusCode() === 500) {
        }

        return $response;
    }
}