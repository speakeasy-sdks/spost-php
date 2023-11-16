<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace sendpost\sendpost\Models\Shared;


class ModelsEmailMessage
{
	
    public ?string $ampBody = null;
    
    /**
     * $attachments
     * 
     * @var ?array<\sendpost\sendpost\Models\Shared\ModelsAttachment> $attachments
     */
	
    public ?array $attachments = null;
    
	
    public ?ModelsFrom $from = null;
    
	
    public ?Groups $groups = null;
    
	
    public ?Headers $headers = null;
    
	
    public ?string $htmlBody = null;
    
	
    public ?string $ippool = null;
    
	
    public ?string $preText = null;
    
	
    public ?ModelsReplyTo $replyTo = null;
    
	
    public ?string $subject = null;
    
	
    public ?string $template = null;
    
	
    public ?string $textBody = null;
    
    /**
     * $to
     * 
     * @var ?array<\sendpost\sendpost\Models\Shared\ModelsTo> $to
     */
	
    public ?array $to = null;
    
	
    public ?bool $trackClicks = null;
    
	
    public ?bool $trackOpens = null;
    
	public function __construct()
	{
		$this->ampBody = null;
		$this->attachments = null;
		$this->from = null;
		$this->groups = null;
		$this->headers = null;
		$this->htmlBody = null;
		$this->ippool = null;
		$this->preText = null;
		$this->replyTo = null;
		$this->subject = null;
		$this->template = null;
		$this->textBody = null;
		$this->to = null;
		$this->trackClicks = null;
		$this->trackOpens = null;
	}
}
