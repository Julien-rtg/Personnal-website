function darkMode(){
    const element = document.body;
    element.classList.toggle("dark-mode");

    const openEye = document.querySelector("#openEye");
    openEye.classList.toggle("eventCloseEye");

    const closeEye = document.querySelector("#closeEye");
    closeEye.classList.toggle("eventOpenEye");

}