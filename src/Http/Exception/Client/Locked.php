<?php

namespace Http\Exception\Client;

class Locked extends AbstractException
{
  const STATUS_CODE = 423;
}