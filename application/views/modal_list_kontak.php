<ul class="list-group">
	<?php foreach($arrData as $row){ ?>
		<a href="javascript:void(0);" onclick="addDataPage('<?php echo $row['picture']['thumbnail'];?>', '<?php echo $row['name']['first'];?>', '<?php echo $row['name']['last'];?>', '<?php echo $row['email'];?>')">
	  		<li class="list-group-item">
	  			<div class="row">
	  				<div class="col-2">
	  					<img src="<?php echo $row['picture']['thumbnail'];?>">
	  				</div>
	  				<div class="col-10">
	  					<?php echo $row['name']['first'];?>&nbsp;<?php echo $row['name']['last'];?>
	  				</div>
	  			</div>
	  		</li>
		</a>
  	<?php } ?>
</ul>