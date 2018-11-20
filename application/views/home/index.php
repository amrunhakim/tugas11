<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
	<?php $this->load->view('partials/head'); ?>
</head>
<body>
<nav class="navbar navbar-expand-sm justify-content-center bg-dark navbar-dark fixed-top">
  			<h4 class="text-center" style="color: red"><em>amrunhakim</em></h4>		
 </nav>
	<div class="text-center">
	<img src="<?php echo base_url('assets/img/logo.png'); ?>" alt="logo codepolitan">
	</div>
	<h1 class="title">Daftar Artikel Saya</h1>

	<div class="container-fluid">
		<?php
			if(count($artikel_data) > 0){
				foreach($artikel_data as $key => $artikel){
					?>
					<div>
						<h2><?php echo $artikel['judul_artikel']; ?></h2>
						<p><?php echo $artikel['tanggal_artikel']; ?></p>

						<p>
							<?php echo word_limiter($artikel['isi_artikel'], 25); ?>
							<a href="<?php echo site_url('home/detail/'.$artikel['id_artikel']); ?>">Read more</a>
						</p>
						<hr>
					</div>
					<?php
				}
			}else{
				?>
				<em>Tidak ada artikel.</em>
				<?php
			}
		?>
		
		<?php echo $this->pagination->create_links(); ?>

	</div>

	<?php $this->load->view('partials/foot'); ?>
</body>
</html>