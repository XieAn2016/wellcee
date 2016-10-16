<!doctype html>
<html class="no-js fixed-layout">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>房源管理</title>
  <meta name="description" content="这是一个 index 页面">
  <meta name="keywords" content="index">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="renderer" content="webkit">
  <meta http-equiv="Cache-Control" content="no-siteapp" />
  <base href="<?php echo site_url();?>">
  <link rel="icon" type="image/png" href="assets/i/favicon.png">
  <link rel="apple-touch-icon-precomposed" href="assets/i/app-icon72x72@2x.png">
  <meta name="apple-mobile-web-app-title" content="Amaze UI" />
  <link rel="stylesheet" href="assets/css/amazeui.min.css"/>
  <link rel="stylesheet" href="assets/css/admin.css">
</head>
<body>

<?php include "header.php"?>

<div class="am-cf admin-main">

  <?php include "sidebar.php"?>

  <div class="admin-content">
    <div class="admin-content-body">
      <div class="am-cf am-padding am-padding-bottom-0">
        <div class="am-fl am-cf"><strong class="am-text-primary am-text-lg">房源管理</strong> / <small>House Management</small></div>
      </div>

      <hr>

    <div class="am-g">
        <div class="am-u-sm-12 am-u-md-6">
          <div class="am-btn-toolbar">
            <div class="am-btn-group am-btn-group-xs">
                <button type="button" class="am-btn am-btn-default"><a href="admin/welcome/add_house"><span class="am-icon-plus"></span> 新增</a></button>
              <button type="button" class="am-btn am-btn-default"><span class="am-icon-trash-o"></span> 删除</button>
            </div>
          </div>
        </div>

        <div class="am-u-sm-12 am-u-md-3 am-u-md-offset-2 am-u-end">
          <div class="am-input-group am-input-group-sm">
            <input type="text" class="am-form-field">
          <span class="am-input-group-btn">
            <button class="am-btn am-btn-default" type="button">搜索</button>
          </span>
          </div>
        </div>
      </div>
    <div class="am-g" style="margin-top: 10px;">
<!--        <div class="am-u-sm-12 am-u-md-6">-->
            <div class="am-u-sm-12 am-u-md-2" style="padding-right: 10px">
<!--                <div class="am-form-group">-->
                    <select data-am-selected="{btnWidth: '100%', btnSize: 'sm'}">
                        <option value="option1">城市</option>
                        <option value="option2">房客</option>
                        <option value="option3">房东</option>
                    </select>
<!--                </div>-->
            </div>
            <div class="am-u-sm-12 am-u-md-2" style="padding: 0 10px 0 0">
                <div class="am-form-group">
                    <select data-am-selected="{btnWidth: '100%', btnSize: 'sm'}">
                        <option value="option1">街区</option>
                        <option value="option2">房客</option>
                        <option value="option3">房东</option>
                    </select>
                </div>
            </div>
            <div class="am-u-sm-12 am-u-md-2 am-u-end" style="padding: 0 10px 0 0">
                <div class="am-form-group">
                    <select data-am-selected="{btnWidth: '100%', btnSize: 'sm'}">
                        <option value="option1">路</option>
                        <option value="option2">房客</option>
                        <option value="option3">房东</option>
                    </select>
                </div>
            </div>



<!--    </div>-->


<!--    <div class="am-g" style="margin-top: 10px;">-->
        <div class="am-u-sm-12 am-u-md-2 am-u-sm-offset-1" style="padding-right: 10px;">
            <div class="am-form-group">
                <select data-am-selected="{btnWidth: '100%', btnSize: 'sm'}">
                    <option value="option1">房源类型</option>
                    <?php foreach($house_types as $house_type){
                        ?>
                        <option data-id="<?php echo $house_type -> type_id?>"><?php echo $house_type -> name?></option>
                        <?php
                    }?>
                </select>
            </div>
        </div>
        <div class="am-u-sm-12 am-u-md-2 am-u-end" style="padding: 0 10px 0 0">
            <div class="am-form-group">
                <select data-am-selected="{btnWidth: '100%', btnSize: 'sm'}">
                    <option value="option1">出租类型</option>
                    <?php foreach($house_rent_types as $house_rent_type){
                        ?>
                        <option data-id="<?php echo $house_rent_type -> rent_type_id?>"><?php echo $house_rent_type -> name?></option>
                        <?php
                    }?>
                </select>
            </div>
        </div>
        </div>
        <div class="am-g" style="margin-top: 10px;">

            <div class="am-u-sm-12 am-u-md-2" style="padding-right: 10px"> </div>
            <div class="am-u-sm-12 am-u-md-2 " style="padding-right: 10px">
    <!--            /*am-u-sm-offset-2*/-->
               <div class="am-form-group">
                   床
                <select data-am-selected="{btnWidth: '35%', btnSize: 'sm'}">
                    <option value="option1"></option>
                    <option value="option1">1</option>
                    <option value="option2">2</option>
                    <option value="option3">3</option>
                    <option value="option3">3+</option>
                </select>
                   个
               </div>
            </div>
            <div class="am-u-sm-12 am-u-md-2 " style="padding: 0 10px 0 0">
                <div class="am-form-group">
                    卧室
                    <select data-am-selected="{btnWidth: '35%', btnSize: 'sm'}">
                        <option value="option1"></option>
                        <option value="option2">1</option>
                        <option value="option3">2</option>
                        <option value="option3">3</option>
                        <option value="option3">3+</option>
                    </select>
                    个
                </div>
            </div>
            <div class="am-u-sm-12 am-u-md-2 am-u-end" style="padding: 0 10px 0 0">
                <div class="am-form-group">
                    洗手间
                    <select data-am-selected="{btnWidth: '35%', btnSize: 'sm'}">
                        <option value="option1"></option>
                        <option value="option1">1</option>
                        <option value="option2">2</option>
                        <option value="option3">3</option>
                        <option value="option3">3+</option>
                    </select>
                    个
                </div>
            </div>
                <div class="am-u-sm-12 am-u-md-2 am-u-sm-offset-3 am-u-end" style="padding-right: 10px;">
                    <div class="am-form-group">
                        <select data-am-selected="{btnWidth: '100%', btnSize: 'sm'}">
                            <option value="option1">币种</option>
                            <option value="option2">$</option>
                            <option value="option3">房东</option>
                        </select>
                    </div>

                </div>

        </div>


        <div class="am-g" style="margin-top: 10px;">

           <div class="am-u-sm-12 am-u-md-11" style="padding-right: 10px">
            <div id="doc-dropdown-justify">

                <div class="am-dropdown" data-am-dropdown="{justify: '#doc-dropdown-justify'}">
                    <button class="am-btn am-btn-secondary am-dropdown-toggle">便利设施 <span class="am-icon-caret-down"></span></button>
                    <div class="am-dropdown-content">

                        <div class="am-form-group" style="font-size: 14px;">

                            <?php foreach($conveniences as $convenience){
                                ?>
                                <input type="checkbox" data-id="<?php echo $convenience -> convenience_id?>"><?php echo $convenience -> name?> </input>
                                <?php
                            }?>


                        </div>
                    </div>
                </div>
            </div>
          </div>
        </div>
<!--      CONTENT-->
      <div class="am-g">
        <div class="am-u-sm-12">
          <form class="am-form">
            <table class="am-table am-table-striped am-table-hover table-main">
              <thead>
              <tr>
                <th class="table-check"><input type="checkbox" /></th>
                <th class="table-id">ID</th>
                <th class="table-title">房源名称</th>
                  <th class="">预定价格</th>
                  <th class="table-author">房东姓名</th>
                <th class="">状态</th>
                <th class="table-date">发布日期</th>
                <th class="table-set">操作</th>
              </tr>
              </thead>
              <tbody>
              <?php foreach($houses as $house){

                  ?>

                <tr>
                  <td><input type="checkbox" value="<?php echo $house->house_id;?>"/></td>
                  <td><?php echo $house -> house_id;?></td>
                  <td><a href="admin/welcome/house_detail?houseId=<?php echo $house -> house_id;?>"><?php echo $house -> title?></a></td>
                <td class="am-hide-sm-only"><?php echo $house -> price?></td>
                <td><a href=""><?php echo $house -> last_name?><?php echo $house -> first_name?></a></td>
                  <td class="am-hide-sm-only house-status"><?php if($house->status == 1){echo "休眠中";}else echo "正常";?></td>
                  <td class="am-hide-sm-only">2014年9月4日 7:28:47</td>
                  <td>
                    <div class="am-btn-toolbar">
                      <div class="am-btn-group am-btn-group-xs">
                        <button type="button" class="edit-house am-btn am-btn-default am-btn-xs am-text-secondary"><span class="am-icon-pencil-square-o"></span> 编辑</button>
                        <?php if($house->status == 1){
                            ?>
                            <button type="button" data-id="<?php echo $house->house_id?>" value="1" data-status="1" class='disable-house am-btn am-btn-default am-btn-xs'> <span class='<?php echo "am-icon-toggle-off";?>'></span> <?php echo "取消禁用";?></button>
                          <?php
                        }else{
                            ?>
                            <button type="button" data-id="<?php echo $house->house_id?>" value="1" data-status="<?php echo $house->status;?>" class='disable-house am-btn am-btn-default am-btn-xs <?php echo "am-text-secondary";?>'> <span class='<?php echo "am-icon-toggle-on";?>'></span> <?php echo "禁用";?></button>
                            <?php
                        }?>
                          <button type="button" data-id="<?php echo $house->house_id?>" value="2" class="change-status delete-house am-btn am-btn-default am-btn-xs am-text-danger am-hide-sm-only"><span class="am-icon-trash-o"></span> 删除</button>
                      </div>
                    </div>
                  </td>
                </tr>
              <?php
              }?>

<!--                <tr>-->
<!--                  <td><input type="checkbox" value=""/></td>-->
<!--                  <td>1</td>-->
<!--                  <td><a href="#">Business management</a></td>-->
<!--                    <td class="am-hide-sm-only">980</td>-->
<!--                    <td><a href="">房东</a></td>-->
<!--                  <td class="am-hide-sm-only">正常</td>-->
<!--                  <td class="am-hide-sm-only">2014年9月4日 7:28:47</td>-->
<!--                  <td>-->
<!--                    <div class="am-btn-toolbar">-->
<!--                      <div class="am-btn-group am-btn-group-xs">-->
<!--                        <button class="am-btn am-btn-default am-btn-xs am-text-secondary"><span class="am-icon-pencil-square-o"></span> 编辑</button>-->
<!--                        <button class="am-btn am-btn-default am-btn-xs am-text-secondary"><span class="am-icon-pencil-square-o"></span> 禁用</button>-->
<!--                        <button class="am-btn am-btn-default am-btn-xs am-text-danger am-hide-sm-only"><span class="am-icon-trash-o"></span> 删除</button>-->
<!--                      </div>-->
<!--                    </div>-->
<!--                  </td>-->
<!--                </tr>-->
<!---->
<!--                <tr>-->
<!--                  <td><input type="checkbox" /></td>-->
<!--                  <td>1</td>-->
<!--                  <td><a href="#">Business management</a></td>-->
<!--                    <td class="am-hide-sm-only">980</td>-->
<!--                    <td><a href="">房东</a></td>-->
<!--                  <td class="am-hide-sm-only">正常</td>-->
<!--                  <td class="am-hide-sm-only">2014年9月4日 7:28:47</td>-->
<!--                  <td>-->
<!--                    <div class="am-btn-toolbar">-->
<!--                      <div class="am-btn-group am-btn-group-xs">-->
<!--                        <button class="am-btn am-btn-default am-btn-xs am-text-secondary"><span class="am-icon-pencil-square-o"></span> 编辑</button>-->
<!--                        <button class="am-btn am-btn-default am-btn-xs am-text-secondary"><span class="am-icon-pencil-square-o"></span> 禁用</button>-->
<!--                        <button class="am-btn am-btn-default am-btn-xs am-text-danger am-hide-sm-only"><span class="am-icon-trash-o"></span> 删除</button>-->
<!--                      </div>-->
<!--                    </div>-->
<!--                  </td>-->
<!--                </tr>-->
              </tbody>
            </table>













            <div class="am-cf">
              共 15 条记录
              <div class="am-fr">
                <ul class="am-pagination">
                  <li class="am-disabled"><a href="#">«</a></li>
                  <li class="am-active"><a href="#">1</a></li>
                  <li><a href="#">2</a></li>
                  <li><a href="#">3</a></li>
                  <li><a href="#">4</a></li>
                  <li><a href="#">5</a></li>
                  <li><a href="#">»</a></li>
                </ul>
              </div>
            </div>
            <hr />
          </form>
        </div>

      </div>
    </div>


  </div>
  <!-- 公告列表结束 -->
</div>

<a href="#" class="am-icon-btn am-icon-th-list am-show-sm-only admin-menu" data-am-offcanvas="{target: '#admin-offcanvas'}"></a>

<script src="assets/js/jquery.min.js"></script>
<script src="assets/js/amazeui.min.js"></script>
<script src="assets/js/app.js"></script>
<script src="assets/js/house.js"></script>
</body>
</html>
