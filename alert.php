<?php
session_start();
   if(isset($_GET['logout'])) {
        session_destroy();
    }
   if(!isset($_SESSION['user_id'])) header('Location: index.html');
$con = mysqli_connect('localhost','root','admin');
if (!$con) {
    die('Could not connect: ' . mysqli_error($con));
}
mysqli_select_db($con,'borsa');

$sql= 'SELECT *,name,price FROM `user_share`,`Share` where share_id=id and `user_id` = "'.$_SESSION['user_id'].'"';
	$result = mysqli_query($con,$sql);
	echo "
<tr>
<th></th>
<th>Share</th>
<th>Last price</th>
<th>Alert</th>
<th>LastTrigger</th>
<th>delete</th>
</tr>";
while($row = mysqli_fetch_array($result)) {
	if ($row['above']==1) {
		$select='Goes above';
	}
	else {$select='Drops below';}
	if($row['flag']==1){$check='checked';}
	else {$check="";}
    echo "<tr>";
    echo "<td><input type='checkbox' id='enable' name='enable'".$check." onClick='Javacsript:checkenable(this)'/></td>";
    echo "<td>" . $row['name'] . "</td>";
    echo "<td>" . $row['price'] . "</td>";
    echo "<td>" . $select.$row['wPrice'] . "</td>";
    echo "<td>" . "trigerred" . "</td>";
    echo  "<td><input type='button' value='delete' onClick='Javacsript:deleteRow(this)'/></td> ";
    echo "</tr>";
}
if (isset($_POST['share'])&&isset($_POST['limit'])&&isset($_POST['price'])) {
$share=$_POST["share"];
$limit=$_POST["limit"];
$price=$_POST["price"];
$check;$flag;
if($share!=''&&$price!=''&&$limit!='')
{
	$sharesql='SELECT id,price FROM `Share` where name="'.$share.'"';
	$res = mysqli_query($con,$sharesql);
	$resarray = mysqli_fetch_array($res);
	$shareid=$resarray['id'];
	$shareprice=$resarray['price'];
	if ($limit=='drop') {
		$above=0;
	}else {$above=1;}
	$flag=1;
	$sql= 'INSERT INTO `user_share` (`user_id`, `share_id`, `flag`, `above`, `wPrice`) VALUES ("'.$_SESSION['user_id'].'", "'.$shareid.'","'.$flag.'", "'.$above.'","'.$price.'")';
	$result = $con->query($sql);
if($result) {
	if ($above==1) {
		$select='Goes above';
	}
	else {$select='Drops below';}
	$check='checked';
	
    echo "<tr>";
    echo "<td><input type='checkbox' id='enable' name='enable' checked onClick='Javacsript:checkenable(this)'/></td>";
    echo "<td>" . $share . "</td>";
    echo "<td>" . $shareprice . "</td>";
    echo "<td>" . $select.$price . "</td>";
    echo "<td>" . "trigerred" . "</td>";
    echo  "<td><input type='button' value='delete' onClick='Javacsript:deleteRow(this)'/></td> ";
    echo "</tr>";
}

}}
if (isset($_POST['a'])&&isset($_POST['aa'])&&isset($_POST['aaa'])&&isset($_POST['aaaa'])&&isset($_POST['aaaaa'])) {
$check=$_POST["a"];
$share=$_POST["aa"];
$alert=$_POST["aaa"];
$price=$_POST["aaaa"];
$trigger=$_POST["aaaaa"];
if($share!='')
{
	$sharesql='SELECT id,price FROM `Share` where name="'.$share.'"';
	$res = mysqli_query($con,$sharesql);
	$resarray = mysqli_fetch_array($res);
	$shareid=$resarray['id'];
	$sql= 'DELETE FROM `user_share` WHERE `share_id` = "'.$shareid.'"';
	$result = $con->query($sql);



}}
if (isset($_POST['c'])&&isset($_POST['cc'])) {

$enable=$_POST["c"];
$share=$_POST["cc"];

if($share!=''&&$enable!='')
{   
	$sharesql='SELECT id,price FROM `Share` where name="'.$share.'"';
	$res = mysqli_query($con,$sharesql);
	$resarray = mysqli_fetch_array($res);
	$shareid=$resarray['id'];
	$sql= 'UPDATE `user_share` SET `flag` = "'.$enable.'" WHERE `user_id` = "'.$_SESSION['user_id'].'" AND `share_id` ="'.$shareid.'";';
	$result = $con->query($sql);

echo "done";

}
}
mysqli_close($con);