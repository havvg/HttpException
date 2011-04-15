<?php

namespace Http\Exception\Client;

class Unauthorized extends AbstractException
{
  const STATUS_CODE = 401;
}