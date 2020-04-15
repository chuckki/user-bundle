<?php

/*
 * This file is part of [package name].
 *
 * (c) John Doe
 *
 * @license LGPL-3.0-or-later
 */

namespace Chuckki\UserBundle\Tests;

use Chuckki\UserBundle\ChuckkiUserBundle;
use PHPUnit\Framework\TestCase;

class ChuckkiUserBundleTest extends TestCase
{
    public function testCanBeInstantiated()
    {
        $bundle = new ChuckkiUserBundle();

        $this->assertInstanceOf('Chuckki\UserBundle\ChuckkiUserBundle', $bundle);
    }
}
