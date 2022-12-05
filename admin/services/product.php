<script type="text/javascript">

	$(function() {
		$('#myloader').hide();
	});

	$(document).ready(function() {
		$('#category_id').load('controller/controller.product.php?get_categories_id');
	});

	function load_products() {
		$('#products').DataTable({
			"aaSorting": [],
			"bSearching": true,
			"bFilter": true,
			"bInfo": true,
			"bPaginate": true,
			"bLengthChange": true,
			"pagination": true,
			"ajax" : "controller/controller.product.php?get_products",
			"columns" : [
				{"data" : "product_name"},
				{"data" : "model"},
				{ "data" : "category_name"},
				{ "data" : "action"}
			],
		});
	}
	load_products();

	function update(id,product_name, model, cat_id) {
		$('#staticBackdrop').modal('show');

		$('#product_id').val(id);
		$('#name').val(product_name);
		$('#model').val(model);
		$('#category_id').val(cat_id);

	}

</script>