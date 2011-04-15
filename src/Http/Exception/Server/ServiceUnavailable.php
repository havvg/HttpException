<?php

namespace Http\Exception\Server;

class ServiceUnavailable extends AbstractException
{
  const STATUS_CODE = 503;
}