<?php


class Test extends PHPUnit\Framework\TestCase{
    
    public function testSetRest()
    {
        $stub=$this->createStub(\App\Models\user::class);
        $stub->method('setRes')
             ->willReturn('foo');
        $this->assertEquals('foo',$stub->setRes('John','1','a@b','yes'));
    }
    public function testSetLogin()
    {
        $stub=$this->createStub(\App\Models\user::class);
        $stub->method('setLogin')
             ->willReturn('foo');
        $this->assertEquals('foo',$stub->setLogin('John','1'));
    }
    public function testGetViewRoom()
    {
        $stub=$this->createStub(\App\Models\user::class);
        $stub->method('getViewRoom')
             ->willReturn('foo');
        $this->assertEquals('foo',$stub->getViewRoom('1'));
    }
    public function testGetViewPayment()
    {
        $stub=$this->createStub(\App\Models\user::class);
        $stub->method('getViewPayment')
             ->willReturn('foo');
        $this->assertEquals('foo',$stub->getViewPayment('1'));
    }
    //used stub to return fixed value
    
    
}