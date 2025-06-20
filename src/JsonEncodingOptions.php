<?php

namespace Codecs\Json;

use Bitmask\{ Annotations\Bit, Bitmask };

/**
 * JSON Encoding Options Bitmask.
 * 
 * @api
 * @final
 * @since 1.0.0
 * @version 1.0.0
 * @package json-codec
 * @author Ali M. Kamel <ali.kamel.dev@gmail.com>
 */
final class JsonEncodingOptions extends Bitmask {

    #[Bit('ForceObject')]               public const FORCE_OBJECT               = JSON_FORCE_OBJECT;
    #[Bit('HexQuote')]                  public const HEX_QUOTE                  = JSON_HEX_QUOT;
    #[Bit('HexTag')]                    public const HEX_TAG                    = JSON_HEX_TAG;
    #[Bit('HexAmp')]                    public const HEX_AMP                    = JSON_HEX_AMP;
    #[Bit('HexApos')]                   public const HEX_APOS                   = JSON_HEX_APOS;
    #[Bit('IgnoreInvalidUtf8')]         public const IGNORE_INVALID_UTF8        = JSON_INVALID_UTF8_IGNORE;
    #[Bit('SubstituteInvalidUtf8')]     public const SUBSTITUTE_INVALID_UTF8    = JSON_INVALID_UTF8_SUBSTITUTE;
    #[Bit('NumericCheck')]              public const NUMERIC_CHECK              = JSON_NUMERIC_CHECK;
    #[Bit('PartialOutputOnError')]      public const PARTIAL_OUTPUT_ON_ERROR    = JSON_PARTIAL_OUTPUT_ON_ERROR;
    #[Bit('PreserveZeroFraction')]      public const PRESERVE_ZERO_FRACTION     = JSON_PRESERVE_ZERO_FRACTION;
    #[Bit('PrettyPrint')]               public const PRETTY_PRINT               = JSON_PRETTY_PRINT;
    #[Bit('UnescapedLineTerminators')]  public const UNESCAPED_LINE_TERMINATORS = JSON_UNESCAPED_LINE_TERMINATORS;
    #[Bit('UnescapedSlashes')]          public const UNESCAPED_SLASHES          = JSON_UNESCAPED_SLASHES;
    #[Bit('UnescapedUnicode')]          public const UNESCAPED_UNICODE          = JSON_UNESCAPED_UNICODE;
    #[Bit('ThrowOnError')]              public const THROW_ON_ERROR             = JSON_THROW_ON_ERROR;
}
