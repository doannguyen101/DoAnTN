var Note = Note || {};

/**
 * Get video index
 * @returns {{offset: (number|Date|*), index: *, scoreid: number}}
 */
Note.getVideoIndex = function ($player) {
    if (typeof $player != 'undefined') {
        return {
            offset: $player.getTime(),
            index: $player.getClip().index,
            scoreid: Note.getScoId($player)
        };
    }
    return {
        offset: 0,
        index: 0,
        scoreid: Note.getScoId($player)
    };
};

/**
 * Get current sco id
 * @TODO get sco id
 * @returns {number}
 */
Note.getScoId = function($player) {
    var $scoid = 0;
    if(typeof $player != 'undefined'){
        var clip = $player.getClip();
        $scoid = getUrlParam('scoid', clip.originalUrl);
        if($scoid == ''){
            $scoid = 0;
        }
    }
    if($scoid == 0 && typeof $dfscoid == 'number'){
        $scoid = $dfscoid;
    }
    return $scoid;
};

function selectorParse(selector) {
    var obj = {tag:'', classes:[], id:'', attrs:[]};
    selector.split(/(?=\.)|(?=#)|(?=\[)/).forEach(function(token){
        switch (token[0]) {
            case '#':
                obj.id = token.slice(1);
            break;
            case '.':
                obj.classes.push(token.slice(1));
            break;
            case '[':
                obj.attrs.push(token.slice(1,-1).split('='));
            break;
            default :
                obj.tag = token;
            break;
        }
    });
    return obj;
}
function createElementFromSelector(selector, tagDefault){
    var $k;
    var $elementParser = selectorParse(selector);
    var $tag = $elementParser.tag || tagDefault || 'div';
    var $node = $('<'+$tag+'></'+$tag+'>');
    if($elementParser.classes.length > 0){
        for($k in $elementParser.classes){
            $node.addClass($elementParser.classes[$k]);
        }
    }
    
    if($elementParser.attrs.length > 0){
        for($k in $elementParser.attrs){
            $node.attr($elementParser.attrs[$k][0], '' || $elementParser.attrs[$k][1]);
        }
    }
    return $node;
}
(function($) {
    if(typeof $.fn.editabletypes != 'undefined'){
        $.extend(true, $.fn.editabletypes.textarea.prototype, {
            render: function () {
                this.setClass();
                this.setAttr('placeholder');
                this.setAttr('rows');                        
                
                this.$input.keydown(function (e) {
                    if (e.shiftKey && e.which === 13) {
                        //shift + enter
                        $(this).val($(this).val() + '\n');
                    } else if (e.which === 13) {
                        //enter
                        $(this).closest('form').submit();
                    }
                }).keypress(function (e) {
                    if (e.which === 13) {
                        e.preventDefault();
                    }
                });
            },
        });
    }
    
}(jQuery));

jQuery.fn.extend({
    loadnotes: function(){
        var $this = $(this);
        if($this.hasClass('loading')){
            return this;
        }
        
        if(typeof jQuery.fn.editabletypes !== 'undefined'){
            jQuery.extend(true, $.fn.editabletypes.textarea.prototype, {
                render: function () {
                    this.setClass();
                    this.setAttr('placeholder');
                    this.setAttr('rows');                        
                    
                    this.$input.keydown(function (e) {
                        if (e.shiftKey && e.which === 13) {
                            //shift + enter
                            $(this).val($(this).val() + '\n');
                        } else if (e.which === 13) {
                            //enter
                            $(this).closest('form').submit();
                        }
                    }).keypress(function (e) {
                        if (e.which === 13) {
                            e.preventDefault();
                        }
                    });
                },
            });
        }
        
        var $type = $this.data('note-type');
        
        switch($type) {
            case 'scorm':
                var $scormid = $this.data('scormid');
                var $packageid = $this.data('packageid');
                if(!$this.attr('id')){
                    $this.attr('id', 'notes-scorm-'+$scormid);
                }
                $.ajax({
                    url: '/mod/scorm/note/load.php',
                    data: {type: $type, scormid: $scormid, packageid: $packageid},
                    type: 'POST',
                    dataType: 'JSON',
                    beforeSend: function() {
                         $this.addClass('loading');
                    },
                    success: function($response) {
                        $this.removeClass('loading');
                        switch($response.status){
                            case 'success':
                                $this.html($response.html.trim());
                                $this.initnotes();
                            break;
                        }
                    },
                    error: function () {
                        $this.removeClass('loading');
                    }
                });
            break;
        }
        return this;
    },
    createNote: function($note_data, $settings){
        var $this = $(this);
        var $note = createElementFromSelector($settings.noteItem, 'li');
        var $noteItemPlayer = createElementFromSelector($settings.noteItemPlayer);
        var $noteItemBody = createElementFromSelector($settings.noteItemBody);
        var $deleteButton = createElementFromSelector($settings.deleteButton, 'a');
        var $noteContent = createElementFromSelector($settings.noteContent, 'div');
        
        //Item player time settings
        $noteItemPlayer.attr({
            'data-index': $note_data.video_index, 
            'data-offset': $note_data.video_offset, 
        });
        $noteItemPlayer.append('<div class="ih-title">'+$note_data.video_offset_text+'</div>');
        $note.append($noteItemPlayer);
        
        $deleteButton.attr('href', '#').data('noteid', $note_data.id).text('x');
        $noteItemBody.append($deleteButton);
        
        //Editable settings
        $noteContent.attr({
            'data-type': 'textarea', 
            'data-pk': $note_data.id, 
            'data-url': '/mod/scorm/note/editNoteAjax.php', 
        });

        $noteContent.html($note_data.content);
        
        //Enable editable
        $noteContent.editable($settings.editableConfig);
        
        $noteItemBody.append($noteContent);
        $note.append($noteItemBody);
        var $beforeNotes = $this.children($settings.noteItem).filter(function(index) {
            return parseInt($(this).children($settings.noteItemPlayer).data('offset')) <= $note_data.video_offset;
        });
        if($beforeNotes.length > 0){
            $beforeNotes.last().after($note);
        }else{
            $this.append($note);
        }
        
        return $note;
    },
    initnotes: function(options) {
        if(typeof $f != 'function'){
            return this;
        }
        var default_options = {
            videoPlayer: 'hocmaiplayer',
            noteList: '.note-list',
            noteItem: '.note-item',
            noteItemBody: '.note-item-body',
            noteContent: '.note-content',
            deleteButton: '.note-delete',
            noteItemPlayer: '.note-item-player',
            noteForm: 'form.nf-form-add',
            editableConfig: {
                mode: 'inline',
                showbuttons: false,
                error: function(response, newValue) {
                    var res = {};
                    if (typeof response == 'string') {
                        res = JSON.parse(response);
                    } else {
                        res = response;
                    }
            
                    if(res.status == 'error') {
                        alert(res.message);
                    }
                    return false;
                },
                success: function(response, newValue) {
                    var res = {};
                    if (typeof response == 'string') {
                        res = JSON.parse(response);
                    } else {
                        res = response;
                    }
            
                    if (res.status == 'error') {
                        alert(res.message);
                        return false;
                    }
                    return null;
                }
            }
        };
        var $this = $(this);
        var $settings = $.extend(true, {}, default_options, options);
        if(typeof $settings.videoPlayer == 'string'){
            $settings.videoPlayer = $f($settings.videoPlayer);
            $settings.videoPlayer.onStart(function(){
                if(typeof this.playCallback === 'function'){
                    this.playCallback.call();
                    this.playCallback = null;
                }
            });
        }
        $this.data('settings', $settings);
        $this.data('player', $settings.videoPlayer);
        
        //Notes content
        var $notesContent = $this.find($settings.noteContent);
        
        //Enable editable
        $notesContent.editable($settings.editableConfig);
        
        //Delete note
        $this.on('click', $settings.deleteButton, function (e){
            var $noteid = $(this).data('noteid');
            var $note = $(this).parents($settings.noteItem);
            if (confirm('Bạn có chắc muốn xóa ghi chú này?')) {
                $.post('../../mod/scorm/note/deleteNoteAjax.html', {id: $noteid}, function (response) {
                    if (response.status == 'error') {
                        alert(response.message);
                    } else if (response.status == 'success') {
                        $note.remove();
                    }
                }, 'JSON');
            }
            return false;
        });
        
        $this.on('mouseenter', $settings.noteItemBody, function() {
            var $thisBody = $(this);
            if (!$thisBody.find('textarea').length) {
                $thisBody.find($settings.deleteButton).show();
            }
        });
        
        $this.on('mouseleave', $settings.noteItemBody, function() {
            $(this).find($settings.deleteButton).hide();
        });
    
        $this.on('focus', 'textarea', function (e) {
            $(this).parents($settings.noteItemBody).find($settings.deleteButton).hide();
        });
        
        $notesContent.on('shown', function(e, editable) {
            $(this).parents($settings.noteItemBody).find($settings.deleteButton).hide();
        });
        
        // jump to video index
        $this.on('click', $settings.noteItemPlayer, function (e) {
            var $tp = $(this);
            var $index = $tp.data('index');
            var $offset = $tp.data('offset');
            if (typeof $index != 'undefined' && typeof $offset != 'undefined') {
                var $player = $this.data('player');
                var $playIndex = Note.getVideoIndex($player);
                if($index == $playIndex.index){
                    $player.seek(parseInt($offset));
                }else{
                    $player.playCallback = function(){
                        $player.seek(parseInt($offset));
                    }
                    $player.play(parseInt($index));
                }
            }
        });
        
        // Add note
        var $addNoteForm = $this.find($settings.noteForm);
        $this.on('focus', $settings.noteForm, function(e){
            if(typeof $settings.videoPlayer == 'object' && typeof $settings.videoPlayer.pause == 'function'){
                $settings.videoPlayer.pause();
            }
        });
        $this.on('blur', $settings.noteForm, function(e){
            if(typeof $settings.videoPlayer == 'object' && typeof $settings.videoPlayer.play == 'function'){
                $settings.videoPlayer.play();
            }
        });
        
        //Ajax submit note form
        $this.on('submit', $settings.noteForm, function(e){
            var form = $(this);
            var $input = form.find('[name="content"]');
            var content = $input.val();
            if ($.trim(content) == '') {
                alert('Bạn chưa nhập nội dung ghi chú.');
                return false;
            }
            var scorm = form.find('[name="scorm"]').val();
            var packageid = form.find('[name="packageid"]').val();
            var index = Note.getVideoIndex($settings.videoPlayer);
            var $indexVideo = Note.getVideoIndex($settings.videoPlayer);
            var data = {
                content: content,
                scorm: scorm,
                packageid: packageid
            };
            
            $.extend(data, index);
            
            $.post('../../mod/scorm/note/addNoteAjax.html',data, function (response) {
                if (response.status == 'error') {
                    alert(response.message);
                } else if (response.status == 'success') {
                    var $notesList = $this.find($settings.noteList);
                    var $scoNotes = $notesList.find('ul[data-scoid="'+ response.data.scoid +'"]');
                    var $newNote = $scoNotes.createNote(response.data, $settings);
                    // clear form
                    $input.val('');
                    $notesList.parent().notesScrollTo($newNote);
                }
            }, 'JSON');
            return false;
        });
        //Write note
        $addNoteForm.on('keydown', '[name="content"]', function(e){
            var $input = $(this);
            if (e.shiftKey && e.which === 13) {
                $input.val($input.val() + '\n');
            } else {
                if (e.which === 13) {
                    e.preventDefault();
                    $input.closest($settings.noteForm).submit();
                }
            }
        });
        
        $addNoteForm.on('keypress', '[name="content"]', function(e){
            if (e.which === 13) {
                e.preventDefault();
            }
        });
    
        //scroll to current sco
        var scoId = Note.getScoId($settings.videoPlayer);
        $this.find($settings.noteList).parent().notesScrollTo($this.find('.sco-title[data-scoid="'+ scoId +'"]'));
    },
    notesScrollTo: function($target){
        if($target.length > 0){
            var $this = $(this);
            var $scrollPoint = $this.scrollTop() +  $target.position().top;
            $this.scrollTop($scrollPoint);
        }
        
    }
});

$(document).ready(function(e){
     if(typeof jQuery.fn.editabletypes == 'undefined'){
        var $script = document.createElement('script');
        $script.type = 'text/javascript';
        $script.async = true;
        $script.src = '../../plugins/bootstrap-editable/js/bootstrap-editable.min.js';
        var s = document.getElementsByTagName('script')[0];
        s.parentNode.insertBefore($script, s);
     }
});