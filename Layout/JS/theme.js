const styleTag = document.getElementById('styleTag')
let firstColor = 'white';
let secondColor = '#ABD5FF';
let textColor = '#303030'
let dl;

function loadTheme(){
  if (swichTurn1 == 1) {
    firstColor = '#F1F8FF'
    secondColor = '#ABD5FF'
    textColor = '#303030'
    dl = 'light'
  } else {
    firstColor = 'black'
    secondColor = 'white'
    dl = 'dark'
  }
  theme()
}
function theme(){styleTag.innerHTML=`
*{
  color: ${textColor} !important;
}
  body{
    background-color: ${firstColor};
    color : ${secondColor};
  } 
  header{
    background-color: ${secondColor};
  }
  marquee{
    color:${firstColor}; 
  }
  #nav{
    color:${firstColor}; 
  }
  #login{
    border-color:${textColor};
    color:${firstColor}; 
  }
  .down{
    background-color:${secondColor} !important; 
    border-color: ${firstColor} !important;
  }
  .src{
    color: ${textColor} !important; 
  }
  .src::placeholder {
    color: ${textColor}!important;
  }
  .item{
    color: ${firstColor} !important; 
  }
  .accr{
    background-color: ${textColor} !important; 
  }
  .subdrop{
    color: ${firstColor} !important; 
  }
  .buble{
    background-color: ${secondColor} !important; 
  }
  .dbutton{
    border-color: ${textColor} !important;
  }
  nav{
    background-color: ${secondColor} !important; 
  }
  nav img {
    background-color: ${secondColor} !important; 
  }
  nav ul li h3{
    color: ${firstColor}; 
  }
  .float form{
    background-color: ${secondColor} !important; 
  }
  form h1{
    color: ${firstColor} !important;
  }
  form a{
    color: ${firstColor} !important;
  }
  form input.submit{
   color: ${firstColor} !important;
  }
  `
  document.querySelector('#forum').src=`/drawable/Navbar/${dl}/forum.png`
  document.querySelector('#shop').src=`/drawable/Navbar/${dl}/shop.png`
  document.querySelector('#home').src=`/drawable/Navbar/${dl}/home.png`
  document.querySelector('#troli').src=`/drawable/Navbar/${dl}/troli.png`
  document.querySelector('#galeri').src=`/drawable/Navbar/${dl}/galeri.png`
  
}  