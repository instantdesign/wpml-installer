<?php

declare(strict_types=1);

namespace lucguerraz\wpmlinstaller\exceptions;

use \Exception;

/**
 * Exception thrown if the WMPL user id or sub key is faulty
 */
class faultykeyexception extends Exception
{
    /**
     * faultykeyexception constructor.
     * @param string $key
     * @param int $code
     * @param Exception|null $previous
     */
    public function __construct(
        string $key = '',
        int $code = 0,
        Exception $previous = null
    ) {
        parent::__construct(
            "The {$key} env variable is malformed.",
            $code,
            $previous
        );
    }
}
