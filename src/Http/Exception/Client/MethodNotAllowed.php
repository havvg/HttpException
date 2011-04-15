<?php

namespace Http\Exception\Client;

class MethodNotAllowed extends AbstractException
{
  const STATUS_CODE = 405;
}