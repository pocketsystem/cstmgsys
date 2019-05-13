$(function () {
	$('#delbtn').click(function () {

		if (!$(".delchk:checked").prop("checked")) {
			alert('削除対象を選択してください。');
			return false;
		}
		
		if (confirm('削除してよろしいですか？')) {
			return true;
		} else {
			return false;
		}
	});

});