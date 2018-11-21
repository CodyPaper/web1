<html>
<body>


<table class="resch_list">
    <colgroup>
        <col />
        <col width="10%"/>
    </colgroup>
    <thead>
        <tr>
            <th>서비스</th>
            <th>필수여부</th>
        </tr>
    </thead>
    <tbody id="serviceTbody">

</tbody>

</table>
<button type="button" onclick="javascript:addRow()" class="gray">행추가</button>


<script>
function addRow(){
 
   mytable = document.getElementById('serviceTbody');  //행을 추가할 테이블
   row = mytable.insertRow(mytable.rows.length);  //추가할 행

   
   cell1 = row.insertCell(0);  //실제 행 추가 여기서의 숫자는 컬럼 수
   cell2 = row.insertCell(1);

   cell1.innerHTML = "<td class='al fontB'><input type='text' name='title' size='80'></td>"; //추가한 행에 원하는  요소추가
   cell2.innerHTML = "<td><input type='checkbox' name='service'/></td>";
}

var dataArray = new Array();
var title = document.getElementById("title").value;  
 
 
for(var i=0; i<rowCount; i++){
    var row = mytable.rows.item(i);
    var dataObj = new Object();
        for ( var j = 0; j<row.cells.length; j++ ) { 
            var col = row.cells.item(j);   
             if (col.firstChild.getAttribute('type') =="text"){   //텍스트일경우와 체크박스일경우 값을 다르게
                dataObj.question = col.firstChild.value;
            }else{
                dataObj.essential = col.firstChild.checked;  //체크박스의 경우 value값은 체크값이 아니기 때문
            }
        dataObj.title = title;
    }   
    dataArray.push(JSON.stringify(dataObj));   //데이터를 json 형식으로 만들어줌 stringify
}
 
var result = {'"dataList"' :[dataArray]};
var str='';
for(var i in result){
    if(result.hasOwnProperty(i)){
        str += i + ":[" + result[i]+"]";
    }
}
var dataParam = "{"+str+"}";


</script>

 </body>
</html>
