<?php
ini_set('display_errors', '1');

class database{
	public $current_table;
	public $base_path='/var/www/data';
	public $schema=[
		'TRANSACTIONS'=>[
			'transactionID'
		]
	];
	public function table($table){
		$this->current_table=$table;
	}
	public function read($search_data){
		ksort($search_data);
		$keys=implode('--', array_flip($search_data));
		$values=implode('--', $search_data);
		$path="{$this->base_path}/{$this->current_table}/{$keys}/{$values}";
		$raw_result_data=file_get_contents($path);
		$raw_result_data=explode("\n", $raw_result_data);
		$result_data=array();
		foreach($raw_result_data as $index=>$pair){
			$pair=explode('==', $pair);
			$result_data[$pair[0]]=$pair[1];
		}
		return $result_data;
	}
	public function write($search_data, $record_data){
		ksort($search_data);
		$keys=implode('--', array_flip($search_data));
		$values=implode('--', $search_data);
		$path="{$this->base_path}/{$this->current_table}/{$keys}/{$values}";
		if(is_file($path)){
			$raw_result_data=file_get_contents($path);
			$raw_result_data=explode("\n", $raw_result_data);
			$result_data=array();
			foreach($raw_result_data as $index=>$pair){
				$pair=explode('==', $pair);
				$result_data[$pair[0]]=$pair[1];
			}
			$record_data=array_merge($result_data, $record_data);
		}
		foreach($record_data as $key=>$value){
			if(!isset($file)){
				$file="{$key}=={$value}";
			}else{
				$file.="\n{$key}=={$value}";
			}
		}
		foreach($this->schema[$this->current_table] as $index=>$key_set){
			if(is_array($key_set)){
				$value_set=array();
				foreach($key_set as $index=>$key){
					$value_set[]=$record_data[$key];
				}
				$keys=implode('--', $key_set);
				$values=implode('--', $value_set);
			}else{
				$keys=$key_set;
				$values=$record_data[$key_set];
			}
			$path="{$this->base_path}/{$this->current_table}/{$keys}/{$values}";
			file_put_contents($path, $file);
		}
	}
}
?>