<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Gismo\Component\ExpressionLanguage\Tests;

use Gismo\Component\ExpressionLanguage\Node\ConstantNode;
use Gismo\Component\ExpressionLanguage\ParsedExpression;

class ParsedExpressionTest extends \PHPUnit_Framework_TestCase
{
    public function testSerialization()
    {
        $expression = new ParsedExpression('25', new ConstantNode('25'));

        $serializedExpression = serialize($expression);
        $unserializedExpression = unserialize($serializedExpression);

        $this->assertEquals($expression, $unserializedExpression);
    }
}
