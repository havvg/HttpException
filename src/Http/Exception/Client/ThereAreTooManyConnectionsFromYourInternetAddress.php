<?php

namespace Http\Exception\Client;

class ThereAreTooManyConnectionsFromYourInternetAddress extends AbstractException
{
  const STATUS_CODE = 421;
}