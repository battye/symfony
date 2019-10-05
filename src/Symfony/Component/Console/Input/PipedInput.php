<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Symfony\Component\Console\Input;

/**
 * PipedInput sets up a piped console stream to use as input
 *
 * Usage:
 *
 *     $input = new PipedInput($stream)
 *     ... where $stream is from something like fopen(); see QuestionHelper.php for an example.
 *
 * @author battye <battye@phpbb.com>
 */
class PipedInput extends ArgvInput
{
	/**
	 * PipedInput constructor.
	 * @param resource $stream
	 */
	public function __construct($stream)
	{
		// Set up an empty input, but then set the stream
		parent::__construct([]);
		$this->setStream($stream);
	}
}
