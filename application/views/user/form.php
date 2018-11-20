<!DOCTYPE html>
<html>
<head>
	<?php $this->load->view('partials/head'); ?>
</head>
<body>
<nav class="navbar navbar-expand-sm justify-content-center bg-dark navbar-dark fixed-top">
  			<h4 class="text-center" style="color: red"><em>amrunhakim</em></h4>		
 </nav>
 <div class="container">
	<?php $this->load->view('partials/menu'); ?>

	<h1 class="title text-center">Form Artikel Saya</h1>
	<form action="<?php echo site_url('user/process'); ?>" method="POST">
		<table class="table">
			<tr>
				<td>Nama Depan</td>
				<td>:</td>
				<td><input type="text" name="nama_depan" placeholder="nama_depan" value="<?php echo isset($user_data) ? $user_data['nama_depan'] : ''; ?>"></td>
			</tr>
			<tr>
				<td>Nama Belakang</td>
				<td>:</td>
				<td><input type="text" name="nama_belakang" placeholder="nama_belakang" value="<?php echo isset($user_data) ? $user_data['nama_belakang'] : ''; ?>"></td>
			</tr>
			<tr>
				<td>Username</td>
				<td>:</td>
				<td><input type="text" name="username" placeholder="username" value="<?php echo isset($user_data) ? $user_data['username'] : ''; ?>"></td>
			</tr>
			<tr>
				<td></td>				
				<td></td>				
				<td colspan="3">
					<input type="hidden" name="id_user" value="<?php echo isset($user_data) ? $user_data['id_user'] : ''; ?>">
					
					<button type="submit" class="btn btn-success">Submit</button>
					<a href="<?php echo site_url('user'); ?>">Kembali</a>
				</td>
			</tr>
		</table>
	</form>

	<?php $this->load->view('partials/foot'); ?>
 </div>	
</body>
</html>