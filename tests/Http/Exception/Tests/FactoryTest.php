<?php

namespace Http\Exception\Tests;

class FactoryTest extends \PHPUnit_Framework_TestCase
{
  public function exceptionProvider()
  {
    $data = array();

    foreach (\Http\Exception\Factory::$codeTable as $code => $error)
    {
      $data[] = array($code, $error);
    }

    return $data;
  }

  /**
   * @dataProvider exceptionProvider
   */
  public function testExceptions($code, $error)
  {
    $exception = \Http\Exception\Factory::createByCode($code);
    $className = get_class($exception);

    $expectedClassName = 'Http\\Exception\\';
    if ($code >= 500)
    {
      $expectedClassName .= 'Server\\';
    }
    else
    {
      $expectedClassName .= 'Client\\';
    }

    $expectedClassName .= $error;

    $this->assertEquals($code, constant("$className::STATUS_CODE"));
    $this->assertEquals($expectedClassName, $className);
  }
}