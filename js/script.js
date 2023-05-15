//header

  const menubar=document.querySelector(".myIcon");
  const navClass=document.querySelector(".navClass");
const menubarIcon= document.querySelector(".toggleClass");


menubar.addEventListener("click", ()=>{

  menubarIcon.classList.toggle("active");

 
 
})





// //trainingtimes
const trainerList=[
  {name:"Larson Kevin", image:"images/tranier2.jpg"},
  {name:"James Black", image:"images/tranier3.jpg"},
  {name:"Michael Soul", image:"images/tranier4.jpg"},
  {name:"John Hardy", image:"images/tranier5.jpg"},
  {name:"Owen Hector", image:"images/tranier6.jpg"},
  {name:"Jack Adam", image:"images/tranier1.jpg"},
]



const imgBg=document.getElementById("imgBg");
const trainerName=document.getElementById("trainerName");
let i=0;

function next() {
    if (i >= trainerList.length - 1) i = -1;
    i++;
    imgBg.src=trainerList[i].image;
    trainerName.innerHTML=trainerList[i].name;
    imgBg.style.borderRadius = "25px";
    
  }
  
  function last() {
    if (i <= 0) i = trainerList.length ;
    i--;
    imgBg.src=trainerList[i].image;
    trainerName.innerHTML=trainerList[i].name
    imgBg.style.borderRadius = "0 0 100px";
    
  }








