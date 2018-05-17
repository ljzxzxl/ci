<?php
defined('BASEPATH') OR exit('No direct script access allowed');
use Illuminate\Database\Eloquent\Model as Eloquent;

class Typecho_contents extends Eloquent
{
    protected $table = 'typecho_contents';
    protected $primaryKey = 'cid';
    public $timestamps = false;
}