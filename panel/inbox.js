function showDiv() {
    document.getElementById("contentMail").style.display = "block";

    document.getElementById("displayMail").style.display = "none";

}
function showMe() {
    document.getElementById("displayMail").style.display = "block";
};

function removeMess() {
    let obj = document.getElementById('contentMail');
    obj.remove();
}