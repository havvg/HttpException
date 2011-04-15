<?php

namespace Http\Exception;

abstract class AbstractException extends \Exception
{
  /**
   * Returns the HTTP Status Code of the given Exception.
   *
   * @return int
   */
  public function getStatusCode()
  {
    return static::STATUS_CODE;
  }
}