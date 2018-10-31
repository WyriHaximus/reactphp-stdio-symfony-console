<?php declare(strict_types=1);

namespace WyriHaximus\React\Symfony\Console;

use Clue\React\Stdio\Stdio;
use Symfony\Component\Console\Formatter\OutputFormatterInterface;
use Symfony\Component\Console\Output\Output;

final class StdioOutput extends Output
{
    /**
     * @var Stdio
     */
    private $stdio;

    /**
     * @param Stdio                         $stdio
     * @param int                           $verbosity
     * @param bool                          $decorated
     * @param OutputFormatterInterface|null $formatter
     */
    public function __construct(Stdio $stdio, $verbosity = self::VERBOSITY_NORMAL, $decorated = false, OutputFormatterInterface $formatter = null)
    {
        $this->stdio = $stdio;
        parent::__construct($verbosity, $decorated, $formatter);
    }

    public function doWrite($message, $newline = false)
    {
        $lineEnding = $newline ? PHP_EOL : '';
        $this->stdio->write($message . $lineEnding);
    }
}
