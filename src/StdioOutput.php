<?php

namespace WyriHaximus\React\Symfony\Console;

use Clue\React\Stdio\Stdio;
use Symfony\Component\Console\Output\Output;

final class StdioOutput extends Output
{
    /**
     * @var Stdio
     */
    private $stdio;

    /**
     * @param Stdio $stdio
     */
    public function __construct(Stdio $stdio)
    {
        $this->stdio = $stdio;
        parent::__construct();
    }

    public function doWrite($message, $newline = false)
    {
        $lineEnding = $newline ? PHP_EOL : '';
        $this->stdio->write($message . $lineEnding);
    }
}
