<!DOCTYPE html>
<html>
<head>
	<title>Daftar Bidang 2D</title>
	<style>
		table {
            border-collapse: collapse;
            margin: auto;
            width: 60%;
        }

        thead {
            background-color: #4F200D;
            color: #fff;
        }

        th, td {
            text-align: center;
            padding: 10px;
        }

        tr:nth-child(even) {
            background-color: #f2f2f2;
        }

        tr:hover {
            background-color: #ddd;
        }
	</style>
</head>
<body>
	<table>
		<thead>
			<tr>
				<th>Nama Bidang</th>
				<th>Luas</th>
				<th>Keliling</th>
			</tr>
		</thead>
		<tbody>
			<?php
			require_once 'Lingkaran.php';
			require_once 'persegiPanjang.php';
			require_once 'Segitiga.php';

			$L = new Lingkaran('10');
			$P = new persegiPanjang('10', '2');
			$S = new Segitiga('10', '5', '3');

			$ar_data = [$L, $P, $S];

			foreach ($ar_data as $data) {
				echo '<tr>';
				echo '<td>' . $data -> namaBidang() . '</td>';
				echo '<td>' . $data -> luasBidang() . '</td>';
				echo '<td>' . $data -> kelilingBidang() . '</td>';
				echo '</tr>';
			}
			?>
		</tbody>
	</table>
</body>
</html>