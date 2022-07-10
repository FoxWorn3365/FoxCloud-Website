function getOffset(el) {
  const rect = el.getBoundingClientRect();
  return {
    left: rect.left + window.scrollX,
    top: rect.top + window.scrollY
  };
}

function betterVisual() {
  if (document.getElementById('footer').classList != "w3-black w3-animate-top") {
    document.getElementById('someThings').style.display = "none";
  } else {
    document.getElementById('someThings').style.display = "block";
  }
}

function loadChars() {
  console.log(document.documentElement.scrollTop || document.body.scrollTop);
}

body.addEventListener('load', betterVisual());
window.addEventListener('scroll', ()=>{  
   console.log(document.documentElement.scrollTop + window.innerHeight);
   betterVisual();
   loadChar('scopriCloud', 'w3-animate-left');
   loadChar('openSource', 'w3-animate-right');
   loadChar('footer', 'w3-animate-top');
});

function loadChar(id, cl) {
  if (document.getElementById(id)) {
    if ((document.documentElement.scrollTop + (window.innerHeight - 25)) >= getOffset(document.getElementById(id)).top) {
      document.getElementById(id).classList.add(cl);
    }
  }
}
