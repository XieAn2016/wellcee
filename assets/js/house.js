$(function(){
    $(".disable-house").on("click", function(){
        var $houseLi = $(this).parents("tr");

        if(this.status == undefined){
            this.status = $(this).data('status');
        }
        if(this.bDisable == undefined){
            this.bDisable = ($(this).data('status') == 1) ? true:false;
        }
        this.status = (this.status==$(this).val())?0:$(this).val();
        var self = this;
        $.get("admin/welcome/change_house_status", {
            status: this.status,
            houseId: $(this).data("id")
        }, function(data){
            if(data == "success"){
                if(self.bDisable){
                    $(self).data('status', 0);
                    $(self).html("<span class='am-icon-toggle-on'></span> 禁用").addClass("am-text-secondary");
                    $(".house-status", $houseLi).html("正常");
                    alert("取消禁用成功");
                }else{
                    $(self).data('status', 1);
                    $(self).html("<span class='am-icon-toggle-off'></span> 取消禁用").removeClass("am-text-secondary").css("color: #aaa");
                    $(".house-status", $houseLi).html("禁用中");
                    alert("禁用成功");
                }
                self.bDisable = !self.bDisable;
            }else{
                console.log("fail");
            }
        }, "text");
    });
    $(".delete-house").on("click", function(){
        //if(this.status == undefined){
        //    this.status = $(this).data('status');
        //}
        //this.status = (this.status==$(this).val())?0:$(this).val();
        var $houseLi = $(this).parents("tr");
        $.get("admin/welcome/change_house_status", {
            status: 2,
            houseId: $(this).data("id")
        }, function(data){
            if(data == "success"){
                console.log("success");
                $houseLi.remove();
                alert("删除成功")
            }else{
                console.log("fail");
            }
        }, "text");
    });
    $(".submit-btn").on("click", function(){
        console.log($("input[name='title']").val());
        $.post("admin/welcome/save_house", {
            title: $("input[name='title']").val()
        }, function(data){
            alert("yyy");
        }, "text");
    });
});