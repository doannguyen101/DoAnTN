//ThA�m sự kiện onchange vA o trong kiểm tra form
(function($) {
    $.extend(true, $.validator, {
        defaults: {
            onchange: function( element ) {           
    			if ( element.name in this.submitted ) {
    				this.element( element );
    			}
    		},
        },
        prototype: {
            init: function() {
    			this.labelContainer = $( this.settings.errorLabelContainer );
    			this.errorContext = this.labelContainer.length && this.labelContainer || $( this.currentForm );
    			this.containers = $( this.settings.errorContainer ).add( this.settings.errorLabelContainer );
    			this.submitted = {};
    			this.valueCache = {};
    			this.pendingRequest = 0;
    			this.pending = {};
    			this.invalid = {};
    			this.reset();
    
    			var groups = ( this.groups = {} ),
    				rules;
    			$.each( this.settings.groups, function( key, value ) {
    				if ( typeof value === "string" ) {
    					value = value.split( /\s/ );
    				}
    				$.each( value, function( index, name ) {
    					groups[ name ] = key;
    				});
    			});
    			rules = this.settings.rules;
    			$.each( rules, function( key, value ) {
    				rules[ key ] = $.validator.normalizeRule( value );
    			});
    
    			function delegate( event ) {
    				var validator = $.data( this.form, "validator" ),
    					eventType = "on" + event.type.replace( /^validate/, "" ),
    					settings = validator.settings;
    				if ( settings[ eventType ] && !$( this ).is( settings.ignore ) ) {
    					settings[ eventType ].call( validator, this, event );
    				}
    			}
    
    			$( this.currentForm )
    				.on( "focusin.validate focusout.validate keyup.validate",
    					":text, [type='password'], [type='file'], select, textarea, [type='number'], [type='search'], " +
    					"[type='tel'], [type='url'], [type='email'], [type='datetime'], [type='date'], [type='month'], " +
    					"[type='week'], [type='time'], [type='datetime-local'], [type='range'], [type='color'], " +
    					"[type='radio'], [type='checkbox']", delegate)
    				// Support: Chrome, oldIE
    				// "select" is provided as event.target when clicking a option
    				.on("click.validate", "select, option, [type='radio'], [type='checkbox']", delegate)
                    .on("change.validate", "select", delegate);
    
    			if ( this.settings.invalidHandler ) {
    				$( this.currentForm ).on( "invalid-form.validate", this.settings.invalidHandler );
    			}
    
    			// Add aria-required to any Static/Data/Class required fields before first validation
    			// Screen readers require this attribute to be present before the initial submission http://www.w3.org/TR/WCAG-TECHS/ARIA2.html
    			$( this.currentForm ).find( "[required], [data-rule-required], .required" ).attr( "aria-required", "true" );
    		},
        }
    });
}(jQuery));


//ThA�m kiểm tra số điện thoại
jQuery.validator.addMethod("phone", function(value, element){
    var $reg1 = /^01\d{9}$/,
        $reg2 = /^09\d{8}$/,
        $reg3 = /^0[2-8]\d{8}$/;
    return this.optional(element) || $reg1.test(value) || $reg2.test(value) || $reg3.test(value);
}, "Số điện thoại khA�ng hợp lệ");

//ThA�m kiểm tra số điện thoại
jQuery.validator.addMethod("email", function(value, element){
    var $reg = /^[a-zA-Z0-9][a-zA-Z0-9\._]{2,62}[a-zA-Z0-9]@[a-z0-9\-]{3,}(\.[a-z]{2,4}){1,2}$/;
    return this.optional(element) || $reg.test(value);
}, "Địa chỉ email khA�ng hợp lệ");

//ThA�m kiểm tra số điện thoại
jQuery.validator.addMethod("schoolrequired", function(value, element, param){
    var $form = $(this.currentForm);
    if(param.length == 0){
        return false;
    }
    var $school_class = $form.find('[name="'+param[0]+'"]');
    if($school_class.length == 0){
        return false;
    }else{
        var $class_id = parseInt($school_class.val());
        if($class_id < 1 || $class_id > 13){
            return false;
        }
        switch(param[1]){
            case 'thpt':
                if($class_id > 9){
                    return $.validator.methods.required.call(this, value, element, true);
                }else{
                    return true;
                }
            break;
            case 'thcs':
                if($class_id > 9){
                    return true;
                }else{
                    return $.validator.methods.required.call(this, value, element, true);
                }
            break;
        }
    }
}, "Thiếu thA�ng tin trường học");

function freeLearnBooking(){
    $.ajax({
        type: "POST",
        url: '/check-login.php',
        data: {confirm: 1},
        dataType: 'json',
        success: function($res){
            if($res.login == 'true'){
                //if($res.confirm){
                    var $modalIC = $('#userInfoConfirmModal');
                    
                    var $mdElements = $modalIC.find('[name]');
                                
                    $mdElements.each(function($i){
                        var $name = $(this).attr('name');
                        if(typeof $res[$name] != 'undefined'){
                            $modalIC.data($name, $res[$name]);
                        }else{
                            $modalIC.data($name, null);
                        }
                    });
                    
                    $modalIC.data('title', 'Cập nhật thA�ng tin đăng kA� học miễn phA�');
                    $modalIC.data('exeaction', 'freeLearnBooking');
                    $modalIC.data('packageid', window.$packageid);
                    $modalIC.data('success', null);
                    $modalIC.modal('show');
                //}
            }else{
                $.cookie('showflmodal', 1);
                $('#loginModal').modal('show');
            }
        }
    });
}

$(document).ready(function(){
    //Nếu cA� f thA� khA�ng cho tắt modal bằng backdrop
    if(getUrlParam('f')){
        $('#loginModal, #userInfoConfirmModal').data('backdrop', 'static');
    }
    //Hiển thị form đăng kA� học miễn phA�
    if((getUrlParam('f') && typeof window.$packageid != 'undefined') || $.cookie('showflmodal')){
        freeLearnBooking();
    }
    
    $('[data-toggle="coursecontact"]').click(function(e){
        e.preventDefault();
        var $this = $(this);
        $.ajax({
            url: '/luyen-thi-quoc-gia/course-contact.php',
            data: {
                sourse: $this.data('sourse'),
                status: $this.data('status'),
            },
            type: 'POST',
            success: function($response){
                if($this.attr('href') != '#' && $this.data('status') == 'regclick'){
                    window.location.href = $this.attr('href');
                }
            },
            error: function(){
                if($this.attr('href') != '#' && $this.data('status') == 'regclick'){
                    window.location.href = $this.attr('href');
                }
            },
        });
    });
    
    $('.course-free-learn-bt').click(function(e){
        e.preventDefault();
        freeLearnBooking();
    });
    
    $('#userInfoConfirmModal [name="city"]').change(function(e){
        var $this = $(this);
        var $city = $this.val();
        var $modal = $this.parents('#userInfoConfirmModal');
        var $city_df = $modal.data('city');
        var $school_df = $modal.data('school_id');
        var $schoolElement = $modal.find('[name="school_id"]');
        var $class_id = $('#userInfoConfirmModal [name="school_class"]').val();
        var level;

        if ($class_id > 0 && $class_id < 10) {
            level = $class_id < 6 ? 1 : 2;
        } else {
            level = 3;
        }

        $.ajax({
            url: '/get-school.php',
            data: {
                city: $city,
                level: level
            },
            type: 'POST',
            dataType: 'json',
            success: function($schools){
                var $schoolHtml = '<option value=""> -- Chọn trường học -- </option>';
                for($sID in $schools){
                    $schoolHtml += '<option value="'+$schools[$sID].id+'">'+$schools[$sID].name+'</option>';
                }
                $schoolElement.addClass('loaded').html($schoolHtml);
                if($city == $city_df && $school_df){
                    $schoolElement.val($school_df);
                }
                $schoolElement.change();
            }
        });
    });
    $('#userInfoConfirmModal [name="school_class"]').change(function(e){
        var $this = $(this);
        var $class_id = $this.val();
        var $modal = $this.parents('#userInfoConfirmModal');
        var $city = $('#userInfoConfirmModal [name="city"]').val();
        var $city_df = $modal.data('city');
        var $schoolElement = $modal.find('[name="school_id"]');
        var $school_df = $modal.data('school_id');
        var level;

        if ($class_id > 0 && $class_id < 10) {
            level = $class_id < 6 ? 1 : 2;
        } else {
            level = 3;
        }

        $modal.find('.uicf-school-thpt').show();

        $.ajax({
            url: '/get-school.php',
            data: {
                city: $city,
                level: level
            },
            type: 'POST',
            dataType: 'json',
            success: function($schools){
                var $schoolHtml = '<option value=""> -- Chọn trường học -- </option>';
                for($sID in $schools){
                    $schoolHtml += '<option value="'+$schools[$sID].id+'">'+$schools[$sID].name+'</option>';
                }

                $schoolElement.addClass('loaded').html($schoolHtml);
                if($city == $city_df && $school_df){
                    $schoolElement.val($school_df);
                }
                $schoolElement.change();
            }
        });
    });
    //Validate user info confirm form
    $("#user-info-confirm-form").validate({
        rules:{
            fullname: {required: true},
            /*school_class: {required: true},
            city: {required: true},
            school_id: {schoolrequired: ['school_class', 'thpt']},
            school: {schoolrequired: ['school_class', 'thcs']},*/
            phone2: {required: true, phone: true}
        },
        messages:{
            fullname:{
                required: 'Chưa nhập họ tA�n',
            },
            /*school_class:{
                required: 'Chưa chọn lớp',
            },
            city:{
                required: 'Chưa chọn Tỉnh/ThA nh phố',
            },
            school_id:{
                schoolrequired: 'Chưa chọn trường học',
            },
            school:{
                schoolrequired: 'Chưa nhập trường học',
            },*/
            phone2:{
                required: 'Bạn chưa nhập số điện thoại',
                phone: 'Số điện thoại khA�ng hợp lệ',
            },
        },
        errorElement: 'label',
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
            //Submit ajax
            var $thisForm = $(form);
            if($thisForm.valid()){
                var $modal = $thisForm.parents('.modal');
                var $url = $thisForm.attr('action');
                if($thisForm.hasClass('waitting')){
                    return false;
                }
                $thisForm.addClass('waitting');
                $.ajax({
                    type: "POST",
                    url: $url,
                    data: $thisForm.serialize(),
                    dataType: 'JSON',
                    success: function($response){
                        switch($response.status){
                            case 'success':
                                var fn = window[$modal.data('success')];
                                if(typeof fn === 'function') {
                                    fn($thisForm);
                                }
                                $modal.modal('hide');
                            break;
                            case 'FLBooked':
                                $modal.modal('hide');
                                var $mModal = $('#messageModal');
                                $mModal.find('.warning-des').html($response.message);
                                if($response.messaget){
                                    $mModal.find('.modal-title').html($response.messaget);
                                }else{
                                    $mModal.find('.modal-title').html('ThA�ng bA�o');
                                }
                                if($response.messagef){
                                    $mModal.find('.modal-footer').html($response.messagef);
                                }
                                $mModal.modal('show');
                            break;
                            case 'login':
                                $modal.modal('hide');
                                $('#loginModal').modal('show');
                            break;
                            case 'error':
                                
                            break;
                        }
                        $thisForm.removeClass('waitting');
                    }
                });
            }
        }
    });
    
    $('.modal').on('shown.bs.modal', function(e){
        $(this).find('.select2').select2();
        if(typeof $.fn.dialog == 'function'){
            $('#dialog-mbapp').dialog("close");
        }
    });
    $('#userInfoConfirmModal').on('show.bs.modal', function(e){
        $.cookie('showflmodal', '');
        var $modalThis = $(this);
        var $cityDefault = $modalThis.data('city');
        var $cityElement = $modalThis.find('[name="city"]');
        
        
        if($modalThis.data('title')){
            $modalThis.find('.modal-title').eq(0).html($modalThis.data('title'));
        }
        
        var $mdElements = $modalThis.find('[name]');
                                
        $mdElements.each(function($i){
            var $mdElement = $(this);
            var $name = $mdElement.attr('name');
            $mdElement.val($modalThis.data($name));
            $mdElement.trigger('change');
        });
        
        if(!$cityElement.hasClass('loaded')){
            $.ajax({
                url: '/get-city.php',
                data: {},
                type: 'POST',
                dataType: 'json',
                success: function($cities){
                    var $cityHtml = '';
                    for($cityID in $cities){
                        $cityHtml += '<option value="'+$cityID+'">'+$cities[$cityID]+'</option>';
                    }
                    $cityElement.addClass('loaded').append($cityHtml);
                    if($cityDefault){
                        $cityElement.val($cityDefault);
                        $cityElement.change();
                    }
                },
            });
        }
    });
    /*
    if(window.$fbconfig){
        var fbModal = $('#fbConfirmModal');
        fbModal.find('[name="packageid"]').val(window.$fbconfig);
        fbModal.modal('show');
    }*/

    if(window.trialExamModal  && !$.cookie('testTrial')){
        var testTrial = $('#testTrialModal');
        testTrial.modal('show');
        testTrial.on('hide.bs.modal', function(e) {
            $.cookie('testTrial', 1, 1);
        });
    }

    //Validate user info confirm form
    $(".confirm-form").validate({
        rules:{
            fullname: {required: true},
            school_class: {required: true},
            city: {required: true},
            school_id: {schoolrequired: ['school_class', 'thpt']},
            school: {schoolrequired: ['school_class', 'thcs']},
            phone2: {required: true, phone: true},
            email: {required: true, email: true},
        },
        messages:{
            fullname:{
                required: 'Chưa nhập họ tA�n',
            },
            school_class:{
                required: 'Chưa chọn lớp',
            },
            city:{
                required: 'Chưa chọn Tỉnh/ThA nh phố',
            },
            school_id:{
                schoolrequired: 'Chưa chọn trường học',
            },
            school:{
                schoolrequired: 'Chưa nhập trường học',
            },
            phone2:{
                required: 'Bạn chưa nhập số điện thoại',
                phone: 'Số điện thoại khA�ng hợp lệ',
            },
            email:{
                required: 'Bạn chưa nhập email',
                email: 'Địa chỉ email khA�ng hợp lệ',
            },
        },
        errorElement: 'label',
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
            //Submit ajax
            var $thisForm = $(form);
            if($thisForm.valid()){
                var $modal = $thisForm.parents('.modal');
                var $url = $thisForm.attr('action');
                if($thisForm.hasClass('waitting')){
                    return false;
                }
                $thisForm.addClass('waitting');
                $.ajax({
                    type: "POST",
                    url: $url,
                    data: $thisForm.serialize(),
                    dataType: 'JSON',
                    success: function($response){
                        switch($response.status){
                            case 'success':
                                $modal.modal('hide');
                                if($response.message){
                                    var $mModal = $('#messageModal');
                                    $mModal.find('.warning-des').html($response.message);
                                    if($response.messaget){
                                        $mModal.find('.modal-title').html($response.messaget);
                                    }else{
                                        $mModal.find('.modal-title').html('ThA�ng bA�o');
                                    }
                                    if($response.messagef){
                                        $mModal.find('.modal-footer').html($response.messagef);
                                    }else{
                                        $mModal.find('.modal-footer').html('<button type="button" class="btn btn-cancel" data-dismiss="modal">ĐA�ng</button>');
                                    }
                                    $mModal.modal('show');
                                }else{
                                    var fn = window[$modal.data('success')];
                                    if(typeof fn === 'function') {
                                        fn($thisForm);
                                    }
                                }
                            break;
                            case 'login':
                                $modal.modal('hide');
                                $('#loginModal').modal('show');
                            break;
                            case 'error':
                                alert('Xảy ra lỗi, vui lA�ng liA�n hệ tới hotline: 0936-58-58-12');
                            break;
                        }
                        $thisForm.removeClass('waitting');
                    }
                });
            }
        }
    });
    
    //Bắn sự kiện cho chương trA�nh học thử
    if(window.location.host != 'local.hocmai.vn'){
        $('.course-free-learn-bt').click(function(e){
            if(typeof pageTracker != 'undefined' && typeof pageTracker._trackEvent == 'function' && typeof window.$gaTrackCategoryCourseLearn != 'undefined'){
                pageTracker._trackEvent(window.$gaTrackCategoryCourseLearn, 'event-1');
            }
        });
        
        $('.modal').on('click', '.fb-login', function(e){
            if(typeof pageTracker != 'undefined' && typeof pageTracker._trackEvent == 'function' && typeof window.$gaTrackCategoryCourseLearn != 'undefined' && $.cookie('showflmodal')){
                pageTracker._trackEvent(window.$gaTrackCategoryCourseLearn, 'event-2-1');
            }
        });
        $('.modal').on('click', '.gg-login', function(e){
            if(typeof pageTracker != 'undefined' && typeof pageTracker._trackEvent == 'function' && typeof window.$gaTrackCategoryCourseLearn != 'undefined' && $.cookie('showflmodal')){
                pageTracker._trackEvent(window.$gaTrackCategoryCourseLearn, 'event-2-2');
            }
        });
        $('.modal').on('click', '.yh-login', function(e){
            if(typeof pageTracker != 'undefined' && typeof pageTracker._trackEvent == 'function' && typeof window.$gaTrackCategoryCourseLearn != 'undefined' && $.cookie('showflmodal')){
                pageTracker._trackEvent(window.$gaTrackCategoryCourseLearn, 'event-2-3');
            }
        });
        $('.modal').on('click', '.btn-login', function(e){
            if(typeof pageTracker != 'undefined' && typeof pageTracker._trackEvent == 'function' && typeof window.$gaTrackCategoryCourseLearn != 'undefined' && $.cookie('showflmodal')){
                pageTracker._trackEvent(window.$gaTrackCategoryCourseLearn, 'event-2-4');
            }
        });
        
        $('.modal').on('click', '.reg-submit', function(e){
            var $modal = $(this).parents('.modal');
            if($modal.data('exeaction') == 'freeLearnBooking' && typeof pageTracker != 'undefined' && typeof pageTracker._trackEvent == 'function' && typeof window.$gaTrackCategoryCourseLearn != 'undefined'){
                pageTracker._trackEvent(window.$gaTrackCategoryCourseLearn, 'event-3');
            }
        });
        $('.modal').on('click', '.reg-submit', function(e){
            var $modal = $(this).parents('.modal');
            if($modal.data('exeaction') == 'freeLearnBooking' && typeof pageTracker != 'undefined' && typeof pageTracker._trackEvent == 'function' && typeof window.$gaTrackCategoryCourseLearn != 'undefined'){
                pageTracker._trackEvent(window.$gaTrackCategoryCourseLearn, 'event-3');
            }
        });
        
        $('.modal').on('click', '.fl-learn-now', function(e){
            if(typeof pageTracker != 'undefined' && typeof pageTracker._trackEvent == 'function' && typeof window.$gaTrackCategoryCourseLearn != 'undefined'){
                pageTracker._trackEvent(window.$gaTrackCategoryCourseLearn, 'event-4');
            }
        });
        
        $('.scorm-header.with-play-scorm').click(function(){
            if(typeof pageTracker != 'undefined' && typeof pageTracker._trackEvent == 'function' && typeof window.$gaTrackCategoryCourseLearn != 'undefined' && typeof window.$freelearntrack != 'undefined' && window.$freelearntrack){
                pageTracker._trackEvent(window.$gaTrackCategoryCourseLearn, 'event-5');
            }
        });
    }
});