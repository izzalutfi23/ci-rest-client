<div class="container">
	<button class="btn btn-primary my-3" data-toggle="modal" data-target="#tambah">Tambah</button>
	<!-- Modal Tambah data -->
	<div class="modal fade" id="tambah" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="exampleModalLabel">Tambah Mahasiswa</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
					<form action="<?=base_url('mahasiswa/add')?>" method="post">
						<div class="form-group">
							<label for="exampleInputEmail1">NIM</label>
							<input type="text" name="nim" class="form-control" placeholder="Masukkan NIM">
						</div>
						<div class="form-group">
							<label for="exampleInputEmail1">Nama</label>
							<input type="text" name="nama" class="form-control" placeholder="Masukkan Nama">
						</div>
						<div class="form-group">
							<label for="exampleInputEmail1">Alamat</label>
							<input type="text" name="alamat" class="form-control" placeholder="Masukkan Alamat">
						</div>
						<div class="form-group">
							<label for="exampleInputEmail1">Tgl Lahir</label>
							<input type="date" name="tgl_lahir" class="form-control" placeholder="Masukkan Tgl Lahir">
						</div>
						<button type="submit" class="btn btn-primary">Tambah</button>
					</form>
				</div>
			</div>
		</div>
	</div>

	<div class="row">
		<div class="col-lg-8">
			<table class="table table-striped">
				<thead>
					<tr>
						<th scope="col">No</th>
						<th scope="col">NIM</th>
						<th scope="col">Nama</th>
						<th scope="col">Alamat</th>
						<th scope="col">Tgl Lahir</th>
						<th scope="col">Aksi</th>
					</tr>
				</thead>
				<tbody>
					<?php 
					$no=1;
					foreach ($mhs as $mmhs => $m) {
						?>
						<tr>
							<th scope="row"><?=$no++?></th>
							<td><?=$m['nim'];?></td>
							<td><?=$m['nama'];?></td>
							<td><?=$m['alamat'];?></td>
							<td><?=$m['tgl_lahir'];?></td>
							<td>
								<button class="btn btn-primary" data-toggle="modal" data-target="#edit<?=$no;?>">Edit</button>
								<!-- Modal Edit data -->
								<div class="modal fade" id="edit<?=$no;?>" role="dialog">
									<div class="modal-dialog" role="document">
										<div class="modal-content">
											<div class="modal-header">
												<h5 class="modal-title" id="exampleModalLabel">Edit Mahasiswa</h5>
												<button type="button" class="close" data-dismiss="modal" aria-label="Close">
													<span aria-hidden="true">&times;</span>
												</button>
											</div>
											<div class="modal-body">
												<form action="<?=base_url('mahasiswa/edit')?>" method="post">
													<div class="form-group">
														<label for="exampleInputEmail1">NIM</label>
														<input type="text" name="nim" readonly="readonly" class="form-control" value="<?=$m['nim']?>" placeholder="Masukkan NIM">
													</div>
													<div class="form-group">
														<label for="exampleInputEmail1">Nama</label>
														<input type="text" name="nama" class="form-control" value="<?=$m['nama']?>" placeholder="Masukkan Nama">
													</div>
													<div class="form-group">
														<label for="exampleInputEmail1">Alamat</label>
														<input type="text" name="alamat" class="form-control" value="<?=$m['alamat']?>" placeholder="Masukkan Alamat">
													</div>
													<div class="form-group">
														<label for="exampleInputEmail1">Tgl Lahir</label>
														<input type="date" name="tgl_lahir" class="form-control" value="<?=$m['tgl_lahir']?>" placeholder="Masukkan Tgl Lahir">
													</div>
													<button type="submit" class="btn btn-primary">Edit</button>
												</form>
											</div>
										</div>
									</div>
								</div>
								<a onclick="return confirm('Data akan dihapus!!!')" href="<?=base_url('mahasiswa/delete/'.$m['nim'])?>"><button class="btn btn-danger">Hapus</button></a>
							</td>

						</tr>
					<?php } ?>
				</tbody>
			</table>
		</div>
	</div>
</div>