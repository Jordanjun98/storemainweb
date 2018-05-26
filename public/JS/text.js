//Get the Modal

// Get the modal element
var modal = document.getElementById('simpleModal');

window.onload=function(){
  //Get the modal button
  var modalBtn = document.getElementById("modalBtn");
  if (modalBtn){
    //Listen for open click
    modalBtn.addEventListener("click",openModal);
  }else{
    console.log("Error");
  }

  //Get close Button
  var closebtn = document.getElementById('closebtn');
  if (closebtn){
    //Listen for close click
    closebtn.addEventListener('click',closeModal);
  }else{
    console.log("error");
  }

  //Get cancel Button
  var closebtn = document.getElementById('cancelBtn');
  if (closebtn){
    //Listen for close click
    closebtn.addEventListener('click',closeModal);
  }else{
    console.log("error");
  }

}

//Function to open modal
function openModal(){
  document.getElementById("simpleModal").style.display = 'block';
}

//Function to close modal
function closeModal(){
  document.getElementById("simpleModal").style.display = 'none';
  //document.getElementById("cancelBtn").style.display = 'none';
}

//Function to cancel
function closeModal(){
  document.getElementById("simpleModal").style.display = 'none';
  //document.getElementById("cancelBtn").style.display = 'none';
}



//firebase
/*var Test1 = document.getElementById("test1");
var Test2 = document.getElementById("test2");

function test1(){
  var firebase = firebase.database().ref();
  //window.alert("OKAY");
  firebaseRef.child("text").set("Some value");
}*/
