<?php

declare(strict_types=1);

namespace lucguerraz\wpmlinstaller\exceptions;

use \Exception;

/**
 * Exception thrown if the WMPL user id or sub key is not available in the environment
 */
class missingkeyexception extends Exception
{
    /**
     * missingkeyexception constructor.
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
            "Could not find the {$key} env variable for WPML.",
            $code,
            $previous
        );
    }
}
