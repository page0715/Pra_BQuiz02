<fieldset>
    <legend>會員註冊</legend>
    <span style="color:red">*請設定您要註冊的帳號及密碼(最長12個字元)</span>
    <table>
        <tr>
            <td class="clo">Setp1:登入帳號</td>
            <td><input type="text" name="acc" id="acc"></td>
        </tr>
        <tr>
            <td class="clo">Setp2:登入密碼</td>
            <td><input type="password" name="pw" id="pw"></td>
        </tr>
        <tr>
            <td class="clo">Setp3:再次確認密碼</td>
            <td><input type="password" name="pw2" id="pw2"></td>
        </tr>
        <tr>
            <td class="clo">Setp4:信箱(忘記密碼時使用)</td>
            <td><input type="text" name="email" id="email"></td>
        </tr>
        <tr>
            <td>
                <input type="button" value="註冊" onclick="reg()">
                <input type="reset" value="清除">
            </td>
            <td></td>
        </tr>
    </table>
</fieldset>

<script>
    
function reg(){
    let user={  acc:$("#acc").val(),
                pw:$("#pw").val(),
                pw2:$("#pw2").val(),
                email:$("#email").val()
             }
        if(user.acc!="" && user.pw!="" && user.pw2!="" && user.email!=""){
            if(user.pw==user.pw2){
                console.log(res)
                //AJAX 的寫法
                $.post("./api/chk_acc.php",{acc:user.acc},(res)=>{
                    if(parseInt(res)==1){
                        alert("帳號重覆")
                    }else{

                    }    
                })

            }else{
                alert("密碼錯誤")
            }


        }else{
            alert("不可空白")
        }
        //console.log(user);
}
        
        
        
        
</script>
