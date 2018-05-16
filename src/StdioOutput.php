<?php

namespace WyriHaximus\React\Symfony\Console;

use Clue\React\Stdio\Stdio;
use Symfony\Component\Console\Formatter\OutputFormatterInterface;
use Symfony\Component\Console\Output\OutputInterface;

final class StdioOutput implements OutputInterface
{
    /**
     * @var Stdio
     */
    private $stdio;

    public function write($messages, $newline = false, $options = 0)
    {
        if (!is_array($messages)) {
            $messages = [$messages];
        }

        $lineEnding = $newline ? PHP_EOL : '';
        foreach ($messages as $message) {
            $this->stdio->write($message . $lineEnding);
        }
    }

    public function writeln($messages, $options = 0)
    {
        $this->write($messages, true, $options);
    }

    public function setVerbosity($level)
    {
        // TODO: Implement setVerbosity() method.
    }

    public function getVerbosity()
    {
        // TODO: Implement getVerbosity() method.
    }

    public function isQuiet()
    {
        // TODO: Implement isQuiet() method.
    }

    public function isVerbose()
    {
        // TODO: Implement isVerbose() method.
    }

    public function isVeryVerbose()
    {
        // TODO: Implement isVeryVerbose() method.
    }

    public function isDebug()
    {
        // TODO: Implement isDebug() method.
    }

    public function setDecorated($decorated)
    {
        // TODO: Implement setDecorated() method.
    }

    public function isDecorated()
    {
        // TODO: Implement isDecorated() method.
    }

    public function setFormatter(OutputFormatterInterface $formatter)
    {
        // TODO: Implement setFormatter() method.
    }

    public function getFormatter()
    {
        // TODO: Implement getFormatter() method.
    }
}
