<?php

namespace Http\Exception\Client;

class RequestEntityTooLarge extends AbstractException
{
  const STATUS_CODE = 413;
}