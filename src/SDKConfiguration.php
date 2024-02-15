<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace sendpost\sendpost;

class SDKConfiguration
{
	public ?\GuzzleHttp\ClientInterface $defaultClient = null;
	public ?\GuzzleHttp\ClientInterface $securityClient = null;
	
	public string $serverUrl = '';
	public int $serverIndex = 0;
	public string $language = 'php';
	public string $openapiDocVersion = '1.0.0';
	public string $sdkVersion = '2.1.2';
	public string $genVersion = '2.258.2';
	public string $userAgent = 'speakeasy-sdk/php 2.1.2 2.258.2 1.0.0 sendpost/sendpost';
	

	public function getServerUrl(): string
	{
		
		if ($this->serverUrl !== '') {
			return $this->serverUrl;
		};
		return Sendpost::SERVERS[$this->serverIndex];
	}
	
}