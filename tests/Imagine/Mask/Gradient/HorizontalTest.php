<?php

/*
 * This file is part of the Imagine package.
 *
 * (c) Bulat Shakirzyanov <mallluhuct@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Imagine\Mask\Gradient;

use Imagine\Point;

class HorizontalTest extends LinearTest
{
    /**
     * (non-PHPdoc)
     * @see Imagine\Mask\Gradient.LinearTest::getMask()
     */
    protected function getMask()
    {
        return new Horizontal(100);
    }

    /**
     * (non-PHPdoc)
     * @see Imagine\Mask\Gradient.LinearTest::getPointsAndShades()
     */
    public function getPointsAndShades()
    {
        return array(
            array(255, new Point(100, 5)),
            array(0, new Point(0, 15)),
            array(128, new Point(50, 25)),
        );
    }
}
