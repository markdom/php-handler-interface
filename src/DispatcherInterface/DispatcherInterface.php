<?php

namespace Markdom\DispatcherInterface;

use Markdom\HandlerInterface\HandlerInterface;

/**
 * Interface DispatcherInterface
 *
 * @package Markdom\DispatcherInterface
 */
interface DispatcherInterface
{

	/**
	 * Parser constructor.
	 *
	 * @param HandlerInterface $markdomHandler
	 */
	public function __construct(HandlerInterface $markdomHandler);

	/**
	 * @param $source
	 * @return $this
	 */
	public function process($source);

}
