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

	<h1 class="title text-center">Daftar Artikel Saya</h1>
	<a href="<?php echo site_url('artikel/add'); ?>">Tambah Artikel</a><br/><br/>
	
	<table class="table table-striped table-dark table-bordered">
		<thead>
			<tr class="text-center">
				<th class="text-center">No.</th>
				<th class="text-center">Judul</th>
				<th class="text-center">Author</th>
				<th class="text-center">Aksi</th>
			</tr>
		</thead>
		<tbody>
			<?php
				if(count($artikel_data) > 0){
					foreach($artikel_data as $key => $artikel){
						?>
						<tr class="text-center">
							<td><?php echo $key + 1; ?></td>
							<td class="text-left"><?php echo $artikel['judul_artikel']; ?></td>
							<td class="text-left"><?php echo $artikel['author_artikel']; ?></td>
							<td>
								<a href="<?php echo site_url('artikel/update/'.$artikel['id_artikel']); ?>">Update</a> |
								<a href="<?php echo site_url('artikel/delete/'.$artikel['id_artikel']); ?>">Delete</a>
							</td>
						</tr>
						<?php
					}
				}else{
					?>
					<tr>
						<td colspan="4">Tidak ada artikel.</td>
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