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
	public function onDocumentBegin();

	/**
	 * @return void
	 */
	public function onDocumentEnd();

	/**
	 * @return void
	 */
	public function onBlocksBegin();

	/**
	 * @param string $type
	 * @return void
	 */
	public function onBlockBegin($type);

	/**
	 * @param string $code
	 * @param string $hint
	 * @return void
	 */
	public function onCodeBlock($code, $hint = null);

	/**
	 * @param $comment
	 * @return void
	 */
	public function onCommentBlock($comment);

	/**
	 * @return void
	 */
	public function onDivisionBlock();

	/**
	 * @param int $level
	 * @return void
	 */
	public function onHeadingBlockBegin($level);

	/**
	 * @param int $level
	 * @return void
	 */
	public function onHeadingBlockEnd($level);

	/**
	 * @return void
	 */
	public function onUnorderedListBlockBegin();

	/**
	 * @param int
	 * @return void
	 */
	public function onOrderedListBlockBegin($startIndex);

	/**
	 * @return void
	 */
	public function onListItemsBegin();

	/**
	 * @return void
	 */
	public function onListItemBegin();

	/**
	 * @return void
	 */
	public function onListItemEnd();

	/**
	 * @return void
	 */
	public function onNextListItem();

	/**
	 * @return void
	 */
	public function onListItemsEnd();

	/**
	 * @return void
	 */
	public function onUnorderedListBlockEnd();

	/**
	 * @param int
	 * @return void
	 */
	public function onOrderedListBlockEnd($startIndex);

	/**
	 * @return void
	 */
	public function onParagraphBlockBegin();

	/**
	 * @return void
	 */
	public function onParagraphBlockEnd();

	/**
	 * @return void
	 */
	public function onQuoteBlockBegin();

	/**
	 * @return void
	 */
	public function onQuoteBlockEnd();

	/**
	 * @param string $type
	 * @return void
	 */
	public function onBlockEnd($type);

	/**
	 * @return void
	 */
	public function onNextBlock();

	/**
	 * @return void
	 */
	public function onBlocksEnd();

	/**
	 * @return void
	 */
	public function onContentsBegin();

	/**
	 * @param string $type
	 * @return void
	 */
	public function onContentBegin($type);

	/**
	 * @param string $code
	 * @return void
	 */
	public function onCodeContent($code);

	/**
	 * @param int $level
	 * @return void
	 */
	public function onEmphasisContentBegin($level);

	/**
	 * @param int $level
	 * @return void
	 */
	public function onEmphasisContentEnd($level);

	/**
	 * @param string $uri
	 * @param string $title
	 * @param string $alternative
	 * @return void
	 */
	public function onImageContent($uri, $title = null, $alternative = null);

	/**
	 * @param bool $hard
	 * @return void
	 */
	public function onLineBreakContent($hard);

	/**
	 * @param string $uri
	 * @return void
	 */
	public function onLinkContentBegin($uri);

	/**
	 * @param string $uri
	 * @return void
	 */
	public function onLinkContentEnd($uri);

	/**
	 * @param string $text
	 * @return void
	 */
	public function onTextContent($text);

	/**
	 * @param string $type
	 * @return void
	 */
	public function onContentEnd($type);

	/**
	 * @return void
	 */
	public function onNextContent();

	/**
	 * @return void
	 */
	public function onContentsEnd();

	/**
	 * @return mixed
	 */
	public function getResult();

}
