<?php

namespace Http\Exception\Client;

class UpgradeRequired extends AbstractException
{
  const STATUS_CODE = 426;
}