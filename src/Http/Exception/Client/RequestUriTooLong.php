<?php

namespace Http\Exception\Client;

class RequestUriTooLong extends AbstractException
{
  const STATUS_CODE = 414;
}