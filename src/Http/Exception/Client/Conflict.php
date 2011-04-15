<?php

namespace Http\Exception\Client;

class Conflict extends AbstractException
{
  const STATUS_CODE = 409;
}