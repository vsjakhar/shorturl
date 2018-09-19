<?php
class Cprez extends CI_Model{

	public function __construct(){

		parent:: __construct();
		//$this->load->database();
	}

	// Default Insert Function

	//	$this->Cprez->default_insert($table='table',$data='');

	public function default_insert($table,$data){
		if($this->db->insert($table,$data)){
			return $this->db->insert_id();
		}else{
			return false;
		}
	}
	


	// Default Update Function

	//	$this->Cprez->default_update($table='table',$del_id='',$data);

	public function default_update($table,$data,$condition=''){
		$this->db->where($condition);
		if($this->db->update($table,$data)){
			return true;
		}else{
			return false;
		}
	}


	// Default Delete Function

	//	$this->Cprez->default_delete($table='table',$del_id='');

	public function default_delete($table,$condition=''){
		$del=$this->db->where($condition);
		if($this->db->delete($table)){
			return true;
		}else{
			return false;
		}
	}



	// Default Select Function

	//  $this->Cprez->default_select($table='chief','Select(*)','title DESC, name ASC (Order By)','Limit')	Default Select Model Function
	//  $this->Cprez->default_select_row($table='chief','Select(*)','Conditional Array with key and value','Order By','Limit')	Default Select Model Function
	//  $this->Cprez->default_select_and($table='chief','Select(*)','Conditional Array with key and value(Where)','Order By','Limit')	Default Select Model Function
	//  $this->Cprez->default_select_or($table='chief','Select(*)',$where = "name='Joe' AND status='boss' OR status='active'",'Order By','Limit')	Default Select Model Function
	//  $this->Cprez->default_select_like($table='chief','Select(*)',$column='chief_email',$like = 'name','Order By','Limit')	Default Select with where_in Model Function
	//  $this->Cprez->default_select_array_in($table='chief','Select(*)',$column='chief_email',$where = array('Frank', 'Todd', 'James'),'Order By','Limit')	Default Select with where_in Model Function
	//  $this->Cprez->default_select_array_not_in($table='chief','Select(*)',$column='chief_email',$where = array('Frank', 'Todd', 'James'),'Order By','Limit')	Default Select with where_not_in Model Function
	//  $this->Cprez->default_select_join($table='chief','Select(*)','Conditional Array with key and value','Join Table','Join condition','Order By','Limit')	Default Select Model Function
	//  $this->Cprez->default_select_manual('Manual Query')	Default Select Manual Model Function


	public function default_select($table,$select='*',$order='',$limit=''){
		$this->db->select($select);
		$data=$this->db->get($table,$limit);
		if($data->num_rows()>0){
			return $data->result_array();
		}else{
			return false;
		}
	}

	public function default_select_row($table,$select='*',$condition='',$order='',$limit=''){
		$this->db->select($select);
		$this->db->where($condition);
		
		$data=$this->db->get($table);
		if($data->num_rows()>0){
			return $data->row_array();
		}else{
			return false;
		}
	}

	public function default_select_and($table,$select='*',$condition='',$order='',$random='',$limit=''){
		//echo $order; die;
		$this->db->select($select);
		$this->db->where($condition);
		$this->db->order_by($order);
		if(!empty($random)){
			$this->db->order_by($random, 'RANDOM');
		}
		
		$data=$this->db->get($table);
		if($data->num_rows()>0){
			return $data->result_array();
		}else{
			return false;
		}
	}

	public function default_select_or($table,$select='*',$condition='',$order='',$random='',$limit=''){
		$this->db->select($select);
		$this->db->where($condition);
		$this->db->order_by($order);
		if(!empty($random)){
			$this->db->order_by($random, 'RANDOM');
		}
		
		$data=$this->db->get($table);
		if($data->num_rows()>0){
			return $data->result_array();
		}else{
			return false;
		}
	}

	public function default_select_like($table,$select='*',$column='',$like='',$order='',$random='',$limit=''){
		$this->db->select($select);
		$this->db->like($column, $like);
		$this->db->order_by($order);
		if(!empty($random)){
			$this->db->order_by($random, 'RANDOM');
		}
		
		$data=$this->db->get($table);
		if($data->num_rows()>0){
			return $data->result_array();
		}else{
			return false;
		}
	}

	public function default_select_array_in($table,$select='*',$column='',$condition='',$order='',$random='',$limit=''){
		$this->db->select($select);
		$this->db->where_in($column, $condition);
		$this->db->order_by($order);
		if(!empty($random)){
			$this->db->order_by($random, 'RANDOM');
		}
		
		$data=$this->db->get($table);
		if($data->num_rows()>0){
			return $data->result_array();
		}else{
			return false;
		}
	}

	public function default_select_array_in_join($table,$select='*',$column='',$condition='',$order='',$random='',$limit='',$table2='',$join=''){
		$this->db->select($select);
		$this->db->join($table2, $join);
		$this->db->where_in($column, $condition);
		$this->db->order_by($order);
		if(!empty($random)){
			$this->db->order_by($random, 'RANDOM');
		}
		
		$data=$this->db->get($table);
		if($data->num_rows()>0){
			return $data->result_array();
		}else{
			return false;
		}
	}

	public function default_select_array_not_in($table,$select='*',$column='',$condition='',$order='',$random='',$limit=''){
		$this->db->select($select);
		$this->db->where_not_in($column, $condition);
		$this->db->order_by($order);
		if(!empty($random)){
			$this->db->order_by($random, 'RANDOM');
		}
		
		$data=$this->db->get($table);
		if($data->num_rows()>0){
			return $data->result_array();
		}else{
			return false;
		}
	}

	public function default_select_join($table,$select='*',$condition='',$table2='',$join='',$order='',$limit=''){
		$this->db->select($select);
		$this->db->join($table2, $join);
		if($condition!=''){
			$this->db->where($condition);
		}
		$data=$this->db->get($table, $limit);
		if($data->num_rows()>0){
			return $data->result_array();
		}else{
			return false;
		}
	}

	public function default_select_join_row($table,$select='*',$condition='',$table2='',$join='',$order='',$limit=''){
		$this->db->select($select);
		$this->db->join($table2, $join);
		if($condition!=''){
			$this->db->where($condition);
		}
		$data=$this->db->get($table);
		if($data->num_rows()>0){
			return $data->row_array();
		}else{
			return false;
		}
	}

	public function default_select_manual($query){
		$data=$this->db->query($query);
		if($data->num_rows()>0){
			return $data->row_array();
		}else{
			return false;
		}
	}
	
	

	// Default Select Functions End

	
}