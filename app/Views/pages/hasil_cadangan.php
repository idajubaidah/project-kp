<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>
	<table>
		<thead>
			
			<tr>
				<th>
					<?php

					foreach ($response as $d) { ?>
						<td><?php echo $d[0]->NAMA_LENGKAP; ?></td>
						<?php
					}

					?>	
				</th>
			</tr>

		</thead>
	</table>
</body>
</html>