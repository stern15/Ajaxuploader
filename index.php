<h1>Ajax File Upload</h1>
<script src="jquery.js"></script>
<script src="jquery.form.min.js"></script>
<script>
	var main = function()
	{
		$("#upload").on('submit',function(e)
		{
			e.preventDefault();
			$(this).ajaxSubmit({
				beforeSend:function(){
					$("#prog").show();
					$("#prog").attr('value','0');
				},
				uploadProgress:function(event,position,total,percentComplete){
					$("#prog").attr('value',percentComplete);
				},
				success:function(data){
					$("#here").html(data);
				}

				});
	});
	};
$(document).ready(main);
</script>
<form id="upload" method="POST"
enctype="multipart/form-data" action="upload.php">
<input type="file" name="file" id="file">
<input type="submit">
</form>
<progress id="prog" max="100" value="0"
style="display: none;"></progress>
<div id="here"></div>