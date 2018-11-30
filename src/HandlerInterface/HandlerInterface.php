<?php

namespace Markdom\HandlerInterface;

/**
 * Interface HandlerInterface
 *
 * @package Markdom\HandlerInterface
 */
interface HandlerInterface
{

	/**
	 * @return void
	 */
	public function onDocumentBegin(): void;

	/**
	 * @return void
	 */
	public function onDocumentEnd(): void;

	/**
	 * @return void
	 */
	public function onBlocksBegin(): void;

	/**
	 * @param string $type
	 * @return void
	 */
	public function onBlockBegin(string $type): void;

	/**
	 * @param string $code
	 * @param string $hint
	 * @return void
	 */
	public function onCodeBlock(string $code, ?string $hint = null): void;

	/**
	 * @param string $comment
	 * @return void
	 */
	public function onCommentBlock(string $comment): void;

	/**
	 * @return void
	 */
	public function onDivisionBlock(): void;

	/**
	 * @param int $level
	 * @return void
	 */
	public function onHeadingBlockBegin(int $level): void;

	/**
	 * @param int $level
	 * @return void
	 */
	public function onHeadingBlockEnd(int $level): void;

	/**
	 * @return void
	 */
	public function onUnorderedListBlockBegin(): void;

	/**
	 * @param int
	 * @return void
	 */
	public function onOrderedListBlockBegin(int $startIndex): void;

	/**
	 * @return void
	 */
	public function onListItemsBegin(): void;

	/**
	 * @return void
	 */
	public function onListItemBegin(): void;

	/**
	 * @return void
	 */
	public function onListItemEnd(): void;

	/**
	 * @return void
	 */
	public function onNextListItem(): void;

	/**
	 * @return void
	 */
	public function onListItemsEnd(): void;

	/**
	 * @return void
	 */
	public function onUnorderedListBlockEnd(): void;

	/**
	 * @param int
	 * @return void
	 */
	public function onOrderedListBlockEnd(int $startIndex): void;

	/**
	 * @return void
	 */
	public function onParagraphBlockBegin(): void;

	/**
	 * @return void
	 */
	public function onParagraphBlockEnd(): void;

	/**
	 * @return void
	 */
	public function onQuoteBlockBegin(): void;

	/**
	 * @return void
	 */
	public function onQuoteBlockEnd(): void;

	/**
	 * @param string $type
	 * @return void
	 */
	public function onBlockEnd(string $type): void;

	/**
	 * @return void
	 */
	public function onNextBlock(): void;

	/**
	 * @return void
	 */
	public function onBlocksEnd(): void;

	/**
	 * @return void
	 */
	public function onContentsBegin(): void;

	/**
	 * @param string $type
	 * @return void
	 */
	public function onContentBegin(string $type): void;

	/**
	 * @param string $code
	 * @return void
	 */
	public function onCodeContent(string $code): void;

	/**
	 * @param int $level
	 * @return void
	 */
	public function onEmphasisContentBegin(int $level): void;

	/**
	 * @param int $level
	 * @return void
	 */
	public function onEmphasisContentEnd(int $level): void;

	/**
	 * @param string $uri
	 * @param string $title
	 * @param string $alternative
	 * @return void
	 */
	public function onImageContent(string $uri, ?string $title = null, ?string $alternative = null): void;

	/**
	 * @param bool $hard
	 * @return void
	 */
	public function onLineBreakContent(bool $hard): void;

	/**
	 * @param string $uri
	 * @param string $title
	 * @return void
	 */
	public function onLinkContentBegin(string $uri, ?string $title = null): void;

	/**
	 * @param string $uri
	 * @param string $title
	 * @return void
	 */
	public function onLinkContentEnd(string $uri, ?string $title = null): void;

	/**
	 * @param string $text
	 * @return void
	 */
	public function onTextContent(string $text): void;

	/**
	 * @param string $type
	 * @return void
	 */
	public function onContentEnd(string $type): void;

	/**
	 * @return void
	 */
	public function onNextContent(): void;

	/**
	 * @return void
	 */
	public function onContentsEnd(): void;

	/**
	 * @return mixed
	 */
	public function getResult();

}
