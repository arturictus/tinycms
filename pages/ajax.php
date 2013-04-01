<?php
//PAGES
/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
?>

<hr/>
<p>lista de temas</p>
<div ng-app="">
 <!--   <div ng-controller="Search">
        
    Search: 
    <div >
    <input type="text" ng-model="int" >
    </div>
  <ul >
        <li ng-repeat="tema in temas">{{tema}}</li>
    </ul>
    <p>{{compositor}}</p>
    <button ng-click="change2()">GO</button>
    </div>-->
    
    <div ng-controller="Tocheck">
        <button ng-click="header()">GO</button><br/>
    Search: 
   <input type="text" ng-model="id" >
   <ul >
        <li ng-repeat="tema in temas">{{tema.titulo}}</li>
    </ul>
    <p>{{data.form}}</p>
    
 
   
</div>