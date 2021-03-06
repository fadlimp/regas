<?php 
	if($this->utility->check_administrasi()>0){
		?>
	<p class="noticeMsg">Harap melengkapi data administrasi vendor.<br>Pilih menu Administrasi di samping atau klik <a href="<?php echo site_url('administrasi');?>">disini</a></p>
		<?php
	}
?>
<?php echo $this->session->flashdata('msgSuccess')?>
<?php echo $this->session->flashdata('klasifikasi')?>
<div class="btnTopGroup clearfix">
<a href="<?php echo site_url('izin/klasifikasi');?>" class="btnBlue"><i class="fa fa-plus"></i> Tambah</a>
</div>
<div class="tableWrapper">
	<table class="tableData">
		<thead>
			<tr>
				<td><a href="?<?php echo $this->utility->generateLink('sort','desc')?>&sort=<?php echo ($sort['dpt_name'] == 'asc') ? 'desc' : 'asc'; ?>&by=dpt_name">Klasifikasi Vendor<i class="fa fa-sort-<?php echo ($sort['dpt_name'] == 'asc') ? 'desc' : 'asc'; ?>"></i></a></td>
				<td><a href="?<?php echo $this->utility->generateLink('sort','desc')?>&sort=<?php echo ($sort['type'] == 'asc') ? 'desc' : 'asc'; ?>&by=type">Tipe Izin<i class="fa fa-sort-<?php echo ($sort['type'] == 'asc') ? 'desc' : 'asc'; ?>"></i></a></td>
				<td><a href="?<?php echo $this->utility->generateLink('sort','desc')?>&sort=<?php echo ($sort['no'] == 'asc') ? 'desc' : 'asc'; ?>&by=no">No<i class="fa fa-sort-<?php echo ($sort['no'] == 'asc') ? 'desc' : 'asc'; ?>"></i></a></td>
				<td><a href="?<?php echo $this->utility->generateLink('sort','desc')?>&sort=<?php echo ($sort['issue_date'] == 'asc') ? 'desc' : 'asc'; ?>&by=issue_date">Tanggal<i class="fa fa-sort-<?php echo ($sort['issue_date'] == 'asc') ? 'desc' : 'asc'; ?>"></i></a></td>
				<td><a href="?<?php echo $this->utility->generateLink('sort','desc')?>&sort=<?php echo ($sort['qualification'] == 'asc') ? 'desc' : 'asc'; ?>&by=qualification">Kualifikasi<i class="fa fa-sort-<?php echo ($sort['qualification'] == 'asc') ? 'desc' : 'asc'; ?>"></i></a></td>
				<td><a href="?<?php echo $this->utility->generateLink('sort','desc')?>&sort=<?php echo ($sort['authorize_by'] == 'asc') ? 'desc' : 'asc'; ?>&by=authorize_by">Lembaga Pengesah<i class="fa fa-sort-<?php echo ($sort['authorize_by'] == 'asc') ? 'desc' : 'asc'; ?>"></i></a></td>
				<td><a href="?<?php echo $this->utility->generateLink('sort','desc')?>&sort=<?php echo ($sort['izin_file'] == 'asc') ? 'desc' : 'asc'; ?>&by=izin_file">Lampiran<i class="fa fa-sort-<?php echo ($sort['izin_file'] == 'asc') ? 'desc' : 'asc'; ?>"></i></a></td>
				<td><a href="?<?php echo $this->utility->generateLink('sort','desc')?>&sort=<?php echo ($sort['expire_date'] == 'asc') ? 'desc' : 'asc'; ?>&by=expire_date">Masa Berlaku<i class="fa fa-sort-<?php echo ($sort['expire_date'] == 'asc') ? 'desc' : 'asc'; ?>"></i></a></td>
				<td colspan="2">Action</td>
			</tr>
		</thead>
		<tbody>
		<?php 
		if(count($izin_list)){
			foreach($izin_list as $row => $value){
			?>
				<tr>
					<td><?php echo $value['dpt_name'];?></td>
					<td><?php echo $siu[$value['type']];?></td>
					<td><?php echo $value['no'];?></td>
					<td><?php echo $value['issue_date'];?></td>
					<td><?php echo $value['qualification'];?></td>
					<td><?php echo $value['authorize_by'];?></td>
					<td><a href="<?php echo base_url('lampiran/izin_file/'.$value['izin_file']);?>"  target="_blank"><?php echo $value['izin_file'];?> <i class="fa fa-link"></i></a></td>
					<td><?php echo ($value['expire_date']=='lifetime')?'Seumur Hidup':$value['expire_date'];?></td>
					<td class="actionBlock">
						<a href="<?php echo site_url('izin/bsb/'.$value['id'])?>">Bidang & Sub bidang</a> | 
						<a href="<?php echo site_url('izin/edit/'.$value['id'])?>" class="editBtn"><i class="fa fa-cog"></i>Edit</a> | 
						<a href="<?php echo site_url('izin/hapus/'.$value['id'])?>" class="delBtn"><i class="fa fa-trash"></i>Hapus</a>
					</td>
				</tr>
			<?php 
			}
		}else{?>
			<tr>
				<td colspan="11" class="noData">Data tidak ada</td>
			</tr>
		<?php }
		?>
		</tbody>
	</table>
	
</div>
<div class="pageNumber">
	<?php echo $pagination ?>
</div>