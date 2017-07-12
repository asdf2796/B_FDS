var overlay = document.getElementById("overlay");

window.addEventListener('load', function(){
overlay.style.display = 'none';
});

$('#load').click(function(){
  overlay.style.display = 'inline';
});
