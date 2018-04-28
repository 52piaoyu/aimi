/*
 * develop wf
 */
/*注册页表单验证*/
$(".r_type").click(function() {
		var v=$(this).val();
		t_register(v)	;
});
t_register();
function t_register(v){  
	if(!v) var v = $("input:radio[name='type'][checked]").val(); 
	if(v == "1"){
		$(".aff_r").show();
		$(".adv_r").hide();
	}else {
		$(".aff_r").hide();
		$(".adv_r").show();
	} 
}

$("#form_b").validate({
        errorClass: "r_error",
        highlight: function(element) {
            $(element).closest('td').addClass("f_error");
        },
        unhighlight: function(element) {
            $(element).closest('td').removeClass("f_error");
        },
         
        rules: {
             username: {
                    required: true,
				      enum:true,
					remote:{  
					　　 type:"POST",
					　　 url:"/index.php?e=index.remote_user&repeat=y",
					　　 data:{
					　	　 username:function(){ 
							return $("#username_ajax").val();
							}
				　　 		} 
					},
					minlength:4
			　},
			 password: {
                    required: true
             },
			 passwordre: {
                    required: true,
					equalTo: "#password"
             },
             contact: {
                    required: true
             },
             email: {
                    required: true,
					email:true     
             },
             qq: {
                    required: false,
					digits:true,
					minlength:5
             }
			 ,
             accountname: {
                    required: true
             }
			 ,
             bankaccount: {
                    required: true
             }  ,
			 regcode: {
                    required: true
             }
        },
        messages: {
            username:{
					required:"用户名不能为空！",
					remote:"用户名已存在",
					minlength:"长度不能小于4个字符",
					enum:"请使用数字、26个英文字母或者下划线组成"
			 },
			password: {
                    required:"密码不能为空！"
                },
			passwordre: {
                    required:"请再一次输入密码！",
					equalTo:"两次输入的密码不一样！"
             },
             contact: {
                    required: "请填写联系人！",
             },
             email: {
                    required: "请填写Email！",
					email:"格式不正确"
             },
			  qq: {
					digits:"格式不正确",
					minlength:"长度不能小于5"
             },
             accountname: {
                    required: "请填写收款姓名！",
             }
			 ,
             bankaccount: {
                    required: "请填写收款人帐号！",
             } ,
			 regcode: {
                    required: "请填写验证码！",
             }
        },
        
        errorElement: 'span' ,
        errorPlacement: function(error, element) {
            var name = element.attr('name');  
            if (name == 'isok') {
                $('#ckinfo').append(error);
            } else {
                error.insertAfter(element);
            }
        }

    });