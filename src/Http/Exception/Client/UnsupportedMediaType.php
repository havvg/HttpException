<?php

namespace Http\Exception\Client;

class UnsupportedMediaType extends AbstractException
{
  const STATUS_CODE = 415;
}