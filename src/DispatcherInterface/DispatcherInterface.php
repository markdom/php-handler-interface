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
	 * @return bool
	 */
	public function getDispatchCommentBlocks():bool ;

	/**
	 * @param bool $dispatchCommentBlocks
	 * @return $this
	 */
	public function setDispatchCommentBlocks(bool $dispatchCommentBlocks);

	/**
	 * @param mixed $source
	 * @return $this
	 */
	public function process($source);

}
