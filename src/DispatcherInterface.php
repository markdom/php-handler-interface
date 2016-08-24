<?php

namespace Markdom\HandlerInterface;

/**
 * Interface DispatcherInterface
 *
 * @package Markdom\HandlerInterface
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
