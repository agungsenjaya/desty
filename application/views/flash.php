<div class="flash-container">
	<?php if ($this->session->flashdata('pg-1')): ?>
		<div class="flash-message pg-1 flash-success">
			Data tidak berhasil ditambahkan, Nomor Telepon sudah terdaftar, Terima kasih.
		</div>
		<?php elseif ($this->session->flashdata('pg-2')): ?>
			<div class="flash-message pg-2 flash-info">
				Data pegawai berhasil di update silahkan cek, Terima kasih.
			</div>
		<?php elseif ($this->session->flashdata('pg-3')): ?>
			<div class="flash-message pg-3 flash-info">
				Konsumen yang anda pilih telah kami hapus dari sistem, Terima kasih.
			</div>
		<?php elseif ($this->session->flashdata('pg-4')): ?>
			<div class="flash-message pg-4 flash-info">
				Data tidak berhasil ditambahkan, Nama Produk sudah terdaftar, Terima kasih.
			</div>
		<?php elseif ($this->session->flashdata('gj-1')): ?>
			<div class="flash-message gj-1 flash-success">
				Penggajian tidak berhasil, Nomor KTP tersebut ditanggal yang sama sudah di gajih, Terima kasih.
			</div>
		<?php elseif ($this->session->flashdata('jb-1')): ?>
			<div class="flash-message jb-1 flash-success">
				Jabatan yang anda masukan sudah terdaftar sebelumnya, Terima kasih.
			</div>
		<?php elseif ($this->session->flashdata('kt-1')): ?>
			<div class="flash-message kt-1 flash-success">
				Ketentuan yang anda masukan sudah terdaftar sebelumnya, Terima kasih.
			</div>
	<?php endif ?>
</div>