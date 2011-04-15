<?php

namespace Http\Exception\Client;

class ProxyAuthenticationRequired extends AbstractException
{
  const STATUS_CODE = 407;
}