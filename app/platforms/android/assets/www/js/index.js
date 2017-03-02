/*
 * Licensed to the Apache Software Foundation (ASF) under one
 * or more contributor license agreements.  See the NOTICE file
 * distributed with this work for additional information
 * regarding copyright ownership.  The ASF licenses this file
 * to you under the Apache License, Version 2.0 (the
 * "License"); you may not use this file except in compliance
 * with the License.  You may obtain a copy of the License at
 *
 * http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing,
 * software distributed under the License is distributed on an
 * "AS IS" BASIS, WITHOUT WARRANTIES OR CONDITIONS OF ANY
 * KIND, either express or implied.  See the License for the
 * specific language governing permissions and limitations
 * under the License.
 */
 function send_message(str){
   var data=new Object();
   data.title=str;
   var jsonData=JSON.stringify(data);
   iframe.contentWindow.postMessage(jsonData,"*");
 }
 //CAMERA
 var imguri2;

  var win = function (r) {
     var url=r.response;
     var options = new FileUploadOptions();
     options.fileKey = "upload";
     options.fileName=imguri2.substr(imguri2.lastIndexOf('/') + 1);
     options.mimeType = "image/jpeg";
     var ft = new FileTransfer();
     ft.upload(imguri2, encodeURI("http://total0808.cafe24.com/random_chat/app/upload.php"), win2, fail, options);
 }
 var win2 = function (r) {
     var data=new Object();

     data.title="image_url";
     data.url=r.response;

     var jsonData=JSON.stringify(data);
     //navigator.notification.alert(jsonData,'debug','done');
     document.getElementById('iframe').contentWindow.postMessage(jsonData,"*");
 }
 var fail = function (error) {
     alert("An error has occurred: Code = " + error.code);
     alert("upload error source " + error.source);
     alert("upload error target " + error.target);
 }
 function cameraSuccess(imguri){
     imguri2=imguri.replace('.jpg','_thumb.jpg');
     var options = new FileUploadOptions();
     options.fileKey = "upload";
     options.fileName = imguri.substr(imguri.lastIndexOf('/') + 1);
     options.mimeType = "image/jpeg";
     var ft = new FileTransfer();
     ft.upload(imguri, encodeURI("http://total0808.cafe24.com/random_chat/app/upload.php"), win, fail, options);
 }
 function cameraError(error){
   //alert(error);
 }
 //CAMERA
//SIM
// Android only: request permission
var phon_n;
function get_sim_info_suc(result){
  //alert(result.phoneNumber);
  //document.getElementById('iframe').src="http://total0808.cafe24.com/dalgona/app/sign_up.php?phone_number="+result.phoneNumber;
  checkLoginStatus(function(e){
    if(e){
      //alert('old');
      phon_n=result.phoneNumber;
      document.getElementById('iframe').src="http://total0808.cafe24.com/dalgona/app/main.php?id="+result.phoneNumber;
    }else{
      //alert('new');
      document.getElementById('iframe').src="http://total0808.cafe24.com/dalgona/app/sign_up.php?phone_number="+result.phoneNumber;
    }
  });
}
function sim_successCallback(result) {
  //alert(result)
  window.plugins.sim.getSimInfo(get_sim_info_suc, sim_errorCallback);
}

function sim_errorCallback(error) {
  //alert(result)
  navigator.app.exitApp();
}

// Android only: check permission
function hasReadPermission() {
  window.plugins.sim.hasReadPermission(sim_successCallback, sim_errorCallback);
}

// Android only: request permission
function requestReadPermission() {
  window.plugins.sim.requestReadPermission(sim_successCallback, sim_errorCallback);
}
//SIM
//KEYBOARD
function keyboardHideHandler(e){
  var data=new Object();

  data.title="margin_message";

  var jsonData=JSON.stringify(data);
  iframe.contentWindow.postMessage(jsonData,"*");
}
function keyboardShowHandler(e){
}
window.addEventListener('native.keyboardshow', keyboardShowHandler);
window.addEventListener('native.keyboardhide', keyboardHideHandler);
//KEYBOARD
//db관련모듈 /////
function dbinit(){ //database init.
    db = sqlitePlugin.openDatabase('login.db', '1.0', '', 1);
    db.transaction(function (txn) {
        txn.executeSql('create table if not exists login(id text)', [], function (tx, res) {
        });
        txn.executeSql('insert into login values(?)', [''], function (tx, res) {
	     });
    });
}
function checkLoginStatus(success){
    db.transaction(function (txn) {
        txn.executeSql('select * from login', [], function (tx, res) {
            var id=res.rows.item(0).id;
            myid=id;
            success(id);
        });
    });
}
function dropTable(){
    db.transaction(function (txn) {
        txn.executeSql('drop table login', [], function (tx, res) {
        });
    });
}
function setLoginStatus(id){
    db.transaction(function (txn) {
        txn.executeSql('update login set id=?', [id], function (tx, res) {
            myid=id;
        });
    });
}
//////////////////////////////ㅇdb관련모듈.
function onBackKeyDown(){
  if(document.getElementById('iframe').src.indexOf("random_chat") != -1){
    requestReadPermission();
  }else{
    send_message('backkey_down');
  }
}
function onResume(){
  var data=new Object();

  data.title="margin_message";

  var jsonData=JSON.stringify(data);
  iframe.contentWindow.postMessage(jsonData,"*");
}
var is_ad=0;
var app = {
    // Application Constructor
    initialize: function() {
        document.addEventListener('deviceready', this.onDeviceReady.bind(this), false);
    },
    // deviceready Event Handler
    //
    // Bind any cordova events here. Common events are:
    // 'pause', 'resume', etc.
    onDeviceReady: function() {
      //cordova.plugins.Keyboard.show();
      //requestReadPermission();
      StatusBar.backgroundColorByHexString("#f88978");
      document.addEventListener('backbutton',onBackKeyDown,false);
      document.addEventListener("resume", onResume, false);
      dbinit();

      requestReadPermission();
      //document.getElementById('iframe').src="http://total0808.cafe24.com/dalgona/app/main.php?login_status=0&id=0";
      window.onmessage=function(e){
        if(e.data=="exit_app"){
          navigator.app.exitApp();
        }else if(e.data=="sign_up"){
          requestReadPermission();
        }else if(e.data=="dropTable"){
          dropTable();
        }else if(e.data=="camera_message"){
          var options={
      				quality: 50,
  			        destinationType: Camera.DestinationType.FILE_URI,
  			        // In this app, dynamically set the picture source, Camera or photo gallery
  			        sourceType: Camera.PictureSourceType.CAMERA,
  			        encodingType: Camera.EncodingType.JPEG,
  			        mediaType: Camera.MediaType.PICTURE,
  			        allowEdit: true,
  			        correctOrientation: true  //Corrects Android orientation quirks
      			};
      			navigator.camera.getPicture(cameraSuccess,cameraError,options);
        }else if(e.data=="picture_message"){
          var options={
      				quality: 50,
  			        destinationType: Camera.DestinationType.FILE_URI,
  			        // In this app, dynamically set the picture source, Camera or photo gallery
  			        sourceType: Camera.PictureSourceType.PHOTOLIBRARY,
  			        encodingType: Camera.EncodingType.JPEG,
  			        mediaType: Camera.MediaType.PICTURE,
  			        allowEdit: true,
  			        correctOrientation: true  //Corrects Android orientation quirks
      			};
      			navigator.camera.getPicture(cameraSuccess,cameraError,options);
        }else if(e.data=="exit_message"){
          navigator.app.exitApp();
        }else if(e.data.indexOf("http") == 0){
          window.plugins.webintent.startActivity({
            action: window.plugins.webintent.ACTION_VIEW,
            url: e.data},
            function() {},
            function() {alert('Failed to open URL via Android Intent');}
          );
          is_ad=1;
        }else if(e.data=='home'){
          document.getElementById('iframe').src="http://total0808.cafe24.com/dalgona/app/main.php?id="+phon_n;
        }else{
          var jsondata=JSON.parse(e.data);
          if(jsondata.title=="url"){
            document.getElementById('iframe').src=jsondata.url;
          }else if(jsondata.title=="alert"){
            navigator.notification.alert(jsondata.alert,'debug','');
          }else if(jsondata.title=="user"){
            setLoginStatus(jsondata.user);
          }else if(jsondata.title=="ad"){
            window.plugins.webintent.startActivity({
              action: window.plugins.webintent.ACTION_VIEW,
              url: jsondata.ad},
              function() {},
              function() {alert('Failed to open URL via Android Intent');}
            );
          }
        }
      }
    }
};

app.initialize();
