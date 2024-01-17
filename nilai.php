	<table border="1" cellpadding="10" class="table table-hover" id="tabel_rapor" >
		<thead>
			<tr>
				<th scope="col">No</th>
				<th scope="col" style="width: 30%">Mata Pelajaran</th>
				<th scope="col">Nilai Akhir</th>
				<th scope="col">Capaian Kompetensi</th>
			</tr>
		</thead>
		<?php 
		$no = 1;
		$m = 1;
		$queryclass = $con->query("SELECT * FROM mapel  WHERE level = '$kelas_angka' AND kategori = 1 ORDER BY no_urut_rapor ASC ");
		$querymulok = $con->query("SELECT * FROM mapel  WHERE level = '$kelas_angka' AND kategori = 2 ORDER BY no_urut_rapor ASC ");
		
		
		foreach ($queryclass as $key => $value){
			?>
			<tr>

				<td><?= $no++ ?></td>
				<td style="text-align: left;"><?= $value['nama_mapel'] ?></td>
				<td> 
					<?php 
					$kode_mapel = $value['kode_mapel'];
					$qkode = $con->query("SELECT * FROM db_mapel WHERE kode_mapel = '$kode_mapel'");
					foreach($qkode as $kode);
					
					$nilai_mapel =  $kode['mapel'];
	
					echo $data[$nilai_mapel];
					?>
				</td>
				<td style="text-align: justify;font-size: <?= $_SESSION['mapel'.$m++] ?>px" > 
					<?php 
					$deskripsi =  $kode['mapel_des'];
					echo $data[$deskripsi];

					?>

			
		

				</td>



			</tr>
		<?php } ?>
		
		
			<tr>
				<td><?= $no++ ?></td>
				<td style="text-align: left;">Muatan Lokal</td>
				<td colspan="2"></td>
			</tr>
			
			<?php 
			$s = 1;
			foreach ($querymulok as $key => $value){ ?>
			
				<tr>

				<td><?php $d = $s++; ?></td>
				<td style="text-align: left;"> <?= list_order($d) ?> <?= $value['nama_mapel'] ?></td>
				<td> 
					<?php 
					$kode_mapel = $value['kode_mapel'];
					$qkode = $con->query("SELECT * FROM db_mapel WHERE kode_mapel = '$kode_mapel'");
					foreach($qkode as $kode);
					
					$nilai_mapel =  $kode['mapel'];
	
					echo $data[$nilai_mapel];
					?>
				</td>
				<td style="text-align: justify;font-size: <?= $_SESSION['mapel'.$m++] ?>px" > 
					<?php 
					$deskripsi =  $kode['mapel_des'];
					echo $data[$deskripsi];

					?>

			
		

				</td>



			</tr>
			
			<?php } ?>
			
			

	</tbody>
</table>