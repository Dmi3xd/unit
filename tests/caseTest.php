<?php

namespace tests; 

use tests\unitMain;

class caseTest extends unitMain
{

/*
    assertTrue – сравнение с True
    assertStringMatchesFormat – проверка соответствия строки заданному формату
    assertNotEquals – проверка, что два аргумента функции не равны друг другу
    assertEquals – проверка на равенство аргументов
    assertArrayHasKey – убеждаемся, что в массиве существует ключ с заданным значением
*/
    public function testCase1()
    {
        unitMain::get('test/case1');
     
        $this->assertEquals(200, unitMain::getStatusCode());
        $this->assertEquals("application/json", unitMain::contentType());
        $this->assertArrayHasKey('NAME', unitMain::jsonFirst());

    }

    public function testCase2()
    {
        unitMain::get('test/case2');
     
        $this->assertEquals(200, unitMain::getStatusCode());
        $this->assertEquals("application/json", unitMain::contentType());
        $this->assertArrayHasKey('NAME', unitMain::jsonFirst());

    }


}


