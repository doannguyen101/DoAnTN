function user_learned($scorm_id){
    /*$.ajax({
        url: '/mod/scorm/learn.php',
        data: {id: $scorm_id},
        type: 'POST',
        success: function(){}
    });*/
}

function getUrlParam(name, url) {
    if(typeof url != 'string'){
        url = location.search;
    }
    name = name.replace(/[\[]/, "\\[").replace(/[\]]/, "\\]");
    var regex = new RegExp("[\\?&]" + name + "=([^&#]*)"),
        results = regex.exec(url);
    return results === null ? "" : decodeURIComponent(results[1].replace(/\+/g, " "));
}

function show_message($title, $message, $footer){
    var $mModal = $('#messageModal');

    $mModal.find('.warning-des').html($message);
    $mModal.find('.modal-title').html($title);
    if(typeof $footer == 'undefined'){
        $mModal.find('.modal-footer').html('<button type="button" class="btn btn-cancel" data-dismiss="modal">Đóng</button>');
    }else{
        $mModal.find('.modal-footer').html($footer);
    }

    $mModal.modal('show');
}
//hmpro
window.load_ouline = function($element){
    $element = $($element);
    if($element.is('a')){
        var $target = $($element.attr('href'));
    }else{
        var $target = $element;
    }

    var $courseID = $target.data('courseid');
    var $outline = $('#course-outline-'+$courseID);
    if($outline.length == 0){
        $outline = $('<div id="course-outline-'+$courseID+'"></div>');
    }
    $outline.appendTo($target);
}

window.load_learn_comments2 = function($element){
    $element = $($element);
    if($element.is('a')){
        var $target = $($element.attr('href'));
    }else{
        var $target = $element;
    }

    if($target.length > 0 && !$target.hasClass('no-load')){
        $target.find('[data-toggle="comments"][data-action="tab-show"]').addCommentForm().loadComments();
        $target.addClass('no-load');
    }
}
window.load_learn_comments = function($element){
    $element = $($element);
    var $target;

    if($element.is('a')){
        $target = $($element.attr('href'));
    }else{
        $target = $element;
    }

    if (typeof QA.videoPlayer == 'undefined') {
        QA.videoPlayer = $f('hocmaiplayer');
        if (QA.videoPlayer != null) {
            QA.videoPlayer.onStart(function(){
                var container = $('[data-toggle="comments"][data-action="tab-show"]');
                var videoIndex = QA.getVideoIndex(QA.videoPlayer);
                if (container.is(':visible') && container.data('target') != videoIndex.scoreid) {
                    container.empty();
                    container.data('target', videoIndex.scoreid);
                    container.addCommentForm();
                    QA.loadQuestions(container);
                }
            });
        }
    }

    if (QA.videoPlayer != null) {
        var videoIndex = QA.getVideoIndex(QA.videoPlayer);

        if ($target.length > 0) {
            var container = $target.find('[data-toggle="comments"][data-action="tab-show"]');
            if (!$target.hasClass('no-load') || ($target.hasClass('no-load') && container.data('target') != videoIndex.scoreid)) {
                container.empty();
                container.data('target', videoIndex.scoreid);
                container.addCommentForm(function () {
                    QA.loadQuestions(container);
                });
                $target.addClass('no-load');
            }
        }
    }
};

window.load_scorm_notes = function($element){
    $element = $($element);

    var $target;
    if($element.is('a')){
         $target = $($element.attr('href'));
    }else{
         $target = $element;
    }


    if($target.length > 0 && !$target.hasClass('no-load')){
        $target.find('[data-toggle="notes"][data-action="tab-show"]').loadnotes();
        $target.addClass('no-load');
    }
};

window.load_issue_report = function($element){
    $element = $($element);
    var $target;

    if($element.is('a')){
        $target = $($element.attr('href'));
    }else{
        $target = $element;
    }

    if (typeof QA.videoPlayer == 'undefined') {
        QA.videoPlayer = $f('hocmaiplayer');
    }

    var videoIndex = QA.getVideoIndex(QA.videoPlayer);
    var form = $target.find('form');
    var time = parseInt(videoIndex.offset);
    var minutes = parseInt(time/60);
    var seconds = time%60;
    var stringMin = minutes < 10 ? '0' + minutes : minutes;
    var stringSec = seconds < 10 ? '0' + seconds : seconds;
    form.find('[name="time"]').val(stringMin + ':' + stringSec);
    form.find('[name="scoid"]').val(videoIndex.scoreid);
};

function showLearnPanel($type){
    var $learnpage = $('#learn-page');
    $learnpage.show();
    var $bodyW = $('body').width();
    if($bodyW < 870){
        $learnpage.addClass('hide-sidebar-second').removeClass('with-sidebar-second');
    }else{
        $learnpage.addClass('with-sidebar-second').removeClass('hide-sidebar-second');
    }
    $('#learn-page .learn-page-tabs .active a').trigger('show.bs.tab');
    switch($type){
        case 'quicktest':
            $learnpage.find('#quiz-container').show();
            if(typeof player != 'undefined'){
                player.pause();
            }
        break;
        case 'video':
        default:
            $learnpage.data('videoloaded', 1);
            $learnpage.find('#quiz-container').hide();
            $learnpage.find('#player-container').show();
        break;
    }
    return $learnpage;
}

function quicktest($quizid){
    var $learnpanel = showLearnPanel('quicktest');
    var $quizform = $learnpanel.find('form[data-toggle="quicktest"]');

    $quizform.data('quiz', $quizid);
    $quizform.quizload();
}

function hideLearnPanel(){
    $('#learn-page').hide();
    load_ouline($('#course-outline'));
    load_learn_comments('#scorm-view-comments');
    $('body').removeClass('learning-mode');
    $('.learn-page-tabs a[data-toggle="tab"]').removeClass('loaded');

    if ($('.course-group-wr').length > 0) {
        $('.course-group-wr').show();
        $('.course-group-l').show();
        $('.course-group-r').hide();
    }
}
//hmpro end
jQuery.fn.extend({
    viewFullMode: function(){
        var $videoWr = $(this);
        var $wrapper = $videoWr.parents('.wrapper')
        var $wrWidth = $wrapper.width();
        var $videoHeight = $wrWidth*9/16;
        $videoWr.width($wrWidth);
        $videoWr.children('.player').attr('old-style', $videoWr.children('.player').attr('style')).width($wrWidth).height($videoHeight);
        $wrapper.find('.sidebar-second').css({paddingTop: ($videoWr.height() + 30)});
    },
    viewNormalMode: function(){
        var $videoWr = $(this);
        var $wrapper = $videoWr.parents('.wrapper')
        $videoWr.attr('style', '');
        $videoWr.children('.player').attr('style', $videoWr.children('.player').attr('old-style'));
        $wrapper.find('.sidebar-second').attr('style', '');
    },
    layoutResizeTo: function($width){
        $layout = $(this);

        if(!$layout.data('resizeElement')){
            $layout.data('resizeElement', $layout.find('.sidebar-second'));
        }
        if(!$layout.data('bodyElementWR')){
            $layout.data('bodyElementWR', $layout.find('.content-wr'));
        }
        if(!$layout.data('bodyElement')){
            $layout.data('bodyElement', $layout.data('bodyElementWR').children('.content'));
        }

        $layout.data('resizeElement').width($width);
        $layout.data('bodyElementWR').css({marginRight: (-1*$width)});
        $layout.data('bodyElement').css({marginRight: $width});
    },
    layoutResize:function(){
        function resizeMoveHandler(e) {
            e.preventDefault();
            var $document = $(document);
            console.log(e);
            //var newHeight = currentElement._startHeight + (e.pageY - currentElement._startY);
            //Element.height(Element.getPrevious(currentElement), newHeight);
        }
        var $layout = $(this);

        if(!$layout.data('resizeElement')){
            $layout.data('resizeElement', $layout.find('.sidebar-second'));
        }
        if(!$layout.data('bodyElementWR')){
            $layout.data('bodyElementWR', $layout.find('.content-wr'));
        }
        if(!$layout.data('bodyElement')){
            $layout.data('bodyElement', $layout.data('bodyElementWR').children('.content'));
        }

        $layout.data('resizeMoveHandler', function(e){
            $this = $(this);
            var $resizeElement = $this.data('resizeElement');

            var $width = $this.data('startWidth') - (e.pageX - $this.data('startX'));
            $this.layoutResizeTo($width);
            return false;
        });
        $layout.data('resizeUpHandler', function(e){
            var $this = $(this);
            $this.unbind('mousemove', $this.data('resizeMoveHandler')).bind('mouseup', $this.data('resizeUpHandler'));
            return false;
        });

        $layout.find('.resize-layout').bind('mousedown', function(e){
            var $this = $(this);
            $layout.data('startX', e.pageX);
            $layout.data('startWidth', $layout.data('resizeElement').width());
            $layout.bind('mousemove', $layout.data('resizeMoveHandler'));
            $layout.bind('mouseup', $layout.data('resizeUpHandler'));
            return false;
        });
    }
});

$(document).ready(function(){
    /*
    if($('#hh20haddtimeModal').length > 0 && !$.cookie('sk2s')){
        $('#hh20haddtimeModal').modal('show');
        $.cookie('sk2s', 1, {expires: 30, path: '/'});
    }*/

    var $body = $('body');
    $body.addClass('learning-mode');
    var $totalW = $body.width();
    $body.removeClass('learning-mode');
    if($totalW > 870){
        $('#learn-page').find('.content-wr > .content').resizable({
            handles: 'e',
            minWidth: ($totalW < 870)?($totalW - 290):580,
            maxWidth: ($totalW - 290),
            stop: function(event, ui){
                $.cookie('learnW', ui.size.width, {expires: 90, path: '/'});
                $(this).trigger('resize');
            }
        }).bind('resize', function(){
            var $this = $(this);
            var $w = $this.width();
            var $sbW = $totalW - $w;
            $('#learn-page').children('.content-wr').css('margin-right', -1*$sbW);
            $('#learn-page').children('.sidebar-second').width($sbW);
            $this.css({marginRight: $sbW, width: 'auto'});
        });
        if($.cookie('learnW')){
            $('#learn-page').find('.content-wr > .content').width($.cookie('learnW')).trigger('resize');
        }
    }
    $(window).resize(function(e){
        if(e.target == this){
            $totalW = $body.width();
            var $learnpage = $('#learn-page');
            if($totalW < 870 && $learnpage.hasClass('with-sidebar-second')){
                $learnpage.addClass('hide-sidebar-second').removeClass('with-sidebar-second');
            }
        }

    });

    $('[data-toggle="loadqt"]').click(function(){
        var $this = $(this),
            $quizid = $this.data('quiz');

        if(!$quizid){
            return false;
        }

        var $learnpanel = showLearnPanel('quicktest');
        var $quizform = $learnpanel.find('form[data-toggle="quicktest"]');
        $quizform.data('quiz', $quizid);
        $quizform.quizload();
        return false;
    });

    $('body').on('click', '.qq-play-scorm', function(){
        var $learnpage = $('#learn-page');
        hideLearnPanel();
        if($learnpage.data('videoloaded')){
            showLearnPanel('video');
        }else{
            $('.with-play-scorm').trigger('click');
        }
        return false;
    });

    $('body').on('click', '.qq-close', function(){
        var $learnpage = $('#learn-page');
        hideLearnPanel();
        if($learnpage.data('videoloaded')){
            showLearnPanel('video');
        }
        return false;
    });

    if ($('#sidebar-fisrt').height() < $('#content').height()) {
        $('#sidebar-fisrt').height($('#content').height());
    }

    if ($('.course-detail-description').height() > 130) {
        var $moreDetail = $('<a href="#" class="cdd-more-bt">Thông tin chi tiết &raquo;</a>');
        $('.course-detail-description').addClass('overhide').after($moreDetail);
        $moreDetail.click(function(){
            $(this).prev('.course-detail-description').removeClass('overhide');
            $(this).remove();
            return false;
        });
    }
    
    if(typeof $sectionActive != 'undefined'){
        $('#scorm-section-id-'+$sectionActive).addClass('active');
    }
    
    if(typeof $courseCate != 'undefined'){
        $('#menu-cate-'+$courseCate).addClass('mhl');
    }
    
    var $relateCourses = $('.relate-course');
    if($relateCourses.length > 5){
        $relateCourses.each(function($i){
            var $relateCourse = $(this);
            if($i > 4){
                $relateCourse.addClass('hide');
            }
        });
        var $rlMore = $('<div class="relate-course-more">Xem thêm</div>');
        $relateCourses.parent().append($rlMore);
        $rlMore.click(function(){
            $('.relate-course.hide').removeClass('hide');
            $(this).hide();
        });
    }
    
    if(typeof $parama != 'undefined'){
        var $link = $('#scorm-right-link-wr-'+$parama);
        if($link.length > 0){
            $link.addClass('active');
            $link.children('.scorm-right-name').addClass('here');
            $links = $('.scorm-right-link-wr');
            
            $links.each(function($i){
                var $this = $(this);
                if($this.is($link)){
                    $prev = $links.eq($i-1);
                    if($i > 0){
                        $('#scorm-prev').attr({href: $prev.attr('href'), title: $prev.find('.scorm-right-link').text()});
                    }else{
                        $('#scorm-prev').hide();
                    }
                    $next = $links.eq($i+1);
                    if($i < $links.length - 1){
                        $('#scorm-next').attr({href: $next.attr('href'), title: $next.find('.scorm-right-link').text()});
                    }else{
                        $('#scorm-next').hide();
                    }
                }
            });
        }
    }
    
    $('.hover-has-children').hover(function(){
        var $this = $(this);
        var $childMenu = $this.children('.menu-hover');
        $this.addClass('hover');
        $childMenu.stop().attr('style', '');
//        $childMenu.addClass('visibility-hidden');
//        var $childHeight = $childMenu.height(),
//            $childOffset = $childMenu.offset(),
//            $wHeight = $(window).height(),
//            $dScrollTop = $(document).scrollTop();
//        if($childOffset.top + $childHeight >= $wHeight + $dScrollTop){
//            $childMenu.css({top: 'auto', bottom: 0});
//            $childOffset = $childMenu.offset();
//            if($childMenu.offset().top < $dScrollTop){
//                $childOffset.top = $dScrollTop;
//                $childMenu.css({bottom: 'auto'});
//            }
//        }
        $childMenu.stop().show(200);
    }, function(){
        $(this).removeClass('hover').children('.menu-hover').stop().attr('style', '').hide();
    });
    
    $('.num-scorm-documents').click(function(){
        var $this = $(this);
        var $target = $($this.attr('href'));
        var $targetParent = $target.parent();
        if($this.hasClass('active')){
            $this.removeClass('active');
            $target.hide();
            if($this.hasClass('sd-right')){
                var $wrapper = $this.parents('.scorm-right-item');
                var $structT = $wrapper.find('[data-toggle="scorm-struct"]');
                if(!$structT.hasClass('active')){
                    $target.parent().hide();
                }
            }            
        }else{
            $target.parent().show();
            $this.addClass('active');
            if($this.hasClass('sd-right')){
                var $wrapper = $this.parents('.scorm-right-item');
                var $structT = $wrapper.find('[data-toggle="scorm-struct"]');
                if($structT.hasClass('active')){
                    $targetParent.height($targetParent.height());
                    $structT.trigger('click');
                }
            }
            
            $target.show();
        }
        return false;
    });
    
    //hmpro
    $('.learn-page-tabs a[data-toggle="tab"]').on('show.bs.tab', function (e){
        var $element = $(e.target);
        if(!$element.hasClass('loaded')){
            var $callback = $element.data('callback');
            if(typeof window[$callback] == 'function'){
                window[$callback]($element);
                $element.addClass('loaded');
            }
        }
    });

    $('.learn-page-tabs a[data-toggle="tab"]').on('shown.bs.tab', function (e){
        var $element = $(e.target);
        var target = $($element.attr('href'));
        if(target.hasClass('focus')) {
            //target.find('textarea').focus();
        }
    });

    $('#learn-page').on('click', '.ask-a-question', function (e) {
        e.preventDefault();
        var tab = $('.learn-page-tabs a[data-toggle="tab"].comment-tab-control');
        tab.tab('show');
        var target = $(tab.attr('href')).addClass('focus');
        //target.find('textarea').focus();
    });

    $('#scorm-view-back').click(function() {
        $('#learn-page').data('videoloaded', 0);
        hideLearnPanel();
        return false;
    });

    $('.btn-direction').click(function (e) {
        e.preventDefault();
        var self = $(this);

        if (self.parents('form').valid()) {
            var target = $(self.attr('href'));

            self.parents('.step').removeClass('active');
            target.addClass('active');
        }
    });

    var issueForm = $('#report-issues-form');
    issueForm.validate({
        rules:{
            link: {required: true},
            relate: {required: true},
            issue: {required: true},
            email: {required: true, email: true},
            phone: {required: true, phone: true},
            title: {required: true},
            time: {required: true},
            content: {required: true}
        },
        messages:{
            link: {required: 'Link không hợp lệ'},
            relate: {required: 'Bạn chưa chon vấn đề'},
            issue: {required: 'Bạn chưa chọn lỗi'},
            email: {required: 'Mail không hợp lệ', email: 'Mail không hợp lệ'},
            phone: {required: 'Bạn chưa nhập số điện thoại', phone: 'Số điện thoại không hợp lệ'},
            title: {required: 'Bạn chưa chọn tiêu đề'},
            time: {required: 'Thời gian không hợp lệ'},
            content: {required: 'Bạn chưa nhập nội dung'}
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
        submitHandler: function(form) {
            var $form = $(form);
            $form.find('button[type="submit"]').attr("disabled", 'disabled');
            $.post($form.attr('action'), $form.serialize(), function (response) {
                var messageContainer = $form.find('#ri-step-3');

                if (response.status == 'error') {

                    messageContainer.find('.ri-msg').removeClass('bg-success').addClass('bg-danger').html('<p></p><p class="">' + response.message + '</p><p></p>');
                    messageContainer.find('.btn-direction').show();
                    messageContainer.find('.btn-ri-ok').hide();
                } else if (response.status == 'success') {

                    messageContainer.find('.ri-msg').removeClass('bg-danger').addClass('bg-success').html('<p></p><p class="">' + response.message + '</p><p></p>');
                    messageContainer.find('.btn-direction').hide();
                    messageContainer.find('.btn-ri-ok').show();
                    messageContainer.parents('#course-error-report-panel').find('.foreword').hide();
                }

                $form.find('button[type="submit"]').removeAttr('disabled');
                $form.find('.step').removeClass('active');
                messageContainer.addClass('active');
            }, 'JSON');
        }
    });

    var relate = issueForm.find('[name="relate"]').val();
    issueForm.find('.radio-issue').hide();
    issueForm.find('[data-relate="'+ relate +'"]').show();

    issueForm.find('.btn-ri-ok').click(function (e) {
        e.preventDefault();
        issueForm.find('[name="title"]').val('');
        issueForm.find('[name="content"]').val('');
        issueForm.parents('#course-error-report-panel').find('.foreword').show();
    });

    issueForm.find('[name="relate"]').change(function () {
        var self = $(this);
        var value = self.val();
        issueForm.find('.radio-issue').hide();
        var showInput = issueForm.find('[data-relate="'+ value +'"]');
        showInput.show();
        showInput.first().css('margin-top', '10px').find('input').prop('checked', true);
    });

    //hmpro end
    $('.scorm-header.with-play-scorm').click(function(){
        var $this = $(this);
        var $data = {};

        if($this.hasClass('rq-rfree')){
            $data.checkfreebooked = 1;
        }
        $data.packageid = $this.data('packageid');
        $data.scormid = $this.data('scormid');

        if($this.hasClass('with-play-scorm')){
            if(typeof $loadvideo != 'undefined'){
                if($this.hasClass('confirm')){
                    //hiểm thị thông báo trừ số lần xem
                    $('#subAllowTimeModal').modal('show');
                    return false;
                }else{
                    //$('#errorVideoModal').modal('show');
                    window.learnloadcallback = function() {
                        $.ajax({
                            url: '/mod/scorm/load.php',
                            data: {a: $parama},
                            type: 'POST',
                            success: function($response) {
                                try
                                {
                                    var $jdata = $.parseJSON($response);  
                                }catch(e)
                                {
                                    var $jdata = false;
                                }
                                if($jdata){
                                    //Nếu load thành công
                                    if($jdata.status == 'success'){
                                        if (typeof videojs != 'undefined' && typeof videojs('hocmaiplayer') != 'undefined' && videojs('hocmaiplayer').paused) {
                                            videojs('hocmaiplayer').play();
                                        }

                                        var $player = $('#hocmaiplayer');
                                        $player.after($jdata.html);
                                        //hmpro
                                        $('body').addClass('learning-mode');
                                        var $scorm_status = $('#scorm-right-link-wr-'+$this.data('scormid')).find('.lesson-process-percent');
                                        if($scorm_status.length > 0 && !$scorm_status.hasClass('percent-50') && !$scorm_status.hasClass('percent-100')){
                                            $scorm_status.addClass('percent-50');
                                        }
                                        showLearnPanel('video');
                                        //hmpro end
                                        //hmpro
                                        //$this.removeClass('with-play-scorm');
                                        //$('.scorm-detail-info').addClass('with-play');
                                        //hmpro end
                                        $('.hide-before-play').show();
                                        $('.hide-on-play').hide();
                                        //hmpro
                                        //$('#hocmaiplayer_api').attr({width: $('#hocmaiplayer').width()+'px', height:$('#hocmaiplayer').height()+'px'});
                                        //hmpro end
                                        user_learned($parama);
                                        setInterval(function(){
                                            user_learned($parama);
                                                                                
                                        }, 30000);
                                        $(window).on('beforeunload', function(){
                                            user_learned($parama);
                                        });
                                    }else if($jdata.status == 'nologin'){
                                        $('#loginModal').modal('show');
                                    }else if($jdata.status == 'error'){
                                        show_message('Nâng cấp hệ thống', $jdata.message);
                                    }
                                }else{
                                    alert('Vui lòng liên hệ Hotline: 1900 6933');
                                }
                                
                            }
                        });
                    }
                    $.ajax({
                        type: "POST",
                        url: '/check-login.php',
                        data: $data,
                        dataType: 'json',
                        success: function($res){
                            if($res.login == 'true'){
                                var $mModal = $('#messageModal');
                                if ($res.exeaction == 'doTest') {
                                    $mModal.find('.warning-des').html($res.message);
                                    $mModal.find('.modal-title').html($res.messaget);
                                    $mModal.find('.modal-footer').html($res.messagef);
                                    $mModal.modal('show');
                                } else if($res.confirm && $this.hasClass('confirm-info')){
                                    //Nếu là hiện thông báo
                                    if($res.showmess){
                                        $mModal.find('.warning-des').html($res.message);
                                        if($res.messaget){
                                            $mModal.find('.modal-title').html($res.messaget);
                                        }else{
                                            $mModal.find('.modal-title').html('Thông báo');
                                        }
                                        if($res.messagef){
                                            $mModal.find('.modal-footer').html($res.messagef);
                                        }
                                        $mModal.modal('show');
                                    }else{
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
                                        if($res.exeaction){
                                            switch($res.exeaction){
                                                case 'freeLearnBooking':
                                                    $modalIC.data('title', 'Cập nhật thông tin đăng ký học miễn phí');
                                                    $modalIC.data('exeaction', 'freeLearnBooking');
                                                    $modalIC.data('packageid', $this.data('packageid'));
                                                    $modalIC.data('scormid', $this.data('scormid'));
                                                    $modalIC.data('success', null);
                                                    $.cookie('learnscormnow', 1);
                                                break;
                                                default:
                                                    if(typeof $freescorm != 'undefined' && $freescorm){
                                                        $modalIC.data('title', 'Cập nhật thông tin để học miễn phí');
                                                    }else{
                                                        $modalIC.data('title', 'Cập nhật thông tin để vào học');
                                                    }
                                                    $modalIC.data('success', 'learnloadcallback');
                                                break;
                                            }
                                        }else{
                                            if(typeof $freescorm != 'undefined' && $freescorm){
                                                $modalIC.data('title', 'Cập nhật thông tin để học miễn phí');
                                            }else{
                                                $modalIC.data('title', 'Cập nhật thông tin để vào học');
                                            }
                                            $modalIC.data('success', 'learnloadcallback');
                                        }
                                        
                                        $modalIC.modal('show');
                                    }
                                }else if($this.hasClass('efl-phone-confirm')){
                                    var $modalIC = $('#confirmPhoneModal');
                                    $modalIC.data('success', 'learnloadcallback');
                                    $modalIC.modal('show');
                                }else{
                                    window.learnloadcallback();
                                }
                            }else{
                                $.cookie('learnscormnow', 1);
                                console.log(123);
                                $('#loginModal').modal('show');
                            }
                        }
                    });
                    
                }
            }else if(typeof $loadFree != 'undefined'){
                //$('#errorVideoModal').modal('show');
                $.ajax({
                    type: "POST",
                    url: '/check-login.php',
                    data: $data,
                    dataType: 'json',
                    success: function($res){
                        if($res.login == 'true'){
                            if($res.confirm && $this.hasClass('confirm-info')){
                            window.confirm_callback = function(){
                                //hmpro
                                $('body').addClass('learning-mode');
                                var $scorm_status = $('#scorm-right-link-wr-'+$this.data('scormid')).find('.lesson-process-percent');
                                if($scorm_status.length > 0 && !$scorm_status.hasClass('percent-50') && !$scorm_status.hasClass('percent-100')){
                                    $scorm_status.addClass('percent-50');
                                }
                                showLearnPanel('video');
                                //hmpro end
                                //hmpro
                                //$this.removeClass('with-play-scorm');
                                //$('.scorm-detail-info').addClass('with-play');
                                //hmpro end
                                $('.hide-before-play').show();
                                $('.hide-on-play').hide();
                                //hmpro
                                //$('#hocmaiplayer_api').attr({width: $('#hocmaiplayer').width()+'px', height:$('#hocmaiplayer').height()+'px'});
                                //hmpro end
                                user_learned($parama);
                                setInterval(function(){
                                    user_learned($parama);
                                }, 30000);
                                $(window).on('beforeunload', function(){
                                    user_learned($parama);
                                });
                            }

                            //Nếu là hiện thông báo
                                if ($res.exeaction == 'doTest') {
                                    $mModal.find('.warning-des').html($res.message);
                                    $mModal.find('.modal-title').html($res.messaget);
                                    $mModal.find('.modal-footer').html($res.messagef);
                                    $mModal.modal('show');
                                } else if($res.showmess){
                                var $mModal = $('#messageModal');
                                $mModal.find('.warning-des').html($res.message);
                                if($res.messaget){
                                    $mModal.find('.modal-title').html($res.messaget);
                                }else{
                                    $mModal.find('.modal-title').html('Thông báo');
                                }
                                if($res.messagef){
                                    $mModal.find('.modal-footer').html($res.messagef);
                                }
                                $mModal.modal('show');
                            }else{
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
                                if($res.exeaction){
                                    switch($res.exeaction){
                                        case 'freeLearnBooking':
                                            $modalIC.data('title', 'Cập nhật thông tin đăng ký học miễn phí');
                                            $modalIC.data('exeaction', 'freeLearnBooking');
                                            $modalIC.data('packageid', $this.data('packageid'));
                                            $modalIC.data('scormid', $this.data('scormid'));
                                            $modalIC.data('success', null);
                                            $.cookie('learnscormnow', 1);
                                        break;
                                        default:
                                            $modalIC.data('title', 'Cập nhật thông tin để học miễn phí');
                                            $modalIC.data('success', 'confirm_callback');
                                        break;
                                    }
                                }else{
                                    $modalIC.data('title', 'Cập nhật thông tin để học miễn phí');
                                    $modalIC.data('success', 'confirm_callback');
                                }

                                $modalIC.modal('show');
                            }
                        } else {
                                window.confirm_callback();
                        }

                    } else {
                            $.cookie('learnscormnow', 1);
                            $('#loginModal').modal('show');
                    }
                }
            });
            
            //$('.scorm-player-wr').viewFullMode();
        }

        if ($('.course-group-wr').length > 0) {
            $('.course-group-wr').show();
            $('.course-group-l').hide();
            $('.course-group-r').show();
        }
    }
        return false;
    });
    
    if($.cookie('learnscormnow')){
        $.removeCookie('learnscormnow');
        $('.scorm-header.with-play-scorm').removeClass('confirm').trigger('click');
    }
    
    $('#playscromvideo').click(function(){
        $('.scorm-header.with-play-scorm').removeClass('confirm').trigger('click');
        //Nếu chọn không hiển thị thông báo nữa
        if($('#afternoshow').is(':checked')){
            $.ajax({
                url: '/changetheme.php',
                data: {act: 'svncf'},
                type: 'GET',
                success: function($response) {
                    
                }
            });
        }
        
    });
    
    $('#changethemehocmai').click(function(){
        $.ajax({
            url: '/changetheme.php',
            data: {act: 'changetheme', old: '1'},
            type: 'GET',
            success: function($response) {
                window.location.reload();
            }
        });
    });
    
    $('[data-toggle="scorm-struct"]').click(function(){
        var $this = $(this);
        var $target = $('#'+$this.data('target'));
        var $wrapper = $this.parents('.scorm-right-item');
        if(!$this.hasClass('loaded')){
            var $scormid = $this.data('scormid');
            if($this.hasClass('scorm-struct-loading')){
                return false;
            }
            
            $.ajax({
                url: '/mod/scorm/struct.php',
                data: {scormid: $scormid},
                type: 'GET',
                beforeSend: function() {
                     $this.addClass('scorm-struct-loading');
                },
                success: function($response) {
                    $target.html($response).show();
                    var $countVideos = $target.children('[data-count-videos]').data('count-videos');
                    $wrapper.find('.scorm-right-video-count span').html($countVideos);
                    $this.addClass('loaded');
                    
                    if($this.hasClass('active')){
                        $this.removeClass('active');
                        $this.parent().removeClass('active');
                        $target.hide();
                        var $docT = $wrapper.find('.num-scorm-documents');
                        if(!$docT.hasClass('active')){
                            $target.parent().hide();
                        }
                    }else{
                        $target.parent().show();
                        $this.addClass('active');
                        var $docT = $wrapper.find('.num-scorm-documents');
                        if($docT.hasClass('active')){
                            $docT.trigger('click');
                        }
                
                        $this.parent().addClass('active');
                        $target.show();
                    }
                    
                    $wrapper.find('.scorm-right-times, .corm-right-date, .scorm-right-video-count').toggle();
                    
                    var $targetParent = $target.parent();
                },
                error: function () {
                    $this.removeClass('scorm-struct-loading');
                }
            });
        }else{
            if($this.hasClass('active')){
                $this.removeClass('active');
                $this.parent().removeClass('active');
                $target.hide();
                var $docT = $wrapper.find('.num-scorm-documents');
                if(!$docT.hasClass('active')){
                    $target.parent().hide();
                }
            }else{
                $target.parent().show();
                $this.addClass('active');
                var $docT = $wrapper.find('.num-scorm-documents');
                if($docT.hasClass('active')){
                    $docT.trigger('click');
                }
                
                $this.parent().addClass('active');
                $target.show();
            }
            $wrapper.find('.scorm-right-times, .corm-right-date, .scorm-right-video-count').toggle();
            var $countVideos = $target.children('[data-count-videos]').data('count-videos');
            var $targetParent = $target.parent();
        }
        return false;
    });
    var $tooltipId = 0;
    $('.teacher-tooltip-link').hover(function(e){
        var $this = $(this);
        var $parent = $this.parent();
        var $target = $($this.attr('href'));
        if(!$this.hasClass('loaded')){
            $target.appendTo($parent);
            $parent.css({position: 'relative'});
            $('.teacher-tooltip').hide();
            $this.addClass('loaded');
            var $left = e.pageX - $this.offset().left;
            var $top = e.pageY - $this.offset().top + 10;
            
            $target.css({top: $top,left: $left}).show();
        }
    }, function(e){
        var $this = $(this);
        $this.removeClass('loaded');
        var $target = $($this.attr('href'));
        $tooltipId = setTimeout(function(){
            $target.hide();
        }, 500);
    });
    $('.teacher-tooltip').hover(function(){
        clearTimeout($tooltipId);
    }, function(){
        var $this = $(this);
        $tooltipId = setTimeout(function(){
            $this.hide();
        }, 500);
    });
    
    $('.scorm-hover').click(function(){
        var $this = $(this);
        if($this.is('a')){
            var $target = $($this.attr('href'));
        }else{
            var $target = $('#'+$this.data('target'));
        }
        $this.children('.glyphicon').toggleClass('glyphicon-triangle-bottom').toggleClass('glyphicon-triangle-top');
        $target.toggle();
        return false;
    });
    
    //Sticky menu
    $('[data-sticky-after]').each(function($i){
        var $stickyMenu = $(this),
            $mns = "sticky-menu-scrolled";
        
        var $targetAfter = $('[data-sticky="'+$stickyMenu.data('sticky-after')+'"]');
        if($targetAfter.length == 1){
            var $stickyOffset = $targetAfter.offset().top + $targetAfter.height();
            $(window).scroll(function() {
                if( $(this).scrollTop() > $stickyOffset ) {
                    $stickyMenu.addClass($mns);
                } else {
                    $stickyMenu.removeClass($mns);
                }
            });
        }
    });
    
    //Playlist hover
    $('.struct-menu').hover(function(){
        var $this = $(this);
        var $playlist = $this.children('.playlist');
        $playlist.stop().show(300);
        $this.addClass('plshow');
    }, function(){
        var $this = $(this);
        var $playlist = $this.children('.playlist');
        $playlist.stop().hide(150);
        $this.removeClass('plshow');
    });
    $('.struct-menu').click(function(){
        var $this = $(this);
        var $playlist = $this.children('.playlist');
        if($this.hasClass('plshow')){
            $playlist.stop().hide(150);
            $this.removeClass('plshow');
        }else{
            $playlist.stop().show(300);
            $this.addClass('plshow');
        }
    });

    //hmpro
    $('.learn-panel-close').click(function(e){
        // var $this = $(this), $targetid = $(this).attr('href');
        // var $target = $($targetid);
        // if($target.length > 0){
        //     if($target.hasClass('with-sidebar-second')){
        //         //Ẩn menu
        //         $target.addClass('hide-sidebar-second').removeClass('with-sidebar-second');
        //     }else{
        //         $target.removeClass('hide-sidebar-second').addClass('with-sidebar-second');
        //     }
        // }
        // return false;
        setLearnPanelVisibility(2);
    });
    //hmpro end

    $('.section-right-name').click(function(){
        $(this).parent().toggleClass('active');
    });
    
    /* -------- Fix modal position -------*/
    //Fix vị trí của modal
    $('.modal').on('show.bs.modal', function(){
        var $modal = $(this);
        if($modal.attr('id') == 'skipfixid'){
            return true;
        }
        
        if(!$modal.data('nofixpos')){
            var previousCss  = $modal.attr("style");
            $modal.css({
                position:   'absolute',
                visibility: 'hidden',
                display:    'block'
            });
            
            var wh = $(window).height();
            var dh = $modal.find('.modal-dialog').outerHeight();
            var mhmax = wh - 30;
            if(dh >= mhmax){
                
            }else{
                //Fix lại vị trí của modal
                if($modal.attr('id') != 'testing'){
                    var $mg = (wh - dh)/2;
                    $modal.find('.modal-dialog').css({marginTop:$mg}, 300);
                }
            }
            
            $modal.attr("style", previousCss ? previousCss : "");
        }
    });
    $('.modal').on('shown.bs.modal', function(){
        $(document.body).addClass('modal-open');
    });
    
    $(function () {
        $('[data-toggle="tooltip"]').tooltip()
    });
    
    $('body').on('click', '.extent-trial2', function(){
        var freeLearnId = $(this).data('id');
        var expiredButton = $(this);
        $.post('../../su-kien/khoa-co-ban-10/extent-trial.html', {freeLearnId: freeLearnId}, function (response) {
            var alert = $('#messageModal');
            if (response.status == 'success'){
                alert.find('.modal-title').text('Gia hạn thành công');
                alert.find('.warning-des').html(response.message);
                alert.find('.modal-footer').html('');
                alert.modal('show');
            } else {
                alert.find('.modal-title').text('Gia hạn chưa thành công');
                alert.find('.warning-des').html(response.message);
                alert.find('.modal-footer').html('');
                alert.modal('show');
            }
        }, 'JSON');
        return false;
    });

    //Tracking event
    $('body').on('click', '[data-track="ga"]', function(){
        if(typeof pageTracker != 'undefined' && typeof pageTracker._trackEvent == 'function' && window.location.host != 'local.hocmai.vn'){
            var $this = $(this);
            var $category = $this.attr('track-category');
            var $action = $this.attr('track-action');
            var $label = $this.attr('track-label');
            if(typeof $gaTrackCategory != 'undefined' && !$category){
                $category = $gaTrackCategory;
            }
            if(typeof $label == typeof undefined){
                pageTracker._trackEvent($category, $action);
            }else{
                pageTracker._trackEvent($category, $action, $label);
            }
        }
    });


    // responsive

    $('.course-menu .active-menu').click(function(e) {
        e.preventDefault();

        var body = $('body');
        if (body.hasClass('slide-right')) {
            body.removeClass('slide-right');
        } else {
            body.addClass('slide-right');
        }
    });

    $('.active-search-box').click(function (e) {
        e.preventDefault();
        var self = $(this);
        var form = self.parents('#search').find('form');
        if (form.is(':visible')) {
            form.hide();
        } else {
            form.show();
        }

    });

    $('.active-account-box').click(function (e) {
        e.preventDefault();
        var self = $(this);
        var form = self.parents('.header-action').find('.m-action-tool');
        if (form.is(':visible')) {
            form.hide();
        } else {
            $('.m-notification-box').hide();
            form.show();
        }
    });

    var notifPage = 1;
    $('.m-notification').click(function(e) {
        var box = $('.m-notification-box');
        if (box.is(':visible')) {
            box.hide();
        } else {
            $('.m-action-tool').hide();
            var $this = $(this);
            if(!$this.hasClass('loaded')){
                $this.addClass('loaded');
                $.ajax({
                    url: '/qa/comment2.php',
                    data: {notif_page: 0},
                    type: 'POST',
                    success: function(data){
                        if(data != ''){
                            $('.m-notification-list').append(data);
                            notifPage++;
                        };
                    }
                });
            }
            box.show();
        }
        return false;
    });

    $('.m-notification-more').click(function(e){
        var $this = $(this);
        if (!$this.hasClass('loading')) {
            $this.addClass('loading');
            $.ajax({
                url: '/qa/comment2.php',
                data: 'notif_page=' + notifPage,
                type: 'POST',
                success: function(data) {
                    if (data != '') {
                        $('.m-notification-list').append(data);
                        notifPage++;
                    }else{
                        $this.hide();
                    }
                    $this.removeClass('loading');
                }
            });
        }
        return false;
    });
    $notifID = 0;

    $('.m-notification-box').hover(function(e){
        clearTimeout($notifID);
    }, function(e){
        var $this = $(this);
        $notifID = setTimeout(function(){
            $this.hide();
        }, 500);
    });

    $('.m-notification-box').on('click', '[data-notifid]', function(){
        var $this = $(this);
        var $notifID = $this.data('notifid');
        if($notifID){
            $.ajax({
                url: '/qa/comment2.php',
                data: {action: 'readnotif', notifid: $notifID},
                type: 'GET',
                success: function($response) {

                }
            });
        }
        $this.css({color: '#505050'});
    });

    if (window.innerWidth < 992) {
        $('.mega-menu > li > a').click(function (e) {
            e.preventDefault();
            var self = $(this);
            var subMenu = self.siblings('.sub-menu ');
            if (subMenu.is(':visible')) {
                subMenu.slideUp(300);
                self.find('i').last().removeClass().addClass('glyphicon glyphicon-chevron-right pull-right');
            } else {
                subMenu.slideDown(300);
                self.find('i').last().removeClass().addClass('glyphicon glyphicon-chevron-down pull-right');
            }
        });
    }

    // fix modal not center in ie8
    if (/MSIE\s([\d.]+)/.test(navigator.userAgent)) {
        version = new Number(RegExp.$1);
        if (version == 8) {
            var windowHeight = $(window).height();
            var windowWidth = $(window).width();
            var boxHeight = $('.modal-dialog').height();
            var boxWidth = $('.modal-dialog').width();
            $('.modal-dialog').css({'margin-top': (windowHeight - boxHeight) / 3.5, 'margin-left' : 'auto', 'margin-right' : 'auto'});
        }
    }

    // **************
    // ScrollAnchor
    // **************
    $('.smenu [data-scroll]').on('click', function(e) {
        e.preventDefault();

        var index = $(this).parent('li').index();
        var scrollAnchor = $(this).data('scroll');

        $('.smenu li').removeClass('active');
        $('ul.smenu').each(function (i) {
            $(this).find('li:eq(' + index + ')').addClass('active');
        });

        if ($('[data-anchor="' + scrollAnchor + '"]').length > 0) {
            var scrollPoint = $('[data-anchor="' + scrollAnchor + '"]').show().offset().top;

            $('body,html').animate({
                scrollTop: scrollPoint - 50
            }, 500);
        }
    });

    $(document).on('scroll', function(){
        var smenu = $('.sticky-left .smenu');
        var stickyName = $('.course-sticky-name');

        if ($('#under-video').length > 0) {
            if ($(this).scrollTop() >= $('#under-video').offset().top) {
                smenu.show();
                stickyName.hide();
            } else {
                smenu.hide();
                stickyName.show();
            }
        }
    });
});

/*
*   visible
*   0: hidden
*   1: show
*   2: toggle
*/
function setLearnPanelVisibility(visible) {
var $this = $('#learn-panel-close'), $targetid = $this.attr('href');
var $target = $($targetid);

if (visible ==  2) {
    if($target.hasClass('with-sidebar-second')){
        visible = 0;
    } else {
        visible = 1;
    }
}

if (visible == 1) {
    $target.removeClass('hide-sidebar-second').addClass('with-sidebar-second');
} else {
    $target.addClass('hide-sidebar-second').removeClass('with-sidebar-second');
}
}

//pie chart

$.fn.createBarchart = function (optionvariables) {
  var chartContainer = $(this);
  var defaults = {
    'maxWidth': 244
  };
  var options = $.extend({}, defaults, optionvariables);
  var self = $(this),
      graphContainer = self.parent().find('.graph-container .graph'),
      barChart = $('<ul/>', { class: 'bar-chart' });
    
  barChart.appendTo(chartContainer);
    
  $.each(answerArray, function(index, value) {
    var chartAnswer = $('<li/>', { class: 'answer-' + index }),
        answerLabel = $('<span/>', { class: 'label', text: value }),
        percentageValue = percentageArray[index].toString(),
        answerPercentage = $('<span/>', { class: 'percentage', text: percentageValue.replace('.', ',') + '%' }),
        barTrack = $('<span/>', { class: 'bar-track' }),
        bar = $('<span />', { class: 'bar', style: 'width: ' + percentageValue + '%;' });
    
    chartAnswer.appendTo(barChart);
    answerLabel.appendTo(chartAnswer);
    answerPercentage.appendTo(chartAnswer);
    barTrack.appendTo(chartAnswer);
    bar.appendTo(barTrack);
  });
  
  //if($('html').hasClass('canvas')) {
    barChart.chart(
      {
        graphContainer: graphContainer
      }
    );
  //}
};

$.fn.chart = function (optionvariables) {
  var chart = $(this);
  var defaults = {
    'canvasSize': 110,
    'graphContainer': $('.graph-container .graph')
  };
  var options = $.extend({}, defaults, optionvariables);
  
  return chart.each(function () {
    var listItem = chart.find('li'),
        listItems = listItem.length,
        canvas = document.createElement('canvas'),
        canvasWidth = options.canvasSize,
        canvasHeight = options.canvasSize,
        graphContainer = options.graphContainer,
        total = 0,
        totalPercentage = 0,
        data = [],
        newData = [],
        i = 0,
        startingAngle,
        arcSize,
        endingAngle;

    $.each(percentageArray, function(index, value) {
      newData.push(3.6 * value);
    });
    
    function sumTo(a, i) {
      var sum = 0;
      for (var j = 0; j < i; j++) {
        sum += a[j];
      }
      return sum - 90;
    }
    
    function degreesToRadians(degrees) {
      return ((degrees * Math.PI)/180);
    }
    
    canvas.setAttribute('width', canvasWidth);
    canvas.setAttribute('height', canvasHeight);
    canvas.setAttribute('id', 'chartCanvas');
    graphContainer.append(canvas);
    
    var cvs = document.getElementById('chartCanvas'),
        ctx = cvs.getContext('2d'),
        centerX = canvasWidth / 2,
        centerY = canvasHeight / 2,
        radius = canvasWidth / 2;
    
    ctx.clearRect(0, 0, canvasWidth, canvasHeight);
    
    listItem.each(function(e) {
      startingAngle = degreesToRadians(sumTo(newData, i));
      arcSize = degreesToRadians(newData[i]);
      endingAngle = startingAngle + arcSize;
      ctx.beginPath();
      ctx.moveTo(centerX, centerY);
      ctx.arc(centerX, centerY, radius, startingAngle, endingAngle, false);
      ctx.closePath();
      ctx.fillStyle = $(this).find('.bar').css('backgroundColor');
      ctx.fill();
      ctx.restore();
      i++;
    });
    
    ctx.beginPath();
    ctx.moveTo(centerX, centerY);
    ctx.arc(centerX, centerY, radius * .45, 0, 2 * Math.PI, false);
    ctx.closePath();
    ctx.fillStyle = $('body').css('backgroundColor');
    ctx.fill();
  });
};


