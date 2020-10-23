<style type="text/css">
	table.data {
		border-collapse: collapse;
	}
	table.data th, table.data td {
		padding: 5px;
	}
</style>
<table class="data" border="1">
	<tr>
		<th>No. </th>
		<th>Judul</th>
		<th>Pengarang</th>
		<th>Tahun Terbit</th>
	</tr>
	<?php 
		$no = 1;
		foreach ($buku as $b => $row) {
	 ?>
	<tr>
		<td><?= $no++ ?></td>
		<td><?= $row->judul ?></td>
		<td><?= $row->pengarang ?></td>
		<td><?= $row->tahun_terbit ?></td>
	</tr>
	<?php } ?>
</table>