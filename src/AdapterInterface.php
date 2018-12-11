<?php
/**
 * Created by PhpStorm.
 * User: Владимир
 * Date: 11.12.2018
 * Time: 13:09
 */

namespace NtSchool;


interface AdapterInterface
{
public function error(string $message);

public function warning(string $message);
}