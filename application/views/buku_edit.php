<title><?= $header ?></title>

<?= form_open('buku/proses', '', array('id' => $buku->id_buku)); ?>
<table>
	<tr>
		<td>Judul</td>
		<td>:</td>
		<td>
			<?= form_input('judul', $buku->judul, 'required="required"'); ?>
		</td>
	</tr>
	<tr>
		<td>Pengarang</td>
		<td>:</td>
		<td>
			<?= form_input('pengarang', $buku->pengarang, 'required="required"'); ?>
		</td>
	</tr>
	<tr>
		<td>Tahun Terbit</td>
		<td>:</td>
		<td>
			<?= form_input(array(
					'type' => 'number',
					'name' => 'tahun',
					'value' => $buku->tahun_terbit,
					'required' => 'required',
				)); 
			?>
		</td>
	</tr>
	<tr>
		<td></td>
		<td></td>
		<td>
			<?= form_input(array(
					'type' => 'submit',
					'name' => 'edit',
					'value' => 'Edit',
				));
			?>
		</td>
	</tr>
</table>
<?= form_close(); ?>