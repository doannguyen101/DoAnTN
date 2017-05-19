function renderRank($this,$ranks,$type,$top){var table=$this.find('table');var tbody=table.find('tbody');var thead=table.find('thead');var $i=0;tbody.empty();var stt='';switch($type){case 1:var partSubjectOrder=[];if(typeof $ranks[0]!='undefined'){if($ranks[0].subjectType==2){for(var i in $ranks[0].partScores){partSubjectOrder.push(i);}
thead.html('<tr>'+
'<th>STT</th>'+
'<th>Tài khoản</th>'+
'<th>Họ tên</th>'+
'<th>Trường</th>'+
'<th colspan="4">Điểm</th>'+
'<th>Thời gian</th>'+
'<th>Môn thi</th>'+
'</tr>');thead.append('<tr>'+
'<th></th>'+
'<th></th>'+
'<th></th>'+
'<th></th>'+
'<th class="regular">'+$ranks[0].partScores[partSubjectOrder[0]].subject+'</th>'+
'<th class="regular">'+$ranks[0].partScores[partSubjectOrder[1]].subject+'</th>'+
'<th class="regular">'+$ranks[0].partScores[partSubjectOrder[2]].subject+'</th>'+
'<th class="regular">Tổng</th>'+
'<th class="regular">Thời gian</th>'+
'<th class="regular">Môn thi</th>'+
'</tr>');}else{thead.html('<tr>'+
'<th>STT</th>'+
'<th>Tài khoản</th>'+
'<th>Họ tên</th>'+
'<th>Trường</th>'+
'<th>Điểm</th>'+
'<th>Thời gian</th>'+
'<th>Môn thi</th>'+
'</tr>');}}
for($i=0;$i<$top;$i++){var classHighlight='';if(($top-$i)<4){classHighlight='blhl';}
if($i<3){stt='stt';}else{stt='';}
if(typeof $ranks[$i]!=='undefined'){if($ranks[$i].subjectType==2){tbody.append('<tr class="'+classHighlight+'">'+
'<td><span class="'+stt+'">'+$ranks[$i]['rank']+'</span></td>'+
'<td><span>'+$ranks[$i]['username']+'</span></td>'+
'<td><span>'+$ranks[$i]['fullname']+'</span></td>'+
'<td><span>'+$ranks[$i]['school']+'</span></td>'+
'<td>'+$ranks[$i].partScores[partSubjectOrder[0]].score+'</td>'+
'<td>'+$ranks[$i].partScores[partSubjectOrder[1]].score+'</td>'+
'<td>'+$ranks[$i].partScores[partSubjectOrder[2]].score+'</td>'+
'<td><span>'+$ranks[$i]['score']+'</span></td>'+
'<td><span>'+$ranks[$i]['testtime']+'</span></td>'+
'<td><span>'+$ranks[$i]['subject']+'</span></td>'+
'</tr>');}else{tbody.append('<tr class="'+classHighlight+'">'+
'<td><span class="'+stt+'">'+$ranks[$i]['rank']+'</span></td>'+
'<td><span>'+$ranks[$i]['username']+'</span></td>'+
'<td><span>'+$ranks[$i]['fullname']+'</span></td>'+
'<td><span>'+$ranks[$i]['school']+'</span></td>'+
'<td><span>'+$ranks[$i]['score']+'</span></td>'+
'<td><span>'+$ranks[$i]['testtime']+'</span></td>'+
'<td><span>'+$ranks[$i]['subject']+'</span></td>'+
'</tr>');}}else{if(partSubjectOrder.length){tbody.append('<tr class="'+classHighlight+'">'+
'<td><div class="'+stt+'">--</div></td>'+
'<td><span>--</span></td>'+
'<td><span>--</span></td>'+
'<td><span>--</span></td>'+
'<td><span>--</span></td>'+
'<td><span>--</span></td>'+
'<td><span>--</span></td>'+
'<td><span>--</span></td>'+
'<td><span>--</span></td>'+
'<td><span>--</span></td>'+
'</tr>');}else{tbody.append('<tr class="'+classHighlight+'">'+
'<td><div class="'+stt+'">--</div></td>'+
'<td><span>--</span></td>'+
'<td><span>--</span></td>'+
'<td><span>--</span></td>'+
'<td><span>--</span></td>'+
'<td><span>--</span></td>'+
'<td><span>--</span></td>'+
'</tr>');}}}
break;case 2:for($i=1;$i<11;$i++){if($i<4){stt='stt';}else{stt='';}
if(typeof $ranks[$i]!=='undefined'){var html='<tr>'+
'<td><span class="'+stt+'">'+$ranks[$i]['rank']+'</span></td>'+
'<td><span>'+$ranks[$i]['userfullname']+'</span></td>'+
'<td><span>'+$ranks[$i]['userschool']+'</span></td>';if(typeof $ranks[$i].score!='undefined'){for(var k=1;k<8;k++){html+='<td><span>'+$ranks[$i]['score'][k]+'</span></td>';}}
html+='<td><span>'+$ranks[$i]['totalScore']+'</span></td>'+
'</tr>';tbody.append(html);}else{tbody.append('<tr>'+
'<td><span>--</span></td>'+
'<td><span>--</span></td>'+
'<td><span>--</span></td>'+
'<td><span>--</span></td>'+
'<td><span>--</span></td>'+
'<td><span>--</span></td>'+
'<td><span>--</span></td>'+
'<td><span>--</span></td>'+
'<td><span>--</span></td>'+
'<td><span>--</span></td>'+
'<td><span>--</span></td>'+
'</tr>');}}
break;case 3:for($i=1;$i<21;$i++){if($i<4){stt='stt';}else{stt='';}
if(typeof $ranks[$i]!=='undefined'){var html='<tr>'+
'<td><span class="'+stt+'">'+$ranks[$i]['rank']+'</span></td>'+
'<td><span>'+$ranks[$i]['username']+'</span></td>'+
'<td><span>'+$ranks[$i]['userfullname']+'</span></td>'+
'<td><span>'+$ranks[$i]['userschool']+'</span></td>';if(typeof $ranks[$i].score!='undefined'){html+='<td><span>'+$ranks[$i].score[1].score+'</span></td>';html+='<td><span>'+$ranks[$i].score[2].score+'</span></td>';html+='<td><span>'+$ranks[$i].score[3].score+'</span></td>';html+='<td><span>'+$ranks[$i].score[4].score+'</span></td>';html+='<td><span>'+$ranks[$i].score[1].time+'</span></td>';html+='<td><span>'+$ranks[$i].score[2].time+'</span></td>';html+='<td><span>'+$ranks[$i].score[3].time+'</span></td>';html+='<td><span>'+$ranks[$i].score[4].time+'</span></td>';}
html+='<td><span>'+$ranks[$i]['totalScore']+'</span></td>';html+='<td><span>'+$ranks[$i]['totalTestTime']+'</span></td>'+
'</tr>';tbody.append(html);}else{tbody.append('<tr>'+
'<td><span class="'+stt+'">--</span></td>'+
'<td><span>--</span></td>'+
'<td><span>--</span></td>'+
'<td><span>--</span></td>'+
'<td><span>--</span></td>'+
'<td><span>--</span></td>'+
'<td><span>--</span></td>'+
'<td><span>--</span></td>'+
'<td><span>--</span></td>'+
'<td><span>--</span></td>'+
'<td><span>--</span></td>'+
'<td><span>--</span></td>'+
'<td><span>--</span></td>'+
'<td><span>--</span></td>'+
'</tr>');}}
break;case 4:for($i=1;$i<11;$i++){if($i<4){stt='stt';}else{stt='';}
if(typeof $ranks[$i]!=='undefined'){var html='<tr>'+
'<td><span class="'+stt+'">'+$ranks[$i]['rank']+'</span></td>'+
'<td><span>'+$ranks[$i]['school']+'</span></td>'+
'<td><span>'+$ranks[$i]['province']+'</span></td>'+
'<td><span>'+$ranks[$i]['countJoin']+'</span></td>';html+='<td><span>'+$ranks[$i]['totalScore']+'</span></td>'+
'</tr>';tbody.append(html);}else{tbody.append('<tr>'+
'<td><span>--</span></td>'+
'<td><span>--</span></td>'+
'<td><span>--</span></td>'+
'<td><span>--</span></td>'+
'<td><span>--</span></td>'+
'</tr>');}}
break;}}
(function($){$.extend(true,$.validator,{defaults:{onchange:function(element){if(element.name in this.submitted){this.element(element);}},},prototype:{init:function(){this.labelContainer=$(this.settings.errorLabelContainer);this.errorContext=this.labelContainer.length&&this.labelContainer||$(this.currentForm);this.containers=$(this.settings.errorContainer).add(this.settings.errorLabelContainer);this.submitted={};this.valueCache={};this.pendingRequest=0;this.pending={};this.invalid={};this.reset();var groups=(this.groups={}),rules;$.each(this.settings.groups,function(key,value){if(typeof value==="string"){value=value.split(/\s/);}
$.each(value,function(index,name){groups[name]=key;});});rules=this.settings.rules;$.each(rules,function(key,value){rules[key]=$.validator.normalizeRule(value);});function delegate(event){var validator=$.data(this.form,"validator"),eventType="on"+event.type.replace(/^validate/,""),settings=validator.settings;if(settings[eventType]&&!$(this).is(settings.ignore)){settings[eventType].call(validator,this,event);}}
$(this.currentForm)
.on("focusin.validate focusout.validate keyup.validate",":text, [type='password'], [type='file'], select, textarea, [type='number'], [type='search'], "+
"[type='tel'], [type='url'], [type='email'], [type='datetime'], [type='date'], [type='month'], "+
"[type='week'], [type='time'], [type='datetime-local'], [type='range'], [type='color'], "+
"[type='radio'], [type='checkbox']",delegate)
.on("click.validate","select, option, [type='radio'], [type='checkbox']",delegate)
.on("change.validate","select",delegate);if(this.settings.invalidHandler){$(this.currentForm).on("invalid-form.validate",this.settings.invalidHandler);}
$(this.currentForm).find("[required], [data-rule-required], .required").attr("aria-required","true");},}});jQuery.validator.addMethod("phone",function(value,element){var $reg1=/^01\d{9}$/,$reg2=/^09\d{8}$/,$reg3=/^0[2-8]\d{8}$/;return this.optional(element)||$reg1.test(value)||$reg2.test(value)||$reg3.test(value);},"Số điện thoại không hợp lệ");jQuery.validator.addMethod("cmt",function(value,element){var $reg1=/^\d{9}$/,$reg2=/^\d{12}$/;return this.optional(element)||$reg1.test(value)||$reg2.test(value);},"Số điện thoại không hợp lệ");jQuery.validator.addMethod("email",function(value,element){var $reg=/^[a-zA-Z0-9][a-zA-Z0-9\._]{2,62}[a-zA-Z0-9]@[a-z0-9\-]{3,}(\.[a-z]{2,4}){1,2}$/;return this.optional(element)||$reg.test(value);},"Địa chỉ email không hợp lệ");jQuery.validator.addMethod("schoolrequired",function(value,element,param){var $form=$(this.currentForm);if(param.length==0){return false;}
var $school_class=$form.find('[name="'+param[0]+'"]');if($school_class.length==0){return false;}else{var $class_id=parseInt($school_class.val());if($class_id<1||$class_id>13){return false;}
switch(param[1]){case'thpt':if($class_id>9){return $.validator.methods.required.call(this,value,element,true);}else{return true;}
break;case'thcs':if($class_id>9){return true;}else{return $.validator.methods.required.call(this,value,element,true);}
break;}}},"Thiếu thông tin trường học");jQuery.fn.extend({loadRank:function(){var $this=$(this);var $subject=$this.data('subject'),$top=20,$month=$this.data('month'),$year=$this.data('year'),$type=parseInt($this.data('type')),$round=parseInt($this.data('round'));$.ajax({url:'get-rank.php',data:{subject:$subject,top:$top,month:$month,year:$year,type:$type,round:$round},type:'POST',dataType:'JSON',success:function($ranks){renderRank($this,$ranks,$type,$top);},error:function(){}});return this;}});}(jQuery));function twodigits($num){if($num<10){$num='0'+$num;}
return $num+'';}
function scrollTo(scrollAnchor){var scrollPoint=$('[data-anchor="'+scrollAnchor+'"]').show().offset().top;$('body,html').animate({scrollTop:scrollPoint},500);}
function getUrlParam(name){name=name.replace(/[\[]/,"\\[").replace(/[\]]/,"\\]");var regex=new RegExp("[\\?&]"+name+"=([^&#]*)"),results=regex.exec(location.search);return results===null?"":decodeURIComponent(results[1].replace(/\+/g," "));}
function confirmCheck(isCheck){$.ajax({type:"POST",url:'/thi-thu-thpt-quoc-gia/check-login.php',data:{confirm:1},dataType:'json',success:function($res){if($res.login=='pass'){var subjectUrl=$.cookie('subjectUrl');$.removeCookie('subjectUrl');console.log(subjectUrl);if(subjectUrl){location.href=subjectUrl;}
$.removeCookie('showflmodal');}else if($res.login=='true'){var $modalIC=$('#userInfoConfirmModal');var $mdElements=$modalIC.find('[name]');$mdElements.each(function($i){var $name=$(this).attr('name');if(typeof $res[$name]!='undefined'){$modalIC.data($name,$res[$name]);}else{$modalIC.data($name,null);}});$modalIC.data('title','PEN-CUP 2016');$modalIC.data('exeaction','exam');$modalIC.modal('show');$.removeCookie('showflmodal');}else{$.cookie('showflmodal',1);$('#loginModal').modal('show');}}});}
(function($){$(document).ready(function(e){var d=new Date();var time=d.getTime();$.ajax({url:"/settheme.php",type:"GET",data:{t:time}});$('#time-popup').on('click','.close-popup',function(e){e.preventDefault();$(this).parents('#time-popup').hide();});$('ul#countdown').countdown($dateto,function(event){var $this=$(this);switch(event.type){case"update":$this.find('span#hours').html(twodigits(event.offset.totalDays*24+event.offset.hours));$this.find('span#minutes').html(twodigits(event.offset.minutes));$this.find('span#seconds').html(twodigits(event.offset.seconds));var $form=$this.closest('form');if(!$form.data('canfinish')&&$form.data('timesave')<(event.timeStamp/1000)){$form.data('canfinish',true);}
var examPopups=document.getElementById("time-popup");if(event.offset.hours==0&&event.offset.minutes==30&&event.offset.seconds==0){examPopups.getElementsByClassName("content-popup")[0].style.backgroundImage='url("images/test/30min-left.png")';examPopups.style.display="block";setTimeout(function(){examPopups.style.display='none';$.removeCookie('time-popup');},10000);}
if(event.offset.hours==0&&event.offset.minutes==5&&event.offset.seconds==0){examPopups.getElementsByClassName("content-popup")[0].style.backgroundImage='url("images/test/5min-left.png")';examPopups.style.display="block";setTimeout(function(){examPopups.style.display='none';$.removeCookie('time-popup');},10000);}
break;case"finish":var $form=$this.closest('form');if($form.length==1){$form.find('[name="finishattempt"]').val(1);$form.submit();}
break;}});$('.test-submit').click(function(e){var $this=$(this);var $form=$this.closest('form');if($form.length==1&&!$this.hasClass('loading')){$this.addClass('loading');if($form.data('canfinish')){$form.find('[name="finishattempt"]').val(1);$form.submit();}else{var $mModal=$('#messageModal');$mModal.find('.warning-des').html('Thí sinh chỉ được phép nộp bài sau 2/3 thời gian thi.');$mModal.find('.modal-title').html('Cảnh báo vi phạm quy chế thi');$mModal.find('.modal-footer').html('<button type="button" class="btn btn-cancel" data-dismiss="modal">Đóng</button>');$mModal.modal('show');$this.removeClass('loading');}}});$('.test-save').click(function(e){var $this=$(this);var $form=$this.closest('form');if($form.length==1){$form.find('[name="saveattempt"]').val(1);$form.submit();}});$('.subject-choose-bt, .register-test, .test-exam-btn, .btn-subject-ranking, .subject-choose').click(function(e){$.cookie('subjectUrl','/thi-thu-thpt-quoc-gia/'+$(this).attr('href'));confirmCheck(false);return false;});$('.download-solution').click(function(e){$.cookie('subjectUrl',$(this).attr('href'));confirmCheck(false);return false;});$('.test-page-body .que img').each(function(i){var $this=$(this),$height=$this.height()+4;$this.css({verticalAlign:'text-top'});if($height>30){var $modHeight=$height%30,$mgb=0;if($modHeight<7){$mgb=-1*(30-$modHeight);}else{$mgb=30-$modHeight;}
$this.css({marginBottom:$mgb+'px'});}});$('[data-sticky-after]').each(function($i){var $stickyMenu=$(this),$mns=$stickyMenu.data("sticky-class");var $targetAfter=$('[data-sticky="'+$stickyMenu.data('sticky-after')+'"]');if($targetAfter.length==1){var $stickyOffset=$targetAfter.offset().top+$targetAfter.height();if($(window).scrollTop()>$stickyOffset){$stickyMenu.addClass($mns);}else{$stickyMenu.removeClass($mns);}
$(window).scroll(function(){if($(this).scrollTop()>$stickyOffset){$stickyMenu.addClass($mns);}else{$stickyMenu.removeClass($mns);}});}});$(".score-form").validate({rules:{score:{required:true,min:0,max:10}},messages:{score:{required:'Bạn chưa nhập điểm bài kiểm tra',min:'Điểm kiểm tra không hợp lệ',max:'Điểm kiểm tra không hợp lệ'}},errorElement:'label',errorPlacement:function(place,element){place.addClass('error-message').appendTo(element.closest('div'));},highlight:function(element,errorClass,validClass){if(element.type==="radio"){this.findByName(element.name).addClass(errorClass).removeClass(validClass);}else if(element.type==="select-one"||element.type==="select-multiple"){var $element=$(element);$element.addClass(errorClass).removeClass(validClass);var $next=$element.next();if($next.length>0&&$next.hasClass('select2')){$next.addClass(errorClass).removeClass(validClass);}}else{$(element).addClass(errorClass).removeClass(validClass);}},unhighlight:function(element,errorClass,validClass){if(element.type==="radio"){this.findByName(element.name).addClass(validClass).removeClass(errorClass);}else if(element.type==="select-one"||element.type==="select-multiple"){var $element=$(element);$element.addClass(validClass).removeClass(errorClass);var $next=$element.next();if($next.length>0&&$next.hasClass('select2')){$next.addClass(validClass).removeClass(errorClass);}}else{$(element).addClass(validClass).removeClass(errorClass);}},submitHandler:function(form){var $thisForm=$(form);if($thisForm.valid()){var $modal=$thisForm.parents('.modal');var $url=$thisForm.attr('action');if($thisForm.hasClass('waitting')){return false;}
$thisForm.addClass('waitting');$.ajax({type:"POST",url:$url,data:$thisForm.serialize(),dataType:'JSON',success:function($response){switch($response.status){case'success':$modal.modal('hide');$('.test-page-body').html($response.message);break;case'login':$('#loginModal').modal('show');break;case'error':alert('Có lỗi dữ liệu nhập');break;}
$thisForm.removeClass('waitting');}});}}});$('.btn-download-exam.confirm, .btn-download-exam-2').click(function(){var $mModal=$('#messageModal');console.log($(this).data('subject'));if($(this).data('subject')=='2'||$(this).data('subject')=='4'){$mModal.find('.warning-des').html('<p>Bạn bắt buộc phải thi cả 3 môn trong tổ hợp môn. Hãy đảm bảo bạn có đủ thời gian để hoàn thành bài thi này.</p>');}else{$mModal.find('.warning-des').html('<p>Hãy đảm bảo bạn có đủ thời gian để hoàn thành bài thi này.</p>');}
$mModal.find('.modal-title').html('Thi thử THPT quốc gia 2017');$mModal.find('.modal-footer').html('<a href="'+$(this).attr('href')+'" class="btn btn-primary">Bắt đầu thi</a>');$mModal.modal('show');return false;});$('form.search').submit(function(){var $thisForm=$(this);var container=$(this).parents('.steps-content');var type=1;if(typeof type!='undefined'){var $this=$('.lc-content').find('.board-1');var $subject=$this.data('subject'),$top=$this.data('top'),$month=$this.data('month'),$year=$this.data('year');if($thisForm.find('[name="query"]').val()){$.ajax({url:$thisForm.attr('action'),data:{type:type,subject:$subject,top:$top,month:$month,year:$year,key:$thisForm.find('[name="query"]').val()},type:'POST',dataType:'JSON',success:function($ranks){renderRank($this,$ranks,type,$top);},error:function(){}});}else{$this.loadRank();}}
return false;});$('.rankboard a').click(function(e){e.preventDefault();var self=$(this);if(!self.closest('li').hasClass('active')){$('.rankboard li').removeClass('active');self.closest('li').addClass('active');var subNavIndex=self.data('type');var type=subNavIndex;var container=$('.list-container');container.data('type',type);var board=container.find('.lc-content').find('.board-'+type);board.data('type',type);board.loadRank();container.find('.board').hide();container.find('.board-'+type).show();board.show();}});$('.board').hide();var board=$('.board-1');board.loadRank();board.show();$('[data-scroll]').on('click',function(){var scrollAnchor=$(this).data('scroll');scrollTo(scrollAnchor);return false;});$('[data-share="fb"]').click(function(){if(typeof FB!='undefined'){var $this=$(this);FB.ui({method:'feed',link:$this.data('href')||$this.attr('href')||window.location,name:$this.data('title'),caption:'hocmai.vn',description:$this.data('des'),app_id:600873143331099,picture:$this.data('img')},function(response){});}
return false;});$('[data-share="fbrd"]').click(function(e){e.preventDefault();var $this=$(this);if(window.innerWidth>480){if(typeof FB!='undefined'){FB.ui({method:'feed',link:$this.data('href')||$this.attr('href')||window.location,name:$this.data('title'),caption:'hocmai.vn',description:$this.data('des'),app_id:600873143331099,picture:$this.data('img')},function(response){});}}else{var url='https://www.facebook.com/dialog/feed?app_id=600873143331099'+
'&display=popup&caption=hocmai.vn'+
'&link='+encodeURI($this.data('href')||$this.attr('href')||window.location)+'&'+
'redirect_uri='+encodeURI('index.html')+'&description='+encodeURI($this.data('des'))+' '+
'&picture='+encodeURI($this.data('img'))+'&name='+encodeURI($this.data('title'))+'';window.open(url);}
return false;});$('[data-share="fbrt"]').click(function(){if(typeof FB!='undefined'){var $this=$(this);FB.ui({method:'feed',link:$this.data('href')||$this.attr('href')||window.location,name:$this.data('title'),caption:'hocmai.vn',description:$this.data('des'),app_id:600873143331099,picture:$this.data('img')},function(response){if(response&&!response.error){$('#retest').submit();}else{}});}
return false;});if($.cookie('showflmodal')){confirmCheck(false);}
$('#userInfoConfirmModal [name="city"]').change(function(e){var $this=$(this);var $city=$this.val();var $modal=$this.parents('#userInfoConfirmModal');var $city_df=$modal.data('city');var $school_df=$modal.data('school_id');var $schoolElement=$modal.find('[name="school_id"]');$.ajax({url:'/get-school.php',data:{city:$city},type:'POST',dataType:'json',success:function($schools){var $schoolHtml='<option value=""> -- Chọn trường học -- </option>';for($sID in $schools){$schoolHtml+='<option value="'+$schools[$sID].id+'">'+$schools[$sID].name+'</option>';}
$schoolElement.addClass('loaded').html($schoolHtml);if($city==$city_df&&$school_df){$schoolElement.val($school_df);}
$schoolElement.change();}});});$('#userInfoConfirmModal [name="school_class"]').change(function(e){var $this=$(this);var $class_id=$this.val();var $modal=$this.parents('#userInfoConfirmModal');if($class_id>0&&$class_id<10){$modal.find('.uicf-school-thpt').hide();$modal.find('.uicf-school-thcs').show();}else{$modal.find('.uicf-school-thpt').show();$modal.find('.uicf-school-thcs').hide();}});$("#user-info-confirm-form").validate({rules:{fullname:{required:true},school_class:{required:true},city:{required:true},school_id:{schoolrequired:['school_class','thpt']},school:{schoolrequired:['school_class','thcs']},phone2:{required:true,phone:true},cmt:{required:true,cmt:true}},messages:{fullname:{required:'Chưa nhập họ tên'},school_class:{required:'Chưa chọn lớp'},city:{required:'Chưa chọn Tỉnh/Thành phố'},school_id:{schoolrequired:'Chưa chọn trường học'},school:{schoolrequired:'Chưa nhập trường học'},phone2:{required:'Bạn chưa nhập số điện thoại',phone:'Số điện thoại không hợp lệ'},cmt:{required:'Bạn chưa nhập số thẻ căn cước/ chứng minh thư',cmt:'Vui lòng nhập đúng số thẻ căn cước/ chứng minh thư'}},errorElement:'label',errorPlacement:function(place,element){place.addClass('error-message').appendTo(element.closest('div'));},highlight:function(element,errorClass,validClass){if(element.type==="radio"){this.findByName(element.name).addClass(errorClass).removeClass(validClass);}else if(element.type==="select-one"||element.type==="select-multiple"){var $element=$(element);$element.addClass(errorClass).removeClass(validClass);var $next=$element.next();if($next.length>0&&$next.hasClass('select2')){$next.addClass(errorClass).removeClass(validClass);}}else{$(element).addClass(errorClass).removeClass(validClass);}},unhighlight:function(element,errorClass,validClass){if(element.type==="radio"){this.findByName(element.name).addClass(validClass).removeClass(errorClass);}else if(element.type==="select-one"||element.type==="select-multiple"){var $element=$(element);$element.addClass(validClass).removeClass(errorClass);var $next=$element.next();if($next.length>0&&$next.hasClass('select2')){$next.addClass(validClass).removeClass(errorClass);}}else{$(element).addClass(validClass).removeClass(errorClass);}},submitHandler:function(form){var $thisForm=$(form);if($thisForm.valid()){var $modal=$thisForm.parents('.modal');var $url=$thisForm.attr('action');if($thisForm.hasClass('waitting')){return false;}
$thisForm.addClass('waitting');console.log($thisForm.serialize());$.ajax({type:"POST",url:$url,data:$thisForm.serialize(),dataType:'JSON',success:function($response){switch($response.status){case'success':var fn=window[$modal.data('success')];if(typeof fn==='function'){fn($thisForm);}
var subjectUrl=$.cookie('subjectUrl');$.removeCookie('subjectUrl');if(subjectUrl){location.href=subjectUrl;}
break;case'login':$modal.modal('hide');$('#loginModal').modal('show');break;case'error':break;}
$thisForm.removeClass('waitting');}});}}});$('#loginModal').on('hide.bs.modal',function(e){$.removeCookie('showflmodal');});$('.modal').on('shown.bs.modal',function(e){$(this).find('.select2').select2();if(typeof $.fn.dialog=='function'){$('#dialog-mbapp').dialog("close");}});$('#userInfoConfirmModal').on('show.bs.modal',function(e){$.cookie('showflmodal','');var $modalThis=$(this);var $cityDefault=$modalThis.data('city');var $cityElement=$modalThis.find('[name="city"]');var $mdElements=$modalThis.find('[name]');$mdElements.each(function($i){var $mdElement=$(this);var $name=$mdElement.attr('name');if($mdElement.attr('name')=='hoa'){$('[name="hoa"][value="'+$name+'"]').prop('checked',true);}else{if($modalThis.data($name)){$mdElement.val($modalThis.data($name));$mdElement.trigger('change');}}});if(!$cityElement.hasClass('loaded')){$.ajax({url:'/get-city.php',data:{},type:'POST',dataType:'json',success:function($cities){var $cityHtml='';for($cityID in $cities){$cityHtml+='<option value="'+$cityID+'">'+$cities[$cityID]+'</option>';}
$cityElement.addClass('loaded').append($cityHtml);if($cityDefault){$cityElement.val($cityDefault);$cityElement.change();}}});}});var subjects={29:'Vật lí',18:'Hóa học',24:'Sinh học',22:'Tiếng anh'};$('#listFreeCourse').on('show.bs.modal',function(e){var modal=$(this);var type=$(this).data('type');modal.find('.board').hide();modal.find('.board-'+type).show();var subject=modal.find('.lc-content').find('.board-'+type).data('subject');modal.find('.dropdown.board-2').find('.text').text(subjects[subject]);var month=parseInt(modal.find('.lc-content').find('.board-'+type).data('month'));if(month){modal.find('.dropdown.board-4').find('.text').text('Tháng'+month);}else{modal.find('.dropdown.board-4').find('.text').text('BXH TỔNG');}});$('[data-track="ga"]').click(function(){if(typeof pageTracker!='undefined'&&window.location.host!='local.hocmai.vn'){var $this=$(this);var $action=$this.attr('track-action');var $label=$this.attr('track-label');if(typeof $label==typeof undefined){pageTracker._trackEvent($gaTrackCategory,$action);}else{pageTracker._trackEvent($gaTrackCategory,$action,$label);}}});$('.doc-pane').perfectScrollbar({suppressScrollX:true});$('.share-fb').click(function(e){e.preventDefault();var self=$(this);if(typeof FB!=='undefined'){FB.ui({method:'share',href:self.attr('href'),caption:'HOCMAI',title:self.data('title'),description:self.data('description'),picture:self.data('img'),display:'dialog'},function(response){});}});if($('#steps').length){var schedule=$('.test-schedule');var offsetTop=$('#steps').offset().top+25;$(window).scroll(function(){if($(this).scrollTop()>offsetTop){schedule.addClass('sticked');}else{schedule.removeClass('sticked');}});}});}(jQuery));