<!DOCTYPE html>
<html ng-app="ngEvent">
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
app.controller("ngEvtCtrl", ['$scope', '$http', function($scope, $http) {
    $scope.names = [
                        { 
                            'sRadio': 'AIC',
                            'sName':'Infosys Technologies',
                            'sEmail': 'a@a.a',
                            }
                                                                 
                        ];
    

 
  //$scope.names = [];

  
  // [b] 함수(메서드) 추가
  $scope.addName = function() {

    // [!!!] 유효성 검사 통과 확인
    //if ($scope.newStu.$valid) {
     // window.alert("Perpect, you can add : )");

    $scope.names.push({ 'sRadio':$scope.sRadio ,'sName':$scope.sName, 'sEmail': $scope.sEmail});
        // Writing it to the server
        //      
        var dataObj = {
                sRadio : $scope.sRadio,
                sName : $scope.sName,
                sEmail : $scope.sEmail
            };
                
        var res = $http.post('/savecompany_json', dataObj);
        res.success(function(data, status, headers, config) {
            $scope.message = data;
        });
        /*res.error(function(data, status, headers, config) {
            alert( "failure message: " + JSON.stringify({data: data}));
        });
        */      
        // Making the fields empty
        //
        $scope.sRadio='';
        $scope.sName='';
        $scope.sEmail='';
        


};
}
</script>

<body ng-controller="ngEvtCtrl">
  
    <h3>Put your information</h3>

    <form ng-submit="addName()" name="newStu" >
      <p>College : 
      <input type="radio" name="college" value="AIC" ng-model="sRadio" required >AIC
      <input type="radio" name="college" value="NSWBC" ng-model="sRadio" required>NSWBC
      <input type="radio" name="college" value="NSWEnglish" ng-model="sRadio" required>NSWEnglish 
        </p>
      
      <p>Student ID 333:
      <input type="text" name="sName" value="" ng-model="sName" required />
      
      <br /></p>

      <p>Student E-mail :
      <input type="email" name="sEmail" data-ng-model="sEmail" required />
      
      <br /> <br /></p>

      <input type="submit" value="Add" /></input>
    </form>


  <h3>Information</h3>
<div>
<table class="table" border="1px">
  
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
   <tr ng-repeat="info in names">
                                <td>{{info.sRadio}}
                                </td>
                                <td>{{info.sName}}
                                </td>
                                <td>{{info.sEmail}}
                                </td>
                                
                            </tr>
</table>
</div>


</body>

</html>