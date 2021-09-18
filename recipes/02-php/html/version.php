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

/**
 * Class Controller
 *
 * @author Björn Hempel <bjoern@hempel.li>
 * @version 1.0 (2021-09-18)
 */
class Controller
{
    const HTML_TEMPLATE = <<<HTML
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>02-php</title>
</head>
<body>
    <h2>02-php</h2>
    <p>Hello Docker! :) This docker setup that shows how to serve dynamic pages in docker.</p>
    <p><strong>Version</strong>: v%s</p>
</body>
</html>
HTML;

    protected string $version;

    /**
     * Controller constructor.
     */
    public function __construct()
    {
        $this->version = getenv('VERSION_APP');
    }

    /**
     * Outputs the HTML content to screen.
     */
    public function output(): void
    {
        print sprintf(self::HTML_TEMPLATE, $this->version);
    }
}

// Print HTML to screen
(new Controller())->output();
