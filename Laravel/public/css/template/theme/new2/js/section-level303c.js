$(document).ready(function() {
	$('[data-toggle="sectiontest"]').click(function(e) {
		e.preventDefault();
		var box = $('#sectionLevelModal');
		var body = box.find('.modal-body');
        var $this = $(this),
            $sqid = $this.data('sqid'),
            $sectionid = $this.data('sectionid'),
			$courseid = $this.data('courseid');
		body.empty();
		$.ajax({
			url: '/course/check-sectionlevel.php',
			method: 'POST',
			data:{sqid: $sqid, sectionid: $sectionid, courseid: $courseid},
			dataType: 'json',
			success: function(response) {
				switch (response.status) {
				case 'success':
					var html = '<div class="inner-body">';
					html += '<div class="msg-wrap">';
					html += response.message;
					html += '</div>';
					html += '<a target="_blank" href="' + response.url + '" class="sl-btnround sl-organe sl-startCheck"><i class="fa fa-long-arrow-right" aria-hidden="true"></i>Làm bài</a>';
                    if($sectionid){
                        html += '<a href="' + $this.attr('href') + '" class="sl-btnround sl-ignoreCheck"><i class="fa fa-times" aria-hidden="true"></i>Bỏ qua</a>';
                    }else{
                        html += '<a href="#" class="sl-btnround sl-ignoreCheck" data-dismiss="modal"><i class="fa fa-times" aria-hidden="true"></i>Bỏ qua</a>';
                    }
					
					html += '</div>';
					body.html(html);
					box.modal('show');
					break;
				case 'fail':
					if($sectionid) {
						window.location.href = $this.attr('href');
					}else{
					   var html = '<div class="inner-body">';
						html += '<br><p>' + response.message + '</p>';
						body.html(html);
						box.modal('show');
					}
					break;
				case 'pass':
                case 'notest':
				    window.location.href = $this.attr('href');
					break;
				}
			}
		});
	});
	$(document).on('click', '.sl-startCheck', function() {
		$('#sectionLevelModal').modal('hide');
	});
});