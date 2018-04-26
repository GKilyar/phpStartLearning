var Cookie = {
    set:function(key,val,expiretime){
        if(expiretime){
            var date = new Date();
            date.setTime(date.getTime()+expiretime*24*3600*1000)
            var expirestring = "expires"+date.toGMTString()+";"
        }else{
            var expirestring =''
        }
        document.cookie=key+escape(val)+expirestring
    },
    get:function(){
        var getCookie = document.cookie.replace(/[]/g,'')
        var resArr = getCookie.split(';')
        var res;
        for(var i=0,len = resArr.length;i<len;i++){
            var arr = resArr[i].split('=')
            if(arr[0]==key){
                res=arr[1]
                break
            }
        }

        return unescape(res);
    }
}
