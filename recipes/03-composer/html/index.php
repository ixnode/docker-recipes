<?php declare(strict_types=1);

/*
 * MIT License
 *
 * Copyright (c) 2021 Björn Hempel <bjoern@hempel.li>
 *
 * Permission is hereby granted, free of charge, to any person obtaining a copy
 * of this software and associated documentation files (the "Software"), to deal
 * in the Software without restriction, including without limitation the rights
 * to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
 * copies of the Software, and to permit persons to whom the Software is
 * furnished to do so, subject to the following conditions:
 *
 * The above copyright notice and this permission notice shall be included in all
 * copies or substantial portions of the Software.
 *
 * THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
 * IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
 * FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
 * AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
 * LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
 * OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE
 * SOFTWARE.
 */

require __DIR__.'/vendor/autoload.php';

use SebastianBergmann\Timer\Timer;

/**
 * Class Controller
 *
 * @author Björn Hempel <bjoern@hempel.li>
 * @version 1.0 (2021-09-19)
 */
class Controller
{
    const HTML_TEMPLATE = <<<HTML
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>03-composer</title>
</head>
<body>
    <h2>03-composer</h2>
    <p>Hello Docker! :) This docker setup that shows how to serve dynamic pages in docker with composer.</p>
    <p><strong>Version</strong>: %s</p>
    <p><strong>Time</strong>: %s</p>
</body>
</html>
HTML;

    protected string $version;

    /**
     * Controller constructor.
     */
    public function __construct()
    {
        $this->version = gettype(getenv('VERSION_APP')) === 'string' ? sprintf('v%s', getenv('VERSION_APP')) : 'unknown';
    }

    /**
     * Outputs the HTML content to screen.
     */
    public function output(): void
    {
        $timer = new Timer();
        $timer->start();

        sleep(1);

        $time = $timer->stop();

        print sprintf(self::HTML_TEMPLATE, $this->version, $time->asString());
    }
}

// Print HTML to screen
(new Controller())->output();
