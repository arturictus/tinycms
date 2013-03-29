var myApp = angular.module('myApp', [] );
myApp.factory('Data', function (){
    return {message:"I'm a data from a service"}
});
function FirstCtrl($scope, Data){
    
    $scope.data=Data;
}
function SecordCtrl($scope, Data){
    $scope.data=Data;
    $scope.reversedMessage= function(message){
        return message.split("").reverse().join("");
    }
}


