$(document).ready(function(){

	var count = 0;
	
	function add_input_field(count)
	{

		var html = '';

		html += "<div class='form-group'>";

        html += '<label for="">Judul Buku</label><select name="item_unit[]" class="form-control selectpicker" data-live-search="true"><option value="">Select Unit</option><?php echo fill_unit_select_box($connect); ?></select>';

		html += '<label for="">Jumlah Buku</label><input type="text" name="item_name[]" class="form-control item_name" />';

		var remove_button = '';

		if(count > 0)
		{
			remove_button = '<button type="button" name="remove" class="btn btn-danger btn-sm remove"><i class="fas fa-minus"></i></button>';
		}

		html += remove_button+'</div>';

		return html;

	}

	$('#item_table').append(add_input_field(0));

	$('.selectpicker').selectpicker('refresh');

	$(document).on('click', '.add', function(){

		count++;

		$('#item_table').append(add_input_field(count));

		$('.selectpicker').selectpicker('refresh');

	});

	$(document).on('click', '.remove', function(){

		$(this).closest('div').remove();

	});

	$('#insert_form').on('submit', function(event){

		event.preventDefault();

		var error = '';

		count = 1;

		$('.item_name').each(function(){

			if($(this).val() == '')
			{

				error += "<li>Enter Item Name at "+count+" Row</li>";

			}

			count = count + 1;

		});

		count = 1;

		$('.item_quantity').each(function(){

			if($(this).val() == '')
			{

				error += "<li>Enter Item Quantity at "+count+" Row</li>";

			}

			count = count + 1;

		});

		count = 1;

		$("select[name='item_unit[]']").each(function(){

			if($(this).val() == '')
			{

				error += "<li>Select Unit at "+count+" Row</li>";

			}

			count = count + 1;

		});

		var form_data = $(this).serialize();

		if(error == '')
		{

			$.ajax({

				url:"insert.php",

				method:"POST",

				data:form_data,

				beforeSend:function()
	    		{

	    			$('#submit_button').attr('disabled', 'disabled');

	    		},

				success:function(data)
				{

					if(data == 'ok')
					{

						$('#item_table').find('tr:gt(0)').remove();

						$('#error').html('<div class="alert alert-success">Item Details Saved</div>');

						$('#item_table').append(add_input_field(0));

						$('.selectpicker').selectpicker('refresh');

						$('#submit_button').attr('disabled', false);
					}

				}
			})

		}
		else
		{
			$('#error').html('<div class="alert alert-danger"><ul>'+error+'</ul></div>');
		}

	});
	 
});

<div class="col-md-12">
	<div class="box box-primary">
		<div class="box-header with-border">
			<h3 class="box-title">Quick Example</h3>
		</div>
		<form role="form" action="app/proses.php?action=addBuku" method="POST" id="insert_form">
        <div class="table-repsonsive">
            <div class="box-body" id="item_table">
                <div class="row">
                    <div class="col-md-10">
                        <div class="form-group">
                            <label for="">Nama</label>
                            <select name="penulis" class="form-control selectpicker" data-live-search="true">
                                <option value="">silahkan masukan nama</option>
                                <?php foreach ($optionsPenulis as $option) { ?>
                                    <option value="<?php echo $option['id']; ?>"><?php echo $option['penulis']; ?> </option>
                                <?php } ?>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <br>
                        <button type="button" name="add" class="btn btn-success btn-sm add"><i class="fas fa-plus"></i></button>
                    </div>
                </div>
            </div>
            
			<div class="box-footer">
				<button type="submit" class="btn btn-primary">Submit</button>
			</div>
		</div>
	</div>
</div>