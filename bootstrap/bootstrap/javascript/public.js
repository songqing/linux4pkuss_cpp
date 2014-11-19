/* ����Ajax ������ֵ����������ʾ������
 --------------------------------------------------*/
 function getAjax(url, parm, callBack) {
     $.ajax({
         type: 'post',
         dataType: "text",
         contentType: "application/x-www-form-urlencoded;charset=UTF-8",
         url: url,
         data: parm,
         cache: false,
         async: false,
         success: function (msg) {
             callBack(msg);
         }
     });
 }