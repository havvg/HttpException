<?php

namespace Http\Exception\Client;

class RequestTimeout extends AbstractException
{
  const STATUS_CODE = 408;
}