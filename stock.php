<?php
require_once('class.stockMarketAPI.php'); 
$user="root";
$password="hggih;fv";
$host="localhost";
$database="borsa";
$link=mysqli_connect($host,$user,$password,$database);
if($link->connect_errno)
{
	echo "Error:couldnot connect to database";
	exit();
}
else
{
$StockMarketAPI = new StockMarketAPI();
$StockMarketAPI->symbol = 
array('AAPL', 'MSFT', 'GOOGL','SYMC','HPE','PBR','HRB','SDRL','NADL','WLL');
$symbol_array = $StockMarketAPI->getData();
$AAPL_Price=$symbol_array['AAPL']['price'];
$AAPL_name=$symbol_array['AAPL']['name'];
//echo $AAPL_name;
$SYMC_Price =$symbol_array['SYMC']['price'];
$SYMC_name=$symbol_array['SYMC']['name'];
//echo $SYMC_name;
$MSFT_price =$symbol_array['MSFT']['price'];
$MSFT_name=$symbol_array['MSFT']['name'];
//echo $MSFT_name;
$HPE_price=$symbol_array['HPE']['price'];
$HPE_name=$symbol_array['HPE']['name'];
//echo $HPE_name;
$PBR_price=$symbol_array['PBR']['price'];
$PBR_name=$symbol_array['PBR']['name'];
//echo $PBR_name;
$HRB_price=$symbol_array['HRB']['price'];
$HRB_name=$symbol_array['HRB']['name'];
//echo $HRB_name;
//echo "\n";
$GOOGL_price=$symbol_array['GOOGL']['price'];
$GOOGL_name=$symbol_array['GOOGL']['name'];
echo $GOOGL_name;
echo "\n";
$SDRL_price=$symbol_array['SDRL']['price'];
$SDRL_name=$symbol_array['SDRL']['name'];
//echo $SDRL_name; 
//echo "\n";
$NADL_price=$symbol_array['NADL']['price'];
$NADL_name=$symbol_array['NADL']['name'];
//echo $NADL_name;
//echo "\n";
$WLL_price=$symbol_array['WLL']['price'];
$WLL_name=$symbol_array['WLL']['name'];
//echo $WLL_name;
//echo "\n";

  $date =  date("F j, Y, g:i a");  
$query=mysqli_query($link,"update Share set price ='$AAPL_Price' , time='$date' where name='$AAPL_name'");
$query=mysqli_query($link,"update Share set price ='$SYMC_Price',time='$date' where name='$SYMC_name'");
$query=mysqli_query($link,"update Share set price ='$MSFT_price',time='$date' where name='$MSFT_name'");
$query=mysqli_query($link,"update Share set price ='$HPE_price',time='$date' where name='$HPE_name'");
$query=mysqli_query($link,"update Share set price ='$PBR_price',time='$date' where name='$PBR_name'");
$query=mysqli_query($link,"update Share set price ='$HRB_price',time='$date' where name='$HRB_name'");


$query=mysqli_query($link,"update Share set price ='$SDRL_price',time='$date' where name='$SDRL_name'");
$query=mysqli_query($link,"update Share set price ='$NADL_price',time='$date' where name='$NADL_name'");
$query=mysqli_query($link,"update Share set price ='$WLL_price',time='$date' where name='$WLL_name'");


$query=mysqli_query($link,"update Share set price ='$GOOGL_price',time='$date' where name='$GOOGL_name'");

}

?>















 
