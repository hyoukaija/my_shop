<?php if (!defined('THINK_PATH')) exit();?>
                    <form method="post" enctype="multipart/form-data" target="_blank" id="form-order">
                        <div class="table-responsive">
                            <table class="table table-bordered table-hover">
                                <thead>
                                <tr>
                                    <td style="width: 1px;" class="text-center"><input type="checkbox" onclick="$('input[name*=\'selected\']').prop('checked', this.checked);"></td>
    
                                    <td class="text-right">
                                        <a href="javascript:sort('user_id');">ID</a>
                                    </td>
                                    <td class="text-left">
                                        <a href="javascript:sort('title');">商户名称</a>
                                    </td>
                                    <td class="text-left">
                                        <a href="javascript:sort('user_name');">联系人</a>
                                    </td>
                                    <td class="text-left">
                                        <a href="javascript:sort('mobile');">手机号码</a>
                                    </td>
                                    <td class="text-left">
                                        <a href="javascript:sort('lbtype');">经营类别</a>
                                    </td>
                                    <td class="text-left">
                                        <a href="javascript:sort('reg_time');">申请日期</a>
                                    </td>
                                    <td class="text-right">操作</td>
                                </tr>
                                </thead>
                                <tbody>
                                <?php if(is_array($userList)): $i = 0; $__LIST__ = $userList;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$list): $mod = ($i % 2 );++$i;?><tr>
                                        <td class="text-center">
                                            <input type="checkbox" name="selected[]" value="<?php echo ($list['user_id']); ?>">
                                            <input type="hidden" name="shipping_code[]" value="flat.flat">
                                        </td>
                                        <td class="text-right"><?php echo ($list["user_id"]); ?></td>
                                        <td class="text-left"><?php echo ($list["title"]); ?></td>
                                        <td class="text-left"><?php echo ($list["user_name"]); ?></td>
                                        <td class="text-left"><?php echo ($list["mobile"]); ?></td>
                                        <td class="text-left"><?php echo ($list["lbtype"]); ?></td>
                                        <td class="text-left"><?php echo (date('Y-m-d H:i',$list["reg_time"])); ?></td>
                                        <td class="text-right">
                                            <a href="<?php echo U('Admin/user/deleteruzhu',array('id'=>$list['id']));?>" id="button-delete6" data-toggle="tooltip" title="" class="btn btn-danger" data-original-title="删除"><i class="fa fa-trash-o"></i></a>
                                        </td>
                                    </tr><?php endforeach; endif; else: echo "" ;endif; ?>
                                </tbody>
                            </table>
                        </div>
                    </form>
                    <div class="row">
                        <div class="col-sm-3 text-left">
                        </div>
                        <div class="col-sm-6 text-right"><?php echo ($page); ?></div>
                    </div>
<script>
    $(".pagination  a").click(function(){
        var page = $(this).data('p');
        ajax_get_table('search-form2',page);
    });
</script>