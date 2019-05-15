$(function () {
	$('#insbtn').click(function () {
		$('#insfrm').submit();
	});

	$('#delbtn').click(function () {

		if (!$(".delchk:checked").prop("checked")) {
			alert('削除対象を選択してください。');
			return false;
		}

		if (confirm('削除してよろしいですか？')) {
			$('#delfrm').submit();
		} else {
			return false;
		}
	});

	$('#bakbtn').click(function () {
		$('#bakfrm').submit();
	});

});