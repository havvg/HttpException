<?php

namespace Http\Exception\Client;

class ExpectationFailed extends AbstractException
{
  const STATUS_CODE = 417;
}