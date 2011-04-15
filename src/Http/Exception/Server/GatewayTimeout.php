<?php

namespace Http\Exception\Server;

class GatewayTimeout extends AbstractException
{
  const STATUS_CODE = 504;
}