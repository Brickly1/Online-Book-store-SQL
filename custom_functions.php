<?php

	//include "db.php";
	date_default_timezone_set("Asia/Calcutta");
function today_date()
	{
		$dt=date('Y-m-d');//todays date
		return $dt;
	}
	function file_download_update($fileid)
	{
		$numrow=0;
		$date=today_date();
		$qry=mysql_query("select * from `download_log` where `file_id`='{$fileid}' and `today_date` = '{$date}'");
		$numrow=mysql_num_rows($qry);
		
		if($numrow==0)
		{
			mysql_query("insert into `download_log` (`today_date`,`file_id`,`hits`) values ('{$date}',{$fileid},1) ");
		}
		else
		{
			mysql_query("update `download_log` set `hits`=`hits` + 1 where `file_id` = {$fileid} and `today_date` = '{$date}'");
		}
	}
	function getiid($oid)

{

$linkdfdf="";

$linkdfiddfdf="";

$difid=$oid;

while($difid!="main")

{

	$sql="select * from category_details where id=".$difid;

	$result123=mysql_query($sql);

	$row123=mysql_fetch_array($result123);

	if($row123[7]!="main")

	{

		$difid=$row123[7];

		$type=$_GET['type'];

		//$linkdf.="<a href='file.php?id=$difid&type=$type'>$row123[1]</a>"."-";

		$linkdf.="<a href='#'>$row123[1]</a>"."-";

		$linkdfiddf.=$row123[0]."-";

	}

	else

	{

		$sql="select * from category_details where id=".$difid;

		$result123=mysql_query($sql);

		$row123=mysql_fetch_array($result123);

		$type=$_GET['type'];

		//$linkdf.="<a href='file.php?id=$difid&type=$type'>$row123[1]</a>";

		$linkdf.="<a href='#'>$row123[1]</a>";

		$linkdfiddf.=$row123[0]."-";

		$difid="main";

	}

}

$p=split("-",$linkdf);

$p1=split("-",$linkdfiddf);

$linkdfcategory="";

$linkdfcategoryid="";

for($i=count($p)-1;$i>=0;$i--)

{

	$linkdfcategory.=$p[$i]."&nbsp;<img src='images/ll.png'>&nbsp;";

	$linkdfcategoryid.=$p1[$i].">>";

}

$vj=split(">>",$linkdfcategoryid);

return $vj[0];

}

	function status_define($s)

	{

		if($s==1)

		{

			return "Active";

		}

		else

		{

			return "Inactive";

		}

	}

	function status_define2($s)

	{

		if($s=='yes')

		{

			return "Active";

		}

		else

		{

			return "Inactive";

		}

	}

	function chain($n)

	{

		$a="";

		while(true)

		{

			if($n==0)

			{	

				$a="<a href='home.php?id=0' class='h_chain'>Home</a> &raquo; ".$a;

			}

			else

			{

				$query="select * from category_details where id='$n'";

				$result=mysql_query($query);

				$row=mysql_fetch_array($result);

				

				$a="<a href='home.php?id=".$row[0]."' class='h_chain'>".$row[1]."</a> &raquo; ".$a;	

			}

			if($n==0)

					break;

					

				$query1="select * from category_relation where cat_id='$n'";

				$result1=mysql_query($query1);

				$row1=mysql_fetch_array($result1);

				$n=$row1[2];

		}

		return $a;

	}

	

	function c_chain($n)

	{

		$a="";

		while(true)

		{

			if($n==0)

			{	

				$a="<a href='home.php?id=0'>Home</a> &raquo; ".$a;

			}

			else

			{

				$query="select * from category_details where id='$n'";

				$result=mysql_query($query);

				$row=mysql_fetch_array($result);

				

				$a="<a href='home.php?id=".$row[0]."'>".$row[1]."</a> &raquo; ".$a;	

			}

			if($n==0)

					break;

					

				$query1="select * from category_relation where cat_id='$n'";

				$result1=mysql_query($query1);

				$row1=mysql_fetch_array($result1);

				$n=$row1[2];

		}

		return $a;

	}

	function f_chain($n)

	{

		$a="";

		//echo $mc_baseurl_f;



		//$g='dddddd';

		while(true)

		{

			if($n==0)

			{	

				$a=$mc_baseurl_f2.$a;

			}

			else

			{

				$query="select * from category_details where id='$n'";

				$result=mysql_query($query);

				$row=mysql_fetch_array($result);

				

				$a="<a href='/category/".$row[0]."/".rem_wh($row[1])."' class='h_chain'>".$row[1]."</a> &raquo; ".$a;	

			}

			if($n==0)

					break;

					

				$query1="select * from category_relation where cat_id='$n'";

				$result1=mysql_query($query1);

				$row1=mysql_fetch_array($result1);

				$n=$row1[2];

		}

		return $a;

	}

	function t_chain($n)

	{

		$a="";

		while(true)

		{

			if($n==0)

			{	

				$a=$a."";

			}

			else

			{

				$query="select * from category_details where id='$n'";

				$result=mysql_query($query);

				$row=mysql_fetch_array($result);

				

				$a=$a." :: ".$row[1];	

			}

			if($n==0)

					break;

					

				$query1="select * from category_relation where cat_id='$n'";

				$result1=mysql_query($query1);

				$row1=mysql_fetch_array($result1);

				$n=$row1[2];

		}

		return $a;

	}
	
	function count_download($sid)
	{
		//download_times  - field
		//files - table
		mysql_query("update files set download_times=download_times+1 where id='{$sid}'");
	}

?>