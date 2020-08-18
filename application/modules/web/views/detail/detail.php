<?php
	$parameter = $this->input->post("key");
    $ambil_data = $this->db->query(" SELECT * FROM produk where id= '$parameter' ");
    $hasil_ambil_data = $ambil_data->row();

 {
	
?>

<div class="content" style="width: 70%; min-height: 500px;float: right">
	
		<div style=" float:right;width:220px;height:auto;float:left;margin:0px;padding-top:13px;padding-bottom:14px">
		<div style="width:500px;height:500px;border:1px solid gray;position:relative;left:9px"><img style="height:500px;width:500px;"  src="component/image/hand.jpg"></div>
	</div>
	<div style="float:right; margin-right:100px;">
		<div style=" text-align:left;left:10px;top:4px;position:relative;padding-bottom:2px;font-size:100px;line-height:1.5em;color:#222;font-weight:bold;font-style:normal;"><?php echo $hasil_ambil_data->nama;?></div>
		<hr style="width:300px"></hr><br>
		<div style="text-align:left;left:10px;position:relative;line-height:13px;font-size:20px;font-style:normal;font-weight:400;font-family:Helvetica,Arial,sans-serif;color:#666"><?php echo $hasil_ambil_data->kategori;?></div><br>
		<div style="text-align:left;left:13px;position:relative;font-weight:bold;font-style:normal;font-size:25px;line-height:1.5em;color:#666;cursor:pointer"><?php echo $hasil_ambil_data->harga;?>
		</div>
		<div style="text-align:left;left:13px;position:relative;font-style:normal;font-size:20px;line-height:1.5em;color:#666;cursor:pointer">
		<?php echo $hasil_ambil_data->keterangan;?>
		</div>

	</div>
<?php } ?>


