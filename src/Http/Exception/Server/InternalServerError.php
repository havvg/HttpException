<?php

namespace Http\Exception\Server;

class InternalServerError extends AbstractException
{
  const STATUS_CODE = 500;
}