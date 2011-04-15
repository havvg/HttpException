<?php

namespace Http\Exception\Client;

class ImATeapot extends AbstractException
{
  const STATUS_CODE = 418;
}