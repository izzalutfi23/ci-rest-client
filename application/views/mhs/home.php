<div class="container">
	<button class="btn btn-primary my-3" data-toggle="modal" data-target="#tambah">Tambah</button>
	<!-- Modal Tambah data -->
	<div class="modal fade" id="tambah" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
					<form action="" method="post">
						<div class="form-group">
							<label for="exampleInputEmail1">NIM</label>
							<input type="text" name="nim" class="form-control" placeholder="Masukkan NIM">
						</div>
						<div class="form-group">
							<label for="exampleInputEmail1">Nama</label>
							<input type="text" class="form-control" placeholder="Masukkan Nama">
						</div>
						<div class="form-group">
							<label for="exampleInputEmail1">Alamat</label>
							<input type="text" class="form-control" placeholder="Masukkan Alamat">
						</div>
						<div class="form-group">
							<label for="exampleInputEmail1">Tgl Lahir</label>
							<input type="date" class="form-control" placeholder="Masukkan Tgl Lahir">
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
					<tr>
						<th scope="row">1</th>
						<td>Mark</td>
						<td>Otto</td>
						<td>@mdo</td>
						<td>@mdo</td>
						<td>
							<button class="btn btn-primary" data-toggle="modal" data-target="#edit">Edit</button>
							<a href="#"><button class="btn btn-danger" data-toggle="modal" data-target="#tambah">Hapus</button></a>
						</td>

						<!-- Modal Edit data -->
						<div class="modal fade" id="edit" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
							<div class="modal-dialog" role="document">
								<div class="modal-content">
									<div class="modal-header">
										<h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
										<button type="button" class="close" data-dismiss="modal" aria-label="Close">
											<span aria-hidden="true">&times;</span>
										</button>
									</div>
									<div class="modal-body">
										<form action="" method="post">
											<div class="form-group">
												<label for="exampleInputEmail1">NIM</label>
												<input type="text" name="nim" class="form-control" placeholder="Masukkan NIM">
											</div>
											<div class="form-group">
												<label for="exampleInputEmail1">Nama</label>
												<input type="text" class="form-control" placeholder="Masukkan Nama">
											</div>
											<div class="form-group">
												<label for="exampleInputEmail1">Alamat</label>
												<input type="text" class="form-control" placeholder="Masukkan Alamat">
											</div>
											<div class="form-group">
												<label for="exampleInputEmail1">Tgl Lahir</label>
												<input type="date" class="form-control" placeholder="Masukkan Tgl Lahir">
											</div>
											<button type="submit" class="btn btn-primary">Tambah</button>
										</form>
									</div>
								</div>
							</div>
						</div>

					</tr>
				</tbody>
			</table>
		</div>
	</div>
</div>