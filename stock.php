<?php
require_once('class.stockMarketAPI.php'); 
$user="root";
$password="admin";
$host="localhost";
$database="borsa";
$con=mysqli_connect($host,$user,$password,$database);
if($con->connect_errno)
{
	echo "Error:couldnot connect to database";
	exit();
}
else
{
$StockMarketAPI = new StockMarketAPI();
$StockMarketAPI->symbol = array('AAPL', 'MSFT', 'GOOGL','SYMC','HPE','PBR','HRB','SDRL','NADL','WLL');
$symbol_array = $StockMarketAPI->getData();

$AAPL_Price=$symbol_array['AAPL']['price'];
$AAPL_name=$symbol_array['AAPL']['name'];

$SYMC_Price =$symbol_array['SYMC']['price'];
$SYMC_name=$symbol_array['SYMC']['name'];

$MSFT_price =$symbol_array['MSFT']['price'];
$MSFT_name=$symbol_array['MSFT']['name'];

$HPE_price=$symbol_array['HPE']['price'];
$HPE_name=$symbol_array['HPE']['name'];

$PBR_price=$symbol_array['PBR']['price'];
$PBR_name=$symbol_array['HPE']['name'];

$HRB_price=$symbol_array['HRB']['price'];
$HRB_name=$symbol_array['HRB']['name'];

$GOOGL_price=$symbol_array['GOOGL']['price'];
$GOOGL_name=$symbol_array['GOOGL']['name'];

$SDRL_price=$symbol_array['SDRL']['price'];
$SDRL_name=$symbol_array['SDRL']['name'];

$NADL_price=$symbol_array['NADL']['price'];
$NADL_name=$symbol_array['NADL']['name'];

$WLL_price=$symbol_array['WLL']['price'];
$WLL_name=$symbol_array['WLL']['name'];



// update statement 
$query=mysqli_query($link,"update share set price ='$AAPL_Price' where name='$AAPL_name'");
$query=mysqli_query($link,"update share set price ='$SYMC_Price' where name='$SYMC_name'");
$query=mysqli_query($link,"update share set price ='$MSFT_price' where name='$MSFT_name'");
$query=mysqli_query($link,"update share set price ='$HPE_price' where name='$HPE_name'");
$query=mysqli_query($link,"update share set price ='$PBR_price' where name='$PBR_name'");
$query=mysqli_query($link,"update share set price ='$HRB_price' where name='$HRB_name'");
$query=mysqli_query($link,"update share set price ='$SDRL_price' where name='$$SDRL_name'");
$query=mysqli_query($link,"update share set price ='$NADL_price' where name='NADL_name'");
$query=mysqli_query($link,"update share set price ='$WLL_price' where name='$WLL_name'");
$query=mysqli_query($link,"update share set price ='$GOOGL_price' where name='$GOOGL_price'");

}

?>















 
