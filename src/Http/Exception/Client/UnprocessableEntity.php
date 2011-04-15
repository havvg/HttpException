<?php

namespace Http\Exception\Client;

class UnprocessableEntity extends AbstractException
{
  const STATUS_CODE = 422;
}