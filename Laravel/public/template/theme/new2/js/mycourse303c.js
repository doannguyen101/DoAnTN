/**
 * Created by Lichbt on 10/13/2015.
 */
$(document).ready(function () {
    var modalList = $('.course-wrapper');

    setFreeCourses(modalList);

    modalList.on('click', '.extent-trial', function (e) {
        e.preventDefault();
        var freeLearnId = $(this).data('id');
        var expiredButton = $(this);
        $.post('../../su-kien/khoa-co-ban-10/extent-trial.html', {freeLearnId: freeLearnId}, function (response) {
            var alert = $('#messageModal');
            if (response.status == 'success'){
                alert.find('.modal-title').text('Thành công');
                alert.find('.warning-des').html(response.message);
                alert.modal('show');
                expiredButton.removeClass('extent-trial').attr('href', response.url).attr('target', '_blank').unbind('click').text('Học ngay');
                expiredButton.parents('tr').find('.expired').html(response.time);
            } else {
                alert.find('.modal-title').text('Lỗi gia hạn');
                alert.find('.warning-des').html(response.message);
                alert.modal('show');
            }
        }, 'JSON');
    });

    function setFreeCourses(container) {
        $.post('../../course/get-free-course.html', {}, function (response) {
            if (response.status == 'error') {
                $.cookie('showflmodal', 1);
                $('#loginModal').modal('show');
            } else if (response.status == 'success') {
                //update table
                var tableBody = container.find('.tbl-free-courses tbody');
                tableBody.empty();
                if(response.count) {
                    var count = 0;
                    for (var i in response.registedCourses) {
                        count ++;
                        var button = '';
                        if (response.registedCourses[i].isExpired) {
                            button += '<a class="extent-trial btn btn-fl" href="#" data-id="'+ i +'">Gia hạn</a>';
                        } else {
                            button += '<a class="btn btn-fl" href="'+ response.registedCourses[i].url +'" data-id="'+ i +'">Học ngay</a>';
                        }

                        button += '<a target="_blank" class="btn btn-fl buy" href="'+ response.registedCourses[i].buyUrl +'">Mua ngay</a>'
                        var row = '<tr>' +
                            '<td>'+ count +'</td>' +
                            '<td style="text-align: left; padding: 0 5px;"><a href="'+ response.registedCourses[i].url +'" target="_blank">'+ response.registedCourses[i].name +'</a></td>' +
                            '<td class="expired">'+ response.registedCourses[i].expires +'</td>' +
                            '<td>' + button +
                            '</td>' +
                            '</tr>';
                        tableBody.append(row);
                    }
                } else {
                    tableBody.append('<tr><td colspan="4"><div class="info">Bạn chưa đăng ký khóa học miễn phí nào<br/>Vui lòng chọn khóa học bên dưới!</div></td></tr>');
                }

                $('.count-course').find('.count').text(count);

                if (response.unregistedCourses) {
                    for (var i in response.unregistedCourses) {
                        var courseContainer = container.find('#' + i).find('.course-other-free tbody');
                        courseContainer.empty();
                        if (typeof response.unregistedCourses[i] !== 'string') {
                            var count2 = 0;
                            for (var j in response.unregistedCourses[i]) {
                                count2 ++;
                                var package = '<tr>' +
                                    '<td style="text-align: center">'+ count2 +'</td>' +
                                    '<td class="pack-name">'+ response.unregistedCourses[i][j].name +'</td>' +
                                    '<td style="text-align: center"><a target="_blank" href="'+ response.unregistedCourses[i][j].url +'" data-package="'+ j +'" class="btn btn-primary regist-course">Học miễn phí khóa này</a>';

                                    if (response.unregistedCourses[i][j].upgradeUrl) {
                                        package += '<a style="margin-left: 5px" target="_blank" href="'+ response.unregistedCourses[i][j].upgradeUrl +'" data-package="'+ j +'" class="btn btn-success regist-course">Nâng cấp</a>';
                                    }

                                    package += '</td>' +
                                    '</tr>';
                                courseContainer.append(package);
                            }
                        } else {
                            courseContainer.append('<tr><td colspan="4" style="text-align: center;"><div class="info">' + response.unregistedCourses[i] +'</div></td></tr>')
                        }
                    }
                }
            }
        }, 'JSON')
    }
    $('.learntrial-form').submit(function(e){
        e.preventDefault();
    });
    $('.learntrial-form').validate({
        rules: {
            code: {
                required: true,
                
            },
        },
        messages: {
            code: {
                required: 'Bạn chưa nhập mã code'
            },
        },
        errorElement: 'div',
        errorPlacement: function(place, element){
            place.addClass('error-message').appendTo(element.closest('div'));
        },
        highlight: function(element, errorClass, validClass) {
            if (element.type === "radio") {
                this.findByName(element.name).addClass(errorClass).removeClass(validClass);
            }else if(element.type === "select-one" || element.type === "select-multiple"){
                var $element = $(element);
                $element.addClass(errorClass).removeClass(validClass);
                var $next = $element.next();
                if($next.length > 0 && $next.hasClass('select2')){
                    $next.addClass(errorClass).removeClass(validClass);
                }
            }else{
                $(element).addClass(errorClass).removeClass(validClass);
            }
        },
        unhighlight: function( element, errorClass, validClass ) {
            if (element.type === "radio") {
                this.findByName(element.name).addClass(validClass).removeClass(errorClass);
            }else if(element.type === "select-one" || element.type === "select-multiple"){
                var $element = $(element);
                $element.addClass(validClass).removeClass(errorClass);
                var $next = $element.next();
                if($next.length > 0 && $next.hasClass('select2')){
                    $next.addClass(validClass).removeClass(errorClass);
                }
            }else{
                $(element).addClass(validClass).removeClass(errorClass);
            }
        },
        submitHandler: function(form){
            var $thisForm = $(form);
            
            if($thisForm.valid()){
                $thisForm.addClass('loading');
                $.ajax({
                    type: "POST",
                    url: '/luyen-thi-quoc-gia/luyen-thi-pen-c/confirmcode.php',
                    data: $thisForm.serialize(),
                    dataType: 'JSON',
                    success: function ($response) {
                        switch($response.status){
                            case 'success':
                                var $mModal = $('#messageModal');
                                $mModal.find('.warning-des').html($response.message);
                                $mModal.find('.modal-title').html('Xác nhận thành công');
                                $mModal.find('.modal-footer').html('<button type="button" class="btn btn-cancel" data-dismiss="modal">Đóng</button>');
                                $mModal.modal('show');
                            break;
                            case 'fail':
                                var $mModal = $('#messageModal');
                                $mModal.find('.warning-des').html($response.message);
                                $mModal.find('.modal-title').html('Lỗi');
                                $mModal.find('.modal-footer').html('<button type="button" class="btn btn-cancel" data-dismiss="modal">Đóng</button>');
                                $mModal.modal('show');
                            break;
                            
                        }
                    },
                    error:function(){
    
                    }
                });
            }
            return false;
        }
    });
});

