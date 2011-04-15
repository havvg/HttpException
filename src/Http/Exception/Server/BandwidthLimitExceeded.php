<?php

namespace Http\Exception\Server;

class BandwidthLimitExceeded extends AbstractException
{
  const STATUS_CODE = 509;
}