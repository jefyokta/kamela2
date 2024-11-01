const houses = document.querySelectorAll("path.house");
const type36 = document.querySelectorAll("path.type36");

houses.forEach((house) => {
  house.addEventListener("click", () => {
    houses.forEach((h) => h.classList.remove("houseclicked"));
    house.classList.add("houseclicked");
  });
});
// svgPanZoom("#svgmap", {
//   zoomEnabled: true,
//   controlIconsEnabled: true,
//   fit: true,
//   center: true,
//   minZoom: 0.5,
//   maxZoom: 2,
//   mouseWheelZoomEnabled: false,
//   dblClickZoomEnabled: false,
// });

const SetType = async (type) => {
  const result = await fetch(`api/type/${type}`);
  const response = await result.json();
  console.log(response);
  document.getElementById("luas").innerHTML =
    "Luas Bangunan : " + response.spec.Luas + "<sup>2</sup>";
  document.getElementById("lantai").innerHTML =
    "Lantai: " + response.spec.lantai;
  document.getElementById("kamar").innerHTML =
    "Kamar Tidur : " + response.spec.kamar;
  document.getElementById("kamarmandi").innerHTML =
    "Kamar Mandi : " + response.spec.kamarmandi;
  document.getElementById("atap").innerHTML = "Atap : " + response.spec.atap;
  document.getElementById("dinding").innerHTML =
    "Dinding : " + response.spec.dinding;
  document.getElementById("pondasi").innerHTML =
    "Pondasi :" + response.spec.pondasi;
};

const download = async (file) => {
  await fetch(`api/download/${file}`);
};

