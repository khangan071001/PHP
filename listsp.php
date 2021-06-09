<div id="main">
  		<table>
  			<thead>
  				<th>Song_id</th>
  				<th>Song_image</th>
  				<th>Song_name</th>
  				<th>Price</th>
  				<th></th>
  				<th></th>
  			</thead>

  			<tbody>

  				<?php 
  					$query = "SELECT * FROM song";
  					$rs = mysqli_query( $connect, $query );
  					if( mysqli_num_rows($rs) >0 ){
  						while( $row = mysqli_fetch_assoc( $rs ) ){
  				?>
  					<tr>
  						<td><?= $row['Song_id'] ?></td>
  						<td><img class="anh-sp" src="<?= $row['Song_image']?>"/></td>
  						<td><?= $row['Song_name']?></td>
  						<td><?= $row['Price'] . " $"?> </td> 
              <!-- chu y ten phai match voi ten cot trong db -->
  						<td><a href="suasp.php?id=<?= $row['Song_id']?>">Update</a></td>
  						<td><a href="?idxoa=<?= $row['Song_id']?>">Delete</a></td>
  					</tr>

  				<?php 

  					}
					  }
  				?>
  					
  			</tbody>
  		</table>
  	</div><!-- #main -->
