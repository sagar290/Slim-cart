<?php 

namespace Cart\Support\Storage\Contracts;

interface StorageInterFace 
{
	public function get($index);
	public function set($index, $value);
	public function all();
	public function exists($index);
	public function unset($index);
}