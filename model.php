<?php
error_reporting(0);
class model
{
	public function model()
	{
		mysql_connect("localhost","root","");
		mysql_select_db("wedding");	
	}
	
	public function services_view()
	{
		$sel="select * from services";
		$qq=mysql_query($sel);
		while($fe=mysql_fetch_array($qq))
		{
			$rr[]=$fe;	
		}
		return $rr;
	}
	
	public function order_table($id,$nam,$ds,$pr,$user)
	{
		$ins="insert into order_tbl(category,nam,dess,price,username,ord_date) values('$id','$nam','$ds','$pr','$user',curdate())";
		if($qq=mysql_query($ins))
		{
			?>	
            	<script>alert("Successfully Add to Cart");</script>
            <?php
		}
		header("location:cart.php");
			
	}
	
	public function cart_price_count()
	{
		$u=$_SESSION['uname'];
		$sel="select sum(price) as grand_total from order_tbl where username='$u' and ord_date=curdate() and status='order'";
		$qq=mysql_query($sel);
		while($fe=mysql_fetch_array($qq))
		{
			$rr[]=$fe;	
		}
		return $rr;
	}
	
	public function cart_data_delete($id)
	{
		$del="delete from order_tbl where or_id='$id'";
		$qq=mysql_query($del);
		header("location:cart.php");	
	}
	
	public function cart_confirm($id)
	{
		$upd="update order_tbl set status='confirm' where or_id='$id'";
		$qq=mysql_query($upd);
		header("location:cart.php");	
	}
	
	public function cart_count()
	{
		session_start();
		$u=$_SESSION['uname'];
		$sel="select * from order_tbl where username='$u' and ord_date=curdate() and status='order'";
		$qq=mysql_query($sel);
		while($fe=mysql_fetch_array($qq))
		{
			$rr[]=$fe;
		}
		return $rr;
	}
	
	
	public function deco_view($srd)
	{
		if($srd=="decoration")
		{
			$sel="select * from $srd join d_decoration on $srd.d_id=d_decoration.d_id";
			$q=mysql_query($sel);
			while($ff=mysql_fetch_array($q))
			{
				$rr[]=$ff;
			}
			return $rr;
		}
		elseif($srd=="dj")
		{
			$sel="select * from $srd join d_dj on $srd.d_id=d_dj.d_id";
			$q=mysql_query($sel);
			while($ff=mysql_fetch_array($q))
			{
				$rr[]=$ff;
			}
			return $rr;
		}
		elseif($srd=="food")
		{
			$sel="select * from $srd join f_food on $srd.f_id=f_food.f_id";
			$q=mysql_query($sel);
			while($ff=mysql_fetch_array($q))
			{
				$rr[]=$ff;
			}
			return $rr;
		}
		elseif($srd=="gift_store")
		{
			$sel="select * from $srd join gift_product on $srd.g_id=gift_product.g_id";
			$q=mysql_query($sel);
			while($ff=mysql_fetch_array($q))
			{
				$rr[]=$ff;
			}
			return $rr;
		}
		elseif($srd=="hall")
		{
			$sel="select * from $srd join h_hall on $srd.h_id=h_hall.h_id";
			$q=mysql_query($sel);
			while($ff=mysql_fetch_array($q))
			{
				$rr[]=$ff;
			}
			return $rr;
		}
		elseif($srd=="photography")
		{
			$sel="select * from $srd join ph_img on $srd.ph_id=ph_img.ph_id";
			$q=mysql_query($sel);
			while($ff=mysql_fetch_array($q))
			{
				$rr[]=$ff;
			}
			return $rr;
		}
		elseif($srd=="video")
		{
			$sel="select * from $srd join v_video on $srd.v_id=v_video.v_id";
			$q=mysql_query($sel);
			while($ff=mysql_fetch_array($q))
			{
				$rr[]=$ff;
			}
			return $rr;
		}
		
	}
	
	
	public function user_login($u,$p)
	{
		$sel="select * from reg where username='$u' and pass='$p'";
		$qq=mysql_query($sel);
		$ff=mysql_fetch_array($qq);
		if($ff>0)
		{
			session_start();
			$_SESSION['uname']=$u;
			header("location:index.php");
		}
		else
		{
			?>
            	<script>alert("Username and password is wrong");</script>
            <?php	
		}
	}
	
	public function contact_sub($nm,$em,$ds)
	{
		$ins="insert into contact(name,email,des) values('$nm','$em','$ds')";
		if($qq=mysql_query($ins))
		{
			?>
            	<script>alert("Successfully");</script>
            <?php	
		}
	}
	
	public function state_view()
	{
		$sel="select * from state";
		$q=mysql_query($sel);
		while($ff=mysql_fetch_array($q))
		{
			$rr[]=$ff;	
		}
		return $rr;
	}
	
	public function city_view()
	{
		$sel="select * from city";
		$q=mysql_query($sel);
		while($ff=mysql_fetch_array($q))
		{
			$rr[]=$ff;	
		}
		return $rr;
	}
	
	public function reg_user($fnm,$em,$mo,$gen,$unm,$ps,$st,$ct)
	{
		$ins="insert into reg(fname,email,mob,gender,username,pass,s_id,ct_id) values('$fnm','$em','$mo','$gen','$unm','$ps','$st','$ct')";
		$qq=mysql_query($ins);
		header("location:links.php");
	}
	
	
}
?>