<?php

namespace JustCommunication\FuncBundle\Tests\Unit;

use JustCommunication\FuncBundle\Service\FuncHelper;
use PHPUnit\Framework\TestCase;

class FunctionsTest extends TestCase
{
    protected function setUp(): void
    {
        parent::setUp(); // TODO: Change the autogenerated stub
    }

    function testIndexByForArray(){
        $arr = [['id'=>15, 'payload'=>'apple'], ['id'=>4, 'payload'=>'pear'], ['id'=>'7', 'payload'=>'banana']];
        $expected = [15=> ['id'=>15, 'payload'=>'apple'], 4=>['id'=>4, 'payload'=>'pear'], 7=>['id'=>'7', 'payload'=>'banana']];
        $indexed = FuncHelper::indexBy($arr, fn($item)=>$item['id']);
        self::assertEquals($expected,$indexed);
    }

}