<?php

namespace Codecs\Json;

use Bitmask\{ Annotations\Bit, Bitmask };

/**
 * JSON Decoding Options Bitmask.
 * 
 * @api
 * @final
 * @since 1.0.0
 * @version 1.0.0
 * @package json-codec
 * @author Ali M. Kamel <ali.kamel.dev@gmail.com>
 */
final class JsonDecodingOptions extends Bitmask {

    #[Bit('BigIntAsString')]        public const BIGINT_AS_STRING           = JSON_BIGINT_AS_STRING;
    #[Bit('IgnoreInvalidUtf8')]     public const IGNORE_INVALID_UTF8        = JSON_INVALID_UTF8_IGNORE;
    #[Bit('SubstituteInvalidUtf8')] public const SUBSTITUTE_INVALID_UTF8    = JSON_INVALID_UTF8_SUBSTITUTE;
    #[Bit('ObjectAsArray')]         public const OBJECT_AS_ARRAY            = JSON_OBJECT_AS_ARRAY;
}
