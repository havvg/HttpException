<?php

namespace Http\Exception\Client;

class RequestEntityTooLong extends AbstractException
{
  const STATUS_CODE = 413;
}