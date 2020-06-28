<?php

$data = array(

    "key1"  => "value1";
    "key2" => "value2";
);

function say ($data)
{
    printf("current value = %s\n",$data);

}

for($i=0; $i<10; $i)
{
    say($i);
}