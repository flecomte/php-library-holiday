<?php

/*
 * This file is part of the Holiday Library.
 *
 * (c) Michał Mańko <github@michalmanko.com>
 *
 * For the full copyright and license information, please view the LICENSE.md
 * file that was distributed with this source code.
 */

namespace Michalmanko\Holiday\Test\Exception;

use Michalmanko\Holiday\Exception\UnexpectedValueException;

/**
 * @author Michał Mańko <github@michalmanko.com>
 */
class UnexpectedValueExceptionTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @var UnexpectedValueException
     */
    protected $object;

    protected function setUp()
    {
        $this->object = new UnexpectedValueException();
    }

    public function testException()
    {
        $this->assertInstanceOf(
            '\\UnexpectedValueException',
            $this->object
        );
    }
}
