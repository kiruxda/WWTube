<?php

$a=10;
$b= 'string';
var_dump($a, $b);

$list=[1,2,4,'stirng', false];
var_dump($list);

$user=[
    'name'=>'ivan',
    'age'=> 22,
];
var_dump($user);
var_dump(count($user));
var_dump(strlen($user['name']));

class User{
    private $name;
    private $age;
    private $languages=['ru','en'];
    public function __construct($name, $age){
        $this->name=$name;
        $this->age=$age;
    }
    public function getName(){
        return $this->name;
    }
    public function addLang($lang){
        $this->languages[]=$lang;
    }
    public function hasLang($lang){
        return in_array($lang, $this->languages);
    }
}

$user=new User('ivan',22);

var_dump($user->hasLang('fr'));
var_dump($user->hasLang('ru'));