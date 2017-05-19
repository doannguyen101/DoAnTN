jQuery.fn.extend({
    addCommentForm: function (callback) {
        var $this = $(this);
        var $paid = $this.data('comment-paid');
        if ($paid != 1) {
            return;
        }

        if ($this.hasClass('comment-form-loading')) {
            return false;
        }


        if (typeof escapeHtmlEntities !== 'function') {
            var $script = document.createElement('script');
            $script.type = 'text/javascript';
            $script.async = true;
            $script.src = 'https://hocmai.vn/theme/hocmai/js/escapeHtmlEntities.js';
            var s = document.getElementsByTagName('script')[0];
            s.parentNode.insertBefore($script, s);
        }

        var $type = $this.data('comment-type');
        var commentType = $this.data('type');
        switch ($type) {
            case 'scorm':
                var $scormid = $this.data('scormid');
                if (!$this.attr('id')) {
                    $this.attr('id', 'qa_' + $scormid + '_wrapper');
                }
                $.ajax({
                    url: '/qa/comment-form-2.php',
                    data: {type: $type, scormid: $scormid, commentType: commentType},
                    type: 'GET',
                    beforeSend: function () {
                        $this.addClass('comment-form-loading');
                    },
                    success: function ($response) {
                        var $form = $response.trim();
                        if ($form) {
                            $this.prepend($form);
                            $this.find('[data-comment-action="submit"],[data-comment-action="cancel"]').data('wrapperTarget', $this.attr('id'));
                            if (commentType == '1' && $this.parents(".tab-pane").hasClass('focus')) {
                                $this.find('textarea').first().focus();
                                $this.parents(".tab-pane").removeClass('focus');
                            }
                        }
                        $this.removeClass('comment-form-loading');
                        if (typeof callback == 'function') {
                            callback();
                        }
                    },
                    error: function () {
                        $this.removeClass('comment-form-loading');
                    }
                });
                break;
        }
    }
});

if (!('ifCond' in Handlebars.helpers)) {
    Handlebars.registerHelper('ifCond', function (v1, operator, v2, options) {
        switch (operator) {
            case '==':
                return (v1 == v2) ? options.fn(this) : options.inverse(this);
            case '===':
                return (v1 === v2) ? options.fn(this) : options.inverse(this);
            case '<':
                return (v1 < v2) ? options.fn(this) : options.inverse(this);
            case '<=':
                return (v1 <= v2) ? options.fn(this) : options.inverse(this);
            case '>':
                return (v1 > v2) ? options.fn(this) : options.inverse(this);
            case '>=':
                return (v1 >= v2) ? options.fn(this) : options.inverse(this);
            case '&&':
                return (v1 && v2) ? options.fn(this) : options.inverse(this);
            case '||':
                return (v1 || v2) ? options.fn(this) : options.inverse(this);
            case '!=':
                return (v1 != v2) ? options.fn(this) : options.inverse(this);
            default:
                return options.inverse(this);
        }
    });
}

$(document).ready(function () {
    $('[data-toggle="comments"][data-action="auto"]').each(function ($i) {
        var $this = $(this);
        var $type = $this.data('comment-type');
        switch ($type) {
            case 'scorm':
                $this.addCommentForm();
                QA.loadQuestions($this);
                break;
        }
        return false;
    });

    $('[data-toggle="comments"][data-action="click"]').click(function ($i) {
        var $this = $(this);
        var $type = $this.data('comment-type'),
            $paid = $this.data('comment-paid'),
            $count = $this.data('comment-count'),
            $firstPage = $this.data('first-page');
        if (!$firstPage) {
            $firstPage = 20;
        }
        var $targetID = '';
        if ($this.is('a')) {
            $targetID = $this.attr('href');
        }
        if ($this.data('comment-target')) {
            $targetID = '#' + $this.data('comment-target');
        }
        if (!$targetID) {
            return false;
        }
        var $target = $($targetID);

        if ($target.hasClass('comments-loaded')) {
            $target.toggle();
        } else {
            $target.show().data({
                'comment-type': $type,
                'comment-paid': $paid,
                'comment-count': $count,
                'first-page': $firstPage
            });
            switch ($type) {
                case 'scorm':
                    $target.data('scormid', $this.data('scormid'));
                    $target.addCommentForm();
                    $target.loadComments();
                    break;
            }
        }
        return false;
    });

    var commentContainer = $('[data-toggle="comments"]');

    //Nh·∫•n nA∫t g·ª≠i
    commentContainer.on('click', '[data-comment-action="submit"]', function () {
        var $this = $(this);
        var $type = $this.data('comment-type');

        switch ($type) {
            case 'scorm':

                var $scormid = $this.data('scormid');
                var $commentForm = $this.parents('.qa_form');
                var $inputComment = $commentForm.find('textarea');
                var commentType = $commentForm.find('[name="type"]').val();
                var time = $commentForm.find('[name="time"]').val();
                var targetId = $commentForm.find('[name="target"]').val();
                var question = $commentForm.find('[name="question"]').val();
                var parentContainer = $this.parents('.view-scorm-comments');
                $content = escapeHtmlEntities($inputComment.val());

                if ($content.length < 10) {

                    alert("N·ªôi dung bA¨nh lu·∫≠n quA° ng·∫Øn");
                } else {

                    var $error = $this.attr("error"),
                        $replyto = $this.attr("replyto"),
                        $qaid = $this.attr("qaid"),
                        $qa_moderate = $commentForm.data('qa-moderate');
                    $wrapper = $('#' + $this.data('wrapperTarget'));

                    if ($this.hasClass('submitting')) {
                        return false;
                    }

                    $.ajax({
                        url: '/qa/action/save.php',
                        data: {
                            action: 'save',
                            scormid: $scormid,
                            replyto: $replyto,
                            qaid: $qaid,
                            content: $content,
                            error: $error,
                            type: commentType,
                            time: time,
                            target: targetId,
                            question: question
                        },
                        type: 'POST',
                        dataType: 'json',
                        beforeSend: function () {
                            $this.addClass('submitting');
                        },
                        success: function ($response) {

                            var $commentQA = $wrapper.find('#comment-' + $qaid);

                            $this.removeAttr('replyto').removeAttr('qaid');
                            $commentForm.find('.btn_cancel').hide();
                            $commentForm.detach().prependTo($wrapper);
                            $commentQA.removeClass("flash");
                            var $comment;
                            if ($response.status == 'success') {

                                $inputComment.val('');
                                $commentForm.find('[name="question"]').val('');
                                parentContainer.data('question', '');

                                if ($response.repair == 1) {
                                    $commentQA.scrollTop(0);

                                    $('#comment-' + $qaid + ' .content p').html($response.comment);
                                    $commentQA.addClass("flash");
                                    $commentQA.attr('text_comment', $("<div/>").html($response.text).text());
                                } else {
                                    if (!$qa_moderate) {
                                        if ($replyto > 0) {
                                            var $commentReplyTo = $wrapper.find('#comments-' + $replyto);
                                            $commentReplyTo.scrollTop(0);

                                            $comment = $(QA.renderReply($response.data, $response.guest));

                                            $comment.find('.more, .btnRepair, .btnReply').data('wrapperTarget', $wrapper.attr('id'));

                                            $commentReplyTo.prepend($comment);
                                            $commentReplyTo.find('.comment').first().addClass("flash");
                                            $total_comment = $wrapper.find('#comment-' + $replyto).find('.btnReply span');
                                            $total_comment.html(parseInt($total_comment.html()) + 1);
                                        } else {
                                            var $qaComments = $wrapper.find('.qa_comments');
                                            if ($qaComments.length == 0) {

                                                $qaComments = $('<ul id="qa_comments-' + $scormid + '-'+ commentType +'" class="qa_comments"></ul>');
                                                $qaComments.appendTo($wrapper);
                                            }

                                            //if (commentType == 1) {
                                                $wrapper.find('.qa_comments').html(QA.loadMoreComments($scormid, $response.data, $response.count, $response.remainCount, 0, $response.first_perpage, $response.guest, targetId));
                                                $wrapper.find('.qa_comments .more, .qa_comments .btnRepair, .qa_comments .btnReply').data('wrapperTarget', $wrapper.attr('id'));
                                                $qaComments.find('.comment').first().addClass("flash");
                                            /*} else {
                                                $comment = $(QA.renderQuestion($response.data, $response.guest));

                                                $comment.find('.more, .btnRepair, .btnReply').data('wrapperTarget', $wrapper.attr('id'));
                                                $qaComments.scrollTop(0);
                                                $qaComments.prepend($comment);
                                                $qaComments.find('.comment').first().addClass("flash");
                                            }*/
                                        }
                                    }
                                }
                            } else {
                                alert($response.message);
                            }
                            $this.removeClass('submitting');
                        },
                        error: function () {
                            $this.removeClass('submitting');
                        }
                    });
                }
                break;
        }
        return false;
    });

    //Nh·∫•n nA∫t h·ªßy bA¨nh lu·∫≠n
    commentContainer.on('click', '[data-comment-action="cancel"]', function () {
        var $this = $(this);

        $scormid = $this.prev().attr("scormid");
        $wrapper = $('#' + $this.data('wrapperTarget'));
        $this.hide();
        $wrapper.find('[data-comment-action="submit"], [data-comment-action="cancel"]').removeAttr('replyto').removeAttr('qaid');

        var form = $wrapper.find('.qa_form');
        if (form.parents('.view-qa-single').length) {
            form.hide();
        }
        $wrapper.find('.qa_form [name="question"]').show();
        $wrapper.find('.qa_form .report_error').show();
        $wrapper.find('textarea').val('');

        if ($wrapper.find('.comment-guide').length) {
            $wrapper.find('.qa_form').detach().insertAfter($wrapper.find('.comment-guide'));
        } else {
            $wrapper.find('.qa_form').detach().prependTo($wrapper);
        }

        return false;
    });

    //Nh·∫•n vA o cA°c kAΩ hi·ªáu
    commentContainer.on('click', '.qa_tex img', function () {
        var $this = $(this);
        var tag = $this.attr("alt"),
            textarea = $this.parents('.qa_form').find("textarea"),
            selectionStart = textarea[0].selectionStart,
            selectionEnd = textarea[0].selectionEnd;

        var val = textarea.val();
        var selected_txt = val.substring(selectionStart, selectionEnd);
        var before_txt = val.substring(0, selectionStart);
        var after_txt = val.substring(selectionEnd, val.length);

        textarea.val(before_txt + (tag == 'tex' ? '[' + tag + ']' + selected_txt + '[/' + tag + ']' : tag) + after_txt);

        //console.log(before_txt.length + ('[' + tag + ']').length);
        textarea[0].selectionStart = textarea[0].selectionEnd = before_txt.length + selected_txt.length + (tag == 'tex' ? '[' + tag + ']' : tag).length;

        if (textarea.setSelectionRange) {
            textarea.focus();
            textarea.setSelectionRange(selectionStart, selectionEnd);
        } else if (textarea.createTextRange) {
            var range = textarea.createTextRange();
            range.collapse(true);
            range.moveEnd('character', selectionEnd);
            range.moveStart('character', selectionStart);
            range.select();
        }

        textarea.focus();
    });

    //ChA®n liA™n k·∫øt
    commentContainer.on('click', '.insert_link', function () {
        var textarea = $(this).parents('.qa_form').find("textarea");
        textarea.focus().val(textarea.val() + '[link=ChA®n liA™n k·∫øt vA o ƒëA¢y]ChA®n n·ªôi dung vA o ƒëA¢y[/link]');
    });

    //ChA®n ·∫£nh
    commentContainer.on('change', '.upload_image', function (e) {
        var textarea = $(this).parents('.qa_form').find("textarea");
        var event = e.originalEvent;
        var files = event.target.files;
        if (files.length == 1) {
            for (var i = 0; i < files.length; i++) {

                // Ensure it's an image
                if (files[i].type.match(/image.*/)) {

                    // Load image
                    var reader = new FileReader();
                    reader.onload = function (readerEvent) {
                        var image = new Image();
                        image.onload = function (imageEvent) {

                            // Resize image
                            var canvas = document.createElement('canvas');
                            var canvas_hight = document.createElement('canvas'),
                                max_size = 1024,
                                max_size_thumb = 300;
                            width_hight = width = image.width,
                                height_hight = height = image.height;

                            if (width > height) {
                                if (width > max_size_thumb) {
                                    height *= max_size_thumb / width;
                                    width = max_size_thumb;
                                }
                                if (width_hight > max_size) {
                                    height_hight *= max_size / width_hight;
                                    width_hight = max_size;
                                }
                            } else {
                                if (height > max_size_thumb) {
                                    width *= max_size_thumb / height;
                                    height = max_size_thumb;
                                }
                                if (height_hight > max_size) {
                                    width_hight *= max_size / width_hight;
                                    height_hight = max_size;
                                }
                            }

                            canvas_hight.width = width_hight;
                            canvas_hight.height = height_hight;
                            canvas_hight.getContext('2d').drawImage(image, 0, 0, width_hight, height_hight);
                            canvas.width = width;
                            canvas.height = height;
                            canvas.getContext('2d').drawImage(image, 0, 0, width, height);
                            // Upload image
                            var xhr = new XMLHttpRequest();
                            if (xhr.upload) {


                                // File uploaded / failed
                                xhr.onreadystatechange = function (event) {
                                    if (xhr.readyState == 4) {
                                        if (xhr.status == 200) {
                                            textarea.focus().val(textarea.val() + '[img]' + xhr.responseText + '[/img]');
                                        } else {
                                            alert('CA≥ l·ªói x·∫£y ra, vui lA≤ng th·ª≠ l·∫°i!');
                                        }
                                    }
                                }

                                // Start upload
                                xhr.open('post', '/qa/process.php', true);
                                xhr.send(canvas.toDataURL('image/jpeg') + '|' + canvas_hight.toDataURL('image/jpeg'));

                            }

                        }

                        image.src = readerEvent.target.result;

                    }
                    reader.readAsDataURL(files[i]);
                }

            }
        } else {
            alert("S·ªë ·∫£nh t·∫£i lA™n quA° nhi·ªÅu!")
        }
        ;
        // Clear files
        event.target.value = '';
    });

    //Nh·∫•n nA∫t xem thA™m bA≠nh lu·∫≠n
    commentContainer.on('click', '.qa_comments .more', function () {
        var $this = $(this);
        var $qaid = ($this.attr("qaid") != undefined) ? $this.attr("qaid") : 0;
        var $scormid = $this.attr("scormid") != undefined ? $this.attr("scormid") : 0;
        var $page = $this.attr("page");
        var targetId = $this.data('target');
        var type = $this.parents(".view-scorm-comments").data('type');

        var $wrapper = $('#' + $this.data('wrapperTarget'));
        var $firstPage = $wrapper.data('first-page');
        if (!$firstPage) {
            $firstPage = 20;
        }
        if ($this.hasClass('loading')) {
            return false;
        }
        $.ajax({
            url: '/qa/action/list-more.php',
            data: {
                action: 'listmore',
                qaid: $qaid,
                scormid: $scormid,
                page: $page,
                first_page: $firstPage,
                target: targetId,
                type: type
            },
            type: 'POST',
            dataType: 'JSON',
            beforeSend: function () {
                $this.addClass('loading');
            },
            success: function (response) {
                console.log(response);
                if (response.status == 'success') {
                    var html = '';
                    if ($qaid) {
                        html = QA.loadMoreReplies($qaid, response.data, response.count, response.remain, $page, response.first_perpage, response.guest, $scormid);
                    } else {
                        html = QA.loadMoreComments($scormid, response.data, response.count, response.remainCount, $page, response.first_perpage, response.guest, targetId);
                    }
                }

                if (html) {
                    var $data = $(html);
                    $data.last().data('wrapperTarget', $this.data('wrapperTarget'));
                    $data.find('.btnRepair, .btnReply').data('wrapperTarget', $this.data('wrapperTarget'));
                    $this.parent().append($data);
                }

                $this.removeClass('loading');
                $this.remove();
            },
            error: function () {
                $this.removeClass('loading');
            }
        });

        return false;
    });

    //Nh·∫•n like bA¨nh lu·∫≠n
    commentContainer.on('click', '.qa_comments .btnLike', function () {
        var $this = $(this);

        if ($this.hasClass('notlogin')) {
            alert("B·∫°n ch∆∞a ƒëƒÉng nh·∫≠p!");
            return false;
        }

        var $qaid = $this.attr("qaid");
        var $scormid = $this.attr("scormid");

        $.ajax({
            url: '/qa/action/like.php',
            data: {qaid: $qaid, scormid: $scormid},
            type: 'POST',
            success: function (data) {
                var $countLike = $this.children("span");
                if ($this.hasClass("disabled")) {
                    var $count = parseInt($countLike.html()) - 1;
                    $countLike.html($count);
                    if ($count == 0) {
                        $countLike.hide();
                    }
                    $this.removeClass("disabled");
                    $this.attr("title", "ThA≠ch");
                } else {
                    var $count = parseInt($countLike.html()) + 1;
                    $countLike.show().html($count);
                    $this.addClass("disabled");
                    $this.attr("title", "B·ªè thA≠ch");
                }
            }
        });

        return false;
    });

    //Type in question input


    var timer;
    commentContainer.on('input', 'input[name="question"]' ,  function() {
        var self = $(this);

        clearTimeout(timer);
        timer = setTimeout(function () {
            var question = self.val();
            var parentContainer = self.parents('.view-scorm-comments');

            parentContainer.data('question', question);
            parentContainer.removeClass('comments-loading comments-loaded');
            QA.loadQuestions(parentContainer, '/qa/action/search.php', true);

        }, 500);
    });

    //Nh·∫•n nA∫t s·ª≠a bA¨nh lu·∫≠n
    commentContainer.on('click', '.qa_comments .btnRepair', function () {
        var $this = $(this),
            $scormid = $this.attr("scormid"),
            $qaid = $this.attr("qaid");

        var $wrapper = $('#' + $this.data('wrapperTarget'));

        $wrapper.find('[data-comment-action="submit"]').removeAttr('replyto').removeAttr('qaid');
        $wrapper.find('.qa_form').show();
        $wrapper.find('.qa_form .btn_cancel').show();
        $wrapper.find('.qa_form .report_error').hide();
        $wrapper.find('.qa_form [name="question"]').hide();
        $wrapper.find('.qa_form').detach().appendTo($this.parent().parent());

        $wrapper.find('.qa_form textarea').focus();
        $wrapper.find('[data-comment-action="submit"]').attr("qaid", $qaid);
        $wrapper.find('textarea').val($("<textarea/>").html($('#comment-' + $qaid).attr('text_comment')).text());
        return false;
    });

    //Nh·∫•n vA o nA∫t tr·∫£ l·ªùi bA¨nh lu·∫≠n
    commentContainer.on('click', '.qa_comments .btnReply', function () {
        var $this = $(this);
        if ($this.hasClass('notlogin')) {
            alert("B·∫°n hA£y ƒëƒÉng nh·∫≠p ƒë·ªÉ tham gia th·∫£o lu·∫≠n nhA©!");
            return false;
        }


        var $scormid = $this.attr("scormid"),
            $replyto = $this.attr("replyto");

        var $wrapper = $('#' + $this.data('wrapperTarget'));

        $wrapper.find('[data-comment-action="submit"]').removeAttr('replyto').removeAttr('qaid');
        $wrapper.find('.qa_form .btn_cancel').show();
        $wrapper.find('.qa_form').show();
        $wrapper.find('.qa_form').detach().appendTo($this.parent().parent());
        $wrapper.find('.qa_form textarea').val('');
        $wrapper.find('.qa_form textarea').focus();
        $wrapper.find('.qa_form [name="question"]').hide();
        $wrapper.find('[data-comment-action="submit"]').attr("replyto", $replyto);
        $wrapper.find('.qa_form .report_error').hide();
        return false;
    });

    //Nh·∫•n nA∫t duy·ªát ho·∫∑c b·ªè duy·ªát
    commentContainer.on('click', '.qa_comments .btnApprove', function () {
        var $this = $(this),
            $scormid = $this.attr("scormid"),
            $qaid = $this.attr("qaid");

        $ok = confirm("B·∫°n cA≥ ch·∫Øn ch·∫Øn " + ($this.hasClass("approved") ? "B·ª?" : "") + " DUY·ªÜT n·ªôi dung nA y khA¥ng?");

        if ($ok == true) {
            $.ajax({
                url: '/qa/comment2.php',
                data: {action: 'approve', qaid: $qaid, scormid: $scormid},
                type: 'POST',
                success: function (data) {
                    if (data == 'ok') {
                        $this.parent().parent().fadeOut("slow", function () {
                            $this.parent().parent().remove();
                        });
                    }
                }
            });
        }

        return false;
    });
    //Nh·∫•n nA∫t xA≥a bA¨nh lu·∫≠n
    commentContainer.on('click', '.qa_comments .btnDelete', function () {
        var $this = $(this),
            $scormid = $this.attr("scormid"),
            $qaid = $this.attr("qaid");

        $ok = confirm("B·∫°n cA≥ ch·∫Øn ch·∫Øn XAìA n·ªôi dung nA y khA¥ng?");

        if ($ok == true) {
            $.ajax({
                url: '/qa/action/delete.php',
                data: {action: 'delete', qaid: $qaid, scormid: $scormid},
                type: 'POST',
                success: function (data) {
                    if (data == 'ok') {
                        $this.parent().parent().fadeOut("slow", function () {
                            $this.parent().parent().remove();
                        });
                    }
                }
            });
        }

        return false;
    });

    //Chuy·ªÉn bA¨nh lu·∫≠n thA nh bA°o l·ªói
    commentContainer.on('click', '.qa_comments .convert_error', function () {
        var $this = $(this),
            $scormid = $this.attr("scormid"),
            $status = $this.attr("status");
        $qaid = $this.attr("qaid");

        $ok = confirm("B·∫°n cA≥ mu·ªën chuy·ªÉn th·∫£o lu·∫≠n nA y thA nh thA¥ng bA°o l·ªói?");

        if ($ok == true) {
            $.ajax({
                url: '/qa/comment2.php',
                data: {action: 'convert_error', qaid: $qaid, scormid: $scormid, status: $status},
                type: 'POST',
                success: function (data) {
                    $this.parent().parent().removeClass('flash');
                    if (data == 'ok') {
                        $this.parent().parent().addClass('flash');
                        if ($status == 2) {
                            $this.html('Chuy·ªÉn v·ªÅ tr·∫£ l·ªùi');
                            $this.attr('status', '1');
                        } else {
                            $this.html('Chuy·ªÉn v·ªÅ bA°o l·ªói');
                            $this.attr('status', '2');
                        }
                    } else if (data == 'no') {
                        alert('B·∫°n khA¥ng cA≥ quy·ªÅn th·ª±c hi·ªán thao tA°c nA y!');
                    }
                }
            });
        }

        return false;
    });

    /*commentContainer.on('click', '.qa_comments .view-qa a', function (e) {
        e.preventDefault();
        var self = $(this);
        var url = self.attr('href');
        var id = self.data('id');
        var scormId = self.data('scormid');
        var type = self.data('type');

        var modal = $('#viewQAModal');
        var container = modal.find('.view-scorm-comments');

        $.ajax({
            url: '/qa/action/list.php',
            data: {scormid: scormId, type: type, notif_qaid: id},
            type: 'GET',
            dataType: 'JSON',

            beforeSend: function () {
                self.addClass('comments-loading');
            },

            success: function ($response) {
                if ($response.status == 'success') {
                    container.html(QA.showCommentBlock(scormId, $response.data, $response.count, $response.remainCount, 0, $response.first_perpage, $response.guest));
                    container.find('.qa_comments .more').data('wrapperTarget', id);
                    modal.modal('show');
                    history.pushState('', '', url);
                } else {
                    //window.location = url;
                }
            },

            error: function () {
                self.removeClass('comments-loading');
            }
        });
    });*/

    //Nh·∫•n like bookmark
    commentContainer.on('click', '.qa_comments .btnBookmark', function () {
        var $this = $(this);
        if ($this.hasClass('notlogin')) {
            alert("B·∫°n ch∆∞a ƒëƒÉng nh·∫≠p!");
            return false;
        }

        var $qaid = $this.attr("qaid");
        var $scormid = $this.attr("scormid");

        $.ajax({
            url: '/qa/action/bookmark.php',
            data: {qaid: $qaid, scormid: $scormid},
            type: 'POST',
            dataType: 'JSON',
            success: function (data) {
                if (data.status == 'success') {
                    if (data.state == 1) {
                        $this.attr("title", "B·ªè theo dAµi");
                        $this.text("B·ªè theo dAµi");
                        console.log(23);
                    } else {
                        $this.attr("title", "Theo dAµi");
                        $this.text("Theo dAµi");
                    }
                }
            }
        });

        return false;
    });

    $('#learn-page').on('focus', '.qa_form textarea', function () {
        var self = $(this);
        var form = self.parents('.qa_form');

        if (typeof QA.videoPlayer !== 'undefined') {
            QA.videoPlayer.pause();
            var videoIndex = QA.getVideoIndex(QA.videoPlayer);
            form.find('[name="time"]').val(videoIndex.offset);
            form.find('[name="target"]').val(videoIndex.scoreid);

            if (!QA.focus || (QA.focus && QA.currentVideo == videoIndex.scoreid && Math.abs(QA.currentOffset - videoIndex.offset) > 120)) {

                if (form.parent().hasClass('.view-scorm-comments')) {
                    // load comment
                    var container = $('[data-toggle="comments"][data-action="tab-show"]');
                    container.data('target', videoIndex.scoreid);
                    container.data('path', 1);
                    container.data('time', videoIndex.offset);
                    QA.loadQuestions(container);
                }
            }

            QA.focus = 1;
            QA.currentVideo = videoIndex.scoreid;
            QA.currentOffset = videoIndex.offset;
        }
    });

    $('#viewQAModal').on('hidden.bs.modal', function () {
        window.history.back();
    });

    var $notifPage = 1;
    $('#notification').click(function (e) {
        var $this = $(this);
        if (!$this.hasClass('loaded')) {
            $this.addClass('loaded');
            $.ajax({
                url: '/qa/action/notification.php',
                data: {notif_page: 0},
                type: 'POST',
                success: function (data) {
                    if (data != '') {
                        console.log(data);
                        $('#notification-list').append(data);
                        $notifPage++;
                    }
                }
            });
        }
        $('#notification-box').show();
        return false;
    });

    $('#notification-more').click(function (e) {
        var $this = $(this);
        if (!$this.hasClass('loading')) {
            $this.addClass('loading');
            $.ajax({
                url: '/qa/action/notification.php',
                data: {notif_page: $notifPage},
                type: 'POST',
                success: function (data) {
                    if (data != '') {
                        $('#notification-list').append(data);
                        $notifPage++;
                    } else {
                        $this.hide();
                    }
                    $this.removeClass('loading');
                }
            });
        }
        return false;
    });

    $notifID = 0;
    $('#notification-box').hover(function (e) {
        clearTimeout($notifID);
    }, function (e) {
        var $this = $(this);
        $notifID = setTimeout(function () {
            $this.hide();
        }, 500);
    });

    $('#notification-box').on('click', '[data-notifid]', function () {
        var $this = $(this);
        var $notifID = $this.data('notifid');
        if ($notifID) {
            $.ajax({
                url: '/qa/action/read-notification.php',
                data: {action: 'readnotif', notifid: $notifID},
                type: 'GET',
                success: function ($response) {

                }
            });
        }
        $this.css({color: '#505050'});
    });
});