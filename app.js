const inputs = document.querySelectorAll(".input-field");

inputs.forEach((inp) => {
  inp.addEventListener("focus", () => {
    inp.classList.add("active");
  });
  inp.addEventListener("blur", () => {
    if (inp.value != "") return;
    inp.classList.remove("active");
  });
});

var typingEffect = new Typed(".multiText", {
  strings: ["Web Developer", "UX Designer", "System Engineer", "Mobile Apps Developer", "3D Designer", "Machine Learning Engineer", "UI Designer", "Video Editor", "Network Engineer"],
  loop: true,
  typeSpeed: 100,
  backSpeed: 50,
  backDelay: 1000,
});

const tombol = document.querySelector("#tombol");
tombol.addEventListener("click", function () {
  Swal.fire({
    icon: "success",
    title: "Berhasil",
    text: "Terima kasih telah berkunjung!",
    showConfirmButton: false,
    timer: 1500,
  });
});
