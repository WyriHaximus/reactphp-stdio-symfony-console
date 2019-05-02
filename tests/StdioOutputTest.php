<?php declare(strict_types=1);

namespace WyriHaximus\Tests\React\Symfony\Console;

use Clue\React\Stdio\Stdio;
use WyriHaximus\AsyncTestUtilities\AsyncTestCase;
use WyriHaximus\React\Symfony\Console\StdioOutput;

/**
 * @internal
 */
final class StdioOutputTest extends AsyncTestCase
{
    public function provideDoWrites()
    {
        yield [
            'message',
            false,
            'message',
        ];

        yield [
            'message',
            true,
            'message' . \PHP_EOL,
        ];
    }

    /**
     * @param string $message
     * @param bool   $newLine
     * @param string $expectedWrite
     *
     * @dataProvider provideDoWrites
     */
    public function testDoWrite(string $message, bool $newLine, string $expectedWrite): void
    {
        $stdio = $this->prophesize(Stdio::class);
        $stdio->write($expectedWrite)->shouldBeCalled();

        $output = new StdioOutput($stdio->reveal());
        $output->doWrite($message, $newLine);
    }
}
