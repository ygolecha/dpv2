<?php






echo "<link rel='stylesheet' href='select2-3.4.8/select2.css'>


<select id='tagss' multiple >
															<option></option>
															<option value='x'>x</option>
														</select>
<script src='https://ajax.googleapis.com/ajax/libs/jquery/2.0.3/jquery.min.js'></script>
<script src='select2-3.4.8/select2.js'></script>
		


		
		<script type='text/javascript'>
			jQuery(document).ready(function() {
				$('#tagss').select2();
                $('#tagss').val(['x']).select2();
									
			});
		</script>";
?>