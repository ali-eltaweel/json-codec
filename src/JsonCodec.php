<?php

namespace Codecs\Json;

use Codecs\ICodec;

/**
 * A codec for encoding and decoding JSON data.
 * 
 * @api
 * @since 1.0.0
 * @version 1.0.0
 * @package json-codec
 * @author Ali M. Kamel <ali.kamel.dev@gmail.com>
 */
class JsonCodec implements ICodec {

    /**
     * The options used for encoding JSON data.
     * 
     * @api
     * @readonly
     * @since 1.0.0
     * 
     * @var JsonEncodingOptions
     */
    public readonly JsonEncodingOptions $encodingOptions;
    
    /**
     * The options used for decoding JSON data.
     * 
     * @api
     * @readonly
     * @since 1.0.0
     * 
     * @var JsonDecodingOptions
     */
    public readonly JsonDecodingOptions $decodingOptions;

    /**
     * Constructs a new instance of the JsonCodec class.
     * 
     * @api
     * @since 1.0.0
     * @version 1.0.0
     * 
     * @param JsonEncodingOptions|int $encodingOptions
     * @param JsonDecodingOptions|int $decodingOptions
     * @param int $maxDepth
     */
    public function __construct(
        
                        JsonEncodingOptions|int $encodingOptions = 0,
                        JsonDecodingOptions|int $decodingOptions = 0,
        public readonly                     int $maxDepth       = 512,
    ) {

        $this->encodingOptions = is_int($encodingOptions) ? new JsonEncodingOptions($encodingOptions) : $encodingOptions;
        $this->decodingOptions = is_int($decodingOptions) ? new JsonDecodingOptions($decodingOptions) : $decodingOptions;
    }

    /**
     * Encodes a value into a string representation.
     * 
     * @api
     * @final
     * @override
     * @since 1.0.0
     * @version 1.0.0
     * 
     * @param mixed $value
     * @return string
     */
    public final function encode(mixed $value): string {

        return json_encode($value, $this->encodingOptions->toInt(), $this->maxDepth);
    }

    /**
     * Decodes a string representation back into its original value.
     * 
     * @api
     * @final
     * @override
     * @since 1.0.0
     * @version 1.0.0
     * 
     * @param string $code
     * @return mixed
     */
    public final function decode(string $code): mixed {

        return json_decode($code, null, $this->maxDepth, $this->decodingOptions->toInt());
    }
}
