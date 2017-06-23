<!DOCTYPE html PUBLIC “-//W3C//DTD XHTML 1.0 Strict//EN” 
“http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd”>
<html xmlns=“http://www.w3.org/1999/xhtml” lang=”en” xml:lang=”en”>
<head>
<meta http-equiv=“content-type” content=“text/html; charset=ISO-8859-1” />
<style type=“text/css”>
td, th {border: 1px solid black;}
</style>
<title>Updating List</title>
</head>

<table width="1200" border="0" cellspacing="1" cellpadding="1">
<tr>
<td>&nbsp;</td>

</tr>

<tr>

<td style=" width:20%"><strong>NAME</strong></td>
<td style=" width:20%"><strong>EMAIL ID</strong></td>
<td style=" width:20%"><strong>CONTACT NO</strong></td>
<td style=" width:30%"><strong>CREATED ON</strong></td>
<td style=" width:10%"><strong>DEL OR EDIT</strong></td>
</tr>
<hr>

<?php
 include('db.php');
  $select=mysql_query("SELECT * FROM sample order by id asc");
  $i=1;
  while($userrow=mysql_fetch_array($select))
  
  {
  $id=$userrow['id'];
  $username=$userrow['username'];
  $usermail=$userrow['emailid'];
  $usermobile=$userrow['mobileno'];
  $created=$userrow['created']
?>
   
 <tr>
 <td ><?php echo $username; ?></td> 
 <td > <?php echo $usermail; ?> </td>
 <td ><?php echo $usermobile; ?></td> 
  <td ><?php echo $created; ?></td> 

     <td <button> <a href="delete.php?id=<?php echo $id; ?>" onclick="return confirm('Are you sure you wish to delete this Record?');">
    		<span class="delete" title="Delete"> Delete </span></a> </button> |
    <button>    <a href="edit.php?id=<?php echo $id; ?>"><span class="edit" title="Edit"> Edit </span></a> </button> </td>

 </tr>


<?php } ?>
</table>
<hr>
</body>
</html>
