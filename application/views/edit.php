<h2><?php echo $title; ?></h2>   

	<?php echo validation_errors(); ?>   
	<?php echo form_open('news/edit/'.$news_item['nim']); ?>     

<form action="">		
	<table>         
		<tr>             
			<td><label for="nim">Nim</label></td>             
			<td><input type="input" name="nim" value="<?php echo $news_item['nim'] ?>" /></td>         
		</tr>         
		<tr>             
			<td><label for="nama">Nama</label></td>             
			<td><input type="input" name="nama" value="<?php echo $news_item['nama'] ?>" /></td>         
		</tr>
		<tr>             
			<td><label for="judul">Judul</label></td>             
			<td><input type="input" name="judul" value="<?php echo $news_item['judul'] ?>" /></td>         
		</tr> 
		<tr>             
			<td><label for="pemb">Pembimbing</label></td>             
			<td><input type="input" name="pemb" value="<?php echo $news_item['pemb'] ?>" /></td>         
		</tr>  
		<tr>             
			<td></td>             
			<td><input type="submit" name="submit" value="Edit news item" /></td>         
		</tr>     
	</table> 
</form> 
 