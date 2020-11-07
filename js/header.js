let hamicon = document.getElementById('hamicon');

hamicon.addEventListener('click', () => {
    document.querySelectorAll('.icon-line').forEach(e => {
        e.classList.toggle('icon-open')
    });
    document.getElementById('nav').classList.toggle('nav-ham');
});

document.getElementById("button").onclick = function() {
    //disable
    this.disabled = true;

    //do some validation stuff
}