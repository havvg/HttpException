<?php

namespace Http\Exception\Client;

class RequestRangeNotSatisfiable extends AbstractException
{
  const STATUS_CODE = 416;
}