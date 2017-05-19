$.validator.addMethod(
    "regex",
    function(value, element, regexp) {
        var re = new RegExp(regexp);
        return this.optional(element) || re.test(value);
    },
    "Please check your input."
);

jQuery.validator.addMethod("email", function(value, element){
    var $reg = /^[a-zA-Z0-9][a-zA-Z0-9\._]{2,62}[a-zA-Z0-9]@[a-z0-9\-]{3,}(\.[a-z]{2,4}){1,2}$/;
    return this.optional(element) || $reg.test(value);
}, "Địa chỉ email không hợp lệ");

var $path = '/user/profile/';

$(document).ready(function () {
    $('#edit-profile select').select2();

    function getDistrict(city, callback) {
        $.post('/loginv2/get-district.php', {
            city: city
        }, function(data) {
            if (typeof callback === 'function') {
                callback(data);
            }
        }, 'JSON');
    }

    function getSchools (city, district, schoolClass, callback) {
        if (schoolClass == '') {
            schoolClass = 0;
        }

        if (district == '') {
            district = '';
        }

        $.post('/loginv2/getschool.php', {
            city: city,
            district: district,
            schoolClass: schoolClass
        }, function(data) {
            if (typeof callback === 'function') {
                callback(data);
            }
        }, 'JSON');
    }

    $('#banla').change(function(){
        var self = $(this);
        var value = self.val();

        var specialField = self.parents('form').find('.special-info');
        specialField.find('input, select').each(function (i) {
            $(this).prop('disabled', true);
        });
        specialField.hide();

        var showField = self.parents('form').find('.type-'+ value);
        showField.show();
        showField.find('input, select').prop('disabled', false);

    }).change();

    $('#city').change(function() {
        var city = $(this).val();
        $('#district').html('<option value="" selected>--Chọn quận/huyện--</option>').trigger('change');
        $('#schoolClass').val('').trigger('change');
        $('#school').html('<option value="" selected>--Chọn trường--</option>').trigger('change');

        if (city != '') {
            getDistrict(city, function (data) {
                var sl = $('#district');
                sl.empty();
                sl.append('<option value="" selected>--Chọn quận/huyện--</option>');
                if (data.status == 'success') {
                    for (var i = 0; i < data.data.length; i++) {
                        sl.append('<option value="' + data.data[i].name + '">' + data.data[i].displayName + '</option>')
                    }
                }

                sl.select2();

                if (districtShort) {
                    sl.val(districtShort);
                    sl.trigger('change');
                    districtShort = '';
                }
            });
        }
    });

    $('#district').change(function() {
        var district = $(this).val();
        var city = $('#city').val();
        $('#schoolClass').val('').trigger('change');
        $('#school').html('<option value="">--Chọn trường--</option>').trigger('change');

        if (city != '' && district != '') {
            var schoolClass = $('select[name="school_class"]');
            var schoolClassData = schoolClass.val();

            getSchools(city, district, schoolClassData, function (data) {
                var sl = $('select[name="school"]');
                sl.empty();
                sl.append('<option value="" selected>--Chọn trường--</option>');

                if (data.status == 'success') {
                    for (var i = 0; i < data.data.length; i++) {
                        sl.append('<option value="' + data.data[i].id + '">' + data.data[i].name + '</option>')
                    }
                }

                sl.select2();

                if (schoolId > 0 ){
                    sl.val(schoolId);
                    sl.trigger('change');
                    schoolId = 0;
                }
            });
        }
    });

    $('select[name="school_class"]').change(function() {
        var districtSelect = $('#district');
        var district = districtSelect.val();
        var citySelect = $('#city');
        var city = citySelect.val();
        var schoolClassData = $(this).val();
        $('#school').html('<option value="">--Chọn trường--</option>').trigger('change');

        if (city != '' && district != '' && schoolClassData != '') {
            getSchools(city, district, schoolClassData, function (data) {
                var sl = $('select[name="school"]');
                sl.empty();
                sl.append('<option value="" selected>--Chọn trường--</option>');
                if (data.status == 'success') {
                    for (var i = 0; i < data.data.length; i++) {
                        sl.append('<option value="' + data.data[i].id + '">' + data.data[i].name + '</option>')
                    }
                }
                sl.select2();

                if (schoolId > 0 ){
                    sl.val(schoolId);
                    sl.trigger('change');
                    schoolId = 0;
                }
            });
        }
    });

    $('#edit-profile').validate({
        rules: {
            username: {
                remote: {
                    url: '/user/profile/validate-email.php',
                    type: 'POST',
                    cache: false,
                    dataType: 'JSON',
                    data: {
                        username: function() {
                            return $('[name="username"]').val();
                        },
                        id: function () {
                            return $('#userid').val();
                        },
                        validate: 'username'
                    }
                }
            },
            name: {
                required: true
            },
            birth_date: { required: true },
            birth_month: { required: true },
            birth_year: { required: true },
            sex: { required: true },
            banla: { required: true },
            phone2: { required: true, phone: true },
            email: {
                required: true,
                email: true,
                remote: {
                    url: '/user/profile/validate-email.php',
                    type: 'POST',
                    cache: false,
                    dataType: 'JSON',
                    data: {
                        email: function() {
                            return $('#email').val();
                        },
                        id: function () {
                            return $('#userid').val();
                        },
                        validate: 'email'
                    }
                }
            },
            year: { required: true },
            field: { required: true },
            career: { required: true }
        },
        messages: {
            name: {
                required: 'Bạn chưa nhập họ tên'
            },
            birth_date: { required: 'Bạn chưa chọn ngày sinh' },
            birth_month: { required: 'Bạn chưa chọn tháng' },
            birth_year: { required: 'Bạn chưa chọn năm' },
            sex: { required: 'Bạn chưa chọn giới tính' },
            banla: { required: 'Bạn là học sinh, phụ huynh hay giáo viên?' },
            phone2: { required: 'Bạn chưa nhập số điện thoại', phone: 'Vui lòng nhập đúng số điện thoại' },
            email: {
                required: 'Bạn chưa nhập email',
                email: 'Vui lòng nhập email hợp lệ'
            },
            year: { required: 'Bạn chưa chọn năm' },
            field: { required: 'Bạn chưa chọn ngành học' },
            career: { required: 'Bạn chưa chọn nghề nghiệp' }
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
        ignore: "[disable]",
        submitHandler: function(form){
            //Submit ajax
            var $thisForm = $(form);
            var modal = $('#updateProfileModal');
            $thisForm.find('.btn-update-profile').button('loading');
            $.post($thisForm.attr('action'), $thisForm.serialize(), function (response) {
                if (response.status == 'success') {
                    modal.find('.modal-body').html(response.message);
                    modal.modal('show');
                    setTimeout(function(){
                        modal.modal('hide');
                    }, 3000);
                } else {
                    showMessage(response.message);
                }
                $thisForm.find('.btn-update-profile').button('reset');
            }, 'JSON');

        }
    });

    $('.btn-continue').click(function () {
        var chooseMethod = $('[name="confirm_method"]:checked');
        var type = chooseMethod.val();
        var confirmType = $(this).data('type');

        processConfirm(type, $(this), confirmType);
        $(this).find('.processing').show();
    });

    function processConfirm (type, target, confirmType) {
        switch (type) {
            case 'email':
                $.post('/user/profile/confirm-process.php', {type: 1, confirmType: confirmType}, function (response) {
                    showMessage(response.message);
                    $('.processing').hide();
                    target.prop('disabled', true);
                }, 'JSON');
                break;
            case 'phone':

                $.post('/user/profile/getcode.php', {type: 2}, function (response) {
                    if (response.status == 'success') {
                        target.parents('.confirm-required').hide();
                        $('.phone-confirm').show().find('.pc-message').html(response.message);
                    } else {
                        showMessage(response.message);
                    }
                }, 'JSON');

                break;
        }
    }

    $('#confirm-phone-form').submit(function (e) {
        e.preventDefault();
        var self = $(this);
        var code = self.find('[name="code"]').val();
        var confirmType = self.find('[name="type"]').val();

        $.post('/user/profile/confirm-process.php', {type: 2, code: code, confirmType: confirmType }, function (response) {
            showMessage(response.message);
            $('#messageModal').on('hidden.bs.modal', function(){
                if (response.url) {
                    location.href = response.url;
                }
            });
        }, 'JSON');
    });

    $('.resend-code').click(function (response) {
        $.post('/user/profile/getcode.php', {type: 2}, function (response) {
            showMessage(response.message);
        }, 'JSON');
    });

    function showMessage(message) {
        var modal = $('#messageModal');
        modal.addClass('profile-modal');
        modal.find('.modal-footer').hide();
        modal.find('.warning-des').html(message).show();
        modal.modal('show');
    }

    $('form.change-password-form').validate({
        rules: {
            currentpass: {
                required: true,
                remote: {
                    url: '/user/profile/validate-password.php',
                    type: 'POST',
                    cache: false,
                    dataType: 'JSON',
                    data: {
                        password: function() {
                            return $('[name="currentpass"]').val();
                        }
                    }
                }
            },
            newpass: {
                required: true,
                minlength: 8,
                maxlength: 32,
                regex : /.{8,32}$/
            },

            confirmpass: {
                equalTo: "#newpass"
            }
        },
        messages: {
            currentpass: {
                required: 'Vui lòng nhập mật khẩu hiện tại',
                remote: 'Mật khẩu không hợp lệ'
            },
            newpass: {
                required: 'Vui lòng nhập mật khẩu mới',
                minlength: "Mật khẩu có độ dài từ 8 ký tự trở lên. Mật khẩu nên có bao gồm cả chữ (viết hoa, viết thường) số và các ký tự đặc biệt như: @, ~, !...",
                maxlength: "Mật khẩu không vượt quá 32 kí tự.",
                regex : "Mật khẩu có độ dài từ 8 ký tự trở lên. Mật khẩu nên bao gồm cả chữ (viết hoa, viết thường), số và các ký tự đặc biệt như *, &, @..."
            },

            confirmpass: {
                equalTo: "Xác nhận mật khẩu không khớp. Vui lòng nhập lại."
            }
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
        showErrors: function(errorMap, errorList) {
            $.each(this.successList, function(index, value) {
                return $(value).popover("hide");
            });
            return $.each(errorList, function(index, value) {
                var _popover;
                _popover = $(value.element).popover({
                    trigger: "manual",
                    placement: "right",
                    content: value.message,
                    template: "<div class=\"popover\"><div class=\"arrow\"></div><div class=\"popover-inner\"><div class=\"popover-content\"><p></p></div></div></div>"
                });
                _popover.data("bs.popover").options.content = value.message;
                return $(value.element).popover("show");
            });
        },
        ignore: "[disable]",
        submitHandler: function(form) {
            var thisForm = $(form);

            $.post(thisForm.attr('action'), thisForm.serialize(), function (response) {
                if (response.status == 'success') {
                    var html = '';
                    html += '<p class="text-center">' + response.message + '</p>';
                    html += '<p class="text-center"><a href="' + response.url + '" class="btn btn-primary">Tiếp tục</a></p>';
                    showMessage(html);
                } else {
                    showMessage(response.message);
                }

            },'JSON');
        }
    });

    $('.change-profile-image').click(function (e) {
        e.preventDefault();
        var modal = $('#updateAvatarModal');
        modal.modal('show');
    });

    $('#update-avatar').submit(function (e) {
        e.preventDefault();
        var form = $(this);
        var fileInput = form.find('#user-avatar');
        var validFile = validateFile(fileInput);

        if (validFile !== true) {
            form.find('.message-form').text(validFile).show();
        } else {
            form.find('.message-form').hide();
            $.ajax({
                url: form.attr('action'),
                data: new FormData(this),
                dataType: 'JSON',
                method: 'POST',
                processData: false,
                contentType: false,
                success: function (response) {
                    if (response.status == 'success') {
                        $('#updateAvatarModal').modal('hide');
                        showMessage(response.message);
                        $('.profile-image').find('img').attr('src', response.img);
                    }  else {
                        showMessage(response.message);
                    }
                },
                error: function (e) {
                    console.log(e);
                }
            });
        }

    });

    $('#user-avatar').change(function (e) {
        var file = this.files[0];
        var validFile = validateFile($(this));
        var form = $(this).parents('form');

        if (validFile !== true) {
            form.find('.message-form').text(validFile).show();
        } else {
            form.find('.message-form').hide();
            form.find('#btn-update-avatar').attr('disabled', false);
        }

        if (file) {
            form.find('[name="filename"]').val(file.name);
        }
    });

    function validateFile(target) {
        var regex = new RegExp("(.*?)\.(png|jpe?g|gif)$");
        var file = target[0].files[0];

        if(!(regex.test(file.name.toLowerCase()))) {
            target.val('');
            return 'Chỉ cho phép file định dạng png, jpg, jpeg, gif';
        }

        if (file.size > 2000000) {
            return 'Dung lượng file vượt quá quy định, lớn nhất là 2MB';
        }

        return true;
    }

    $('#updateAvatarModal').on('hidden.bs.modal', function (e) {
        var form = $('#update-avatar');
        form.find('[name="filename"]').val('');
        form.find('#btn-update-avatar').attr('disabled', 'disabled');
    });

    $('.btn-privacy a').click(function (e) {
        e.preventDefault();
        var self = $(this);
        var id = self.data('id');
        var field = self.data('field');
        var status = self.data('status');
        var text = self.find('span').text();

        self.parents('.btn-privacy').find('.select-text').text(text);

        $.post('/user/profile/update-privacy.php', {
            id: id,
            field: field,
            status: status
        }, function (response) {
            if (response.status == 'success') {

            } else {
                showMessage(response.message);
            }
        }, 'JSON');
    });

    $('form.change-email-form').validate({
        rules: {
            newemail: {
                required: true,
                email: true
            }
        },
        messages: {
            newemail: {
                required: 'Vui lòng nhập email mới',
                email: 'Email không hợp lệ'
            }
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
        showErrors: function(errorMap, errorList) {
            $.each(this.successList, function(index, value) {
                return $(value).popover("hide");
            });
            return $.each(errorList, function(index, value) {
                var _popover;
                _popover = $(value.element).popover({
                    trigger: "manual",
                    placement: "right",
                    content: value.message,
                    template: "<div class=\"popover\"><div class=\"arrow\"></div><div class=\"popover-inner\"><div class=\"popover-content\"><p></p></div></div></div>"
                });
                _popover.data("bs.popover").options.content = value.message;
                return $(value.element).popover("show");
            });
        },
        ignore: "[disable]",
        submitHandler: function(form) {
            var thisForm = $(form);

            $.post(thisForm.attr('action'), thisForm.serialize(), function (response) {
                if (response.status == 'success') {

                    if (response.url) {
                        location.href = response.url;
                    }

                } else {
                    showMessage(response.message);
                }

            },'JSON');
        }
    });

    $('form.change-phone-form').validate({
        rules: {
            newphone2: {
                required: true,
                phone: true
            }
        },
        messages: {
            newphone2: {
                required: 'Vui lòng nhập số điện thoại mới',
                phone: 'Vui lòng nhập đúng số điện thoại'
            }
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
        showErrors: function(errorMap, errorList) {
            $.each(this.successList, function(index, value) {
                return $(value).popover("hide");
            });
            return $.each(errorList, function(index, value) {
                var _popover;
                _popover = $(value.element).popover({
                    trigger: "manual",
                    placement: "right",
                    content: value.message,
                    template: "<div class=\"popover\"><div class=\"arrow\"></div><div class=\"popover-inner\"><div class=\"popover-content\"><p></p></div></div></div>"
                });
                _popover.data("bs.popover").options.content = value.message;
                return $(value.element).popover("show");
            });
        },
        ignore: "[disable]",
        submitHandler: function(form) {
            var thisForm = $(form);

            $.post(thisForm.attr('action'), thisForm.serialize(), function (response) {
                if (response.status == 'success') {

                    if (response.url) {
                        location.href = response.url;
                    }

                } else {
                    showMessage(response.message);
                }

            },'JSON');
        }
    });

    $('.pr-grouplink .dropdown-menu li').click(function(){
        $(this).addClass('active').siblings().removeClass('active');
    });

    var checkAll = $('#checkAll');
    var checkboxes = $('.checkItem');

    $('.messpage-wrap input[type="checkbox"]').iCheck({
        checkboxClass: 'icheckbox_minimal-blue',
        radioClass: 'iradio_minimal-blue',
        increaseArea: '10%'
    });

    checkAll.on('ifChecked ifUnchecked', function(event) {
        if (event.type == 'ifChecked') {
            checkboxes.iCheck('check');
        } else {
            checkboxes.iCheck('uncheck');
        }
    });

    checkboxes.on('ifChanged', function(event){
        if(checkboxes.filter(':checked').length == checkboxes.length) {
            checkAll.prop('checked', 'checked');
        } else {
            checkAll.removeProp('checked');
        }
        checkAll.iCheck('update');
    });

    $('#trashInbox').click(function(){
        if (confirm('Bạn có chắc muốn xóa không?')) {
            $('#tbmessform input[name="delete"]').val(1);
            $('#tbmessform').submit();
        }
    });

    $('.mess-bar select').select2()
        .on('select2:selecting', function(){
        var id = $(this).attr('id');
        if (id == 'mark') {
            if (!$('.checkItem').parent('[class*="icheckbox"]').hasClass('checked')) {
                $(this).val(-1).trigger('change');
                alert('Bạn chưa lựa chọn tin nhắn nào!');
                return false;
            }
        }
    }).on('change', function(){
        if ($(this).val() > -1) {
            $('#tbmessform').submit();
        }
    });

    $('#ibmess').click(function(){
        $('#sendmess').show();
    });

    $('#ireply').click(function(){
        $('html, body').animate({
            scrollTop: parseInt($('#ibox-reply').offset().top) - 10
        }, 900);

        $('#ibmess').focus();
        $('#ibmess').trigger('click');
    });

    $('#frmreply').validate({
        rules: {
            message: {
                required: true
            }
        },
        messages: {
            message: {
                required: 'Vui lòng nhập tin nhắn.'
            }
        },
        submitHandler: function(form) {
            var thisForm = $(form);
            $.post(thisForm.attr('action'), thisForm.serialize(), function (response) {
                if (response.status == 'success') {
                    $('#ibmess').val('');
                    $('.ibox-messages').append(response.data);
                } else {
                    showMessage(response.message);
                }
            },'JSON');
        }
    });

    $('.btnChangephone').click(function(e){
        e.preventDefault();
        var phone = $(this).data('phone');
        var modal = $('#phoneModal');
        var form = modal.find('#phone-confirm-form');

        if (phone) {
            $.ajax({
                url: $path + 'getcode.php',
                method: 'post',
                data: {
                    action: 'confirm',
                    phone: phone
                },
                dataType: 'json',
                success: function(response) {
                    switch (response.status) {
                        case 'success':
                            modal.find('.phone-message').html(response.message);
                            modal.modal('show');
                            setTimeout(function(){
                                form.find('.resend-wr').html('<a href="#" class="resendCode" id="resendPhone">Gửi mã mới</a>');
                            }, 30000);
                            break;
                        case 'error':
                            $('#messageModal').find('.warning-des').html('<p>' + response.message + '</p>');
                            $('#messageModal').modal('show');
                            break;
                    }
                }
            });
        }
    });

    $('.btnAddphone').click(function(e){
        e.preventDefault();
        var modal = $('#changePhoneModal');
        var form = modal.find('#changephone-form');
        var step = form.data('step');

        if (step == 2) {
            form.find('.hide-step2').hide();
            form.find('.hide-step1').show();
        } else {
            form.find('.hide-step2').show();
        }

        modal.modal('show');
    });

    $('#phone-confirm-form').submit(function(e){
        e.preventDefault();
    });

    $('#phone-confirm-form').validate({
        rules: {
            code: {
                required: true
            }
        },
        messages: {
            code: {
                required: 'Bạn chưa nhập mã xác nhận.'
            }
        },
        errorElement: 'div',
        errorPlacement: function (place, element) {
            place.addClass('error-message').appendTo(element.closest('div'));
        },
        highlight: function (element, errorClass, validClass) {
            if (element.type === "radio") {
                this.findByName(element.name).addClass(errorClass).removeClass(validClass);
            } else if (element.type === "select-one" || element.type === "select-multiple") {
                var $element = $(element);
                $element.addClass(errorClass).removeClass(validClass);
                var $next = $element.next();
                if ($next.length > 0 && $next.hasClass('select2')) {
                    $next.addClass(errorClass).removeClass(validClass);
                }
            } else {
                $(element).addClass(errorClass).removeClass(validClass);
            }
        },
        unhighlight: function (element, errorClass, validClass) {
            if (element.type === "radio") {
                this.findByName(element.name).addClass(validClass).removeClass(errorClass);
            } else if (element.type === "select-one" || element.type === "select-multiple") {
                var $element = $(element);
                $element.addClass(validClass).removeClass(errorClass);
                var $next = $element.next();
                if ($next.length > 0 && $next.hasClass('select2')) {
                    $next.addClass(validClass).removeClass(errorClass);
                }
            } else {
                $(element).addClass(validClass).removeClass(errorClass);
            }
        },
        submitHandler: function (form) {
            var $thisForm = $(form);
            var modal = $thisForm.parents('#phoneModal');
            var confirmNext = $thisForm.find('.btn-confirm-next');

            if ($thisForm.valid()) {
                confirmNext.button('loading');
                $.ajax({
                    type: "POST",
                    url: $path + 'process-phone.php',
                    data: $thisForm.serialize(),
                    dataType: 'JSON',
                    success: function (response) {
                        switch (response.status) {
                            case 'success':
                                modal.modal('hide');
                                $('#changePhoneModal').modal('show');
                                break;
                            case 'fail':
                                confirmNext.button('reset');
                                $thisForm.find('.code-notmatch').html(response.message).show();
                                break;
                        }
                    }
                });
            }
        }
    });

    $('#phoneModal').on('click', '#resendPhone', function(e){
        e.preventDefault();
        var form = $('#phone-confirm-form');
        var phone = form.find('input[name="phone"]').val();
        var phoneMessage = form.find('.phone-message');
        var $this = $(this);

        $.ajax({
            type: 'post',
            url: $path + 'getcode.php',
            data: {
                action: 'confirm',
                phone: phone
            },
            dataType: 'json',
            success: function(response) {
                switch (response.status) {
                    case 'success':
                        phoneMessage.html(response.message);
                        form.find('input[name="code"]').focus();
                        $this.parents('.resend-wr').html('<span class="resend-lbl">Đã gửi mã mới</span>');
                        break;
                    case 'error':
                        phoneMessage.html('<label class="error">' + response.message + '</label>');
                        break;
                }
            }
        });
    });

    $('#changephone-form').submit(function(e){
        e.preventDefault();
    });

    $('#changephone-form').validate({
        rules: {
            phone: {
                required: true,
                phone: true
            },
            code: {
                required: true
            }
        },
        messages: {
            phone: {
                required: 'Bạn chưa nhập số điện thoại.',
                phone: 'Số điện thoại không hợp lệ.'
            },
            code: {
                required: 'Bạn chưa nhập mã xác nhận.'
            }
        },
        errorElement: 'div',
        errorPlacement: function (place, element) {
            place.addClass('error-message').appendTo(element.closest('div'));
        },
        highlight: function (element, errorClass, validClass) {
            if (element.type === "radio") {
                this.findByName(element.name).addClass(errorClass).removeClass(validClass);
            } else if (element.type === "select-one" || element.type === "select-multiple") {
                var $element = $(element);
                $element.addClass(errorClass).removeClass(validClass);
                var $next = $element.next();
                if ($next.length > 0 && $next.hasClass('select2')) {
                    $next.addClass(errorClass).removeClass(validClass);
                }
            } else {
                $(element).addClass(errorClass).removeClass(validClass);
            }
        },
        unhighlight: function (element, errorClass, validClass) {
            if (element.type === "radio") {
                this.findByName(element.name).addClass(validClass).removeClass(errorClass);
            } else if (element.type === "select-one" || element.type === "select-multiple") {
                var $element = $(element);
                $element.addClass(validClass).removeClass(errorClass);
                var $next = $element.next();
                if ($next.length > 0 && $next.hasClass('select2')) {
                    $next.addClass(validClass).removeClass(errorClass);
                }
            } else {
                $(element).addClass(validClass).removeClass(errorClass);
            }
        },
        submitHandler: function (form) {
            var $thisForm = $(form);
            var modal = $thisForm.parents('#changePhoneModal');
            var confirmNext = $thisForm.find('.btn-confirm-next');
            var phoneMessage = $thisForm.find('.phone-message');
            var step = $thisForm.data('step');
            if (!step) {
                step = 1;
            }

            if ($thisForm.valid()) {
                if (step == 1) {
                    confirmNext.button('loading');
                    $.ajax({
                        type: 'post',
                        url: $path + 'getcode.php',
                        data: $thisForm.serialize(),
                        dataType: 'json',
                        success: function(response) {
                            switch (response.status) {
                                case 'success':
                                    $thisForm.data('step', 2);
                                    phoneMessage.html(response.message);
                                    $thisForm.find('input[name="code"]').focus();
                                    $thisForm.find('.hide-step2').hide();
                                    $thisForm.find('.hide-step1').show();
                                    setTimeout(function(){
                                        $thisForm.find('.resend-wr').html('<a href="#" class="resendCode" id="resendPhone2">Gửi mã mới</a>');
                                    }, 30000);
                                    break;
                                case 'error':
                                    phoneMessage.html('<label class="error">' + response.message + '</label>');
                                    confirmNext.button('reset');
                                    break;
                            }
                        }
                    });
                } else if (step == 2) {
                    var self = $thisForm.find('.btn-confirm');
                    if (!self.hasClass('loading')) {
                        self.addClass('loading');

                        $.ajax({
                            type: "POST",
                            url: $path + 'process-phone.php',
                            data: $thisForm.serialize(),
                            dataType: 'JSON',
                            success: function (response) {
                                switch (response.status) {
                                    case 'success':
                                        modal.hide();
                                        $('#successModal').find('.success-return').html(response.message);
                                        $('#successModal').modal('show');
                                        break;
                                    case 'fail':
                                        $thisForm.find('.code-notmatch').html(response.message).show();
                                        break;
                                }
                                self.removeClass('loading');
                            }
                        });
                    }
                }
            }
        }
    });

    $('#changePhoneModal').on('click', '#resendPhone2', function(e){
        e.preventDefault();
        var form = $('#changephone-form');
        var phone = form.find('input[name="phone"]').val();
        var phoneMessage = form.find('.phone-message');
        var $this = $(this);

        $.ajax({
            type: 'post',
            url: $path + 'getcode.php',
            data: {
                action: 'add',
                phone: phone
            },
            dataType: 'json',
            success: function(response) {
                switch (response.status) {
                    case 'success':
                        phoneMessage.html(response.message);
                        form.find('input[name="code"]').focus();
                        $this.parents('.resend-wr').html('<span class="resend-lbl">Đã gửi mã mới</span>');
                        break;
                    case 'error':
                        phoneMessage.html('<label class="error">' + response.message + '</label>');
                        break;
                }
            }
        });
    });

    $('.btnChangemail').click(function(e){
        e.preventDefault();
        var modal = $('#emailModal');
        var form = modal.find('#email-confirm-form');
        form.find('.hide-step2').show();
        form.find('.hide-step1').hide();
        modal.find('.email-form').show();
        modal.modal('show');
    });

    $('#email-confirm-form').submit(function(e){
        e.preventDefault();
    });

    $('#email-confirm-form').validate({
        rules: {
            email: {
                required: true,
                email: true
            },
            code: {
                required: true
            }
        },
        messages: {
            email: {
                required: 'Bạn chưa nhập địa chỉ email.',
                email: 'Địa chỉ email không hợp lệ.'
            },
            code: {
                required: 'Bạn chưa nhập mã xác nhận.'
            }
        },
        errorElement: 'div',
        errorPlacement: function (place, element) {
            place.addClass('error-message').appendTo(element.closest('div'));
        },
        highlight: function (element, errorClass, validClass) {
            if (element.type === "radio") {
                this.findByName(element.name).addClass(errorClass).removeClass(validClass);
            } else if (element.type === "select-one" || element.type === "select-multiple") {
                var $element = $(element);
                $element.addClass(errorClass).removeClass(validClass);
                var $next = $element.next();
                if ($next.length > 0 && $next.hasClass('select2')) {
                    $next.addClass(errorClass).removeClass(validClass);
                }
            } else {
                $(element).addClass(errorClass).removeClass(validClass);
            }
        },
        unhighlight: function (element, errorClass, validClass) {
            if (element.type === "radio") {
                this.findByName(element.name).addClass(validClass).removeClass(errorClass);
            } else if (element.type === "select-one" || element.type === "select-multiple") {
                var $element = $(element);
                $element.addClass(validClass).removeClass(errorClass);
                var $next = $element.next();
                if ($next.length > 0 && $next.hasClass('select2')) {
                    $next.addClass(validClass).removeClass(errorClass);
                }
            } else {
                $(element).addClass(validClass).removeClass(errorClass);
            }
        },
        submitHandler: function (form) {
            var $thisForm = $(form);
            var modal = $thisForm.parents('#emailModal');
            var confirmNext = $thisForm.find('.btn-confirm-next');
            var emailMessage = $thisForm.find('.email-message');
            var step = $thisForm.data('step');
            if (!step) {
                step = 1;
            }

            if ($thisForm.valid()) {
                if (step == 1) {
                    confirmNext.button('loading');
                    $.ajax({
                        type: 'post',
                        url: $path + 'getcode-email.php',
                        data: $thisForm.serialize(),
                        dataType: 'json',
                        success: function(response) {
                            switch (response.status) {
                                case 'success':
                                    $thisForm.data('step', 2);
                                    emailMessage.html(response.message);
                                    $thisForm.find('input[name="code"]').focus();
                                    confirmNext.button('reset');
                                    $thisForm.find('.hide-step2').hide();
                                    $thisForm.find('.hide-step1').show();
                                    break;
                                case 'fail':
                                    emailMessage.html('<label class="error">' + response.message + '</label>');
                                    confirmNext.button('reset');
                                    break;
                            }
                        }
                    });
                } else if (step == 2) {
                    var self = $thisForm.find('.btn-confirm');
                    if (!self.hasClass('loading')) {
                        self.addClass('loading');

                        $.ajax({
                            type: "POST",
                            url: $path + 'process-email.php',
                            data: $thisForm.serialize(),
                            dataType: 'JSON',
                            success: function (response) {
                                switch (response.status) {
                                    case 'success':
                                        modal.hide();
                                        var alert = $('#successModal');
                                        alert.find('.success-return').html(response.message);
                                        alert.modal('show');
                                        break;
                                    case 'fail':
                                        $('#codemail-notmatch').html(response.message).show();
                                        break;
                                    case 'change':
                                        modal.modal('hide');
                                        $('#changePassModal').modal('show');
                                        break;
                                }
                                self.removeClass('loading');
                            }
                        });
                    }
                }
            }
        }
    });

    $('#resendMail').click(function(e){
        e.preventDefault();
        var form = $('#email-confirm-form');
        var email = form.find('input[name="email"]').val();
        var emailMessage = form.find('.email-message');
        $(this).button('loading');
        var btn = $(this);

        $.ajax({
            type: 'post',
            url: $path + 'getcode-email.php',
            data: {
                email: email
            },
            dataType: 'json',
            success: function(response) {
                switch (response.status) {
                    case 'success':
                        form.data('step', 2);
                        form.find('input[name="code"]').focus();
                        form.find('.hide-step2').hide();
                        form.find('.hide-step1').show();
                        $('#resendMail').hide();
                        $('.resend-success').show();
                        break;
                    case 'fail':
                        emailMessage.html('<label class="error">' + response.message + '</label>');
                        break;
                }
            }
        });
    });

    $('#password-confirm-form').validate({
        rules: {
            password: {
                required: true,
                minlength: 8
            },
            repassword: {
                equalTo: "#password"
            }
        },
        messages: {
            password: {
                required: "Mật khẩu không được để trống.",
                minlength: "Mật khẩu phải có ít nhất 8 kí tự."
            },
            repassword: {
                equalTo: "Xác nhận mật khẩu không khớp. Vui lòng nhập lại."
            }
        },
        errorElement: 'div',
        errorPlacement: function (place, element) {
            place.addClass('error-message').appendTo(element.closest('div'));
        },
        highlight: function (element, errorClass, validClass) {
            if (element.type === "radio") {
                this.findByName(element.name).addClass(errorClass).removeClass(validClass);
            } else if (element.type === "select-one" || element.type === "select-multiple") {
                var $element = $(element);
                $element.addClass(errorClass).removeClass(validClass);
                var $next = $element.next();
                if ($next.length > 0 && $next.hasClass('select2')) {
                    $next.addClass(errorClass).removeClass(validClass);
                }
            } else {
                $(element).addClass(errorClass).removeClass(validClass);
            }
        },
        unhighlight: function (element, errorClass, validClass) {
            if (element.type === "radio") {
                this.findByName(element.name).addClass(validClass).removeClass(errorClass);
            } else if (element.type === "select-one" || element.type === "select-multiple") {
                var $element = $(element);
                $element.addClass(validClass).removeClass(errorClass);
                var $next = $element.next();
                if ($next.length > 0 && $next.hasClass('select2')) {
                    $next.addClass(validClass).removeClass(errorClass);
                }
            } else {
                $(element).addClass(validClass).removeClass(errorClass);
            }
        },
        submitHandler: function (form) {
            var $thisForm = $(form);
            var modal = $thisForm.parents('#changePassModal');
            var passMessage = $thisForm.find('.pass-message');

            $.ajax({
                type: 'post',
                url: $path + 'update-password.php',
                data: $thisForm.serialize(),
                dataType: 'json',
                success: function(response) {
                    switch (response.status) {
                        case 'success':
                            var html = '';
                            html += '<p>' + response.message + '</p>';
                            html += '<p><a href="' + response.url + '" class="btn btn-primary">Đăng nhập lại</a></p>';
                            var alert = $('#successModal');
                            alert.find('.success-return').html(html);
                            alert.modal('show');
                            break;
                        case 'fail':
                            passMessage.html('<label class="error">' + response.message + '</label>');
                            break;
                    }
                }
            });
        }
    });

    $('.sendpass-mail').click(function(e){
        e.preventDefault();
        var modal = $('#sendPassModal');
        $.ajax({
            url: 'sendpass.php',
            method: 'post',
            data: {},
            dataType: 'json',
            success: function(response) {
                switch (response.status) {
                    case 'success':
                        modal.find('.modal-body').html(response.message);
                        modal.modal('show');
                        break;
                    case 'fail':
                        showMessage(response.message);
                        break;
                }
            }
        });
    });

    $('.profile-modal').on('hidden.bs.modal', function (e) {
        var form = $(this).find('form');
        form.find('.form-control').removeClass('error');
        form.find('.error-message').remove();
    });

    $('#phoneModal').on('hidden.bs.modal', function (e) {
        var form = $(this).find('form');
        var step = form.data('step');
        if (step == 2) {
            window.location.reload();
        }
    });

    $('#emailModal').on('hidden.bs.modal', function (e) {
        window.location.reload();
    });

    $('#successModal').find('.close').click(function(){
        window.location.reload();
    });

    $('#updateProfileModal').on('hidden.bs.modal', function (e) {
        window.location.reload();
    });

    $('#phoneAddModal').on('hidden.bs.modal', function (e) {
        window.location.reload();
    });

    $('#phoneRemoveModal').on('hidden.bs.modal', function (e) {
        window.location.reload();
    });

    $('#sendPassModal').on('hidden.bs.modal', function (e) {
        window.location.href = $path + 'index.php';
    });
});