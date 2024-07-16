<?php

declare(strict_types=1);

namespace Widmogrod\Common;

/**
 * @template a
 */
trait ValueOfTrait
{
    /**
     * Return value wrapped by Monad
     *
     * @return a
     */
    public function extract()
    {
        return \Widmogrod\Functional\valueOf($this->value);
    }
}
