<script type="text/javascript">
let is_favourite = false;

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
