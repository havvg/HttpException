<?php

namespace Http\Exception\Client;

class Gone extends AbstractException
{
  const STATUS_CODE = 410;
}