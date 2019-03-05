/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

var loadFile = function(event) {
                                                   var reader = new FileReader();
                                                   reader.onload = function(){
                                                       var output = document.getElementById('output');
                                                       output.src = reader.result;
                                                   };
                                                   reader.readAsDataURL(event.target.files[0]);
                                               };
