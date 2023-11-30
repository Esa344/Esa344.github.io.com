const animForum = document.getElementById('forum')
const animShop = document.getElementById('shop')
const animHome = document.getElementById('home')
const animTroli = document.getElementById('troli')
const animGaleri = document.getElementById('galeri')

const textForum = document.getElementById('textForum')
const textShop = document.getElementById('textShop')
const textHome = document.getElementById('textHome')
const textTroli = document.getElementById('textTroli')
const textGaleri = document.getElementById('textGaleri')

const drobMenu = document.getElementById('drobDown')
const srcMenu = document.getElementById('src')
const drobItem = document.getElementById('drobItem')
const subDrob = document.getElementById('subDrob')


let lastItem = animHome
let lastText = textHome
let click = 'home'

animHome.style.marginTop = '-15vh'
animHome.style.padding = '20px 20px 15px 20px'
textHome.style.display = 'block'


function forum() {
  if (click != 'forum') {
    animForum.style.marginTop = '-15vh'
    animForum.style.padding = '20px 20px 15px 20px'
    textForum.style.display = 'block'

    lastItem.style.marginTop = '0vh'
    lastItem.style.padding = '15px'
    lastText.style.display = 'none'

    lastItem = animForum
    lastText = textForum 
  }
  else{
  }
  click = 'forum'
}

function shop() {
  if (click != 'shop') {
    animShop.style.marginTop = '-15vh'
    animShop.style.padding = '20px 20px 15px 20px'
    textShop.style.display = 'block'

    lastItem.style.marginTop = '0vh'
    lastItem.style.padding = '15px'
    lastText.style.display = 'none'

    lastItem = animShop
    lastText = textShop
  }
  else{
  }
  click = 'shop'
}

function home() {
  if (click != 'home') {
    animHome.style.marginTop = '-15vh'
    animHome.style.padding = '20px 20px 15px 20px'
    textHome.style.display = 'block'

    lastItem.style.marginTop = '0vh'
    lastItem.style.padding = '15px'
    lastText.style.display = 'none'

    lastItem = animHome
    lastText = textHome
  }
  else{
  }
  click = 'home'
}

function troli() {
  if (click != 'troli') {
    animTroli.style.marginTop = '-15vh'
    animTroli.style.padding = '20px 20px 15px 20px'
    textTroli.style.display = 'block'

    lastItem.style.marginTop = '0vh'
    lastItem.style.padding = '15px'
    lastText.style.display = 'none'

    lastItem = animTroli
    lastText = textTroli
  }
  else{
  }
  click = 'troli'
}

function galeri() {
  if (click != 'galeri') {
    animGaleri.style.marginTop = '-15vh'
    animGaleri.style.padding = '20px 20px 15px 20px'
    textGaleri.style.display = 'block'

    lastItem.style.marginTop = '0vh'
    lastItem.style.padding = '15px'
    lastText.style.display = 'none'

    lastItem = animGaleri
    lastText = textGaleri
  }
  else{
  }
  click = 'galeri'
  
}

function drobDown(){
  drobMenu.style.paddingBottom='10px'
  drobMenu.style.paddingTop='5px'
  drobMenu.style.height='auto'
  drobMenu.style.width='100vw'
  src.style.display='block'
  src.style.height='35px'
  drobItem.style.display='flex'
  drobItem.style.height='30px'
  subDrob.style.display='block'
  
}