<?php 
class Cms5832a9672f097574983558_1581370093Class extends \Cms\Classes\PageCode
{
public function onCheckEmail()
{
    return ['isTaken' => Auth::findUserByLogin(post('email')) ? 1 : 0];
}
}
