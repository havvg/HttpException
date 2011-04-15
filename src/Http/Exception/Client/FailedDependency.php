<?php

namespace Http\Exception\Client;

class FailedDependency extends AbstractException
{
  const STATUS_CODE = 424;
}