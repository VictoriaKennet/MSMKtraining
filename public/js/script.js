jQuery(document).ready(function($) {
    var basic;

	$('.js-main-image').on('click',function() {
		basic.croppie('result','base64').then(function(html) {
			$.ajax({
                url:'/api/img',
                type:"POST",
                data:'photo=' + html + "&photo_c=" + $('input[name="photo_c"]').val(),
                dataType:"json"
		    })
            .done(function (html) {
                if(html.status == "success") {
                    $('input[name="photo_c"]').attr('value',html.path_mini);
                    $('.perscab-photoedit-img').attr('src',html.path_mini);
                    $('.profile-modal-photo').arcticmodal('close');
                }
            });
		});
	});

	$("#fileinput").on('change',function() {
		var formData = new FormData();
		formData.append('file',$(this)[0].files[0]);
		$.ajax({
			url:'/api/img',
			type:"POST",
			data:formData,
		    processData: false,
		    contentType: false,
			dataType:"json"
		})
		.done(function(html) {
			if(html.status == "success") {
				$('.profile_photo_i').attr('src',html.path_max);
				basic = $('.profile_photo_i').croppie({
					viewport : {
						width : 300,
                        height : 400
                    },
                    boundary: {
                        width: 550,
                        height: 350
                    }
				});
				$('.profile-modal-photo').arcticmodal({
					afterClose : function() {
						$('.profile_photo_i').croppie('destroy');
					}
				});
			}
		})
	});
});
