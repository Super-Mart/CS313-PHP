<?php
if($_GET)
{
	$method = $_GET['method'];
if($method == 'addnotes')
{
	$data = $_GET['data'];
	$status = addnotes($data);
	if($status != '')
		$output = array('status'=>'success','id'=>$status);
	else
	 	$output = array('status'=>'error');	
	echo json_encode($output);
}
if($method == 'deleting_notes')
{
	$id = $_GET['id'];
	$status = deleting_notes($id);
	if($status == 'success')
		$output = array('status'=>'success');
	else
	 	$output = array('status'=>'error');	
	echo json_encode($output);
}

}

function addnotes($data)
{
	$insert = pg_query("insert into notes(description,date_added) values('$data',NOW())");
	if($insert)
	return pg_insert_id();
}

function deleting_notes($id)
{
	$delete = pg_query("delete from notes where id='$id'");
	if($delete)
	return 'success';
}

function load_notes()
{
	$query = pg_query("select * from notes where DATE(date_added)=CURDATE()");
	if(mysql_num_rows($query) > 0)
	{
	while($fetch = mysql_fetch_array($query))
	{
		echo '<li id="'.$fetch['id'].'" >'.$fetch['description'].' 
		<a href="#" style="color:blue;" class="event-close"> &#10005; </a>
		</li>';
	}
	}
}
