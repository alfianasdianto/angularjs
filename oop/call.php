<?php
class MagicMethodCall
{
    public function  __call($name, $arguments)
    {
       echo "calling method '$name' <br />" . implode('|', $arguments);
    }
}
 
$obj = new MagicMethodCall();
$obj->test('foo','bar','fobar');
 
?>