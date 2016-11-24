<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Gismo\Component\ExpressionLanguage\Node;

use Gismo\Component\ExpressionLanguage\Compiler;

/**
 * @author Fabien Potencier <fabien@symfony.com>
 *
 * @internal
 */
class ArgumentsNode extends ArrayNode
{
    public function compile(Compiler $compiler)
    {
        $this->compileArguments($compiler, false);
    }

    public function toArray()
    {
        $array = array();

        foreach ($this->getKeyValuePairs() as $pair) {
            $array[] = $pair['value'];
            $array[] = ', ';
        }
        array_pop($array);

        return $array;
    }
}
