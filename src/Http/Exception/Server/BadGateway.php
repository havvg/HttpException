<?php

namespace Http\Exception\Server;

class BadGateway extends AbstractException
{
  const STATUS_CODE = 502;
}