<?php

namespace AmpProject\Optimizer\Exception;

use OutOfBoundsException;

/**
 * Exception thrown when an invalid configuration key was provided.
 *
 * @package ampproject/optimizer
 */
final class InvalidConfigurationKey extends OutOfBoundsException implements AmpOptimizerException
{

    /**
     * Instantiate an InvalidConfigurationKey exception for an invalid key.
     *
     * @param string $key Key that was invalid.
     * @return self
     */
    public static function fromKey($key)
    {
        $message = "The provided configuration key '{$key}' is not valid.";

        return new self($message);
    }

    /**
     * Instantiate an InvalidConfigurationKey exception for an invalid transformer configuration key.
     *
     * @param string $transformer Transformer class or identifier.
     * @param string $key         Key that was invalid.
     * @return self
     */
    public static function fromTransformerKey($transformer, $key)
    {
        $transformerParts = explode('\\', $transformer);
        $transformer      = array_pop($transformerParts);
        $message          = "The provided configuration key '{$key}' is not valid for the transformer '{$transformer}'.";

        return new self($message);
    }
}
