<?php

declare(strict_types=1);

namespace Widmogrod\Common;

/**
 * @template a
 */
interface ValueOfInterface
{
    /**
     * Return value wrapped by Monad
     *
     * @return a
     */
    public function extract();
}
