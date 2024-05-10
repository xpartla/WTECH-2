<script type="text/javascript">
let is_favourite = false;
let heartsave = false;
function add_favourite(check) {
if (heartsave) {
heartsave = false;
return;
}
if (check) {
heartsave = true;
return;
}
if (is_favourite) {
document.getElementById('whiteheart').style.display = 'block';
document.getElementById('blackheart').style.display = 'none';
is_favourite = false;
} else {
document.getElementById('whiteheart').style.display = 'none';
document.getElementById('blackheart').style.display = 'block';
is_favourite = true;
}
}

function selectX(id) {
let all_elms = document.getElementsByClassName('colors');
Array.prototype.forEach.call(all_elms, function (el) {
el.style.display = 'none';
});
document.getElementById(id).style.display = 'block';
}

function changeSize(chosen) {
let all_elms = document.getElementsByClassName('checkNEW');
Array.prototype.forEach.call(all_elms, function (el) {
el.classList.remove("checkNEW");
el.classList.add("checkOLD");
});
chosen.classList.remove("checkOLD");
chosen.classList.add("checkNEW");
}
</script>
