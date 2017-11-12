<?php
session_start();
$con=mysqli_connect('localhost','root','','team_config')
    or die("connection failed".mysqli_errno());
$request=$_REQUEST;
$col =array(
    0   =>  'id',
    1   =>  'role',
    2   =>  'name',
    3   =>  'mmr',
    4   =>  'rank',
);  //create column like table in database
$sql ="SELECT * FROM person";
$query=mysqli_query($con,$sql);
$totalData=mysqli_num_rows($query);
$totalFilter=$totalData;
//Search
$sql ="SELECT * FROM person";
if(!empty($request['search']['value'])){
    $sql.="WHERE";
    $sql.=" AND (id Like '".$request['search']['value']."%' ";
    $sql.=" OR name Like '".$request['search']['value']."%' ";
    $sql.=" OR role Like '".$request['search']['value']."%' ";
    $sql.=" OR rank Like '".$request['search']['value']."%' )";
}
$query=mysqli_query($con,$sql);
$totalData=mysqli_num_rows($query);
//Order  ."
$sql.=" WHERE user_id != ".$_SESSION['id']." ORDER BY ".$col[$request['order'][0]['column']]."   ".$request['order'][0]['dir']."  LIMIT ".
    $request['start']."  ,".$request['length']."  ";
$query=mysqli_query($con,$sql);
$data=array();
while($row=mysqli_fetch_array($query)){
    $subdata=array();
    // $subdata[]=$row[0]; //id
    $subdata[]=$row[1]; //name
    $subdata[]=$row[2]; //salary
    $subdata[]=$row[3]; 
    $subdata[]=$row[4];
//age           //create event on click in button edit in cell datatable for display modal dialog           $row[0] is id in table on database
    $subdata[]='<button type="button" id="getEdit" class="btn btn-primary btn-xs" data-toggle="modal" data-target="#myModal" data-id="'.$row[0].'"><i class="glyphicon glyphicon-pencil">&nbsp;</i>Edit</button>
                <button type="button" class="btn btn-danger btn-xs"><i class="glyphicon glyphicon-trash">&nbsp;</i>Delete</button>';
    $data[]=$subdata;
}
$json_data=array(
    "draw"              =>  intval($request['draw']),
    "recordsTotal"      =>  intval($totalData),
    "recordsFiltered"   =>  intval($totalFilter),
    "data"              =>  $data
);
echo json_encode($json_data);
?>