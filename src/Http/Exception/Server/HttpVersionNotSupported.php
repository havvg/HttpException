<?php

namespace Http\Exception\Server;

class HttpVersionNotSupported extends AbstractException
{
  const STATUS_CODE = 505;
}