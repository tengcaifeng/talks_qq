<html>
<head>
<meta charset="utf-8">
<title>消息认证过程演示系统</title>

<link href="./bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css">
{{--<link href="./h-ui/css/H-ui.min.css" rel="stylesheet" type="text/css">--}}
<link href="./css/style.css" rel="stylesheet" type="text/css">

  <script src="./js/jquery-1.9.1.min.js"></script>
{{--  <script src="./h-ui/js/H-ui.min.js"></script>--}}
  <script src="./bootstrap/js/bootstrap.min.js"></script>
  <script src="./js/index.js"></script>
  <script src="./js/superslide.2.1.js"></script>
  <script src="./js/nicescroll.js"></script>
  <script src="./js/drag.js"></script>
  <script src="./js/layer.js"></script>


  <style>
   /* #div1{
      width: 200px;
      height: 200px;
      border:1px solid red;
      margin:0 auto;
      position: absolute;
    }*/
   /* #parent{
      position: relative;
      margin: 0 auto;
    }*/

  </style>

</head>

<body id="parent" style="position:relative;">

{{--<div class="container" style="border:1px solid red;width: 430px;height: 330px;">


</div>--}}

<div class="qq-exe" id="div4" style="z-index: 100"><img src="images/QQ-ICON.png"><input type="text" value="腾讯QQ" placeholder="腾讯QQ"></div>


<div class="win-bg"><img src="images/win-bg.png"></div>

<div class="qq-login" id="div1"  >
    <div class="login-menu">
        <span></span>
        <span></span>
        <span class="login-close"></span>
    </div>
    <div class="login-ner">
        <div class="login-left">
            <div class="login-head"><img src="images/QQ-ICON.png"></div>
        </div>
        <div class="login-on">
            <div class="login-txt">
                <input type="text" name="qq_num" onclick="this.focus();this.select()" ondblclick="this.value='' "  placeholder="QQ号码/手机/邮箱">
                <input type="password" name="password" onclick="this.focus();this.select()"  placeholder="密码">
                <div class="login-xuan"><span class="fl"><input type="checkbox"><i>记住密码</i></span><span class="fr"><input type="checkbox"><i>自动登录</i></span></div>
                {{--     <div class="login-but">安全登录</div>--}}
                <button id="btn" class="login-but" value="登陆">登录</button>
            </div>

        </div>
        <div class="login-right">
            <div data-toggle="modal" data-target="#register_tab" id="register_login" >注册账号</div>
            <div href="#" style="margin-top: 10px;padding-left:10px;cursor: pointer;color:#3a95de;">找回密码</div>
        </div>
    </div>
</div>



<!-- 注册的界面 -->
<div class="modal fade" id="register_tab" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" style="position: relative;z-index: 10000">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="btn_register_close" data-dismiss="modal"><span>&times;</span></button>
                <h4 class="modal-title" id="myModalLabel">账号注册</h4>
            </div>
            <div class="modal-body">
                <div class="form-group">
                    <label for="register_qq_num">设置个性qq号</label>
                    <input type="text" class="form-control" id="register_qq_num" placeholder="qq_num">
                </div>
                <div class="form-group">
                    <label for="register_nick_name">昵称</label>
                    <input type="text" class="form-control" id="register_nick_name" placeholder="nickname">
                </div>
                <div class="form-group">
                    <label for="register_password">密码</label>
                    <input type="text" class="form-control" id="register_password" placeholder="Password">
                </div>
                <div class="form-group">
                    <label for="register_character">个性签名</label>
                    <input type="text" class="form-control" id="register_character" placeholder="character">
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal" id="register_quxiao">取消</button>
                <button type="button" class="btn btn-primary" id="register_confirm">注册</button>
            </div>
        </div>
    </div>
</div>


<div class="qq" id="div2">
  <div class="qq-top">
    <div class="qq-top-icon">
      <i><img src="images/qq-top.png"></i>
      <span class="qq-top-02 close"><img src="images/qq-top-02.png"></span>
      <span class="qq-top-01 min"><img src="images/qq-top-01.png"></span>
    </div>
    <div class="qq-top-name">
      <span class="nick_name"></span>
      <dl><dd><img src="images/zai.png"></dd><dt><img src="images/lv.png"></dt><dt><img src="images/svip.png"></dt></dl>
    </div>
    <div class="qq-top-shuo"><span class="character"></span></div>
    <div class="qq-top-menu">
      <ul>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
      </ul>
      <span class="qq-top-001"></span>
      <span class="qq-top-002"></span>
    </div>
    <div class="qq-serch">搜索：联系人、讨论组、群、企业</div>
  </div>
  <div class="qq-xuan">
    <ul>
      <li class="qq-xuan-li"><span></span><i></i></li>
      <li><span></span><i></i></li>
      <li class="qunliao"><span></span><i></i></li>
      <li><span></span><i></i></li>

    </ul>
  </div>

  <div class="qq-hui">
    <ul class="qq_list">
      {{--好友列表--}}
      {{--<li>
        <div class="qq-hui-img"><img src="images/head/01.jpg"><i></i></div>
        <div class="qq-hui-name"><span>室外摄影大师</span><i>16:30</i></div>
        <div class="qq-hui-txt" title="">下次我们去公园拍摄吧~[图片]</div>
      </li>--}}
    </ul>
  </div>

  <div class="qq-bot">
    <div class="qq-menu">
      <ul>
        <li><img src="./images/bot-menu/01.png"></li>
        <li><img src="./images/bot-menu/02.png"></li>
        <li><img src="./images/bot-menu/03.png"></li>
        <li><img src="./images/bot-menu/04.png"></li>
        <li><img src="./images/bot-menu/05.png"></li>
        <li><img src="./images/bot-menu/06.png"></li>
        <li><img src="./images/bot-menu/07.png"></li>
        <li><img src="./images/bot-menu/08.png"></li>
        <li><img src="./images/bot-menu/09.png"></li>
        <li><img src="./images/bot-menu/10.png"></li>
      </ul>
    </div>
    <div class="qq-bou-she">
      <ul>
        <li><img src="./images/bot-menu/11.png"></li>
        <li><img src="./images/bot-menu/12.png"></li>
        <li><img src="./images/bot-menu/13.png"></li>
        <li><img src="./images/bot-menu/14.png"></li>
        <li><img src="./images/bot-menu/15.png"></li>
        <li><img src="./images/bot-menu/16.png"><span>查找</span></li>
        <li><img src="./images/bot-menu/05.png"><span>应用宝</span></li>
      </ul>
    </div>
  </div>
</div>
{{--聊天框--}}
<div class="qq-chat" id="div3" >
  <div class="qq-chat-win">
    <ul>
      <li class="she"></li><li class="min"></li><li class="max"></li><li class="close qunliao_close"></li>
    </ul>
  </div>
  <div class="qq-chat-top">
    <div class="qq-chat-tops">
      <div class="qq-chat-t-head"><img src=""></div>
      <div class="qq-chat-t-name"></div>
      <div class="qq-chat-t-shuo"></div>
    </div>
    <div class="qq-chat-menu">
      <ul>
        <li><span><img src="./images/chat/icon-01.png"></span></li>
        <li><span><img src="./images/chat/icon-02.png"></span></li>
        <li><span><img src="./images/chat/icon-03.png"></span><i></i></li>
        <li><span><img src="./images/chat/icon-04.png"></span><i></i></li>
        <li><span><img src="./images/chat/icon-05.png"></span><i></i></li>
        <li><span><img src="./images/chat/icon-06.png"></span></li>
        <li><span><img src="./images/chat/icon-07.png"></span><i></i></li>
      </ul>
    </div>
  </div>
  <div class="qq-chat-bot">
    <div class="qq-chat-txt">
      <ul>
        <li>
          <div class="qq-chat-you blue"><span></span><i></i></div>
          <div class="qq-chat-ner"></div>
        </li>
      </ul>
    </div>
    <div class="qq-chat-text">
      <ul>
        <li><span><img src="./images/chat/menu-01.png"></span></li>
        <li><span><img src="./images/chat/menu-02.png"></span></li>
        <li><span><img src="./images/chat/menu-03.png"></span></li>
        <li><span><img src="./images/chat/menu-04.png"></span></li>
        <li><span><img src="./images/chat/menu-05.png"></span><i></i></li>
        <li><span><img src="./images/chat/menu-06.png"></span></li>
        <li><span><img src="./images/chat/menu-07.png"></span><i></i></li>
        <li><span><img src="./images/chat/menu-08.png"></span></li>
        <li><span><img src="./images/chat/menu-09.png"></span><i></i></li>
        <li class="fr" style="margin-right:5px;"><span><img src="./images/chat/menu-10.png"></span><p>消息记录</p><i></i></li>
      </ul>
      <textarea id="qq-chat-text" onclick="this.focus();"></textarea>


{{--消息编辑区域--}}
      <div class="qq-chat-but">
     {{--   <span class="fasong">发送(S)</span>--}}
              <div class="btn-group dropdown" style="float: right;margin-top: 6px;">
              <button type="button" class="btn btn-default fasong" style="height: 26px;width:63px;line-height: 0.4;">发送</button>
              <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="width: 26px;height: 26px;">
                  <span class="caret" ></span>
            {{--      <span class="sr-only">Toggle Dropdown</span>--}}
              </button>
              <ul class="dropdown-menu dropdown-menu-right" style="min-width: 100%;height: 87px" >
                  <li class="fasong_copy"><button type="button" class="btn btn-default btn-sm ">直接发送</button></li>
             {{--     <li role="separator" class="divider"></li>--}}
                  <li  style="margin-top: 10px;" >
                          <!-- button触发模态框 -->
                          <button id="jiamifasong" type="button" class="btn btn-default btn-sm btn-info" data-toggle="modal" data-target="#myModal">
                             加密发送
                          </button>
                  </li>
              </ul>
          </div>
        <span class="close-chat">关闭(C)</span>
      </div>
 {{--消息编辑区域--}}

    </div>
  </div>
</div>
{{--聊天框--}}
<div style="text-align:center;">
</div>
<!-- 模态框放在最外层，才能最大化显示-->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content radius" style="width: 730px;">
            <div class="modal-header">
                <h3 class="modal-title">消息加密</h3>
                <a class="btn_register_close"  data-dismiss="modal" aria-hidden="true" href="javascript:;">×</a>
            </div>
{{--加密主体内容--}}
            <div class="modal-body">
                <form class="form-horizontal">
                    {{--明文--}}
                    <input id="mingwen" class="form-control" type="text" placeholder="明文信息" readonly value="">
                    <div class="line_0 text-center" style="padding-left:25px;" >
                        <span class="glyphicon glyphicon-sort-by-attributes" style="top: 0px;font-size: 40px;">
                        </span>
                    </div>

                    {{--秘钥K1--}}
                    <div class="form-group">
                        <label for="k1" class="col-sm-2 control-label">MAC秘钥K1<br/><h6>(验证完整性)</h6></label>
                        <div class="col-sm-10">
                            <input id="k1" type="text" class="form-control"  placeholder="输入产生消息认证码的秘钥K1（任意字符）" value="" >
                        </div>
                    </div>

                    <div class="line_2 text-center" style="padding-left:60px;">
                        <span class="glyphicon glyphicon-arrow-down" style="top: 18px;font-size: 40px;"></span>
                        <button id="create_mac" type="button" class="btn btn-info " style="line-height: 5;">生成</button>
                    </div>


                    {{--对明文进行base64加密--}}
                    <span id="base64_encode_message_len" class="pull-right"></span>
                    <div class="form-group" style="margin-top:10px;clear: both">
                        <label for="base64_encode_message" class="col-sm-2 control-label">明文base64编码</label>
                        <div class="col-sm-10">
                            <input id="base64_encode_message" class="form-control" type="text" placeholder="对消息进行base64编码" readonly value="">
                        </div>
                    </div>



                    {{--消息认证码message_mac--}}
                    <span id="message_mac_len" class="pull-right"></span>
                    <div class="form-group clearfix" style="clear:both">
                        <label for="message_mac" class="col-sm-2 control-label">MAC值</label>
                        <div class="col-sm-10">
                            <input id="message_mac" class="form-control" type="text" placeholder="生成的消息认证码" readonly >
                        </div>
                    </div>

                    <div class="line_3 text-center"  style="padding-left:60px;">
                        <span class="glyphicon glyphicon-arrow-down" style="top: 18px;font-size: 40px;"></span>
                        <button id='hecheng' type="button" class="btn btn-info" style="line-height: 5">合成</button>
                    </div>
                    <span id="mANDmac_len" class="pull-right"></span>


                {{--Message|MAC--}}
                    <div class="form-group" style="margin-top:10px;clear: both">
                        <label for="mANDmac" class="col-sm-2 control-label">Message|MAC</label>
                        <div class="col-sm-10">
                            <input id="mANDmac" class="form-control" {{--id="disabledInput"--}} type="text" placeholder="Message|MAC" readonly >
                        </div>
                    </div>

                    <div class="line_4 text-center" >
                        <span class="glyphicon glyphicon-arrow-down" style="top: 5px;font-size: 40px;"></span>
                    </div>

                    {{--秘钥k2--}}
                    <div class="form-group" style="margin-top:10px;">
                        <label for="k2" class="col-sm-2 control-label">加密秘钥K2<br/><h6>(验证身份)</h6></label>
                        <div class="col-sm-10">
                            <input id="k2"  type="text" class="form-control"placeholder="输入对明文和mac加密的秘钥K2(8位)">
                        </div>
                    </div>


                    <div class="line_5 text-center" style="padding-left:60px;"  >
                        <span class="glyphicon glyphicon-arrow-down" style="top: 18px;font-size: 40px;"></span>
                        <button id="btn_jiami" type="button" class="btn btn-info" style="line-height: 5">加密</button>
                    </div>

                    {{--明文和mac加密后的密文--}}
                  <span id="iv_size" class="pull-right"></span><br/>
                  <span id="miwen_len" class="pull-right"></span>
                   {{--   <span id="iv" class="pull-right"></span>--}}
                    <input id="miwen" style="margin-top:10px;" class="form-control" {{--id="disabledInput"--}} type="text" placeholder="发送的密文" readonly>

                    <div class="line_1 text-center" style="padding-left:25px;" >
                        <span class="glyphicon glyphicon-cloud" style="top: 0px;font-size: 40px;">
                        </span>
                    </div>
                </form>
            </div>

            <div class="modal-footer">
              {{--  <button id="btn_once" class="btn btn-primary">一键生成</button>--}}
                <button id="btn_confirm_send" class="btn btn-primary">确定发送</button>
                <button id="jiami_qingkong" class="btn btn-default">清空</button>
                <button class="btn" data-dismiss="modal" aria-hidden="true">关闭</button>
            </div>
        </div>
    </div>
</div>
<!-- 模态框放在最外层，才能最大化显示-->



{{--<button id="jiemi" type="button" class="btn btn-default btn-sm" data-toggle="modal" data-target="#myModal_2">解密111111111111111111111111111111111111</button>--}}
<!-- 解密模态框放在最外层，才能最大化显示-->
<div class="modal fade" id="myModal_2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document" style="display:block;">
        <div class="modal-content" style="width: 730px;">
            <div class="modal-header">
                <button type="button" class="btn_register_close"  data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel">消息解密</h4>
            </div>
            <div class="modal-body" style="padding:0px;">
                <div class="line_1 text-center" style="padding-left:25px;" >
                        <span class="glyphicon glyphicon-cloud" style="top: 0px;font-size: 40px;">
                        </span>
                </div>
                {{--密文--}}
                <input id="miwen_dec" class="form-control"  type="text" placeholder="发送的密文" readonly>
                <div class="line_0 text-center" style="padding-left:25px;" >
                        <span class="glyphicon glyphicon-sort-by-attributes" style="top: 0px;font-size: 40px;"></span>
                </div>

                {{--秘钥K2--}}
                <div class="form-group">
                    <label for="k2_dec" class="col-sm-2 control-label">解密秘钥K2 <h6> (验证身份)</h6></label>
                    <div class="col-sm-10">
                        <input id="k2_dec" type="text" class="form-control"  placeholder="输入解密秘钥K2（8位）" value="" >
                    </div>
                </div>

                <div class="line_2 text-center" style="padding-left:60px;margin-top: 35px;">
                    <span class="glyphicon glyphicon-arrow-down" style="top: 18px;font-size: 40px;"></span>
                    <button id="bnt_k2_dec" type="button" class="btn btn-success " style="line-height: 4;">解密</button>
                </div>

            {{--message|mac--}}
            <input id="mANDmac_dec" class="form-control"  type="text" placeholder="message|mac" readonly>


                <div class="line_2 text-center" style="padding-left:60px;">
                    <span class="glyphicon glyphicon-arrow-down" style="top: 18px;font-size: 40px;"></span>
                    <button id="btn_fen_dec" type="button" class="btn btn-success " style="line-height: 4; margin-top: 10px;">分离</button>
                </div>
{{--base64编码明文 |发送方mac --}}
            <div class="form-group">
                <div class="col-sm-6">
                    <div>base64编码明文</div><input id="base64_message_dec"  type="text" class="form-control"placeholder="base64编码明文" readonly>
                </div>
                <div class="col-sm-6">
                   <div style="float: right;"> 发送方mac</div><input id="message_mac_old"  type="text" class="form-control"placeholder="消息认证码mac" readonly>
                </div>
            </div>


                <div class="line_2 text-center" style="">
                    <span class="glyphicon glyphicon-arrow-down" style="top: 18px;font-size: 40px;"></span>
                </div>

            <div class="form-group">
                <div class="col-sm-6">
                    <span>明文消息</span><input id="message_dec"  type="text" class="form-control"placeholder="base64编码明文" readonly>
                </div>
                <div class="col-sm-6">
                    <span style="float:right;">发送方mac</span><input id="message_mac_old2"  type="text" class="form-control"placeholder="消息认证码mac" readonly>
                </div>
            </div>

                <div class="line_2 text-center" style="">
                    <span class="glyphicon glyphicon-arrow-down" style="top: 18px;padding-bottom:20px;font-size: 40px;"></span>
                </div>

                <div class="form-group">
                    <label for="k1_dec" class="col-sm-2 control-label">请输入秘钥K1 <h6>(验证完整性)</h6> </label>
                    <div class="col-sm-10">
                        <input id="k1_dec" type="text" class="form-control"  placeholder="输入秘钥K1" value="" >
                    </div>
                </div>


                <div class="line_2 text-center" style="padding-left:60px;margin-left:20px;margin-top: 35px;">
                    <span class="glyphicon glyphicon-arrow-down" style="top: 18px;font-size: 40px;"></span>
                    <button id="btn_create_dec" type="button" class="btn btn-info " style="line-height: 4;">生成mac</button>
                </div>

                <input id="message_mac_new" class="form-control"  type="text" placeholder="对接收的明文用相同HmacSHA512秘钥加密的mac值" readonly>
                <input id="message_mac_old3" class="form-control"  type="text" placeholder="接收到的mac" readonly>


                <div class="modal-footer">

                <button id="btn_yanzheng" type="button" class="btn btn-danger" >验证mac</button>
                    <button id="jiemi_qingkong" type="button" class="btn btn-default" >清空</button>
                <button type="button" class="btn btn-default" data-dismiss="modal">关闭</button>
            </div>
        </div>
        </div>
    </div>
</div>
<!-- 模态框放在最外层，才能最大化显示-->
</body>
</html>

{{--<script src="./js/layer.js"></script>--}}

<script>
    $(function () {

    })

</script>
<script>
    winHeight = (document.documentElement.clientHeight-30)+'px';
    winWidth = (document.documentElement.clientWidth-20)+'px';
    login_width = (document.documentElement.clientWidth-430)/2+'px';
    $("#parent").css({height:winHeight,width:winWidth});
    $('.qq-login').css({"left":login_width});

/*    function modaldemo(){
        $("#modal-demo").modal("show")}*/



  $('#btn').click(function () {

      $.ajax({
          type: 'post', // 提交方式 get/post
          url: 'login', // 需要提交的 url
          dataType: 'json',
          data: {
            /* s_province: $('select[name=s_province] option:selected').val(),*/
              qq_num: $('input[name = qq_num]').val(),
              password:$('input[name = password]').val(),
              _token: "{{csrf_token()}}"
          },
          success: function(data){
              if(data.status==0){
                  //alert(data.info)
                  layer.msg(data.info,{icon:2,time:2000})
              }else if(data.status==1){
                  $('.qq').css('display','block').removeClass('mins')
                  $('.qq-login').css('display','none')

                  /*显示自己的名字和个性签名*/
                  $('.nick_name').html(data.nick_name);
                  $('.character').html(data.character);
                /*显示自己的名字和个性签名*/

                /*显示好友列表*/
                  var li = '';
                  $.each(data.list,function () {
                    //alert(this['nick_name'])
                  li += '<li>';
                  li += ' <div class="qq-hui-img"><img src="images/head/0'+this['id']+'.jpg"><i></i></div>';
                  li += ' <div class="qq-hui-name"><span>'+this['nick_name']+'</span><i>16:30</i></div> ';
                  li += '<div class="qq-hui-txt" title="">'+this['character']+'</div>';
                  li += ' </li>';
                })
                $('.qq_list').append(li);
                /*显示好友列表*/

                /*双击打开单人聊天*/
                  $('.qq-hui li').dblclick(function(){
                      $('.qq-chat').css('display','block').removeClass('mins')
                      $('.qq-chat-t-name').html($(this).find('span').html())
                      $('.qq-chat-t-shuo').html($(this).find('.qq-hui-txt').html())
                      $('.qq-chat-t-head img').attr('src',$(this).find('img').attr('src'))
                      $('.qq-chat-you span').html($(this).find('span').html())
                      $('.qq-chat-you i').html($(this).find('.qq-hui-name i').html())
                      //$('.qq-chat-ner').html($(this).find('.qq-hui-txt').html())
                      $('.qq-chat-ner').html($(this).find('.qq-hui-txt').html())
                      $("#qq-chat-text").trigger("focus")
                      $('.my').remove()
                  })
                /*双击打开单人聊天*/

              }
          },
          error: function() {
              alert('网络错误');
          },
      });
  })

/*设置定时器函数，去定时刷新聊天框*/
  function show_t(){
      show_Interval = setInterval(show,1000)
  }

  /*群聊触发事件打开聊天框*/
    $('.qunliao').click(function () {
        show_t(); /*点击群聊打开定时器去刷新聊天界面*/

        $('.qq-chat').css('display','block').removeClass('mins')
        $('.qq-chat-t-name').html('群聊')
        $('.qq-chat-t-shuo').html('群聊功能测试中····')
        $('.qq-chat-t-head img').attr('src','images/QQ-ICON.png')
        $('.qq-chat-you span').html('群聊已打开')
        $('.qq-chat-you i').html('')
        $('.qq-chat-ner').html('')
        $("#qq-chat-text").trigger("focus")
        $('.my').remove()
    })


    /*点击关闭群里的时候去清除显示聊天记录的定时器*/
    $('.qunliao_close').click(function () {
        clearInterval(show_Interval);
    })

    /*按下enter触发fasong的点击事件，发送消息*/
    document.onkeydown=function(e){
        var keycode=document.all?event.keyCode:e.which;
        if(keycode==13){
           $('.fasong').trigger("click");
        };
    }

    $("div").scroll(function() {
        clearInterval(show_Interval);
        //console.log($(".qq-chat-txt").scrollTop())
        //console.log($(".qq-chat-txt")[0].scrollHeight-291)
        if($(".qq-chat-txt").scrollTop() == ($(".qq-chat-txt")[0].scrollHeight-290)){
           show_t();/*重新打开定时器*/
            //console.log('111')
        }
    });

    /*在发送选项中点击直接发送，触发fasong按钮的点击事件*/
    $('.fasong_copy').click(function () {
        $('.fasong').trigger("click");
    })
    /*在发送选项中点击直接发送，触发fasong按钮的点击事件*/
    $('.fasong').click(function () {
        //alert($('.nick_name').html())
       $.ajax({
       type: 'post', // 提交方式 get/post
       url: 'message', // 需要提交的 url
       dataType: 'json',
       data:{
       message:$('#qq-chat-text').val(),
       sender:$('.nick_name').html(),
       _token: "{{csrf_token()}}"
       },
       success:function (data) {
           if(data.status==0){//表示消息为空，不存储进数据库
               layer.msg(data.info, {icon:2, time:2000});
           }
           if(data.status == 1){//表示消息不为空，发送成功，并且存储成功
               $('#qq-chat-text').val('').trigger("focus")
               show();//去触发show函数进行刷聊天消息界面
           }
       //alert(data.sender)
       },
       error: function() {
       //alert('网络错误');
       },

       })
    })

    /*展示聊天界面*/
  function show(){
     // $('.my').remove()
     // $('.qq-chat-txt ul li').remove()
      $.ajax({
          type: "post",
          url: "show",
          dataType:"json",
          data: {
              //message:$('#qq-chat-text').val(),

              sender:$('.nick_name').html(),
              _token: "{{csrf_token()}}"
          },
          success: function(data){
              //alert(data.sender)
              $('.qq-chat-txt ul li').remove()

              $.each(data.message_list,function () {


                 // alert(this['id'])
                  var message_id = this['id'];
                 var name = this['sender'];
                 var ner = this['message'];
                 var message = ner.replace(/\n/g,'<br>');
                 var message_mac = this['message_mac'];
                 var mANDmac= this['mANDmac'];
                 var miwen = this['miwen'];
                 var t_div = this['t_div'];

                 if(miwen == null){
                     var li_chat = '';
                     li_chat += '<li class="my">'
                     li_chat += '<div class="qq-chat-my"><span>'+name+'</span><i>'+t_div+'</i></div>'
                     li_chat += '<div class="qq-chat-ner">'+message+'</div></li>'
                     $('.qq-chat-txt ul').append(li_chat)
                     $(".qq-chat-txt").scrollTop($(".qq-chat-txt")[0].scrollHeight-290);
                 }
                 if(miwen != null){
                     var li_chat = '';
                     li_chat += '<li class="my">'
                     li_chat += '<div class="qq-chat-my"><span>'+name+'</span><i>'+t_div+'</i></div>'
                     li_chat += '<div class="qq-chat-ner"><button id="btn_decrypt" onclick="decrypt('+message_id+')" type="button" class="btn btn-default btn-sm" data-toggle="modal" data-target="#myModal_2">解密</button></div>'
                     li_chat += '<span id="message_id" class="hidden" >'+message_id+'<span>'
                     li_chat += '</li>'

                     $('.qq-chat-txt ul').append(li_chat)
                     $(".qq-chat-txt").scrollTop($(".qq-chat-txt")[0].scrollHeight-290);
                 }

                // $('#qq-chat-text').val('').trigger("focus")
              })
          },
          error: function() {
              //alert('网络错误');
          },
      });
  }


  function jiami_qingkong() {
      $('#k1').val('');
      $('#message_mac').val('');
      $('#base64_message_mac').val('');
      $('#base64_encode_message').val('');
      $('#k2').val('');
      $('#mANDmac').val('');
      $('#miwen').val('');
      $('#message_mac_len').html('')
      $('#base64_encode_message_len').html('')
      $('#message_mac_len').html('')
      $('#mANDmac_len').html('')
      $('#iv_size').html('')
      $('#miwen_len').html('')

  }

  $('#jiamifasong').click(function () {
      $('#mingwen').val($('#qq-chat-text').val());
        jiami_qingkong();

  })

    $('#jiami_qingkong').click(function () {
       jiami_qingkong();
    })

  $('#create_mac').click(function(){
      $.ajax({
          type:'post',
          url:'create_mac',
          dataType:'json',
          data:{
              message:$('#mingwen').val(),
              sender:$('.nick_name').html(),
              k1: $('#k1').val(),
              k2: $('#k2').val(),
              _token: "{{csrf_token()}}"
          },
          success:function (data) {

              if(data.status == 2){
                  layer.msg(data.info, {icon:2, time:2000});
              }
              if(data.status == 3){
                  layer.msg(data.info, {icon:2, time:2000});
              }
              if(data.status == 4){
                  layer.msg(data.info, {icon:2, time:2000});
              }
              if(data.status == 5){
                  layer.msg(data.info, {icon:2, time:2000});
              }
              if(data.status == 1){
                  //alert(data.message+'\n'+data.k1+'\n'+data.message_mac)
                  //console.log(data.message+'\n'+data.k1+'\n'+data.message_mac+'\n'+data.message_mac_len+'\n'+data.base64_encode_message+'\n'+data.base64_encode_message_len+'\n'+data.mANDmac)
                  $('#message_mac').val(data.message_mac);
                  $('#message_mac_len').html("MAC长度:<span>"+data.message_mac_len+"</span>");

                  $('#base64_encode_message').val(data.base64_encode_message);
                  $('#base64_encode_message_len').html("明文base64加密长度:<span>"+data.base64_encode_message_len+"</span>");


                  $('#hecheng').click(function () {
                      $('#mANDmac').val(data.mANDmac);
                      $('#mANDmac_len').html("Message|MAC长度:<span>"+data.mANDmac_len+"</span>");
                  })

                  $('#btn_jiami').click(function(){
                    $('#miwen').val(data.miwen);
                    $('#miwen_len').html("密文长度:<span>"+data.miwen_len+"</span>");
                  $('#iv_size').html("iv_size:"+data.iv_size);
                  /*    $('#iv').html("初始iv变量:"+data.iv);*/
                  })

              }
          },
          error:function () {
              layer.msg('网络错误', {icon:2, time:2000});
          },
      })
  })

  $('#btn_confirm_send').click(function () {
        $.ajax({
            type:'post',
            url:'message_crypt',
            dataType:'json',
            data:{
                message:$('#mingwen').val(),
                sender:$('.nick_name').html(),
                message_mac:$('#message_mac').val(),
                mANDmac:$('#mANDmac').val(),
                miwen:$('#miwen').val(),
                k1:$('#k1').val(),
                k2:$('#k2').val(),
                message_mac_len:$('#message_mac_len span').html(),
                base64_encode_message_len:$('#base64_encode_message_len span').html(),
                _token: "{{csrf_token()}}"
            },
            success:function (data) {
                if(data.status == 0){
                    layer.msg(data.info, {icon:2, time:1000});/*请填写完整消息*/
                }
                if(data.status == 1){
                    layer.msg(data.info, {icon:1, time:1000});/*发送成功*/
                }

                $('#qq-chat-text').val('').trigger("focus")
                show();//去触发show函数进行刷聊天消息界面
            },
            error:function () {

            },
        })
    })

function jiemi_qingkong() {
    $('#miwen_dec').val('');
    $('#mANDmac_dec').val('');
    $('#base64_message_dec').val('');
    $('#message_mac_old').val('');
    $('#message_dec').val('')
    $('#message_mac_old2').val('');
    $('#message_mac_new').val('');
    $('#message_mac_old3').val('');
    $('#k2_dec').val('');
    $('#k1_dec').val('');
}

$('#jiemi_qingkong').click(function () {

        jiemi_qingkong();

})

    function decrypt(m_id) {

      jiemi_qingkong();

      $m_id = m_id;
      $('#bnt_k2_dec').click(function () {
          $.ajax({
              type:'post',
              url:'decrypt',
              dataType:'json',
              data:{
                  message_id:$m_id,
                  k2_dec:$('#k2_dec').val(),
                  k1_dec:$('#k1_dec').val(),
                  _token: "{{csrf_token()}}"
              },
              success:function (data) {
                  if(data.status == 2){
                      layer.msg(data.message_id, {icon:2, time:2000});/*秘钥k2不能为空，返回秘钥错误信息*/
                      $('#miwen_dec').val('');
                      $('#mANDmac_dec').val('');
                      $('#base64_message_dec').val('');
                      $('#message_mac_old').val('');
                      $('#message_dec').val('')
                      $('#message_mac_old2').val('');
                      $('#message_mac_new').val('');
                      $('#message_mac_old3').val('');
                      //$('#k1_dec').val('');
                      //$('#k2_dec').val('');
                  }
                  if(data.status == 3){
                      layer.msg(data.info, {icon:2, time:2000});/*秘钥k1不能为空*/
                      $('#miwen_dec').val('');
                      $('#mANDmac_dec').val('');
                      $('#base64_message_dec').val('');
                      $('#message_mac_old').val('');
                      $('#message_dec').val('')
                      $('#message_mac_old2').val('');
                      $('#message_mac_new').val('');
                      $('#message_mac_old3').val('');
                      //$('#k1_dec').val('');
                      //$('#k2_dec').val('');
                  }
                  if(data.status == 4){
                      layer.msg(data.info, {icon:2, time:2000});/*秘钥k2错误，身份认证失败，请确认后再尝试*/
                      jiemi_qingkong();

                  }
                  //console.log(data.message_info['id']+data.miwen)
                  $('#miwen_dec').val(data.miwen);
                  $('#mANDmac_dec').val(data.mANDmac_dec);

                  $('#btn_fen_dec').click(function () {
                      $('#base64_message_dec').val(data.base64_message_dec);
                      $('#message_mac_old').val(data.message_mac_old);

                      $('#message_dec').val(data.message_dec)
                      $('#message_mac_old2').val(data.message_mac_old);
                  })

                  $('#btn_create_dec').click(function () {
                      $('#message_mac_new').val(data.message_mac_new);
                      $('#message_mac_old3').val(data.message_mac_old);
                  })

                  /*验证mac是不是相等*/
                  $('#btn_yanzheng').click(function () {
                    /*给验证绑定一个点btn_k2_dec,当用户更改了秘钥是再去后台访问一次数据*/
                      //$('#bnt_k2_dec').trigger("click");

                      if(  $('#message_mac_new').html() == $('#message_mac_old').html() && $('#message_mac_new').val()!=''){
                          layer.msg('MAC值相等，消息认证成功', {icon:1, time:2000});
                      }else {
                          layer.msg('MAC值不等，认证失败', {icon:2, time:2000});
                         /* $('#miwen_dec').val('');
                          $('#mANDmac_dec').val('');
                          $('#base64_message_dec').val('');
                          $('#message_mac_old').val('');
                          $('#message_dec').val('')
                          $('#message_mac_old2').val('');
                          $('#message_mac_new').val('');
                          $('#message_mac_old3').val('');
                          $('#k1_dec').val('');*/
                          //$('#k2_dec').val('');
                      }
                  })

              },
              error:function () {
              },
          })
      })
    }

    $('#register_login').click(function () {
        $('#register_qq_num').val('');
        $('#register_nick_name').val('');
        $('#register_password').val('');
        $('#register_character').val('');
    })

    $('#register_confirm').click(function () {
        $.ajax({
            url:'register',
            type:'post',
            dataType:'json',
            data:{
                register_qq_num:$('#register_qq_num').val(),
                register_nick_name:$('#register_nick_name').val(),
                register_password:$('#register_password').val(),
                register_character:$('#register_character').val(),
                _token:"{{ csrf_token() }}"
            },
            success:function(data){

                if(data.status ==1){
                    //layer.msg(data.info,{icon:5,time:2000});

                    layer.msg(data.info,{anim:6,time:2000});
                }
                if(data.status ==2){
                    layer.msg(data.info,{anim:6,time:2000});
                }
                if(data.status ==3){
                    layer.msg(data.info,{anim:6,time:2000});
                }

                if(data.status ==0){
                    layer.msg(data.info,{icon:6,time:1000});
                    $('#register_quxiao').trigger('click');
                }
            }
        })
    })


</script>
