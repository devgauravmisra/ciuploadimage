<html>
<head>
<title>Upload Form</title>
</head>
<body>
<div>

<h3>Your file was successfully uploaded!</h3>

<table border="1px">
		
<?php foreach ($upload_data as $item => $value):?>
<tr style="text-align: center;">
	<td style="text-align: center;"><?php echo $item;?></td>
	<td style="text-align: center;"><?php echo $value;?></td>
</tr>
<?php endforeach; ?>

</table>
<p><?php echo anchor('upload', 'Upload Another File!'); ?></p>
</div>
</body>
</html>