<?php

namespace Mpociot\BotMan\Attachments;


class Audio extends Attachment {

	/** @var string */
	protected $url;

	/**
	 * Video constructor.
	 * @param string $url
	 * @param mixed $payload
	 */
	public function __construct($url, $payload = null) {
		parent::__construct($payload);
		$this->url = $url;
	}

	/**
	 * @return string
	 */
	public function getUrl() {
		return $this->url;
	}
}