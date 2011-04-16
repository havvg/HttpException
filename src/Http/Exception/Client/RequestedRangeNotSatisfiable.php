<?php

namespace Http\Exception\Client;

class RequestedRangeNotSatisfiable extends AbstractException
{
  const STATUS_CODE = 416;
}