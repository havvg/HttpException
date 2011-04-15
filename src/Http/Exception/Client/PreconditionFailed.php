<?php

namespace Http\Exception\Client;

class PreconditionFailed extends AbstractException
{
  const STATUS_CODE = 412;
}