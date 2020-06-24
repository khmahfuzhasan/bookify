const addBookBtn            = document.querySelector("#addBookBtn");
const modelContainer = document.querySelector(".model-container");
const bookform = document.querySelector('#form');
const addbook = document.querySelector('#addbook');
const updatebookBtn = document.querySelector('#updatebook');
// Events Modal
      addBookBtn.addEventListener("click", (event) => {
        updatebookBtn.style.display ="none";
        addbook.style.display ="block";
        bookform.reset();
        modalBox();
      });


function modalBox(){
      modelContainer.style.display = 'flex';
      modelContainer.addEventListener("click", (event) => {

         const className = event.target.getAttribute("class");
         if(className === "model-container"){
         	modelContainer.style.display = 'none';
         }
    });
}


function imageName(){
  let image = document.getElementById("imageInput").value;
  let imageName = image.split("\\");
  let index = imageName.length - 1;
  let label = document.getElementById("custom-label");
      label.innerText = imageName[index];
}