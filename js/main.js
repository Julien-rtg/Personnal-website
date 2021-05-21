function darkMode(){
    const element = document.body;
    element.classList.toggle("dark-mode");

    const openEye = document.querySelector("#selectorOpenEye");
    openEye.classList.toggle("eventCloseEye");

    const closeEye = document.querySelector("#selectorCloseEye");
    closeEye.classList.toggle("closeEye");
    closeEye.classList.toggle("eventOpenEye");

}