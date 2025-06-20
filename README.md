# JSON Codec

- [JSON Codec](#json-codec)
  - [Installation](#installation)
  - [Usage](#usage)

***

## Installation

Install *json-codec* via Composer:

```bash
composer require ali-eltaweel/json-codec
```

## Usage

```php
use Codecs\Json\JsonCodec;

$jsonCodec = new JsonCodec();

$code = $jsonCodec->encode($data);

$data = $jsonCodec->decode($code);
```
