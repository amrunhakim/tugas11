<!DOCTYPE html>
<html>
<head>
	<?php $this->load->view('partials/head'); ?>
</head>
<body>
<nav class="navbar navbar-expand-sm justify-content-center bg-dark navbar-dark fixed-top">
  			<h4 class="text-center" style="color: red"><em>amrunhakim</em></h4>		
 </nav>
 <div class="container-fluid">
	<?php $this->load->view('partials/menu'); ?>

	<h1 class="title text-center">Daftar User</h1>
	<a href="<?php echo site_url('user/add'); ?>">Tambah User</a><br/><br/>
	
	<table class="table table-striped table-dark table-bordered">
		<thead>
			<tr>
				<th>No.</th>
				<th>Nama</th>
				<th>Username</th>
				<th>Aksi</th>
			</tr>
		</thead>
		<tbody>
			<?php
				if(count($user_data) > 0){
					foreach($user_data as $key => $user){
						?>
						<tr>
							<td><?php echo $key + 1; ?></td>
							<td><?php echo $user['nama_depan'].' '.$user['nama_belakang']; ?></td>
							<td><?php echo $user['username']; ?></td>
							<td>
								<a href="<?php echo site_url('user/update/'.$user['id_user']); ?>">Update</a> |
								<a href="<?php echo site_url('user/delete/'.$user['id_user']); ?>">Delete</a>
							</td>
						</tr>
						<?php
					}
				}else{
					?>
					<tr>
						<td colspan="4">Tidak ada user.</td>
					</tr>
					<?php
				}
			?>
		</tbody>
	</table>

	<?php $this->load->view('partials/foot'); ?>
 </div>	
</body>
</html>