<?php

namespace Onepix\EAvtovokzalApiClient\Exception;

use GuzzleHttp\Exception\GuzzleException;

final class MaxRetryAttemptsException extends \RuntimeException implements GuzzleException
{
}
