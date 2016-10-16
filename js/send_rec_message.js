$(function () {
    $('#mailContainer .rec').on('click', function(){
        var that = this;
            var cateId = $(this).data('id');
            if(cateId==1){
                $.get('mgruser/get_rec_message', {
                }, function(datas){
                    var html = '';
                    var search='';
                   /* search=`<div class="search">
					<div  class="row">
						<span class="search_left col-xs-3 col-lg-3 col-md-3 col-sm-3">消息总数：`+datas.count+`个</span>
						<input type="text" name="" value="" placeholder="搜索" class="search_center col-xs-5 col-lg-5 col-md-5 col-sm-5">
						<button class="search_right col-xs-2 col-lg-2 col-md-2 col-sm-2">选中删除</button>
					</div>
				</div>`;*/

                    // console.log(datas);
                    for(var i=0; i<datas.length; i++){
                        var data = datas[i];
                        html += `<li data-num="`+data.mail_id+`">
							<div class="content">
								<div class="row contents">
									<input type="checkbox" name=""
										   class="content_from col-xs-1 col-lg-1 col-md-1 col-sm-1"  value="`+data.mail_id+`">
									<span class="content_from_title col-xs-1 col-lg-1 col-md-1 col-sm-1">`+data.mail_id+data.last_name+" "+data.first_name+`</span>
									<span class="content_cont col-xs-5 col-lg-5 col-md-5 col-sm-5">`+data.content+`</span>
									<span class="content_date col-xs-3 col-lg-3 col-md-3 col-sm-3">`+data.mail_date+`</span>
									<div class="opt-container col-xs-2 col-lg-2 col-md-2 col-sm-2">
										<button class="content_opt del"  data-num="`+data.mail_id+`">删除</button>
										 <button class="content_opt rep" data-num="`+data.mail_id+`">回复</button>
									</div>
								</div>
							</div>
							<hr style="width:100%;margin: 0">
						</li>`;
                    }
                    $('#mailContainer .send span').removeClass('shadow');
                    $('#mailContainer .rec span').addClass('shadow');
                    $('#contentList > li').remove();
                    $('#contentList').append(html);
                    a();
                }, 'json');
            }
    });
    $('#mailContainer .send').on('click', function(){
        var that = this;
        var cateId = $(this).data('id');
        if(cateId==2){
            $.get('mgruser/get_send_message', {
            }, function(datas){
                var html = '';
                var search='';
                /* search=`<div class="search">
                 <div  class="row">
                 <span class="search_left col-xs-3 col-lg-3 col-md-3 col-sm-3">消息总数：`+datas.count+`个</span>
                 <input type="text" name="" value="" placeholder="搜索" class="search_center col-xs-5 col-lg-5 col-md-5 col-sm-5">
                 <button class="search_right col-xs-2 col-lg-2 col-md-2 col-sm-2">选中删除</button>
                 </div>
                 </div>`;*/

                // console.log(datas);
                for(var i=0; i<datas.length; i++){
                    var data = datas[i];
                    html += `<li data-num="`+data.mail_id+`">
							<div class="content">
								<div class="row contents">
									<input type="checkbox" name=""
										   class="content_from col-xs-1 col-lg-1 col-md-1 col-sm-1" value="`+data.mail_id+`">
										   
									<span class="content_from_title col-xs-1 col-lg-1 col-md-1 col-sm-1">`+data.last_name+" "+data.first_name+`</span>
									<span class="content_cont col-xs-5 col-lg-5 col-md-5 col-sm-5">`+data.content+`</span>
									<span class="content_date col-xs-3 col-lg-3 col-md-3 col-sm-3">`+data.mail_date+`</span>
									<div class=" col-xs-2 col-lg-2 col-md-2 col-sm-2">
										<button class="content_opt del" data-num="`+data.mail_id+`">删除</button>
									</div>
								</div>
							</div>
							<hr style="width:100%;margin: 0">
						</li>`;
                }
                $('#mailContainer .rec span').removeClass('shadow');
                $('#mailContainer .send span').addClass('shadow');
                $('#contentList > li').remove();
                $('#contentList').append(html);
                a();
            }, 'json');
        }
    });

    function a() {
        $('#contentList .del').on('click',function(){
            var that = this;
            if(confirm('是否确定删除该回复，可以在回收站中恢复.')){
                var mailId = $(this).data('num');
                $.get('mgruser/delete_message', {
                    mailId:mailId
                }, function(data){
                    if(data == 'success'){
                        alert('删除成功!');
                        $(that).parents('li').remove();
                    }else{
                        alert('删除失败!');
                    }
                }, 'text');
            }
        });

        $('#contentList  .rep').on('click',function(){
            var that = this;
            if(confirm('是否确定回复该信息?')){
                html=`<div class="contentText">
								<div class="row">
									<div  class="col-xs-7 col-lg-7 col-md-7 col-sm-7 col-lg-offset-3 col-md-offset-3 col-sm-offset-3">
										<textarea cols="10" rows="5" name="" id="contentText"></textarea>
									</div>
									<div class="col-xs-2 col-lg-2 col-md-2 col-sm-2">
									    <button class="content_opt repText ">回复</button>
                                    </div>
								</div>
						</div>`;
                $(that).parents('.opt-container').hide();
                $(that).parents('.content').append(html);
                b();
            }
        });

    }

    function b() {
        $('#contentList .repText').on('click',function(){
         var that = this;
         var mailId = $(this).parents('li').data('num');
         var content = $('#contentText').val();
         $.get('mgruser/reply_message', {
             mailId:mailId,
             content:content
             }, function(data){
             if(data == 'success'){
             alert('回复成功!');
             }else{
             alert('回复失败!');
             }
             }, 'text');
            $('#contentText').remove();
            $('.opt-container').show();
            $('.contentText').hide();
         });
    }






    /*$('#contentList').on('click','.rep', function(){
        var that = this;
        if(confirm('是否确定回复该信息?')){
            html=`<div class=" col-xs-7 col-lg-7 col-md-7bcol-sm-7">
								<div class="row">
									<div  class="col-xs-7 col-lg-7 col-md-7 col-sm-7   col-lg-offset-3 col-md-offset-3 col-sm-offset-3">
										<textarea cols="10" rows="5" name="" id=""></textarea>
									</div>
									<button class="col-xs-2 col-lg-2 col-md-2bcol-sm-2">回复</button>
								</div>
							</div>`
            $(that).parents('div').remove();
            $(that).('#contentList').append(html);
        }
    });*/
});