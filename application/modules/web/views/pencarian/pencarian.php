<div class="box_ajax">
	<div class="content" style="width: 70%; min-height: 500px;float: right">
		<?php

		$ambil_data = $this->db->query(" SELECT * FROM produk where nama like '%$parameter%' ");		   
		$hasil_ambil_data = $ambil_data->result_array();


		foreach ($hasil_ambil_data as $item) {

			?>
			<div style="width:220px;height:280px;float:left;margin:0px;padding-top:13px;padding-bottom:14px">
				<div class="detail" key="<?php echo $item['id']; ?>" style="width:200px;height:200px;position:relative;left:9px"><img style="height:200px;width:200px;"
					<?php if($item['kategori']=='32') {?> src="component/image/hand.jpg"<?php } ?>
					<?php if($item['kategori']=='33') {?> src="component/image/pants.jpg"<?php } ?>
					<?php if($item['kategori']=='34') {?> src="component/image/bra.jpg"<?php } ?>
					></div>
					<div style="text-align:left;left:10px;top:4px;position:relative;padding-bottom:2px;font-size:20px;line-height:1.5em;color:#222;font-weight:bold;font-style:normal;"><?php echo $item['nama'];?></div>
					<hr style="width:200px"></hr>
					<div style="text-align:left;left:10px;position:relative;line-height:13px;font-size:12px;font-style:normal;font-weight:400;font-family:Helvetica,Arial,sans-serif;color:#666"><?php echo $item['keterangan'];?></div>
					<div style="text-align:left;left:13px;position:relative;font-weight:bold;font-style:normal;font-size:12px;line-height:1.5em;color:#666;cursor:pointer"><?php echo $item['harga'];?>
					</div>
				</div>

				<?php } ?>				
				<br>
				<br>

			</div>
		</div>
	</div>


</div>

