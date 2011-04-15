<?php

namespace Http\Exception\Client;

class PaymentRequired extends AbstractException
{
  const STATUS_CODE = 402;
}