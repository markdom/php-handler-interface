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
	 * @param HandlerInterface $markdomHandler
	 * @return mixed
	 */
	public function dispatchTo(HandlerInterface $markdomHandler);

	/**
	 * @return bool
	 */
	public function isReusable(): bool;

}
