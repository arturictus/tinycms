function Tocheck($scope, $http){
   
        $scope.method = 'POST';
    $scope.url = "http://localhost/tinycms/ajax/ajax.php";
  
 
  //  $scope.compositor={id:$scope.id};
  // $scope.postData = 'compositor='+angular.toJson($scope.compositor);
  //  $scope.code = null;
  //  $scope.response = null;
    
    $scope.header=function(){
        $scope.compositor={id:$scope.id};
   $scope.postData = 'compositor='+angular.toJson($scope.compositor);
   
    $scope.code = null;
    $scope.response = null;
    
        $http({
        method: $scope.method,
        url: $scope.url,
        data: $scope.postData,
        //data: $scope.compositor,
        headers: {'Content-Type': 'application/x-www-form-urlencoded'}
    }).
    success(function(data, status) {
        $scope.status = status;
        $scope.temas = data;
    }).
    error(function(data, status) {
        $scope.data = data || "Request failed";
        $scope.status = status;
    });
    }
    
}

function Search($scope, $http) {
 /*$scope.change=function(){
    $http({
    url: "http://localhost/tinycms/ajax/ajax.php",
    method: "POST",
    data: {"compositor":$scope.compositor}
}).success(function(data,status,headers,config) {
    $scope.temas = data;
}).error(function(data,status,headers,config) {
    $scope.status = status;
});}*/
$scope.change2=function(){
$http.post("http://localhost/tinycms/ajax/ajax.php", {"int":$scope.int})
        .success(function(data){
        $scope.temas = data;
        }
    )}
/*
    $http({
    url: "http://localhost/tinycms/ajax/ajax.php",
    method: "POST",
    data: {"compositor":$scope.data.compositor}
}).success(function(data) {
    $scope.temas = data;
}).error(function(data) {
    $scope.status = status;
});*/
}


//$scope.compositor