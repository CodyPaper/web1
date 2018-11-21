<!DOCTYPE html>
<html>
<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.9/angular.min.js">
</script>
<style type="text/css">
table {
    font-family: arial, sans-serif;
    border-collapse: collapse;
    width: 30%;
    height: 30%;
    
}
td, th {
  margin:auto;
    text-align:center;
    padding:10px;
}

.error {
  color: red;
  font-size:1.1em;
}
</style>


<script>
  // [1] 모듈
var app = angular.module('ngEvent', [ /* 의존 모듈 정의 */ ]);

// [2] 컨트롤러
app.controller("ngEvtCtrl", function($scope) {

 
  $scope.names = [];

  
  // [b] 함수(메서드) 추가
  $scope.addName = function() {

    // [!!!] 유효성 검사 통과 확인
    if ($scope.newStu.$valid) {
      window.alert("Perpect, you can add : )");

    var table = document.getElementById("myTable");
    var row = table.insertRow();
    var cell1 = row.insertCell(0);
    var cell2 = row.insertCell(1);
    var cell3 = row.insertCell(2);
    cell1.innerHTML = $scope.sRadio;
    cell2.innerHTML = $scope.txtName;
    cell3.innerHTML = $scope.inputData.sEmail;
    $scope.names.push({
        sRadio : sRadio,
        sName: sName,
        sEmail: $scope.inputData.sEmail
      });
    }
  };
});

</script>

<body ng-app="ngEvent">
  <section ng-controller="ngEvtCtrl">
    <h3>Put your information</h3>
    <form method="post" name="newStu">
      <p>College : 
      <input type="radio" name="college" value="AIC" ng-model="sRadio" required >AIC
      <input type="radio" name="college" value="NSWBC" ng-model="sRadio" required>NSWBC
      <input type="radio" name="college" value="NSWEnglish" ng-model="sRadio" required>NSWEnglish 

      <span class="error" data-ng-show="newStu.college.$error.required">&nbsp;&nbsp;*Required!</span>
      <br></p>
      
      <p>Student ID 8888:
      <input type="text" name="sName" value="" ng-model="txtName" placeholder=" xxxxxx" required />
      <span class="error" data-ng-show="newStu.sName.$error.required">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;*Required!</span>
      <br /></p>

      <p>Student E-mail :
      <input type="email" name="sEmail" data-ng-model="inputData.sEmail" placeholder=" xxx@xxx.xxx" required />
      <span class="error" data-ng-show="newStu.sEmail.$error.required">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;*Required!</span>
      <span class="error" data-ng-show="newStu.sEmail.$error.email">Not valid email!</span>
      <br /> <br /></p>

      <button ng-click="addName()" ng-disabled="newStu.$invalid">Add</button>
    </form>
</section>

  <h3>Information</h3>
<div>
<table id="myTable" border="1px">
  
  <tr>
    <th>College </th>
    <th>Student ID</th>
    <th>Student E-mail</th>
  </tr>
  <!--
  <tr >
    <th ng-repeat="nick in names">{{ nick.sName }} </th>
    <th ng-repeat="nick in names">{{ nick.sEmail }} </th>
  </tr>
   -->
</table>
</div>


</body>

</html>