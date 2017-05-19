$(function(){var searching=false;$(document).click(function(e){if(!$(e.target).is('#default_result')){$('#default_result').hide();}});$('#default_result').on('click','#link_view_all',function(){$('form#from-search').submit();});$("#search_term").keyup(function(){var self=$(this);if(self.val()){if(searching){return false;}else{searching=true;}
$.ajax({type:'post',url:'home/search_result',data:{'keyword':self.val()},success:function(data){searching=false;var html='';var res=JSON.parse(data);var scorm=res['scorm'];if(scorm['matches']&&scorm['matches'].length>0){html+='<li class="title">Bài giảng</li>';for(var i_scorm in scorm['matches']){var scorm_name=scorm['matches'][i_scorm]['attrs']['name'].replace(/(<([^>]+)>)/ig,"");var str=String(scorm['matches'][i_scorm]['id']);var id=str.substring(0,str.length-1);link='http://hocmai.vn/bai-giang-truc-tuyen/'+id+'/'+scorm['matches'][i_scorm]['attrs']['fulltitle']+'.html';html+='<li><a target="_blank" href="'+link+'">'+scorm_name+'</a></li>';}}
var courses=res['course'];if(courses['matches']&&courses['matches'].length>0){html+='<li class="title">Khóa Học</li>';for(var i_course in courses['matches']){var courses_shortname=courses['matches'][i_course]['attrs']['shortname'].replace(/(<([^>]+)>)/ig,"");var str=String(courses['matches'][i_course]['id']);var id=str.substring(0,str.length-1);html+='<li><a target="_blank" href="http://hocmai.vn/course/view.php?id='+id+'">'+courses_shortname+'</a></li>';}}
var quiz=res['quiz'];if(quiz['matches']&&quiz['matches'].length>0){html+='<li class="title">Đề thi</li>';for(var i_quiz in quiz['matches']){var quiz_name=quiz['matches'][i_quiz]['attrs']['name'].replace(/(<([^>]+)>)/ig,"");var str=String(quiz['matches'][i_quiz]['id']);var id=str.substring(0,str.length-1);html+='<li><a target="_blank" href="http://hocmai.vn/mod/quiz/view.php?q='+id+'">'+quiz_name+'</a></li>';}}
if(html){html+='<li class="view_all"><a id="link_view_all" href="javascript:void(0);">Xem tất cả kết quả về <span style="color: red;">"'+self.val()+'"</span></a></li>';$('#default_result').html(html).show();}}})}else{$('#default_result').html('').hide();}});});