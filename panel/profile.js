function triggerClick(e) {
    document.querySelector('#profileImage').click();
}
function displayImage(e) {
    if (e.files[0]) {
        var reader = new FileReader();
        reader.onload = function (e) {
            document.querySelector('#profileDisplay').setAttribute('src', e.target.result);
        }
        reader.readAsDataURL(e.files[0]);
    }
}
let bio = document.querySelector('input[name="bio"]');
let fname = document.getElementById('fname');
let lname = document.getElementById("lname");


bio.addEventListener('change', (event) => {
    const result = document.querySelector('.valueAbout');
    result.textContent = `${event.target.value}`;
});
fname.addEventListener('change', (event) => {
    const namef = document.querySelector('.valueFname');
    namef.textContent = `${event.target.value}`;
});
lname.addEventListener('change', (event) => {
    const namel = document.querySelector('.valueLname');
    namel.textContent = `${event.target.value}`;
});