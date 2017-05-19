var QA = QA || {

        currentVideo: 0,
        currentOffset: 0,
        focus: 0,
        init: function (target) {

        },

        getVideoIndex: function ($player) {

            if (typeof $player != 'undefined') {

                return {
                    offset: $player.getTime(),
                    index: $player.getClip().index,
                    scoreid: QA.getScoId($player)
                };
            }

            return {
                offset: 0,
                index: 0,
                scoreid: QA.getScoId($player)
            };
        },

        getScoId: function ($player) {
            var $scoid = 0;

            if (typeof $player != 'undefined') {
                var clip = $player.getClip();
                $scoid = QA.getUrlParam('scoid', clip.originalUrl);

                if ($scoid == '') {
                    $scoid = 0;
                }
            }

            if ($scoid == 0 && typeof $dfscoid == 'number') {
                $scoid = $dfscoid;
            }
            return $scoid;
        },

        getUrlParam: function (name, url) {

            if (typeof url != 'string') {
                url = location.search;
            }

            name = name.replace(/[\[]/, "\\[").replace(/[\]]/, "\\]");
            var regex = new RegExp("[\\?&]" + name + "=([^&#]*)"),
                results = regex.exec(url);

            return results === null ? "" : decodeURIComponent(results[1].replace(/\+/g, " "));
        },

        loadQuestions: function (target, url, empty) {
            var $this = target;

            if (typeof url == 'undefined') {
                url = '/qa/action/list.php';
            }

            if (typeof empty == 'undefined') {
                empty = false;
            }

            if ($this.hasClass('comments-loading') || $this.hasClass('comments-loaded')) {
                return false;
            }

            var $type = $this.data('comment-type');

            switch ($type) {
                case 'scorm':

                    var $scormid = $this.data('scormid'),
                        $count = $this.data('comment-count'),
                        $qaid = $this.data('qaid'),
                        type = $this.data('type'),
                        targetId = $this.data('target'),
                        path = $this.data('path'),
                        time = $this.data('time'),
                        question = $this.data('question'),
                        $firstPage = $this.data('first-page');

                    if (!$firstPage) {
                        $firstPage = 20;
                    }

                    if ($count > 0) {

                        if (!$this.attr('id')) {
                            $this.attr('id', 'qa_' + $scormid + '_wrapper');
                        }

                        $.ajax({
                            url: url,
                            data: {
                                scormid: $scormid,
                                type: type,
                                target: targetId,
                                first_page: $firstPage,
                                notif_qaid: $qaid ? $qaid : -1,
                                path: path,
                                question: question,
                                time: time
                            },
                            type: 'GET',
                            dataType: 'JSON',
                            beforeSend: function () {
                                $this.addClass('comments-loading');
                            },
                            success: function ($response) {

                                if ($response.status == 'success') {

                                    var commentContainer = $this.find('.qa_comments');

                                    if (!commentContainer.length) {
                                        $this.append(QA.showCommentBlock($scormid, $response.data, $response.count, $response.remainCount, 0, $response.first_perpage, $response.guest, targetId, type));
                                    } else {

                                        if (empty) {
                                            commentContainer.empty();
                                        }

                                        $this.find('.qa_comments').html(QA.loadMoreComments($scormid, $response.data, $response.count, $response.remainCount, 0, $response.first_perpage, $response.guest, targetId));
                                    }

                                    $this.find('.qa_comments .more, .qa_comments .btnRepair, .qa_comments .btnReply').data('wrapperTarget', $this.attr('id'));
                                } else {
                                    console.log($response.smg);
                                }

                                $this.removeClass('comments-loading');
                            },
                            error: function () {

                                $this.removeClass('comments-loading');
                            }
                        });
                    } else {

                        var $paid = $this.data('comment-paid');

                        if ($paid != '1') {

                        }
                    }

                    break;
            }
        },

        showCommentBlock: function (scormId, data, count, countMore, page, firstPage, guest, targetId, type) {
            var commentContainer = $('<ul class="qa_comments" id="qa_comments-' + scormId + '-'+ type +'"></ul>');

            if (data) {
                for (var i in data) {
                    var html = QA.renderQuestion(data[i], guest);
                    if (html) {
                        commentContainer.append(html);
                    }
                }
            }

            if (countMore) {
                var loadMore = '<li class="more" data-target="'+ targetId +'" scormid="' + scormId + '" page="' + (parseInt(page) + 1) + '">Xem thA�m ' + countMore + ' trao đổi bA i</li>';

                commentContainer.append(loadMore);
            }

            return commentContainer;
        },

        loadMoreComments: function (scormId, data, count, countMore, page, firstPage, guest, targetId) {
            var html = '';
            if (data) {
                for (var i in data) {
                    html += QA.renderQuestion(data[i], guest);
                }
            }

            if (countMore > 0) {
                html += '<li class="more" data-target="'+ targetId +'" scormid="' + scormId + '" page="' + (parseInt(page) + 1) + '">Xem thA�m ' + countMore + ' trao đổi bA i</li>';
            }

            return html;
        },

        loadMoreReplies: function (id, data, count, countMore, page, firstPage, guest, scormId) {
            var html = '';
            if (data) {
                for (var i in data) {
                    html += QA.renderReply(data[i], guest);
                }
            }

            if (countMore) {
                html += '<li class="more" scormid="' + scormId + '" qaid="' + id + '" page="1" style="margin-left: 0 !important;">Xem thA�m ' + countMore + ' trả lời</li>';
            }

            return html;
        },

        renderQuestion: function (data, guest) {
            // add qa
            var source = $("#qa-item").html();

            var params = data.qa;
            params.isNotError = (data.isMod || data.isOwner) && parseInt(params.status) != 2;
            params.isComment = data.isMod && parseInt(params.status) == 2;
            params.isApprove = parseInt(params.status) >= 0;
            params.allowAction = data.isMod || data.isOwner;
            params.isMod = data.isMod;
            params.replies = data.replies;
            params.first_perpage = data.first_perpage;
            params.scormid = data.scormid;
            params.remain = data.remain ? data.remain : 0;
            params.guest = guest;
            params.isQalike = data.qalike ? 1 : 0;
            params.isBookmark = data.bookmark ? 1 : 0;
            params.isOwner = data.isOwner;

            var template = Handlebars.compile(source);

            return template(params);
        },

        renderReply: function (data, guest) {
            // add qa
            var source = $("#qa-child-item").html();

            var params = data.reply;
            params.allowAction = data.isMod || data.isOwner;
            params.isMod = data.isMod;
            params.guest = guest;
            params.isQalike = data.qalike ? 1 : 0;

            var template = Handlebars.compile(source);
            return template(params);
        }
    };