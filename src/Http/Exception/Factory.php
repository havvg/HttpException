<?php

namespace Http\Exception;

class Factory
{
  public static $codeTable = array(
    // 4xx: Client Error - The request contains bad syntax or cannot be fulfilled.
    400 => 'BadRequest',
    401 => 'Unauthorized',
    402 => 'PaymentRequired',
    403 => 'Forbidden',
    404 => 'NotFound',
    405 => 'MethodNotAllowed',
    406 => 'NotAcceptable',
    407 => 'ProxyAuthenticationRequired',
    408 => 'RequestTimeout',
    409 => 'Conflict',
    410 => 'Gone',
    411 => 'LengthRequired',
    412 => 'PreconditionFailed',
    413 => 'RequestEntityTooLarge',
    414 => 'RequestUriTooLong',
    415 => 'UnsupportedMediaType',
    416 => 'RequestedRangeNotSatisfiable',
    417 => 'ExpectationFailed',
    418 => 'ImATeapot',
    421 => 'ThereAreTooManyConnectionsFromYourInternetAddress',
    422 => 'UnprocessableEntity',
    423 => 'Locked',
    424 => 'FailedDependency',
    425 => 'UnorderedCollection',
    426 => 'UpgradeRequired',

    // 5xx: Server Error - The server failed to fulfill an apparently valid request.
    500 => 'InternalServerError',
    501 => 'NotImplemented',
    502 => 'BadGateway',
    503 => 'ServiceUnavailable',
    504 => 'GatewayTimeout',
    505 => 'HttpVersionNotSupported',
    506 => 'VariantAlsoNegotiates',
    507 => 'InsuffientStorage',
    509 => 'BandwidthLimitExceeded',
    510 => 'NotExtended',
  );

  /**
   * Create a HTTP exception based on given status code.
   *
   * @throws \InvalidArgumentException The given status code is no HTTP error code.
   * @throws \InvalidArgumentExceptino The given error code does not exist.
   *
   * @param int $status
   *
   * @return \Http\Exception\AbstractException
   */
  public static function createByCode($status)
  {
    if (!is_int($status) or $status < 400)
    {
      throw new \InvalidArgumentException('The given status code is no HTTP error code.');
    }

    if (empty(self::$codeTable[$status]))
    {
      throw new \InvalidArgumentException('The given error code does not exist.');
    }

    $errorSide = ($status >= 500 ? 'Server' : 'Client');

    $className = "\\Http\\Exception\\$errorSide\\" . self::$codeTable[$status];
    return new $className;
  }
}