<!-- Begin Page Content -->
<div class="container-fluid" style="min-height: 70%">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800"><?= $tittle; ?></h1>
    </div>
    <?= $this->session->flashdata('message'); ?>
    <table class="table table-bordered table-striped" id="datatable">
    	<thead>
    		<tr>
    			<th>No</th>
    			<th>Judul</th>
    			<th>Isi</th>
    			<th>Keterangan</th>
    			<th><center>Aksi</center></th>
    		</tr>
    	</thead>
    	<tbody>
            <?php $i=1; foreach ($berita as $b): ?>
    		<tr>
    			<td><?= $i++ ?></td>
    			<th><?= $b['judul_berita'] ?></th>
    			<th><?= substr($b['isi_berita'], 0, 15).'...'; ?></th>
    			<th><?= $b['keterangan'] ?></th>
    			<th><center>
    				<a href="<?= base_url('berita/edit/').$b['id_berita'] ?>" class="badge badge-primary">Edit</a>
    				<a href="<?= base_url('berita/hapus/').$b['id_berita'] ?>" class="badge badge-danger hapus">Hapus</a>
    				</center>
    			</th>
    		</tr>
            <?php endforeach; ?>
    	</tbody>
    </table>
</div>